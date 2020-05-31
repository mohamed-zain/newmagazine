<?php  $currentRoute = Session::get('currentRoute');?>
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="{{ asset('assets3/images/profile_av.png') }}" alt="User"></a></div>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <p class="m-b-0"> محكم المجلة</p>

                    </div>
                </div>
            </li>
            <li class="header">الرئيسية</li>
            <li @if(isset($currentRoute) && $currentRoute == 'ArbitratorIndex') class="active open" @endif >
                <a href="{{url('ArbitratorIndex')}}">
                    <i class="zmdi zmdi-home"></i>
                    <span>الرئيسية</span>
                </a>
            </li>

            <li @if(isset($currentRoute) && $currentRoute == 'ArbitratorEdit') class="active open" @endif>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="zmdi zmdi-apps"></i>
                    <span>طلبات التحكيم</span></a>
                <ul class="ml-menu">
                    <li><a href="{{url('ArbitratorAccepted')}}"> الابحاث المقبولة</a></li>
                    <li><a href="{{url('ArbitratorRejected')}}"> الابحاث المرفوضة</a></li>
                    <li><a href="{{url('ArbitratorEdit')}}"> الابحاث المرفوضة مع التعديل</a></li>
                </ul>
            </li>



        </ul>
    </div>
</aside>