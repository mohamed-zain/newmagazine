@extends('magazine')
@section('content')
    <div class="pageContent">

        <div class="section parallax portfolio single-pro-img" style="background-image: url('../public/assets/images/sliders/rev/bg-5.jpg');" data-stellar-background-ratio="0.65" data-overlay="rgba(0,0,0,.7)">
            <div class="container">
                <div class="row">
                    <div class="t-center margin-top-100">
                        <h1 class="bolder uppercase font-40 white">{{ $magazine->MagazineName }}</h1>
                        <p class="white font-15">
                        {{ $magazine->MagazineNameEn }}
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="heading">
                            <h3 class="uppercase head-6"><i class="fa fa-info-circle"></i><span class="main-color">معلومات عن </span>المجلة</h3>
                        </div>
                        <ul class="list">
                            <li>
                                <i class="fa fa-tag"></i> <span class="bold main-color">رئيس التحرير:</span> <a href="#">{{ $magazine->MagazineCEO }}</a>
                            </li>
                            <li>
                                <i class="fa fa-user"></i> <span class="bold main-color">اعداد المجلة :</span> {{ $magazine->MagazineNum }} عدد
                            </li>
                            <li>
                                <i class="fa fa-calendar"></i> <span class="bold main-color">البريد الإلكتروني :</span> {{ $magazine->Email }}
                            </li>
                            <li>
                                <i class="fa fa-tag"></i> <span class="bold main-color"> ردمد :</span>
                                <span style="float: left;margin-left: 200px">{{ $magazine->One }}</span>
                            </li>
                            <li>
                                <i class="fa fa-tag"></i> <span class="bold main-color"> رقم الايداع:</span> <a href="#">{{ $magazine->Tow }}</a>
                            </li>
                            <li>
                                <i class="fa fa-tag"></i> <span class="bold main-color"> ترخيص وزارة الثقافة والإعلام :</span> <a href="#">{{ $magazine->Three }}</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="heading">
                            <h3 class="uppercase head-6"><i class="fa fa-desktop"></i><span class="main-color">عن </span>المجلة</h3>
                        </div>
                        <p>{{ $magazine->MagazineAbout }}</p>
                        <br>
                        <br>


                            <div class="panel-group accordion style-1" id="accordion-2" role="tablist">
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingOne-2">
                                        <h4 class="panel-title">
                                            <a role="button" class="shape" data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2"><i class="fa fa-desktop main-color"></i>سياسة المجلة</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne-2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne-2">
                                        <div class="panel-body">
                                            <p>{{$magazine->Policy  }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingTwo-2">
                                        <h4 class="panel-title">
                                            <a class="collapsed shape" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2"><i class="fa fa-circle-o-notch main-color"></i>سياسة النشر  </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-2">
                                        <div class="panel-body">
                                            <p>{{$magazine->PublishingPolicy  }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingThree-2">
                                        <h4 class="panel-title">
                                            <a class="collapsed shape" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-2" aria-expanded="false" aria-controls="collapseThree-2"><i class="fa fa-circle-o-notch main-color"></i>ضوابط النشر  </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree-2">
                                        <div class="panel-body">
                                            <p>{{$magazine->PublishingControls  }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="section">

            <div class="heading full-heading alter-gry" style="background-image:url('assets/images/patterns/bg2.jpg')">
                <h3 class="inner-head">أعضاء  <span class="main-color heavy-font">هيئة التحرير</span></h3>
            </div>

            <div class="container">
            <div class="row">
                <div class="col-md-8 lft-pad-cell inner-magazine">
                    <div class="over-hidden padding-vertical-30">

                        <div class="blog-posts small-image recent-posts">
                            @foreach($member as $members)
                            <div class="post-item">
                                <div class="post-image">
                                    <a href="#">
                                        <img src="{{ url('storage/app/public') }}/{{ $members->file }}" class="shape new-angle" alt="Our Blog post image goes here">
                                    </a>
                                </div>
                                <article class="post-content">
                                    <div class="post-info-container">
                                        <div class="post-info">
                                            <i class="fa fa-user post-icon"></i>
                                            <h2><a href="#">{{ $members->MemberName }}</a></h2>
                                            <ul class="post-meta">
                                                <li class="meta-user"><i class="fa fa-user"></i>الرتبة العلمية: <a href="#">{{ $members->degree }}</a></li>
                                                <li><i class="fa fa-folder-open"></i>العمل: <a href="#">{{ $members->work }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>{{ $members->country }},   {{ $members->uni }},   {{ $members->college }},   {{ $members->dept }}</p>
                                        <p></p>
                                </article>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                </div>
                        {{--<div class="testimonials testimonials-5">
                            <div class="row margin-0">
                                @foreach($member as $members)
                                <div class="col-md-4">
                                    <div class="testimonials-bg">
                                        <div class="testimonials-img">
                                            <img class="shape new-angle" alt="" src="{{ url('storage/app/public') }}/{{ $members->file }}">
                                        </div>
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing. rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec diam elit consequat eget augue.</span>
                                    </div>
                                    <div class="testimonials-name main-color">
                                        <strong>{{ $members->MemberName }}</strong>: {{ $members->degree }}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>--}}
            </div>
        </div>
        <div class="section gry-bg">
            <div class="container">
                <div class="heading">
                    <h3 class="uppercase head-6"><i class="fa fa-desktop"></i><span class="main-color">الأعداد </span>المنشورة</h3>
                </div>
                <div class="row">
                    <div class="portfolio p-style5">
                        @foreach($journals as $journal)
                        <div class="portfolio-item col-md-4">
                            <figure>
                                <img alt="" src="{{ url('storage/app/public') }}/{{ $journal->file }}">
                                <figcaption>
                                    <h4><a href="{{ url('journalDetails') }}/{{ Crypt::encryptString($journal->JournalID)  }}">{{ $journal->JournalTitle }}</a></h4>
                                    <p class="description main-bg shape"><a href="#">{{ $journal->JournalAuthor }}</a></p>
                                    <div class="icon-links">
                                        <p>
                                            <a href="{{ url('journalDetails') }}/{{ Crypt::encryptString($journal->JournalID)  }}" class="link shape"><i class="fa fa-link"></i></a>
                                            <a href="{{ asset('storage') }}/{{ $journal->file }}" class="zoom shape" title="A Day with Sunshine & Bliss"><i class="fa fa-search-plus"></i></a>

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