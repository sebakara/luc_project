@include('includes.head')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Re Allocate</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        <div class="row mb-2">
        @if(session('msg'))
            <div class="alert alert-success">
            <h1 class="m-0"> {{ session('msg') }}</h1>
            </div>
            @endif
        </div>
          <!-- <h3 class="card-title">Title</h3> -->
          <!-- {{$districts}} -->
          <div class="row">
            <div class="col-md-6" style="padding-left:15px;padding-right:20px;">
            <!-- box-shadow:inset 4px 3px 4px 4px; -->
            <h2>Change Address</h2>
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <button class="btn btn-link" id="samevillage">Same Village</button>
                <button class="btn btn-link" id="diffvillage">Different Village</button>

                <div id="diffvillagebx">
                <form class="form-horizontal" method="post" action="{{route('post_re_allocation')}}" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">District</label>
                        <select class="custom-select rounded-0 col-sm-10" id="selectdistrict">
                        <option value="">------select-------</option>
                          @foreach($districts as $district)
                        <option value="{{$district->id}}">{{$district->name}}</option>
                        @endforeach
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">sector</label>
                        <select class="custom-select rounded-0 col-sm-10" id="selectsector">
                        <option value="">------select-------</option>
                        </select>
                      </div>

                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Cell</label>
                        <select class="custom-select rounded-0 col-sm-10" id="selectcell">
                        <option value="">-------select-------</option>
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="exampleSelectRounded0" class="col-sm-2 col-form-label">Village</label>
                        <select name="location" class="custom-select rounded-0 col-sm-10" id="selectvillage">
                        <option value="">-------select------</option>
                        </select>
                        @if($errors->has('location'))
                          <div class="alert alert-danger">{{ $errors->first('location') }}</div>
                        @endif
                      </div>
                      <div class="form-group row">
                        <label for="inputName" name="names" class="col-sm-2 col-form-label">Street Number</label>
                        <div class="col-sm-10">
                          <input type="text" name="street_address" class="form-control" id="inputName" placeholder="ST 11111 KN.....">
                        </div>
                        @if($errors->has('street_address'))
                          <div class="alert alert-danger">{{ $errors->first('street_address') }}</div>
                        @endif
                      </div>

                      <div class="form-group row">
                        <label for="inputName" name="names" class="col-sm-2 col-form-label">House Number</label>
                        <div class="col-sm-10">
                        <input type="text" name="house_number" class="form-control" placeholder="house number">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        </div>
                </form>
                </div>
                <div id="samevillagebx">
                  @if(!empty($addresses))
                <form class="form-horizontal" method="post" action="{{route('post_re_allocation')}}" enctype="multipart/form-data">
                    @csrf  
                      <div class="form-group row">
                        <label for="inputName" name="names" class="col-sm-2 col-form-label">Street Number</label>
                        <div class="col-sm-10">
                          <input type="hidden" name="location" value="{{$addresses->umudugudu}}">
                          <input type="text" name="street_address" class="form-control" id="inputName" placeholder="ST 11111 KN.....">
                        </div>
                        @if($errors->has('street_address'))
                          <div class="alert alert-danger">{{ $errors->first('street_address') }}</div>
                        @endif
                      </div>
                      <div class="form-group row">
                        <label for="inputName" name="names" class="col-sm-2 col-form-label">House Number</label>
                        <div class="col-sm-10">
                        <input type="text" name="house_number" class="form-control" placeholder="house number">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        </div>
                </form>
                @endif
                </div>
                <!-- <hr/> -->
              </div></div>
            </div>
            <div class="col-md-4" style="padding-left:40px;padding-right:60px;">
            <h2>Current location</h2>
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                @if(!empty($addresses))
                <h5 class="profile-username text-center">Village: {{$addresses->village}}</h5>
                <h5 class="profile-username text-center">Cell: {{$addresses->cell}}</h5>
                <h5 class="profile-username text-center">Sector: {{$addresses->sector}}</h5>
                <h5 class="profile-username text-center">District: {{$addresses->district}}</h5>
                <h5 class="profile-username text-center">Province: {{$addresses->province}}</h5>
                <h5 class="profile-username text-center">Street: {{$addresses->street_address}}</h5>
                <h5 class="profile-username text-center">House number: {{$addresses->house_number}}</h5>
                @endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- {{$addresses}} -->
            </div>
          </div>
          <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div> -->
        </div>
        <!-- <div class="card-body">
          Start creating your amazing application!
        </div>
        <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
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
<!-- </script> -->
</body>
</html>
