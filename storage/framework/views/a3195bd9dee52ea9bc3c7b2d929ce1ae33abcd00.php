<?php $__env->startSection('content'); ?>
    <div class="pageContent">

        <div class="section parallax portfolio single-pro-img" style="background-image: url('../public/assets/images/sliders/rev/bg-5.jpg');" data-stellar-background-ratio="0.65" data-overlay="rgba(0,0,0,.7)">
            <div class="container">
                <div class="row">
                    <div class="t-center margin-top-100">
                        <h1 class="bolder uppercase font-40 white"><?php echo e($magazine->MagazineName); ?></h1>
                        <p class="white font-15">
                        <?php echo e($magazine->MagazineNameEn); ?>

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
                                <i class="fa fa-tag"></i> <span class="bold main-color">رئيس التحرير:</span> <a href="#"><?php echo e($magazine->MagazineCEO); ?></a>
                            </li>
                            <li>
                                <i class="fa fa-user"></i> <span class="bold main-color">اعداد المجلة :</span> <?php echo e($magazine->MagazineNum); ?> عدد
                            </li>
                            <li>
                                <i class="fa fa-calendar"></i> <span class="bold main-color">البريد الإلكتروني :</span> <?php echo e($magazine->Email); ?>

                            </li>
                            <li>
                                <ul class="social-list margin-top-20">
                                    <li><a data-tooltip="true" data-title="dribbble" href="#" class="fa fa-dribbble gry-bg shape sm"></a></li>
                                    <li><a data-tooltip="true" data-title="facebook" href="#" class="fa fa-facebook gry-bg shape sm"></a></li>
                                    <li><a data-tooltip="true" data-title="linkedin" href="#" class="fa fa-linkedin gry-bg shape sm"></a></li>
                                    <li><a data-tooltip="true" data-title="twitter" href="#" class="fa fa-twitter gry-bg shape sm"></a></li>
                                    <li><a data-tooltip="true" data-title="google plus" href="#" class="fa fa-google-plus gry-bg shape sm"></a></li>
                                    <li><a data-tooltip="true" data-title="pinterest" href="#" class="fa fa-pinterest gry-bg shape sm"></a></li>
                                </ul>

                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="heading">
                            <h3 class="uppercase head-6"><i class="fa fa-desktop"></i><span class="main-color">عن </span>المجلة</h3>
                        </div>
                        <p>


                            مجلة علمية مُحكَمة
<br>

                            نصـف سـنوية
                            <br>
                            تصدر عن

                            <br>
                            المـركـــز العـربــي للــدراســات والبحوث بالتعـاون مع مـعـهـد الملك سـلمــان للــدراسـات والخـدمــات الاستشـارية
                             </p>
                        <br>
                        <br>


                            <div class="panel-group accordion style-1" id="accordion-2" role="tablist">
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingOne-2">
                                        <h4 class="panel-title">
                                            <a role="button" class="shape" data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2"><i class="fa fa-desktop main-color"></i>سياسة النشر</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne-2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne-2">
                                        <div class="panel-body">
                                            <p><?php echo e($magazine->Policy); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingTwo-2">
                                        <h4 class="panel-title">
                                            <a class="collapsed shape" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2"><i class="fa fa-circle-o-notch main-color"></i>سياسة النشر في المجلة</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-2">
                                        <div class="panel-body">
                                            <p><?php echo e($magazine->PublishingPolicy); ?></p>                                        </div>
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
                            <?php $__currentLoopData = $member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $members): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="post-item">
                                <div class="post-image">
                                    <a href="#">
                                        <img src="<?php echo e(url('storage/app/public')); ?>/<?php echo e($members->file); ?>" class="shape new-angle" alt="Our Blog post image goes here">
                                    </a>
                                </div>
                                <article class="post-content">
                                    <div class="post-info-container">
                                        <div class="post-info">
                                            <i class="fa fa-user post-icon"></i>
                                            <h2><a href="#"><?php echo e($members->MemberName); ?></a></h2>
                                            <ul class="post-meta">
                                                <li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">John Martin</a></li>
                                                <li class="meta_date"><i class="fa fa-clock-o"></i>15 May, 2015</li>
                                                <li><i class="fa fa-folder-open"></i>Category: <a href="#">Corporate News</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut Donec suscipit eros. Nam mi suscipit eget, quam. Integer ut neque. Vivamus nisierra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque. <a class="main-color" href="blog-single.html">Read more</a> </p>
                                </article>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                    </div>
                </div>
                </div>
                        
            </div>
        </div>
        <div class="section gry-bg">
            <div class="container">
                <div class="heading">
                    <h3 class="uppercase head-6"><i class="fa fa-desktop"></i><span class="main-color">الأعداد </span>المنشورة</h3>
                </div>
                <div class="row">
                    <div class="portfolio p-style5">
                        <?php $__currentLoopData = $journals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $journal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="portfolio-item col-md-4">
                            <figure>
                                <img alt="" src="<?php echo e(url('storage/app/public')); ?>/<?php echo e($journal->file); ?>">
                                <figcaption>
                                    <h4><a href="<?php echo e(url('journalDetails')); ?>/<?php echo e(Crypt::encryptString($journal->JournalID)); ?>"><?php echo e($journal->JournalTitle); ?></a></h4>
                                    <p class="description main-bg shape"><a href="#"><?php echo e($journal->JournalAuthor); ?></a></p>
                                    <div class="icon-links">
                                        <p>
                                            <a href="<?php echo e(url('journalDetails')); ?>/<?php echo e(Crypt::encryptString($journal->JournalID)); ?>" class="link shape"><i class="fa fa-link"></i></a>
                                            <a href="<?php echo e(asset('storage')); ?>/<?php echo e($journal->file); ?>" class="zoom shape" title="A Day with Sunshine & Bliss"><i class="fa fa-search-plus"></i></a>

                                        </p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('magazine', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>