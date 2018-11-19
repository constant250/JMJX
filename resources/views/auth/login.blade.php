<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Portal</title>
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--endbuild-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

  </head>
  <body class="student-portal-login">
    <main>
      <div class="main-content">
        <div class="center-position w-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 mx-auto">
                <div class="logo-header">
                    <img src="{{ asset('images/logos/vorx_logo-white.png') }}" alt="" class="img-fluid d-table mx-auto mb-3">
                </div>
                <div class="form-wrapper">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                        <h2 class="text-center px-22-font mb-4">Welcome to Student Portal</h2>

                        <div class="form-group position-relative">
                            <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                            <label for="" class="form-label" style=""><i class="fas fa-user"></i> {{ __('User Name') }}</label>
                            @if ($errors->has('username'))
                                <span class="invalid-feedback px-10-font" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group position-relative">
                            <input type="password" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="password" required>
                            <label for="" class="form-label" style=""><i class="fas fa-key"></i> {{ __('Password') }}</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback px-10-font" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="form-dheckbox d-inline-block">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember" class="mb-0"></label>
                            </div>
                            <label for="remember" class="d-inline-block mb-0">{{ __('Remember Me') }}</label>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary border-radius-0 w-100">{{ __('Login') }}</button>
                            <a href="{{ route('password.request') }}" class="btn btn-link forgot-password px-12-font d-table mx-auto">{{ __('Forgot Your Password?') }}</a>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>