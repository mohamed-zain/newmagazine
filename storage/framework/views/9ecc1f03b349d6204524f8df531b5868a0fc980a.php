
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/wrap-theme/square/html/light/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 06:52:45 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="المجلة الالكترونية">

<title>المجلة الالكترونية</title>
<!-- Favicon-->
<link rel="shortcut icon" href="<?php echo e(asset('logo.png')); ?>" type="image/x-icon">
<link rel="stylesheet" href="<?php echo e(asset('assets3/plugins/bootstrap/css/bootstrap.min.css')); ?>">

<!-- Custom Css -->
<link rel="stylesheet" href="<?php echo e(asset('assets2/css/main.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets2/css/color_skins.css')); ?>">
</head>
<body class="theme-cyan">
<div class="authentication sidebar-collapse">

    <div class="page-header">
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="card-plain">
                    <form class="form" method="POST" action="<?php echo e(route('login')); ?>">
                         <?php echo e(csrf_field()); ?>

                        <div class="header">
                            <div class="logo-container expandUp">
                                <img src="<?php echo e(asset('logo.png')); ?>" alt="">
                            </div>
                            <h5>Log in</h5>
                        </div>
                        <div class="content">                                                
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter Your E-Mail" value="<?php echo e(old('email')); ?>" required autofocus>
                                <span class="input-group-addon">
                                    <i class="zmdi zmdi-account-circle"></i>
                                </span>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong style="color: red"><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>

                            </div>
                            <div class="input-group">
                                <input type="password" name="password" placeholder="Password" class="form-control" required>
                                <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong style="color: red"><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="footer">
                         
                             <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
                                    SIGN IN
                                </button>
                            <h5><a href="<?php echo e(route('password.request')); ?>" class="link">Forgot Password?</a></h5>
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
                    <span>Designed by <a href="#" target="_blank"> Knowz-IT</a></span>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="<?php echo e(asset('assets2/bundles/libscripts.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets2/bundles/vendorscripts.bundle.js')); ?>"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo e(url('assets2/js/pages/authentication/page.js')); ?>"></script>
</body>

<!-- Mirrored from thememakker.com/wrap-theme/square/html/light/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 06:52:47 GMT -->
</html>