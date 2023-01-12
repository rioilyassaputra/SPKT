
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Login</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

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
                    @if(session()->has('loginerror'))
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{session('loginerror')}}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                    @endif
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4"> <b>Login</b></h1>
                      <img src="img/logo/E-SPKT.png" class="mb-3"  width="300px" alt="">

                  </div>
                  <form action="/loginproses" method="post" class="user">
                    @csrf
                    <div class="form-group">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Masukkan Email " autofocus>
                        @error('email')
                        <div class="invalid-feedback">
                    {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" id="exampleInputPassword" placeholder="Password">
                      @error('password')
                      <div class="invalid-feedback">
                  {{ $message }}
                    </div>
                    @enderror
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary btn-block" type="submit">
                    </div>

                  </form>
                  <hr>

                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <!-- bootsrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
