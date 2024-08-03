
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('img/logo/logo.png')}}" rel="icon">
  <title>TMS Admin - Login</title>
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/ruang-admin.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Admin-Login</h1>
                  </div>
                  <form role="form" method="POST" action="{{ route('admin.login') }}" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="form-group mb-3">
                      <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="E-mail"   required>
                        @error('email') <span class="text-danger mt-2">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group mt-3" >
                      <input type="password"   name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password"  required>
                      @error('password') <span class="text-danger mt-2">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-3">
                      <button name="login" class="btn btn-primary btn-block">SIGN IN</button>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                      <a href="forgot_password.php" class="text-primary">
                        Forgot Password
                      </a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>


