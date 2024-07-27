<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GIA - Admin (Login)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('adm')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{url('adm')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('adm')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">

@if(Session::get('fail'))
        <div class="alert alert-danger">
            {{Session::get('fail')}}
        </div>
    @endif



  <!-- /.login-logo -->
  <div class="card card-outline card-danger">
    <h1 class="text-center"><b>PowerUp</b></h1>
    <div class="card-header text-center">
      <img width="70%" src="{{route('index')}}/sardar/img/{{getWebsiteOptions()['website_logo']['option_value']}}" alt="">
    
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>


      <form action="{{route('admin.auth.check')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" 
            name="email" value="{{old('email')}}" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <span class="text-danger">@error('email') {{$message}} @enderror</span>


        <div class="input-group mb-3">
          <input type="password" class="form-control" 
            name="password"  placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <span class="text-danger">@error('password') {{$message}} @enderror</span>

        <div class="row justify-content-center">

          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->

          <!-- /.col -->
          <div class="col-6 ">
            
            <button type="submit" class="btn btn-primary btn-block">
            <i class="fa fa-lock" aria-hidden="true"></i> &nbsp; Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{url('adm')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('adm')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('adm')}}/dist/js/adminlte.min.js"></script>
</body>
</html>
