<?php  $currentRoute = Session::get('currentRoute');?>
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="{{ asset('assets3/images/profile_av.png') }}" alt="User"></a></div>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <p class="m-b-0">مدير الموقع</p>

                    </div>
                </div>
            </li>
            <li class="header">الرئيسية</li>
            <li @if(isset($currentRoute) && $currentRoute == 'magazines') class="active open" @endif >
                <a href="{{url('magazines')}}">
                    <i class="zmdi zmdi-home"></i>
                    <span>المجلات</span>
                </a>
            </li>

            <li @if(isset($currentRoute) && $currentRoute == 'journals') class="active open" @endif>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-apps"></i>
                    <span>الاعداد</span></a>
                <ul class="ml-menu">
                    <li><a href="{{url('journals')}}">أعداد المجلات</a></li>
                    <li><a href="{{url('journalsfiles')}}">ملف الاعداد</a></li>
                    <li><a href="{{url('abstractions')}}"> مستخلص البحث</a></li>
                    <li><a href="{{url('studies')}}">  الدراسات</a></li>
                    <li><a href="{{url('Ordering')}}">  ترتيب ظهور الاعداد</a></li>
                </ul>
            </li>
            <li @if(isset($currentRoute) && $currentRoute == 'members') class="active open" @endif>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-apps"></i>
                    <span>أعضاء التحرير</span></a>
                <ul class="ml-menu">
                    <li><a href="{{url('members')}}"> اعضاء هيئة التحرير</a></li>

                </ul>
            </li>
            <li @if(isset($currentRoute) && $currentRoute == 'arbitrations') class="active open" @endif >
                <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-gamepad"></i><span>المحكمون </span></a>
                <ul class="ml-menu">
                    <li class="active">
                    <a href="{{url('arbitrations')}}">قائمة المحكمون </a></li>
                </ul>
            </li>
            <li @if(isset($currentRoute) && $currentRoute == 'researchers') class="active open" @endif>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-apps"></i>
                    <span>الناشرون</span></a>
                <ul class="ml-menu">
                    <li><a href="{{url('researchers')}}">قائمة الناشرون</a></li>
                </ul>
            </li>
            <li @if(isset($currentRoute) && $currentRoute == 'users') class="active open" @endif>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-swap-alt"></i>
                    <span>المستخدمين</span>
                </a>
                <ul class="ml-menu">
                    <li> <a href="{{url('rolls')}}"> الصلاحيات</a> </li>
                    <li> <a href="{{url('users')}}?i=3">المشرفين</a> </li>
                    <li> <a href="{{url('users')}}?i=2">السكرتارية</a> </li>
                    <li> <a href="{{url('users')}}?i=5">الباحثين</a> </li>
                    <li> <a href="{{url('users')}}?i=4">المحكمون</a> </li>

                </ul>
            </li>
            <li @if(isset($currentRoute) && $currentRoute == 'contacts') class="active open" @endif>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-widgets"></i>
                    <span>البريد </span>
                </a>
                <ul class="ml-menu">
                    <li><a href="{{url('contacts')}}">البريد الوارد </a></li>
                </ul>
            </li>
            <li class="header">الضبط</li>
            <li @if(isset($currentRoute) && $currentRoute == 'main_infos') class="active open" @endif>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-shopping-cart"></i>
                    <span>البيانات الاساسية</span>
                </a>
                <ul class="ml-menu">
                    <li> <a href="{{url('main_infos')}}">بيانات المجلة</a></li>

                </ul>
            </li>


        </ul>
    </div>
</aside>