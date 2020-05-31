<?php  $currentRoute = Session::get('currentRoute');?>
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="{{ asset('assets3/images/profile_av.png') }}" alt="User"></a></div>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <p class="m-b-0"> باحث</p>

                    </div>
                </div>
            </li>
            <li class="header">الرئيسية</li>
            <li @if(isset($currentRoute) && $currentRoute == 'publish_request') class="active open" @endif >
                <a href="{{url('publish_request')}}">
                    <i class="zmdi zmdi-home"></i>
                    <span>أبحاثك</span>
                </a>
            </li>

            <li @if(isset($currentRoute) && $currentRoute == 'ResearcherLay') class="active open" @endif>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-apps"></i>
                    <span>الاعداد</span></a>
                <ul class="ml-menu">
                    <li><a href="{{url('journals')}}">أعداد المجلات</a></li>
                    <li><a href="{{url('journalsfiles')}}">ملف الاعداد</a></li>
                </ul>
            </li>



        </ul>
    </div>
</aside>