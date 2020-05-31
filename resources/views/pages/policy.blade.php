@extends('magazine')
@section('content')
    <div class="pageContent">
        <div class="page-title title-5">
            <div class="container">
                <div class="row">
                    <h1 class="shape new-angle">{{ $Data->MagazineTitle }}</h1>
                    <h3 class="shape new-angle">سياسات المجلة</h3>
                    <div class="breadcrumbs white-bg">
                        <a href="#">الرئيسية</a><i class="fa fa-long-arrow-left main-color"></i><span>رئيسية سياسات المجلة</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="panel-group accordion style-4" id="accordion-5" role="tablist">
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="heading-1">
                                    <h4 class="panel-title">
                                        <a role="button" class="shape" data-toggle="collapse" data-parent="#accordion-5" href="#acc-1" aria-expanded="true" aria-controls="acc-1"><i class="fa fa-desktop main-color"></i>سياسات المجلة</a>
                                    </h4>
                                </div>
                                <div id="acc-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-1">
                                    <div class="panel-body">
                                        {{ $Data->MagazinePupPolicy }}
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="heading-2">
                                    <h4 class="panel-title">
                                        <a class="collapsed shape" role="button" data-toggle="collapse" data-parent="#accordion-5" href="#acc-2" aria-expanded="false" aria-controls="acc-2"><i class="fa fa-circle-o-notch main-color"></i>سياسة النشر</a>
                                    </h4>
                                </div>
                                <div id="acc-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
                                    <div class="panel-body">
                                        {{ $Data->MagazinePupCondition }}
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <aside class="col-md-3">
                        <ul class="sidebar_widgets">
                            <li class="widget search-widget shape">
                                <h4 class="widget-head"><span class="main-color">أبحث في</span> المجلة</h4>
                                <div class="widget-content">
                                    <form action="#" method="get">
                                        <input type="text" name="t" id="t2-search" class="txt-box" placeholder="أكتب كلمة بحث ... " />
                                        <button type="submit" class="main-color"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </li>

                            <li class="widget w-recent-posts shape">
                                <h4 class="widget-head"><span class="main-color">اخر الاعداد </span>المنشورة</h4>
                                <div class="widget-content">
                                    <ul>
                                        @foreach($journals as $Single)
                                        <li>
                                            <div class="post-img">
                                                <a href="{{ url('journalDetails') }}/{{ Crypt::encryptString($Single->JournalID)  }}"><img src="storage/app/public/{{ $Single->file }}" alt=""></a>
                                            </div>
                                            <div class="widget-post-info">
                                                <h5><a href="{{ url('journalDetails') }}/{{ Crypt::encryptString($Single->JournalID)  }}">{{str_limit($Single->JournalTitle, 20)}}</a></h5>
                                                <div class="meta">
                                                    <span><i class="fa fa-clock-o"></i>{{ date('F d, Y', strtotime($Single->created_at  )) }}</span>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </aside>
                </div>
            </div>
        </div>

    </div>

    @endsection