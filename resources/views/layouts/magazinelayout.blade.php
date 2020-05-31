<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@include('layouts.magazinehead')
<body>


<div class="pageWrapper animsition">

    <!-- top bar start -->
    <div class="top-bar main-bg">
        <div class="container">

            <div class="center-tbl">

                <ul class="top-info">
                    <li><a href="#" class="shape"><i class="fa fa-envelope"></i>email@domain.com</a></li>
                    <li><span><i class="fa fa-phone"></i> +1 (888) 000-0000</span></li>
                </ul>

                <ul class="social-list middle-ul alter-bg shape">
                    <li><a href="#" class="fa fa-dribbble" data-tooltip="true" data-title="dribbble" data-position="bottom"></a></li>
                    <li><a href="#" class="fa fa-facebook" data-tooltip="true" data-title="facebook" data-position="bottom"></a></li>
                    <li><a href="#" class="fa fa-linkedin" data-tooltip="true" data-title="linkedin" data-position="bottom"></a></li>
                    <li><a href="#" class="fa fa-skype" data-tooltip="true" data-title="skype" data-position="bottom"></a></li>
                    <li><a href="#" class="fa fa-twitter" data-tooltip="true" data-title="twitter" data-position="bottom"></a></li>
                </ul>

                <ul>
                    <li class="dropdown"><a href="#" class="shape" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="login-bx"><i class="fa fa-lock"></i>تسجيل الدخول</a>
                        <div class="dropdown-menu login-popup black-bg">
                            <p class="small">قم بكتابة البريد الالكتروني وكلمة المرور وتمتع بجميع خدماتنا</p>
                            <div class="login-controls">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="البريد الألكتروني" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="كلمة المرور" />
                                </div>
                                <div class="form-group floated-controls">
                                    <span class="block checkbox-block"><input type="checkbox" class="checkbox" /> <span>تذكرني !</span></span>
                                    <a href="#">هل نسيت كلمة المرور ؟</a>
                                </div>
                                <div>
                                    <button type="button" class="btn main-bg">تسجيل</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="#" class="shape" data-toggle="modal" data-target="#registermodal"><i class="fa fa-user"></i> تسجيل عضوية</a></li>
                    <li><a class="shape" href="sitemap.html"><i class="fa fa-sitemap"></i>خريطة الموقع</a></li>
                </ul>

            </div>

        </div>
    </div>
    <!-- top bar end -->

    @include('layouts.magazineheader')

    <div id="contentWrapper">

        @yield('content')

        <!-- Footer start -->
        @include('layouts.footer')
        <!-- Footer end -->
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registermodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">انشاء حساب جديد</h4>
            </div>
            <div class="modal-body">
                <div class="padding-horizontal-20 padding-vertical-20">
                    <p>مرحبا بك عزيزي الزائر يمكنك انشاء حساب لدينا لتتمكن من الشراء عبر الموقع </p>
                    <div class="login-controls">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="الاسم بالكامل " />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="البريد الالكتروني" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="تأكيد البريد الالكتروني" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="كلمة المرور" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="تأكيد كلمة المرور" />
                        </div>
                        <div class="form-group floated-controls">
                            <span class="block checkbox-block"><input type="checkbox" class="checkbox" /> <span>موافق علي الشروط ! </span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn main-bg">تسجيل</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Back to top Link -->
<a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>


<!-- Load JS plugins file -->
@include('layouts.magazinescript')

</body>

<!-- Mirrored from html.it-rays.net/superfine/shop-left-bar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Sep 2018 18:15:40 GMT -->
</html>