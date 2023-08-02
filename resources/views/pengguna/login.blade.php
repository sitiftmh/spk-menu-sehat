<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPK Menu Sehat | Log in</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('sb2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('sb2/css/sb-admin-2.min.css')}}" rel="stylesheet">

  

</head>

<body class="bg-gradient-light login-page">
  <div class="login-box-center">
    <div class="row justify-content-center">
      <div class="card-body p-5"><br><br>
        <div class="login-logo">
          <center>
            <div class="logo"><img src="{{asset('gambar/iconta2.png')}}" style="width:13%;margin-top:-5px;" alt=""></div>
          </center>
        </div>
        <!-- /.login-logo -->
        <div class="card-gradient">
          <div class="text-center">
            <div class="card-body login-card-body">
              <p class="login-box-msg">Selamat Datang! <br>Silahkan Login menggunakan akun anda!</p><br><br>

              <form action="{{route('postlogin')}}" method="post">
                {{csrf_field()}}
                <div class="btn btn-input-group mb-3 col-4">
                  <input type="email" class="form-control" name="email" placeholder="Email address ...">
                </div>

                <div class="btn btn-input-group mb-3 col-4">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div><br><br>

                <div class="btn btn-input-group col-8">
                  <input type="submit" name="submit" value="LOGIN" class="btn btn-primary btn-block">
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('sb2/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('sb2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{asset('sb2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{asset('sb2/js/sb-admin-2.min.js')}}"></script>

</body>

</html>