<link id="skin_css" rel="stylesheet" href="{{ asset('assets/css/skins/6.css') }}">
<header class="top-head " data-sticky="true">
    <div class="container">
        <!-- Logo start -->
        <div class="logo light">
            <a href="{{ url('/') }}"><img alt="" src="{{ asset('logo.png') }}" style="height: 70px;" /></a>
        </div>
        <!-- Logo end -->

        <div class="f-left responsive-nav">
            <!-- top navigation menu start -->
            <nav class="top-nav nav-animate to-bottom" style="margin-right:150px">
                <ul>
                    <li class="selected">
                        <a href="{{ url('/') }}">الرئيسية</a>
                    </li>

                    <li>
                        <a href="{{ url('NewUser') }}">رفع الدراسات</a>
                    </li>
                    <li>
                        <a href="#">تواصل معنا</a>
                    </li>
                    @if(Auth::check())

                    @else
                        <li>
                            <a href="{{ url('login') }}">تسجيل دخول</a>
                        </li>
                    @endif

                    <li>
                        <a href="{{ url('NewRegistration') }}">  شارك في التحكيم</a>
                    </li>
                </ul>
            </nav>
            <!-- top navigation menu end -->

            <div class="f-right">
                <!-- top search start -->
                <div class="top-search">
                    <a href="#" class="main-color"><span class="fa fa-search"></span></a>
                    <div class="search-box">
                        <input type="text" name="t" placeholder="ابحث في المجلات" />
                    </div>
                </div>
                <!-- top search end -->
            </div>

        </div>
    </div>
</header>