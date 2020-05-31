<!DOCTYPE html>
<html>
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<?php echo $__env->make('layouts.index_head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<body>
	<link id="skin_css" rel="stylesheet" href="<?php echo e(asset('assets/css/skins/6.css')); ?>">
		<div class="pageWrapper animsition">
			<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		    
		    <div id="contentWrapper">


				<div class="pageContent">

					<div class="page-title title-5 transparent-title parallax" style="background-image:url('public/assets/images/bgs/bg-01.jpg');" data-stellar-background-ratio="0.4">
						<div class="container">
							<div class="row">
								<h1 class="shape">المجلات العلمية</h1>
								<div class="clearfix"></div>
								<h3 class="white shape"><?php echo e($Data->MagazineTitle); ?></h3>
							</div>
						</div>
					</div>
						<div class="heading full-heading alter-gry" style="background-image:url('public/assets/images/patterns/bg2.jpg')">
							<h3 class="inner-head"> قائمة<span class="main-color heavy-font"> المجلات</span></h3>
						</div>
						<div class="container">

							<div class="portfolio p-4-cols simple" id="container">
								<?php $__currentLoopData = $magazine; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $magazines): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="portfolio-item ">
									<div class="img-holder">
										<div class="img-over">
											<a href="<?php echo e(url($magazines->Slug)); ?>" class="link shape"><i class="fa fa-link"></i></a>
											<a href="storage/app/public/<?php echo e($magazines->file); ?>" class="zoom shape" title="<?php echo e($magazines->MagazineAbout); ?>"><i class="fa fa-search-plus"></i></a>
										</div>
										<img alt="" src="storage/app/public/<?php echo e($magazines->file); ?>">
									</div>
									<div class="name-holder">
											<h4><a href="<?php echo e(url($magazines->Slug)); ?>" class="main-color"><?php echo e($magazines->MagazineNameEn); ?></a></h4>
										<h5><a href="#">رئيس  التحرير</a>, <a href="#"><?php echo e($magazines->MagazineCEO); ?></a></h5>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
													<?php echo e($Data->deanWord); ?>

												</div>
											</div>

										</div>
										<div role="tabpanel" class="tab-pane fade in active" id="vision-5">
											<div class="row">
												<div class="col-md-7 lg-tab-txt">
													<h3 class="uppercase bolder main-color font-30"> الرؤية </h3>
													<?php echo e($Data->vision); ?>

												</div>
												<div class="col-md-5">
													<img alt="" class="bordered-img main-border" src="<?php echo e(asset('vision.png')); ?>" />
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="strategy-5">
											<div class="row">
												<div class="col-md-5">
													<img alt="" class="bordered-img main-border" src="<?php echo e(asset('mmd.png')); ?>" />
												</div>
												<div class="col-md-7 lg-tab-txt">
													<h3 class="uppercase bolder main-color font-30"> الرسالة </h3>
													<?php echo e($Data->message); ?>

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
									<?php $__currentLoopData = $magazine; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $journalsd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li class="shape"><a href="#" class="filter" data-filter=".<?php echo e($journalsd->MagazineID); ?>"><?php echo e($journalsd->MagazineName); ?></a></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
							<?php
								$jourOne = DB::table('journals')->where('MagazineID','1')->orderBy('Jorder','asc')->first();
								$jourTow = DB::table('journals')->where('MagazineID','2')->orderBy('Jorder','asc')->first();
								$jourThree = DB::table('journals')->where('MagazineID','3')->orderBy('Jorder','asc')->first();
								$jourFore = DB::table('journals')->where('MagazineID','4')->orderBy('Jorder','asc')->first();

									?>
							<div class="portfolio masonry p-2-cols p-style3" id="masonry">

								<div class="portfolio-item <?php echo e($jourOne->MagazineID); ?>">
									<figure>
										<img alt="" src="<?php echo e(url('storage/app/public')); ?>/<?php echo e($jourOne->file); ?>">
										<figcaption>
											<div class="icon-links">
												<p>
													<a href="<?php echo e(url('journalDetails')); ?>/<?php echo e(Crypt::encryptString($jourOne->JournalID)); ?>" class="link"><i class="fa fa-link"></i></a>
													<a href="<?php echo e(url('storage/app/public')); ?>/<?php echo e($jourOne->file); ?>" class="zoom" title="<?php echo e($jourOne->JournalTitle); ?>"><i class="fa fa-search-plus"></i></a>
												</p>
											</div>
											<h4><a href="#"><?php echo e($jourOne->JournalTitle); ?></a></h4>
											<p class="description main-bg"><a href="#"><?php echo e($jourOne->JournalAuthor); ?> </a></p>
										</figcaption>
									</figure>
								</div>

								<div class="portfolio-item <?php echo e($jourTow->MagazineID); ?>">
									<figure>
										<img alt="" src="<?php echo e(url('storage/app/public')); ?>/<?php echo e($jourTow->file); ?>">
										<figcaption>
											<div class="icon-links">
												<p>
													<a href="<?php echo e(url('journalDetails')); ?>/<?php echo e(Crypt::encryptString($jourTow->JournalID)); ?>" class="link"><i class="fa fa-link"></i></a>
													<a href="<?php echo e(url('storage/app/public')); ?>/<?php echo e($jourTow->file); ?>" class="zoom" title="<?php echo e($jourTow->JournalTitle); ?>"><i class="fa fa-search-plus"></i></a>
												</p>
											</div>
											<h4><a href="#"><?php echo e($jourTow->JournalTitle); ?></a></h4>
											<p class="description main-bg"><a href="#"><?php echo e($jourTow->JournalAuthor); ?> </a></p>
										</figcaption>
									</figure>
								</div>

								<div class="portfolio-item <?php echo e($jourThree->MagazineID); ?>">
									<figure>
										<img alt="" src="<?php echo e(url('storage/app/public')); ?>/<?php echo e($jourThree->file); ?>">
										<figcaption>
											<div class="icon-links">
												<p>
													<a href="<?php echo e(url('journalDetails')); ?>/<?php echo e(Crypt::encryptString($jourThree->JournalID)); ?>" class="link"><i class="fa fa-link"></i></a>
													<a href="<?php echo e(url('storage/app/public')); ?>/<?php echo e($jourThree->file); ?>" class="zoom" title="<?php echo e($jourThree->JournalTitle); ?>"><i class="fa fa-search-plus"></i></a>
												</p>
											</div>
											<h4><a href="#"><?php echo e($jourThree->JournalTitle); ?></a></h4>
											<p class="description main-bg"><a href="#"><?php echo e($jourThree->JournalAuthor); ?> </a></p>
										</figcaption>
									</figure>
								</div>

								<div class="portfolio-item <?php echo e($jourFore->MagazineID); ?>">
									<figure>
										<img alt="" src="<?php echo e(url('storage/app/public')); ?>/<?php echo e($jourFore->file); ?>">
										<figcaption>
											<div class="icon-links">
												<p>
													<a href="<?php echo e(url('journalDetails')); ?>/<?php echo e(Crypt::encryptString($jourFore->JournalID)); ?>" class="link"><i class="fa fa-link"></i></a>
													<a href="<?php echo e(url('storage/app/public')); ?>/<?php echo e($jourFore->file); ?>" class="zoom" title="<?php echo e($jourFore->JournalTitle); ?>"><i class="fa fa-search-plus"></i></a>
												</p>
											</div>
											<h4><a href="#"><?php echo e($jourFore->JournalTitle); ?></a></h4>
											<p class="description main-bg"><a href="#"><?php echo e($jourFore->JournalAuthor); ?> </a></p>
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
								<a class="btn btn-xxl btn-black f-right shape" href="<?php echo e(url('NewRegistration')); ?>">
									<span class="uppercase bolder font-20 block">سجل من هنا</span>
								</a>
							</div>
						</div>
					</div>
				</div>
		    	<!-- Footer start -->
			    <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		    	<!-- Footer end -->
		    </div>
		</div>
		
		    	
		<!-- Back to top Link -->
	    <a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>
	    <!-- Load JS plugins file -->
 		<script type="text/javascript" src="<?php echo e(asset('assets/js/assets.min.js')); ?>"></script>
		<!-- general script file -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
	</body>
</html>