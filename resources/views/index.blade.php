<!DOCTYPE html>
<html>
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	@include('layouts.index_head')

	<body>
	<link id="skin_css" rel="stylesheet" href="{{ asset('assets/css/skins/6.css') }}">
		<div class="pageWrapper animsition">
			@include('layouts.header')

		    
		    <div id="contentWrapper">


				<div class="pageContent">

					<div class="page-title title-5 transparent-title parallax" style="background-image:url('public/assets/images/bgs/bg-01.jpg');" data-stellar-background-ratio="0.4">
						<div class="container">
							<div class="row">
								<h1 class="shape">المجلات العلمية</h1>
								<div class="clearfix"></div>
								<h3 class="white shape">{{ $Data->MagazineTitle }}</h3>
							</div>
						</div>
					</div>
						<div class="heading full-heading alter-gry" style="background-image:url('public/assets/images/patterns/bg2.jpg')">
							<h3 class="inner-head"> قائمة<span class="main-color heavy-font"> المجلات</span></h3>
						</div>
						<div class="container">

							<div class="portfolio p-4-cols simple" id="container">
								@foreach($magazine as $magazines)
								<div class="portfolio-item ">
									<div class="img-holder">
										<div class="img-over">
											<a href="{{ url($magazines->Slug) }}" class="link shape"><i class="fa fa-link"></i></a>
											<a href="storage/app/public/{{ $magazines->file }}" class="zoom shape" title="{{ $magazines->MagazineAbout }}"><i class="fa fa-search-plus"></i></a>
										</div>
										<img alt="" src="storage/app/public/{{ $magazines->file }}">
									</div>
									<div class="name-holder">
											<h4><a href="{{ url($magazines->Slug) }}" class="main-color">{{ $magazines->MagazineNameEn }}</a></h4>
										<h5><a href="#">رئيس  التحرير</a>, <a href="#">{{ $magazines->MagazineCEO }}</a></h5>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					<div class="section">


						<div class="tabs-style-lg style-1 gry-bg">
							<div class="container">
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a class="uppercase" href="#vision-5"><span><i class="fa fa-eye main-color tab-icon"></i>الرؤية</span></a></li>
									<li role="presentation"><a class="uppercase" href="#strategy-5"><span><i class="fa fa-inbox main-color tab-icon"></i>الرسالة</span></a></li>
									<li role="presentation"><a class="uppercase" href="#mission-5"><span><i class="fa fa-briefcase main-color tab-icon"></i>كلمة هيئة التحرير</span></a></li>

								</ul>
							</div>

							<div class="lg-tab-content black-bg parallax" style="background-image:url('public/assets/images/bgs/bg-01.jpg')" data-stellar-background-ratio="0.4" data-overlay="rgba(0,0,0,.4)">
								<div class="container">
									<div class="tab-content section">
										<div role="tabpanel" class="tab-pane fade" id="mission-5">

											<div class="row">
												<div class="col-md-5">
													<img alt="" class="bordered-img main-border" src="https://journals.ksiscs.com.sa/public/manager.jpeg" />
												</div>
												<div class="col-md-7 lg-tab-txt">
													<h3 class="uppercase bolder main-color font-30">كلمة  هيئة التحرير </h3>
													{{ $Data->deanWord }}
												</div>
											</div>

										</div>
										<div role="tabpanel" class="tab-pane fade in active" id="vision-5">
											<div class="row">
												<div class="col-md-7 lg-tab-txt">
													<h3 class="uppercase bolder main-color font-30"> الرؤية </h3>
													{{ $Data->vision }}
												</div>
												<div class="col-md-5">
													<img alt="" class="bordered-img main-border" src="{{ asset('vision.png') }}" />
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="strategy-5">
											<div class="row">
												<div class="col-md-5">
													<img alt="" class="bordered-img main-border" src="{{ asset('mmd.png') }}" />
												</div>
												<div class="col-md-7 lg-tab-txt">
													<h3 class="uppercase bolder main-color font-30"> الرسالة </h3>
													{{ $Data->message }}
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
					<div class="section">
						<div class="heading full-heading alter-gry" style="background-image:url('public/assets/images/patterns/bg2.jpg')">
							<h3 class="inner-head">الاعداد <span class="main-color heavy-font">الحديثة</span></h3>
							<h5 class="small">بعض الاعداد صدرت حديثا في مجلاتنا</h5>
						</div>
						<div class="container">
							<div class="filter-by">
								<ul id="filters">
									<li class="active shape"><a href="#" class="filter" data-filter="*">الكل</a></li>
									@foreach($magazine as $journalsd)
									<li class="shape"><a href="#" class="filter" data-filter=".{{ $journalsd->MagazineID }}">{{ $journalsd->MagazineName }}</a></li>
									@endforeach
								</ul>
							</div>
							@php
								$jourOne = DB::table('journals')->where('MagazineID','1')->orderBy('Jorder','asc')->first();
								$jourTow = DB::table('journals')->where('MagazineID','2')->orderBy('Jorder','asc')->first();
								$jourThree = DB::table('journals')->where('MagazineID','3')->orderBy('Jorder','asc')->first();
								$jourFore = DB::table('journals')->where('MagazineID','4')->orderBy('Jorder','asc')->first();

									@endphp
							<div class="portfolio masonry p-2-cols p-style3" id="masonry">

								<div class="portfolio-item {{ $jourOne->MagazineID }}">
									<figure>
										<img alt="" src="{{ url('storage/app/public') }}/{{ $jourOne->file }}">
										<figcaption>
											<div class="icon-links">
												<p>
													<a href="{{ url('journalDetails') }}/{{ Crypt::encryptString($jourOne->JournalID)  }}" class="link"><i class="fa fa-link"></i></a>
													<a href="{{ url('storage/app/public') }}/{{ $jourOne->file }}" class="zoom" title="{{ $jourOne->JournalTitle }}"><i class="fa fa-search-plus"></i></a>
												</p>
											</div>
											<h4><a href="#">{{ $jourOne->JournalTitle }}</a></h4>
											<p class="description main-bg"><a href="#">{{ $jourOne->JournalAuthor }} </a></p>
										</figcaption>
									</figure>
								</div>

								<div class="portfolio-item {{ $jourTow->MagazineID }}">
									<figure>
										<img alt="" src="{{ url('storage/app/public') }}/{{ $jourTow->file }}">
										<figcaption>
											<div class="icon-links">
												<p>
													<a href="{{ url('journalDetails') }}/{{ Crypt::encryptString($jourTow->JournalID)  }}" class="link"><i class="fa fa-link"></i></a>
													<a href="{{ url('storage/app/public') }}/{{ $jourTow->file }}" class="zoom" title="{{ $jourTow->JournalTitle }}"><i class="fa fa-search-plus"></i></a>
												</p>
											</div>
											<h4><a href="#">{{ $jourTow->JournalTitle }}</a></h4>
											<p class="description main-bg"><a href="#">{{ $jourTow->JournalAuthor }} </a></p>
										</figcaption>
									</figure>
								</div>

								<div class="portfolio-item {{ $jourThree->MagazineID }}">
									<figure>
										<img alt="" src="{{ url('storage/app/public') }}/{{ $jourThree->file }}">
										<figcaption>
											<div class="icon-links">
												<p>
													<a href="{{ url('journalDetails') }}/{{ Crypt::encryptString($jourThree->JournalID)  }}" class="link"><i class="fa fa-link"></i></a>
													<a href="{{ url('storage/app/public') }}/{{ $jourThree->file }}" class="zoom" title="{{ $jourThree->JournalTitle }}"><i class="fa fa-search-plus"></i></a>
												</p>
											</div>
											<h4><a href="#">{{ $jourThree->JournalTitle }}</a></h4>
											<p class="description main-bg"><a href="#">{{ $jourThree->JournalAuthor }} </a></p>
										</figcaption>
									</figure>
								</div>

								<div class="portfolio-item {{ $jourFore->MagazineID }}">
									<figure>
										<img alt="" src="{{ url('storage/app/public') }}/{{ $jourFore->file }}">
										<figcaption>
											<div class="icon-links">
												<p>
													<a href="{{ url('journalDetails') }}/{{ Crypt::encryptString($jourFore->JournalID)  }}" class="link"><i class="fa fa-link"></i></a>
													<a href="{{ url('storage/app/public') }}/{{ $jourFore->file }}" class="zoom" title="{{ $jourFore->JournalTitle }}"><i class="fa fa-search-plus"></i></a>
												</p>
											</div>
											<h4><a href="#">{{ $jourFore->JournalTitle }}</a></h4>
											<p class="description main-bg"><a href="#">{{ $jourFore->JournalAuthor }} </a></p>
										</figcaption>
									</figure>
								</div>

							</div>
						</div>
					</div>

					<div class="padding-vertical-50 diamonds-pattern main-bg">
						<div class="container">
							<div class="cta_btn">
								<div class="f-left">
									<h2 class="cta_heading uppercase bold white"><span class="black-color uppercase bolder">المجلة العلمية</span> تسعي المجلات للتواصل مع اكبر عدد ممكن من الأكاديميين للإستفاده من خبراتهم في مجال تحكيم الدراسات التي تقدم للنشر فيها</h2>
									<p class="white">للإنضمام لقائمة المحكمين عبر الرابط الظاهر</p>
								</div>
								<a class="btn btn-xxl btn-black f-right shape" href="{{ url('NewRegistration') }}">
									<span class="uppercase bolder font-20 block">سجل من هنا</span>
								</a>
							</div>
						</div>
					</div>
				</div>
		    	<!-- Footer start -->
			    @include('layouts.footer')
		    	<!-- Footer end -->
		    </div>
		</div>
		
		    	
		<!-- Back to top Link -->
	    <a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>
	    <!-- Load JS plugins file -->
 		<script type="text/javascript" src="{{ asset('assets/js/assets.min.js') }}"></script>
		<!-- general script file -->
		<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
	</body>
</html>