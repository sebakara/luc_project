
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
</body>
</html>
