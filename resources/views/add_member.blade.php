@include('includes.head')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
        <div class="row">
          <!-- /.col -->
          <div class="col-md-10">
            <div class="card">
            @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
              <div class="card-header p-2">
              <h2>Add New Member</h2>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane">
                    <!-- Post -->
                    <form class="form-horizontal" method="post" action="{{route('add_new_member')}}" enctype="multipart/form-data">
                    @csrf  
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="names" class="form-control" id="inputName" placeholder="Name">
                        </div>
                        @if($errors->has('names'))
                          <div class="alert alert-danger">{{ $errors->first('names') }}</div>
                        @endif
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">National ID</label>
                        <div class="col-sm-10">
                        <input type="text" name="national_id" class="form-control" placeholder="National Id">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                          <input type="number" name="phone_number" class="form-control" id="inputName" placeholder="07.........">
                        </div>
                        @if($errors->has('phone_number'))
                          <div class="alert alert-danger">{{ $errors->first('phone_number') }}</div>
                        @endif
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Gender</label>
                        <select name="gender" class="custom-select rounded-0 col-sm-10" id="exampleSelectRounded0">
                        <option value="">----------select------------</option>  
                        <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        @if($errors->has('gender'))
                          <div class="alert alert-danger">{{ $errors->first('gender') }}</div>
                        @endif
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Date Of Birth</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="date_of_birth" id="date_of_birth">
                        </div>
                        @if($errors->has('date_of_birth'))
                          <div class="alert alert-danger">{{ $errors->first('date_of_birth') }}</div>
                        @endif
                      </div>
                      @if($errors->has('location'))
                          <div class="alert alert-danger">{{ $errors->first('location') }}</div>
                        @endif
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Province of Birth</label>
                        <select class="custom-select rounded-0 col-sm-10" id="selectprovince">
                        <option value="">---------select--------</option>
                          @foreach($provinces as $province)
                          <option value="{{$province->id}}">{{$province->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">District of Birth</label>
                        <select class="custom-select rounded-0 col-sm-10" id="selectdistrict">
                        <option value="">---------select--------</option>
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">sector of Birth</label>
                        <select class="custom-select rounded-0 col-sm-10" id="selectsector">
                        <option value="">---------select--------</option>
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Cell of Birth</label>
                        <select class="custom-select rounded-0 col-sm-10" id="selectcell">
                        <option value="">---------select--------</option>
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Village of Birth</label>
                        <select name="location" class="custom-select rounded-0 col-sm-10" id="selectvillage">
                        <option value="">---------select--------</option>
                        </select>
                      </div>

                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Profile Image</label>
                        <div class="col-sm-10">
                        <input type="file" name="profile" class="form-control" id="file">
                        </div>
                        @if($errors->has('profile'))
                          <div class="alert alert-danger">{{ $errors->first('profile') }}</div>
                        @endif
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
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
<script>
  $("#selectprovince").on("change",function(){
    $("#selectdistrict").empty();
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
