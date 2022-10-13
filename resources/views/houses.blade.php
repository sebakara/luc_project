@include('includes.head')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<!--     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Re Allocate</h1>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        <div class="row mb-2">
        @if(session('message'))
            <div class="alert alert-success">
            <h5 class="m-0"> {{ session('message') }}</h5>
            </div>
            @endif
        </div>
          <!-- <h3 class="card-title">Title</h3> -->
          <div class="row">
            <div class="col-md-5" style="padding-left:15px;padding-right:20px;">
            <!-- box-shadow:inset 4px 3px 4px 4px; -->
            <h2>Add House</h2>
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div id="diffvillagebx">
                <form class="form-horizontal" method="post" action="{{route('register_home')}}">
                    @csrf
                      <div class="form-group row">
                        <label for="inputName" name="names" class="col-form-label">House Number</label>
                        <div class="col-sm-12">
                          <input class="form-control" type="text" name="house_nbr" value=""/>
                        </div>
<!--                    <div class="col-sm-2">
                        <a href="javascript:void(0);" class="add_button">
                          <i class="fa fa-plus" style="font-size:24px"></i></a>
                        </div> -->
                        @if($errors->has('house_nbr'))
                          <div class="alert alert-danger">{{ $errors->first('house_nbr') }}</div>
                        @endif
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        </div>
                </form>
                </div>
                <!-- <hr/> -->
              </div></div>
            </div>
            <div class="col-md-7" style="padding-left:40px;padding-right:60px;">
            <h2>My houses</h2>
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                @if(!empty($myhouses))
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Number</th>
                      <th>House number</th>
                      <th>Status</th>
                      <th>Notify</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($myhouses as $myhouse)
                    <tr>
                      <td>{{$count++}}</td>
                      <td>{{$myhouse->house_nbr}}</td>
                      <td>
                        @if($myhouse->status == 0)
                        Available
                        @else
                        Taken
                        @endif
                      </td>
                      <td>
                        <a href="{{url('notify',['house_id'=>$myhouse->id])}}">Notify</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                @endif
              </div>
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
