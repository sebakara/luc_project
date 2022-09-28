@include('includes.head')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2"> -->
          <!-- <div class="col-sm-6">
            <h1>Re Allocate</h1>
          </div> -->
        <!-- </div> -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        <div class="row mb-2">
        <div class="row mb-2">
        @if(session('message'))
            <div class="alert alert-success">
            <h1 class="m-0"> {{ session('message') }}</h1>
            </div>
            @endif
        </div>
        </div>
          <!-- <h3 class="card-title">Title</h3> -->
          <!-- {{$districts}} -->
          <div class="row">
            <div class="col-md-5" style="padding-left:15px;padding-right:20px;">
            <!-- box-shadow:inset 4px 3px 4px 4px; -->
            <h2>Leadership Management</h2>
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <!-- {{$users}} -->
                <form method="post" action="{{route('save_leader')}}">
                @csrf 
                <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">User</label>
                        <select class="custom-select rounded-0 col-sm-10" name="user_id">
                          @foreach($users as $user)
                          <option value="{{$user->id}}">{{$user->names}}</option>
                          @endforeach
                        </select>
                        @if($errors->has('user_id'))
                          <div class="alert alert-danger">{{ $errors->first('user_id') }}</div>
                        @endif
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">District</label>
                        <select class="custom-select rounded-0 col-sm-10" name="district" id="selectdistrict">
                        <option> ------select-------</option>
                          @foreach($districts as $district)
                        <option value="{{$district->id}}">{{$district->name}}</option>
                        @endforeach
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">sector</label>
                        <select class="custom-select rounded-0 col-sm-10" name="sector" id="selectsector">
                        <option value=""> ------select-------</option>
                        </select>
                      </div>

                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Cell</label>
                        <select class="custom-select rounded-0 col-sm-10" name="cell" id="selectcell">
                        <option value=""> -------select------</option>
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Village</label>
                        <select class="custom-select rounded-0 col-sm-10" name="village" id="selectvillage">
                        <option value=""> -------select------</option>
                        </select>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                </form>
                <!-- <hr/> -->
              </div></div>
            </div>
            <div class="col-md-7" style="padding-left:40px;padding-right:60px;">
            <h2>Leaders</h2>
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <h4>Leaders</h4>
              </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Names</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Sector</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($leaders as $leader)
                  <tr>
                    <td>{{$leader->names}}</td>
                    <td>{{$leader->email}}</td>
                    <td>{{$leader->role_name}}</td>
                    <td>{{$leader->sector}}</td>
                    <td>action</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- /.card-body -->
            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
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
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>

<script>
  $(window).ready(function(){
    $('#diffvillagebx').hide();
    $('#samevillagebx').hide();
    $('#diffvillage').click(function(){
      $('#samevillagebx').hide();
      $('#diffvillagebx').slideDown();
      // alert("different village on");;
    })
    $('#samevillage').click(function(){
      $('#diffvillagebx').hide();
      $('#samevillagebx').slideDown();
    })
  })


// get sectors
$("#selectdistrict").on("change",function(){
  $("#selectsector").empty();
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
    $("#selectcell").empty();
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
    $("#selectvillage").empty();
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
