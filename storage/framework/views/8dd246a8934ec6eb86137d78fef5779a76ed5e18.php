<header class="top-head transparent" data-sticky="true">
    <div class="container">
        <!-- Logo start -->
        <div class="logo light">
            <a href="<?php echo e(url('/')); ?>"><img alt="" src="<?php echo e(asset('logo.png')); ?>" style="height: 70px;" /></a>
        </div>
        <!-- Logo end -->

        <div class="f-left responsive-nav">
            <!-- top navigation menu start -->
            <nav class="top-nav nav-animate to-bottom" style="margin-right:150px">
                <ul>
                    <li class="selected">
                        <a href="<?php echo e(url('/')); ?>">الرئيسية</a>
                    </li>

                    <li>
                        <a href="<?php echo e(url('NewUser')); ?>">رفع الدراسات</a>
                    </li>
                    <li>
                        <a href="#">تواصل معنا</a>
                    </li>
                    <?php if(Auth::check()): ?>

                        <?php else: ?>
                        <li>
                            <a href="<?php echo e(url('login')); ?>">تسجيل دخول</a>
                        </li>
                    <?php endif; ?>
                    
                    <li>
                        <a href="<?php echo e(url('NewRegistration')); ?>">  شارك في التحكيم</a>
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

