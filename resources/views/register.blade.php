
@include('includes.auth_head')
  <div class="card">
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div class="card-body register-card-body">
      <p class="login-box-msg">Create new Account</p>
      <form action="{{route('create_account')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="names" value="{{ old('names') }}" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @if($errors->has('names'))
            <div class="alert alert-danger">{{ $errors->first('names') }}</div>
          @endif
        <div class="input-group mb-3">
          <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @if($errors->has('email'))
            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
          @endif
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @if($errors->has('password'))
            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
          @endif
        <div class="input-group mb-3">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @if($errors->has('password_confirmation'))
            <div class="alert alert-danger">{{ $errors->first('password_confirmation') }}</div>
          @endif
        <label>Current Location</label>
        <div class="input-group mb-3">
          <select class="custom-select rounded-0" id="selectprovince">
          <option value="">--------select Province</option>
            @foreach($provinces as $province)
            <option value="{{$province->id}}">{{$province->name}}</option>
            @endforeach
          </select>
        </div>

        <div class="input-group mb-3">
          <select class="custom-select rounded-0" id="selectdistrict">
          <option value="">--------select District</option>
          </select>
        </div>
        <div class="input-group mb-3">
         <select class="custom-select rounded-0" id="selectsector">
          <option value="">--------select Sector</option>
          </select>
        </div>
        <div class="input-group mb-3">
         <select class="custom-select rounded-0" id="selectcell">
          <option value="">--------select Cell</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <select name="location" class="custom-select rounded-0" id="selectvillage">
          <option value="">--------select Village</option>
          </select>
          @if($errors->has('location'))
            <div class="alert alert-danger">{{ $errors->first('location') }}</div>
          @endif
        </div>

        <div class="input-group mb-3">
          <input type="text" name="street_address" class="form-control" placeholder="street address">
          <div class="input-group-append">
          </div>
        </div>


        <div class="form-group mb-3">
          <select name="house_number" class="custom-select rounded-0" id="house_numberdiee">
          <option value="">-------select house number</option>
          </select>
          @if($errors->has('house_number'))
            <div class="alert alert-danger">{{ $errors->first('house_number') }}</div>
          @endif
        </div>
<!--         <div class="input-group mb-3">
          <input type="text" name="house_number" class="form-control" placeholder="house number">
          <div class="input-group-append">
          </div>
        </div> -->


        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{url('/')}}" class="text-center">I already have an account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
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

    // get house number
    $("#selectvillage").on("change",function(){
    $("#house_numberdiee").empty();
    // var sector=$("#selectcell").val();
    let _token = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
      url:"{{url('return_houses')}}",
      type: 'post',
      dataType:'json',
      data:{'village_id':$("#selectvillage").val(),_token:'{{ csrf_token() }}'},
      success:function(result){
        var datazaje = result.data;
        console.log(datazaje);
        var x = "<option>----------select-----------</option>";
        for(let i in datazaje){
          // console.log(datazaje[i].house_nbr);
         x +="<option value="+datazaje[i].id+">"+datazaje[i].house_nbr+"</option>";
        }
        $("#house_numberdiee").append(x)
      }
    })
  })
</script>
</body>
</html>
