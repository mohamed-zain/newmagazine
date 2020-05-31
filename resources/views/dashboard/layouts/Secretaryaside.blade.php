<?php  $currentRoute = Session::get('currentRoute');?>
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="{{ asset('assets3/images/profile_av.png') }}" alt="User"></a></div>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <p class="m-b-0"> سكرتير المجلة</p>

                    </div>
                </div>
            </li>
            <li class="header">الرئيسية</li>
            <li @if(isset($currentRoute) && $currentRoute == 'SecretaryIndex') class="active open" @endif >
                <a href="{{url('SecretaryIndex')}}">
                    <i class="zmdi zmdi-home"></i>
                    <span>الرئيسية</span>
                </a>
            </li>
            <li @if(isset($currentRoute) && $currentRoute == 'OurIndex') class="active open" @endif >
                <a href="{{url('OurIndex')}}">
                    <i class="zmdi zmdi-home"></i>
                    <span>المحكمون</span>
                </a>
            </li>

            <li @if(isset($currentRoute) && $currentRoute == 'ResearchAccepted') class="active open" @endif>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-apps"></i>
                    <span>طلبات النشر</span></a>
                <ul class="ml-menu">
                    <li><a href="{{url('ResearchAccepted')}}"> الابحاث المقبولة</a></li>
                    <li><a href="{{url('ResearchRejected')}}"> الابحاث المرفوضة</a></li>
                </ul>
            </li>



        </ul>
    </div>
</aside>