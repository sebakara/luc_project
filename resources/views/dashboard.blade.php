@include('includes.head')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        @if(session('message'))
            <div class="alert alert-success">
            <h1 class="m-0"> {{ session('message') }}</h1>
            </div>
            @endif
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  @if(!empty($user->profile_image))
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('uploads/'.$user->profile_image)}}"
                       alt="User profile picture">
                  @else
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('dist/img/user4-128x128.jpg')}}"
                       alt="User profile picture">
                  @endif
                </div>
                <h3 class="profile-username text-center">{{$user->names}}</h3>
                <h4 class="profile-username text-center">{{$user->email}}</h4>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#myprofile" data-toggle="tab">My Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#member" data-toggle="tab">Family Members</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="myprofile">
                    <!-- Post -->
                    <form class="form-horizontal" method="post" action="{{route('update_profile')}}" enctype="multipart/form-data">
                    @csrf  
                    <div class="form-group row">
                        <label for="inputName" name="names" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="names" value="{{$user->names}}" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">National ID</label>
                        <div class="col-sm-10">
                          <input type="text" name="national_id" class="form-control" value="{{$user->national_id}}" placeholder="National Id">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="{{$user->phone_number}}" name="phone_number" placeholder="phone number">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Date Of Birth</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="date_of_birth" value="{{$user->date_of_birth}}" placeholder="">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Gender</label>
                        <select name="gender" class="custom-select rounded-0 col-sm-10" id="exampleSelectRounded0">
                        <option value="{{$user->gender}}">{{$user->gender}}</option>  
                        <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>

                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Province of Birth</label>
                        <select class="custom-select rounded-0 col-sm-10" id="selectprovince">
                        <option value="{{$user->intara}}">{{$user->province}}</option>
                          @foreach($provinces as $province)
                          <option value="{{$province->id}}">{{$province->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">District of Birth</label>
                        <select class="custom-select rounded-0 col-sm-10" id="selectdistrict">
                        <option value="{{$user->akarere}}">{{$user->district}}</option>
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">sector of Birth</label>
                        <select class="custom-select rounded-0 col-sm-10" id="selectsector">
                        <option value="{{$user->umurenge}}">{{$user->sector}}</option>
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Cell of Birth</label>
                        <select class="custom-select rounded-0 col-sm-10" id="selectcell">
                        <option value="{{$user->akagali}}">{{$user->cell}}</option>
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Village of Birth</label>
                        <select name="location" class="custom-select rounded-0 col-sm-10" id="selectvillage">
                        <option value="{{$user->umudugudu}}">{{$user->location_of_birth}}</option>
                        </select>
                      </div>

                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Profile Image</label>
                        <div class="col-sm-10">
                        <input type="file" name="profile" class="form-control" id="file">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                    <!-- /.post -->
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="member">
                    <!-- The timeline -->
                    <div class="">
                      <h4>List of Members</h4>
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>Image</th>
                            <th>Names</th>
                            <th>Date of birth</th>
                            <th>Gender</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach($members as $member)
                          <tr>
                            <td>
                            @if(!empty($user->profile_image))
                              <img class="profile-user-img img-fluid img-circle"
                                  src="{{asset('uploads/'.$user->profile_image)}}"
                                  alt="User profile picture">
                              @else
                              <img class="profile-user-img img-fluid img-circle"
                                  src="{{asset('dist/img/user4-128x128.jpg')}}"
                                  alt="User profile picture">
                              @endif
                            </td>
                            <td>{{$member->names}}</td>
                            <td>{{$member->date_of_birth}}</td>
                            <td>{{$member->gender}}</td>
                          </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>
                      <!-- <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div> -->
                    </div>
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->

<script>
  $("#selectprovince").on("change",function(){
    var provid=$("#selectprovince").val();
    let _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      url:"{{url('get_district_prov')}}",
      type: 'post',
      dataType:'json',
      data:{'provId':provid,_token:'{{ csrf_token() }}'},
      success:function(result){
        var districts = result.data;
        var x = "<option>----------select-----------</option>";
        for(let i in districts){
         x +="<option value="+districts[i].id+">"+districts[i].name+"</option>";
        }
        $("#selectdistrict").append(x)
      }
    })
  })
// get sectors
$("#selectdistrict").on("change",function(){
    var distrid=$("#selectdistrict").val();
    let _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      url:"{{url('get_sector_dist')}}",
      type: 'post',
      dataType:'json',
      data:{'distId':distrid,_token:'{{ csrf_token() }}'},
      success:function(result){
        var datazaje = result.data;
        var x = "<option>----------select-----------</option>";
        for(let i in datazaje){
         x +="<option value="+datazaje[i].id+">"+datazaje[i].name+"</option>";
        }
        $("#selectsector").append(x)
      }
    })
  })
  // selectsector
  // selectcell
  $("#selectsector").on("change",function(){
    var sector=$("#selectsector").val();
    let _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      url:"{{url('get_cell_sector')}}",
      type: 'post',
      dataType:'json',
      data:{'id':sector,_token:'{{ csrf_token() }}'},
      success:function(result){
        var datazaje = result.data;
        var x = "<option>----------select-----------</option>";
        for(let i in datazaje){
         x +="<option value="+datazaje[i].id+">"+datazaje[i].name+"</option>";
        }
        $("#selectcell").append(x)
      }
    })
  })
  // selectvillage
  $("#selectcell").on("change",function(){
    var sector=$("#selectcell").val();
    let _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      url:"{{url('get_village_sector')}}",
      type: 'post',
      dataType:'json',
      data:{'id':sector,_token:'{{ csrf_token() }}'},
      success:function(result){
        var datazaje = result.data;
        var x = "<option>----------select-----------</option>";
        for(let i in datazaje){
         x +="<option value="+datazaje[i].id+">"+datazaje[i].name+"</option>";
        }
        $("#selectvillage").append(x)
      }
    })
  })
</script>
</body>
</html>
