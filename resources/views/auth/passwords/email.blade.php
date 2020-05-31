
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/wrap-theme/square/html/light/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 06:52:45 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="sQuare Bootstrap 4 Angular 5 admin dashboard with ui kit.">

<title>المنظمة الخيرية العالمية للمياه</title>
<!-- Favicon-->
<link rel="shortcut icon" href="{{url('html/assets/images/icon.png')}}" type="image/x-icon">
<link rel="stylesheet" href="{{url('html/assets/plugins/bootstrap/css/bootstrap.min.css')}}">

<!-- Custom Css -->
<link rel="stylesheet" href="{{url('html/light/assets/css/main.css')}}">    
<link rel="stylesheet" href="{{url('html/light/assets/css/color_skins.css')}}">
</head>
<body class="theme-cyan">
<div class="authentication sidebar-collapse">
    
        <!-- Navbar -->
      
    <div class="page-header">
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="card-plain">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="header">
                            <div class="logo-container expandUp">
                                <img src="{{url('html/assets/images/icon.png')}}" alt="">
                            </div>
                            <h5>Forgot Password?</h5>
                            <span class="text-muted">Enter your e-mail address below to reset your password.</span>
                        </div>
                        <div class="content">
                            <div class="input-group input-lg {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" placeholder="Enter E-Mail Address" name="email" value="{{ old('email') }}" required>
                                <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="footer">
                            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">
                                    Send Password Reset Link
                                </button>
                            <h5><a href="{{ route('login') }}" class="link">Log In</a></h5>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                 <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    <span>Designed by <a href="#" target="_blank">Mustafa Compiler</a></span>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="{{url('html/light/assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{url('html/light/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{url('html/light/assets/js/pages/authentication/page.js')}}"></script>
</body>

<!-- Mirrored from thememakker.com/wrap-theme/square/html/light/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 06:54:55 GMT -->
</html>

