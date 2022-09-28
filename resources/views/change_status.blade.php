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
              <h2>Change Status</h2>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane">
                    <!-- Post -->
                    <form class="form-horizontal" method="post" action="{{route('post_change_status')}}" enctype="multipart/form-data">
                    @csrf 
                    
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">names</label>
                        <div class="col-sm-10">
                        <input type="hidden" name="id" class="form-control" value="{{$users->id}}">
                        <input type="text" name="names" class="form-control" value="{{$users->names}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          @if(empty($users->email))
                        <input type="email" name="email" class="form-control" placeholder="email.....">
                        @else
                        <input type="email" name="email" value="{{$users->email}}" class="form-control" readonly>
                        @endif
                        </div>
                        @if($errors->has('email'))
                          <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Reason</label>
                        <div class="col-sm-10">
                            <textarea name="reason" class="form-control" rows="3" placeholder="reason to ">
                            </textarea>
                        </div>
                        @if($errors->has('names'))
                          <div class="alert alert-danger">{{ $errors->first('names') }}</div>
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
</body>
</html>
