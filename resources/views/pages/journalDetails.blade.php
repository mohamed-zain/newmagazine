@extends('magazine')
@section('content')
    <div class="pageContent">
        <div class="page-title title-5">
            <div class="container">
                <div class="row">
                    <h1 class="shape new-angle">{{ $Data->MagazineTitle }}</h1>
                    <h3 class="shape new-angle"> تفاصيل العدد</h3>
                    <div class="breadcrumbs white-bg">
                        <a href="#">الرئيسية</a><i class="fa fa-long-arrow-left main-color"></i><span> تفاصيل العدد</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 right-cell">
                        <div class="blog-single">
                            <div class="post-item">

                                <div class="details-img">
                                    @if(isset($journals))
                                        <img src="{{ url('/storage/app/public') }}/{{ $journals->JCover }}" alt="{{ $Data->MagazineTitle }}">
                                    @endif
                                </div>
                                @if(isset($journals))
                                <article class="post-content">

                                    <div class="post-info-container">
                                        <div class="post-info">
                                            <i class="fa fa-book post-icon"></i>
                                            <h2><a href="#">{{ $journals->JournalTitle }}</a></h2>
                                            <ul class="post-meta">
                                                <li class="meta_date"><i class="fa fa-clock-o"></i>{{ $journals->date   }}</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p>{{ $journals->JournalAbout }}

                                        <br>
                                    </p>


                                    <div class="margin-top-20">
                                        <div class="divider lft"><i class="fa fa-scissors"></i></div>
                                    </div>



                                </article>
                                @endif
                            </div><!-- .post-item end -->

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
                                <h4 class="widget-head"><span class="main-color">اخر الدراسات </span>المنشورة</h4>
                                <div class="widget-content">
                                    <ul>
                                        @foreach($Rej as $Single)
                                            <li>
                                                <div class="post-img">
                                                    <a href="{{ url('journalDetails') }}/{{ Crypt::encryptString($Single->JournalID)  }}"><img src="{{ url('storage/app/public') }}/{{ $Single->file }}" alt=""></a>
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

                            <li class="widget widget-categories shape">
                                <h4 class="widget-head"><span class="main-color">المجلات </span> المحكمة</h4>
                                <div class="widget-content">
                                    <ul>
                                        @foreach($magazine as $Single)
                                        <li><a href="{{ url($Single->Slug) }}">{{ $Single->MagazineName }}</a><span></span></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </aside>
                </div>
            </div>
        </div>
        <div class="section gry-bg">
            <div class="container">
                <div class="heading">
                    <h3 class="uppercase head-6"><i class="fa fa-desktop"></i><span class="main-color">الدراسات المنشورة </span>في هذا العدد</h3>
                </div>
                <div class="row">
                    <div class="portfolio p-style5">
                        @foreach($studies as $journal)
                            <div class="portfolio-item col-md-3">
                                <figure>
                                    <img alt="" src="{{ url('public/pdf.png') }}">
                                    <figcaption>
                                        <h4><a href="{{ url('StudyDetails') }}/{{ Crypt::encryptString($journal->studyID) }}">{{ $journal->studyTitle }}</a></h4>
                                        <p class="description main-bg shape"><a href="#">{{ $journal->studyAuthor }}</a></p>
                                        <div class="icon-links">
                                            <p>
                                                <a href="{{ url('StudyDetails') }}/{{ Crypt::encryptString($journal->studyID)  }}" target="_blank" class="link shape"><i class="fa fa-link"></i></a>

                                            </p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

    @endsection