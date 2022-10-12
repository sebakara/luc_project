<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Province;
use App\Models\District;
use App\Models\Sector;
use App\Models\Cell;
use App\Models\Village;
use App\Models\ReAllocation;
use App\Models\Leader;
use App\Models\House;

class UserController extends Controller
{
    public function index()
    {
        // echo "hatari";
        return view('login');
    }
// show create account
    public function showCreateUser(Request $request){
        $province = Province::get();
            $data = ['provinces'=>$province];
        return view('register',$data);
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
// post login
public function postLogin(Request $request){
    $request->validate([
        'email'=>'required|exists:users,email',
        'password' => 'required',
    ]);
    $userauth = User::where('email',$request->get('email'))->first();

// var_dump($userauth);
    if($userauth->varified == 0){
    $to_name = $userauth->names;
    $to_email = $request->get('email');
    $link = 'localhost/luc/public/activate_email/'.base64_encode($to_email);
    $data = array('name'=>$to_name, 'actlink'=>$link, 'body' => 'Activation Email');
    //   base64_encode()
    Mail::send('emails.activate', $data, function($message) use ($to_name, $to_email) {
    $message->to($to_email, $to_name)
    ->subject('Activation Email');
    $message->from('iribatech@gmail.com','Activation Email');
    });
    return redirect("login")->with('message','Please verify your account first!');
    }
    else{
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect("dashboard")->with('message','Signed In');
        }
        return redirect("/")->with('message','Login details are not valid');
    }
}
// return dashboard
public function dashboard(){
    // var_dump(auth()->user());
    $province = Province::get();
    $users = UserDetail::where('user_id',auth()->user()->id)
    ->join('users','users.id','=','user_details.user_id')
    ->join('villages','villages.id','=','user_details.location_of_birth')
    ->join('cells','cells.id','=','villages.cell')
    ->join('sectors','sectors.id','=','cells.sector')
    ->join('districts','districts.id','=','sectors.district')
    ->join('provinces','provinces.id','=','districts.province')
    // ->select('user_details.*','users.email')
    ->select('user_details.*','users.email','villages.name as village','villages.id as umudugudu','cells.name as cell','cells.id as akagali','sectors.name as sector','sectors.id as umurenge','districts.name as district','districts.id as akarere','provinces.name as province','provinces.id as intara')
    ->first();
    // var_dump($users);
    // die();
    $members = $user = UserDetail::where('referal',$users->referal)->get();

    $data = ['user'=>$users,
    'provinces'=>$province,
    'members' => $members
];
    return view('dashboard',$data);
}
    public function createAccount(Request $request){
        $request->validate([
            'names' => 'required|min:3|max:50',
            'email'=>'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'location'=>'required', 
            'house_number'=>'required', 
                                                      
        ]);
        $referal = md5(microtime());
        $user = User::create([
            'role_id'=>3,
            'email'=>$request->get('email'),
            'password'=>Hash::make($request->get('password')),
            'varified'=>1,
          ]);
          UserDetail::create([
            'names'=>$request->get('names'), 
            'user_id'=>$user->id,
            'referal'=>$referal,
            'grand_referal'=>$referal
          ]);

        ReAllocation::create([
        'user_id'=>$user->id, 
        'new_village_id'=>$request->get('location'),
        'street_address'=>$request->get('street_address'), 
        'house_number'=>$request->get('house_number'),
        'status'=>1
        ]);

House::where('id',$request->get('house_number'))->update(['status'=>1]);
return redirect("/")->with('message','Account was created successfully');
            // $to_name = $request->get('names');
            // $to_email = $request->get('email');
            // $link = 'localhost/luc/public/activate_email/'.base64_encode($to_email);
            // $data = array('name'=>$to_name, 'actlink'=>$link, 'body' => 'Activation Email');
            // //   base64_encode()
            // Mail::send('emails.activate', $data, function($message) use ($to_name, $to_email) {
            // $message->to($to_email, $to_name)
            // ->subject('Activation Email');
            // $message->from('iribatech@gmail.com','Activation Email');
            // });
            // return redirect("get_create_account")->with('message','check your email and verify your account first!');

        //   var_dump($user->id);
    }

    public function activateEmail($email){
        // if(!Auth::check()){
        //     return redirect("login")->withSuccess('You are not allowed to access');
        // }
        // var_dump($email);
        $myemail = base64_decode($email);
        $thisuser = User::where('email',$myemail)->first();
        if ($thisuser->varified == 1) {
            echo "already verified";
            return redirect("/")->with('message','Account is already verified!');
            // return redirect()->route('getusers');
        }
        else{
            $thisuser->varified=1;
            $thisuser->save();
            // echo "verified now";
            return redirect("/")->with('message','Account has been activated!');
            // $data = ['user'=>$thisuser];
            // return view('pages.activateview',$data);
        }
    }

    public function getDistricts(Request $request){
        $provId = $request->get('provId');
        $districts = District::where('province',$provId)->get();
        $returnjs = array("message"=>'success',"data"=>$districts);
        return response()->json($returnjs);
    }
    // getSectors
    public function getSectors(Request $request){
        $distId = $request->get('distId');
        $sectors = Sector::where('district',$distId)->get();
        $returnjs = array("message"=>'success',"data"=>$sectors);
        return response()->json($returnjs);
    }
    // /get cells
    public function getCells(Request $request){
        $distId = $request->get('id');
        $sectors = Cell::where('sector',$distId)->get();
        $returnjs = array("message"=>'success',"data"=>$sectors);
        return response()->json($returnjs);
    }
// vget villages
public function getVillages(Request $request){
    $distId = $request->get('id');
    $sectors = Village::where('cell',$distId)->get();
    $returnjs = array("message"=>'success',"data"=>$sectors);
    return response()->json($returnjs);
}
// update profile
public function updateProfile(Request $request){

        $request->validate([
            'names' => 'required|min:3|max:50',
            'location'=>'required',
            'date_of_birth'=>'required|before:today',
            'phone_number'=>'required|min:10|max:10|unique:user_details',
            'national_id'=>'required|min:16|max:16|unique:user_details',
            'gender' => 'required',                                           
        ]);

        $user = UserDetail::where('user_id',auth()->user()->id)->first();
        if($request->hasfile('profile'))
        {
            $file = $request->file('profile');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/', $filename);
            $user->profile_image=$filename;
        }
        // "names", "user_id", "date_of_birth", "gender", "phone_number", 
        // "profile_image", "location_of_birth", "referal", "grand_referal"
        // UserInfo::create([
            $user->national_id=$request->get("national_id");
            $user->names=$request->get("names");
            $user->date_of_birth=$request->get("date_of_birth"); 
            $user->gender=$request->get("gender"); 
            $user->phone_number=$request->get("phone_number"); 
            $user->location_of_birth=$request->get("location");
            $user->save();
            return redirect("dashboard")->with('message','Profile Updated successfully');
}
// get add member page
public function getAddMember(){
    $province = Province::get();
    $data = ['provinces'=>$province];
    return view('add_member',$data);
}

// post new member info
public function addNewMember(Request $request){
    $request->validate([
        'names' => 'required|min:3|max:50',
        'gender' => 'required',
        'date_of_birth'=>'required|before:today',
        'location'=>'required'
    ]);

    // var_dump($request->all());
    // die();
    $user = UserDetail::where('user_id',auth()->user()->id)->first();
    if($request->hasfile('profile'))
    {
        $file = $request->file('profile');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('uploads/', $filename);
        $user->profile_image=$filename;
    }
    else{
        $filename=null;
    }
    UserDetail::create([
        "national_id"=>$request->get('national_id'),
        "names"=>$request->get('names'),  
        "date_of_birth"=>$request->get('date_of_birth'), 
        "gender"=>$request->get('gender'),  
        "profile_image"=>$filename,
        "location_of_birth"=>$request->get('location'), 
        "referal"=>$user->grand_referal,
    ]);
    return redirect("dashboard")->with('message','New Member has been added successfully');
    // var_dump($request->all());
}
// return re-allocate page
public function reAllocate(){
    // reAllocate
    $location = ReAllocation::where('re_allocations.user_id',Auth::user()->id)
    ->where('re_allocations.status',1)
    ->join('villages','villages.id','=','re_allocations.new_village_id')
    ->join('cells','cells.id','=','villages.cell')
    ->join('sectors','sectors.id','=','cells.sector')
    ->join('districts','districts.id','=','sectors.district')
    ->join('provinces','provinces.id','=','districts.province')
    ->join('houses','houses.id','=','re_allocations.house_number')
    ->select('re_allocations.*','houses.house_nbr','villages.name as village','villages.id as umudugudu','cells.name as cell','cells.id as akagali','sectors.name as sector','sectors.id as umurenge','districts.name as district','districts.id as akarere','provinces.name as province','provinces.id as intara')
    ->first();
    $district = District::where('province',1)->get();
    if(empty($location)){
        $data = ['districts'=>$district,
        'addresses'=>''];
    }
    else{
        $data = ['districts'=>$district,
                'addresses'=>$location];
    }
    return view('re_allocate',$data)->with('msg','welcome');;
    // re_allocate
}
// post re-allocation
public function postReAllocation(Request $request){
    $request->validate([
        'location' => 'required',
        'street_address'=>'required'
    ]);
    $updateadd = ReAllocation::where('user_id',Auth::user()->id)->update(['status'=>0]);
    ReAllocation::create([
        'user_id'=>Auth::user()->id, 
        'new_village_id'=>$request->get('location'),
        'street_address'=>$request->get('street_address'), 
        'house_number'=>$request->get('house_number'),
        'status'=>1
    ]);
    $landlinfo = House::where('houses.id',$request->get('house_number'))
                            ->join('users','users.id','houses.user_id')
                            ->select('users.email','houses.house_nbr')
                            ->first();

    House::where('id',$request->get('house_number'))->update(['status'=>1]);
    // get citizen infot
    $citizeninfo = UserDetail::where('user_id',Auth::user()->id)->first();
    $leaderinfo = Leader::join('users','users.id','leaders.user_id')
    ->join('user_details','user_details.user_id','users.id')
    ->where('leaders.village_id',$request->get('location'))
    ->select('users.email','user_details.names')->first();
    // formulate the message

    $messagelld = "Muvandimwe nyirinzu, Umuturage: ".$citizeninfo->names." moved in your house: ".$landlinfo->house_nbr;
    $message = "Dear ".$leaderinfo->names.", "."The new citizen: ".$citizeninfo->names." moved in your village on the road ".$request->get('street_address')." house number: ".$landlinfo->house_nbr;
    $this->sendNotification($leaderinfo->names,$leaderinfo->email,$message);

    $this->sendNotification("Nyiramazu",$landlinfo->email,$messagelld);

    // $to_name = $leaderinfo->names;
    // $to_email = $leaderinfo->email;
    // $data = array('name'=>$to_name,'body' => $message);
    // Mail::send('emails.notify', $data, function($message) use ($to_name, $to_email) {
    // $message->to($to_email, $to_name)
    // ->subject('Notification');
    // $message->from('iribatech@gmail.com','Notification');
    // });
    return redirect("get_re_allocate")->with('msg','success');
}

public function getCitizen(){
    $leader = Leader::where('user_id',Auth::user()->id)->first();
    if(empty($leader)){
        $citizen = UserDetail::join('villages','villages.id','=','user_details.location_of_birth')
        ->select('user_details.*','villages.name as village')->get();
    }
    elseif($leader->village_id != null){
        $locations = ReAllocation::where('new_village_id',$leader->village_id)
        ->select('new_village_id','re_allocations.user_id')->get();
                $user_ids = array();
        foreach ($locations as $key => $value) {
            $user_ids[]=$value->new_village_id;
        }
        $citizen = ReAllocation::join('user_details','user_details.user_id','=','re_allocations.user_id')
        ->join('villages','villages.id','=','user_details.location_of_birth')
        ->whereIn('new_village_id',$user_ids)
        ->where('re_allocations.status',1)
        ->select('user_details.*','villages.name as village')
        ->get();
        // var_dump(json_encode($citizen));
        // die("mudugudu");
    }
    elseif($leader->cell_id != null){
        $villages = Village::where('cell',$leader->cell_id)
        ->select('villages.id','villages.name')
        ->get();
        $user_ids = array();
        foreach ($villages as $key => $value) {
            $user_ids[]=$value->id;
        }
        $citizen = ReAllocation::join('user_details','user_details.user_id','=','re_allocations.user_id')
        ->join('villages','villages.id','=','user_details.location_of_birth')
        ->whereIn('new_village_id',$user_ids)
        ->where('re_allocations.status',1)
        ->select('user_details.*','villages.name as village')
        ->get();
        // var_dump(json_encode($citizen));
        // die("akagali".$leader->cell_id);
    }
    elseif($leader->sector_id != null){
        $villages = Cell::join('villages','villages.cell','=','cells.id')
        ->where('cells.sector', $leader->sector_id)
        ->select('villages.id')
        ->get();
        $user_ids = array();
        foreach ($villages as $key => $value) {
            $user_ids[]=$value->id;
        }
        $citizen = ReAllocation::join('user_details','user_details.user_id','=','re_allocations.user_id')
        ->join('villages','villages.id','=','user_details.location_of_birth')
        ->whereIn('new_village_id',$user_ids)
        ->where('re_allocations.status',1)
        ->select('user_details.*','villages.name as village')
        ->get();
        // var_dump(json_encode($villages));
        // die("umurenge");
    }
    else{
        echo 'default';
    }
    $data = ['citizens'=>$citizen];
    return view('citizens',$data);
    // echo Auth::user()->role_id."welcome".Auth::user()->id;
}
// get leadersip page
public function getLeaderMgt(){
    // districts
    $leader = Leader::join('user_details','user_details.user_id','=','leaders.user_id')
    ->join('users','users.id','=','user_details.user_id')
    ->join('sectors','sectors.id','=','leaders.sector_id')
    ->join('roles','roles.id','=','users.role_id')
    ->select('roles.role_name','leaders.id','user_details.names','users.email','users.role_id','sectors.name as sector')
    ->get();
    $user = User::join('user_details','user_details.user_id','=','users.id')
    ->select('users.*','user_details.names')
    ->whereIn('role_id',[2,3,4,5])->get();
    $district = District::where('province',1)->get();

    $data = ['districts'=>$district,
            'users'=>$user,
            'leaders'=>$leader];
// var_dump($user);
// die();

    return view('leadership',$data);
}

// save the leader info
public function saveLeader(Request $request){
    // var_dump($request->all());
    // die();
    // $request->validate([
    //     'user_id' => 'required|unique:leaders'
    // ]);
    Leader::where('user_id',$request->get('user_id'))->delete();
    if($request->get('village')){
        $newrole=2;
    }
    elseif($request->get('cell')){
        $newrole=4;
    }
    elseif($request->get('sector')){
        $newrole=5;
    }
    $updateadd = User::where('id',$request->get('user_id'))->update(['role_id'=>$newrole]);

    Leader::create([
        'user_id'=>$request->get('user_id'), 
        'sector_id'=>$request->get('sector'), 
        'cell_id'=>$request->get('cell'), 
        'village_id'=>$request->get('village'),
        'status'=>1
    ]);
return redirect('get_leadermgt')->with('message','Leader created successfully');
}
// return create another family
public function changeStatus($family_id){
// echo $family_id;
$user = UserDetail::leftjoin('users','users.id','=','user_details.user_id')
->select('user_details.*','users.email')
->where('user_details.id',$family_id)->first();
$data = ['users'=>$user];
return view('change_status',$data);
// change_status
}
// activate
public function activateCitizen($family_id){
// echo $family_id;
$user = UserDetail::where('user_details.id',$family_id)->first();
ReAllocation::where('user_id',$user->user_id)->update(['status'=>1]);
return redirect('dashboard')->with('message','citizen activated');
// list_of_citizen
// change_status
}
// de activate  deActivateCitizen
public function deActivateCitizen($family_id){
// echo $family_id;
$user = UserDetail::where('user_details.id',$family_id)->first();
ReAllocation::where('user_id',$user->user_id)->update(['status'=>0]);
return redirect('dashboard')->with('message','citizen de-activated');
// list_of_citizen
// change_status
}

// post change the status
public function postChangeStatus(Request $request){
    // var_dump($request->all());
    // die();
    $referal = md5(microtime());
    $user = UserDetail::where('id',$request->get('id'))->first();
    if(!empty($user->user_id)){
        $usernew = User::where('id',$user->user_id)->first();
        $usernew->password = Hash::make('123');
        $usernew->save();
        // $usernew = User::create([
        //     'role_id'=>3,
        //     'email'=>$request->get('email'),
        //     'password'=>Hash::make('123'),
        //     'varified'=>1,
        //   ]);
        // $user->user_id = $usernew->id;
        $user->grand_referal = $referal;
        $user->referal = $referal;
        $user->living_status = $request->get('reason');
        $user->save();

    }
    else{
        $usernew = User::create([
            'role_id'=>3,
            'email'=>$request->get('email'),
            'password'=>Hash::make('123'),
            'varified'=>1,
          ]);
        $user->user_id = $usernew->id;
        $user->grand_referal = $referal;
        $user->living_status = $request->get('reason');
        $user->save();

    }
    

    $to_name = $user->names;
    $to_email = $request->get('email');
    $link = 'localhost/luc/public/change_password/'.base64_encode($to_email);
    $data = array('name'=>$to_name, 'actlink'=>$link, 'body' => 'Reset Password');
    //   base64_encode()
    Mail::send('emails.change_status', $data, function($message) use ($to_name, $to_email) {
    $message->to($to_email, $to_name)
    ->subject('Reset Password');
    $message->from('iribatech@gmail.com','Reset Password');
    });
    // echo "check email"; 
    return redirect('dashboard')->with('message','email sent');
}
// change the password
public function getchangeStatus($email){
$myemail = base64_decode($email);
$user = User::where('email',$myemail)->first();
$data = ['users'=>$user];
return view('reset',$data);
}
// reseting the password
public function postResetPassword(Request $request){
    $request->validate([
        'password' => 'required|confirmed|min:6',//this will check password_confirmation
    ]);
    // var_dump($request->all());
    $user = User::where('id',$request->get('user_id'))->first();
    $user->password = Hash::make($request->get('password'));
    $user->save();
    return redirect("/")->with('message','Password has been reset successfully!');
}
// return reset view
public function getResetPwd(){
    return view('resetview');
}
// submit post request
public function performReset(Request $request){
    $request->validate([
        'email'=>'required|exists:users,email'
    ]);
    $user = User::where('email',$request->get('email'))->first();
    $to_name = "system user";
    $to_email = $request->get('email');
    $link = 'localhost/luc/public/change_password/'.base64_encode($to_email);
    $data = array('name'=>$to_name, 'actlink'=>$link, 'body' => 'Reset Password');
    //   base64_encode()
    Mail::send('emails.change_status', $data, function($message) use ($to_name, $to_email) {
    $message->to($to_email, $to_name)
    ->subject('Reset Password');
    $message->from('iribatech@gmail.com','Reset Password');
    });
    return redirect('get_reset_pwd')->with('message','please check your email');
}

// return create users
public function createCitizen(){
    $province = Province::get();
    $data = ['provinces'=>$province];
    return view('create_citizen',$data);
}
// post create citizen
public function postCreateCitizen(Request $request){
        $request->validate([
            'names' => 'required|min:3|max:50',
            'email'=>'required|email|unique:users', // this will check password_confirmation 
            'national_id'=>'required|unique:user_details',
            'phone_number'=>'required',
            'gender' => 'required',
            'date_of_birth'=>'required|before:today',
            'location'=>'required',                                       //field in request
        ]);
    $newvillage = Leader::where('user_id',Auth::user()->id)->first();
if(empty($newvillage)){
    $newvillage_id = $request->get('location');
}
else{
    $newvillage_id = $newvillage->village_id;
}
        $referal = md5(microtime());
        $user = User::create([
            'role_id'=>3,
            'email'=>$request->get('email'),
            'password'=>Hash::make($request->get('password')),
            'varified'=>1,
          ]);

        if($request->hasfile('profile'))
        {
            $file = $request->file('profile');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/', $filename);
            // $user->profile_image=$filename;
        }
        else{
            $filename = null;
        }
          UserDetail::create([
            'names'=>$request->get('names'),
            'date_of_birth'=>$request->get('date_of_birth'),
            'national_id'=>$request->get('national_id'),
            'gender'=> $request->get('gender'),
            'phone_number'=> $request->get('phone_number'),
            'user_id'=>$user->id,
            'location_of_birth'=> $request->get('location'),
            'referal'=>$referal,
            'profile_image'=>$filename,
          ]);

          ReAllocation::create([
            'user_id'=>$user->id,
            'new_village_id'=>$newvillage_id,
            'status'=>1,
            ]);

            $to_name = $request->get('names');
            $to_email = $request->get('email');
            $link = 'localhost/luc/public/change_password/'.base64_encode($to_email);
            $data = array('name'=>$to_name, 'actlink'=>$link, 'body' => 'Reset Password');
            //   base64_encode()
            Mail::send('emails.change_status', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Reset Password');
            $message->from('iribatech@gmail.com','Reset Password');
            });

return redirect('create_citizen')->with('message','successfully created');
            echo "successfully created";
    // jeanluchristian123@gmail.com
}

public function makeLandlord($user_id){
    // echo $user_id;
    User::where('id',$user_id)->update(['role_id'=>6]);
    return redirect('list_of_citizen')->with('message','successfully created');
}

// my houses
public function myHouses(){
    $myhouse = House::where('user_id',Auth::user()->id)->get();

    $data = ['myhouses'=>$myhouse,
                'count'=>1];
    return view('houses',$data)->with('message','welcome in my house');
    // echo "welcome in my house";
}


// save new houses

public function registerHome(Request $request){
    $request->validate([
      'house_nbr' => 'required|unique:houses',
    ]);
    $village_id = ReAllocation::where('user_id',Auth::user()->id)
                        ->where('status',1)
                        ->select('new_village_id')->first(); 
// var_dump($request->get('house_nbr'));
// var_dump($village_id->new_village_id);
    House::create([
                'house_nbr'=>$request->get('house_nbr'), 
                'user_id'=>Auth::user()->id, 
                'village_id'=>$village_id->new_village_id, 
                'status'=>0
        ]);

    return redirect('my_houses')->with('message','success');
}

// get houses by villages
public function returnHouses(Request $request){
    $village = $request->get('village_id');
    $myhouse = House::where('village_id',$village)
                    ->where('status',0)
                    ->get();
    $returnjs = array("message"=>'success',"data"=>$myhouse);
    return response()->json($returnjs);
}


// send email notification
public function sendNotification($name,$email,$message){
    $to_name = $name;
    $to_email = $email;
    $data = array('name'=>$to_name,'body' => $message);
    Mail::send('emails.notify', $data, function($message) use ($to_name, $to_email) {
    $message->to($to_email, $to_name)
    ->subject('Notification');
    $message->from('iribatech@gmail.com','Notification');
    });
}

}
