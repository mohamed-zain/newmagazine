<?php  $currentRoute = Session::get('currentRoute');?>
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="<?php echo e(asset('assets3/images/profile_av.png')); ?>" alt="User"></a></div>
                    <div class="detail">
                        <h4><?php echo e(Auth::user()->name); ?></h4>
                        <p class="m-b-0">مدير الموقع</p>

                    </div>
                </div>
            </li>
            <li class="header">الرئيسية</li>
            <li <?php if(isset($currentRoute) && $currentRoute == 'magazines'): ?> class="active open" <?php endif; ?> >
                <a href="<?php echo e(url('magazines')); ?>">
                    <i class="zmdi zmdi-home"></i>
                    <span>المجلات</span>
                </a>
            </li>

            <li <?php if(isset($currentRoute) && $currentRoute == 'journals'): ?> class="active open" <?php endif; ?>>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-apps"></i>
                    <span>الاعداد</span></a>
                <ul class="ml-menu">
                    <li><a href="<?php echo e(url('journals')); ?>">أعداد المجلات</a></li>
                    <li><a href="<?php echo e(url('journalsfiles')); ?>">ملف الاعداد</a></li>
                    <li><a href="<?php echo e(url('abstractions')); ?>"> مستخلص البحث</a></li>
                    <li><a href="<?php echo e(url('studies')); ?>">  الدراسات</a></li>
                    <li><a href="<?php echo e(url('Ordering')); ?>">  ترتيب ظهور الاعداد</a></li>
                </ul>
            </li>
            <li <?php if(isset($currentRoute) && $currentRoute == 'members'): ?> class="active open" <?php endif; ?>>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-apps"></i>
                    <span>أعضاء التحرير</span></a>
                <ul class="ml-menu">
                    <li><a href="<?php echo e(url('members')); ?>"> اعضاء هيئة التحرير</a></li>

                </ul>
            </li>
            <li <?php if(isset($currentRoute) && $currentRoute == 'arbitrations'): ?> class="active open" <?php endif; ?> >
                <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-gamepad"></i><span>المحكمون </span></a>
                <ul class="ml-menu">
                    <li class="active">
                    <a href="<?php echo e(url('arbitrations')); ?>">قائمة المحكمون </a></li>
                </ul>
            </li>
            <li <?php if(isset($currentRoute) && $currentRoute == 'researchers'): ?> class="active open" <?php endif; ?>>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-apps"></i>
                    <span>الناشرون</span></a>
                <ul class="ml-menu">
                    <li><a href="<?php echo e(url('researchers')); ?>">قائمة الناشرون</a></li>
                </ul>
            </li>
            <li <?php if(isset($currentRoute) && $currentRoute == 'users'): ?> class="active open" <?php endif; ?>>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-swap-alt"></i>
                    <span>المستخدمين</span>
                </a>
                <ul class="ml-menu">
                    <li> <a href="<?php echo e(url('rolls')); ?>"> الصلاحيات</a> </li>
                    <li> <a href="<?php echo e(url('users')); ?>?i=3">المشرفين</a> </li>
                    <li> <a href="<?php echo e(url('users')); ?>?i=2">السكرتارية</a> </li>
                    <li> <a href="<?php echo e(url('users')); ?>?i=5">الباحثين</a> </li>
                    <li> <a href="<?php echo e(url('users')); ?>?i=4">المحكمون</a> </li>

                </ul>
            </li>
            <li <?php if(isset($currentRoute) && $currentRoute == 'contacts'): ?> class="active open" <?php endif; ?>>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-widgets"></i>
                    <span>البريد </span>
                </a>
                <ul class="ml-menu">
                    <li><a href="<?php echo e(url('contacts')); ?>">البريد الوارد </a></li>
                </ul>
            </li>
            <li class="header">الضبط</li>
            <li <?php if(isset($currentRoute) && $currentRoute == 'main_infos'): ?> class="active open" <?php endif; ?>>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-shopping-cart"></i>
                    <span>البيانات الاساسية</span>
                </a>
                <ul class="ml-menu">
                    <li> <a href="<?php echo e(url('main_infos')); ?>">بيانات المجلة</a></li>

                </ul>
            </li>


        </ul>
    </div>
</aside>