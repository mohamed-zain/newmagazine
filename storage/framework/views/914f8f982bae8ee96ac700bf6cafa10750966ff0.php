<?php $__env->startSection('content'); ?>
    <div class="pageContent">
        <div class="page-title title-5">
            <div class="container">
                <div class="row">
                    <h1 class="shape new-angle">المجلات العلمية</h1>
                    <h3 class="shape new-angle"> تسجيل عضوية محكم</h3>
                    <div class="breadcrumbs white-bg">
                        <a href="#">الرئيسية</a><i class="fa fa-long-arrow-left main-color"></i><span>تسجيل محكم جديد</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 contact-form">
                        <div class="heading">
                            <h3 class="uppercase head-6"><span class="main-color">نموذج </span> التسجيل</h3>
                        </div>
                        <?php if(Session::has('Flash')): ?>
                            <div class="msg-box info-box round">
                                <h4>شكرا:</h4>
                                <p><?php echo e(Session::get('Flash')); ?></p>
                                <p>تم ارسال بياناتك , سيتم التواصل معك قريبا ...</p>
                            </div>
                            <?php endif; ?>

                        <form class="form-horizontal" method="POST" action="<?php echo e(route('NewArbit')); ?>" id="" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="modal-header">
                                <h4 class="modal-title" id="gridSystemModalLabel">انشاء حساب محكم جديد</h4>
                            </div>
                            <div class="modal-body">
                                <div class="padding-horizontal-20 padding-vertical-20">
                                    <p>مرحبا بك عزيزي الزائر يمكنك انشاء حساب لدينا كمحكم </p>
                                    <div class="login-controls">
                                        <div class="form-group<?php echo e($errors->has('MagazineID') ? ' has-error' : ''); ?>">
                                            <select name="MagazineID" class="form-group">
                                                <?php $__currentLoopData = $magazine; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $journal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($journal->MagazineID); ?>"><?php echo e($journal->MagazineName); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('MagazineID')): ?>
                                                <span class="help-block">
                                        <strong><?php echo e($errors->first('MagazineID')); ?></strong>
                                    </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group<?php echo e($errors->has('AName') ? ' has-error' : ''); ?>">
                                            <input name="AName" type="text" class="form-control" placeholder="الاسم بالكامل "  value="<?php echo e(old('AName')); ?>" required/>
                                            <?php if($errors->has('AName')): ?>
                                                <span class="help-block">
                                        <strong><?php echo e($errors->first('AName')); ?></strong>
                                    </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                            <input name="email" value="<?php echo e(old('email')); ?>" type="text" class="form-control" placeholder="البريد الالكتروني" required/>
                                            <?php if($errors->has('email')): ?>
                                                <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group<?php echo e($errors->has('Phone') ? ' has-error' : ''); ?>">
                                            <input type="text" class="form-control" name="Phone" placeholder="رقم الجوال" required/>
                                            <?php if($errors->has('Phone')): ?>
                                                <span class="help-block">
                                        <strong><?php echo e($errors->first('Phone')); ?></strong>
                                    </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <input id="country" type="text" class="form-control" name="country" required placeholder="الدولة" />
                                        </div>
                                        <div class="form-group">
                                            <input id="" type="text" class="form-control" name="University" required placeholder="الجامعة" />
                                        </div>
                                        <div class="form-group">
                                            <input id="" type="text" class="form-control" name="College" required placeholder="الكلية" />
                                        </div>
                                        <div class="form-group">
                                            <input id="" type="text" class="form-control" name="Dept" required placeholder="القسم" />
                                        </div>
                                        <div class="form-group">
                                            <input id="" type="text" class="form-control" name="Degree" required placeholder="الرتبة العلمية" />
                                        </div>
                                        <div class="form-group">
                                            <label>أرفق السيرة الزاتية</label>
                                            <input id="" type="file" class="form-control" name="file" required />
                                        </div>

                                        <div class="form-group floated-controls">
                                            <span class="block checkbox-block"><input name="fbf" type="checkbox" class="checkbox"  value=""/> <span>موافق علي الشروط ! </span></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="spinner pull-right">
                                    <div class="rect1"></div>
                                    <div class="rect2"></div>
                                    <div class="rect3"></div>
                                    <div class="rect4"></div>
                                    <div class="rect5"></div>
                                </div>
                                <button type="submit" class="btn main-bg" id="4">تسجيل</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-5">

                        <div class="msg-box warning-box shape">
                            <h4>ملحوظة:</h4>
                            <p>النشر والتحكيم في المجلة مجاني ويهدف لخدمة العملية البحثية , وفتح المجال للباحثين والأكادميين للمشاركة في هذا العمل العلمي, علما بأن المتفاعلين في التحكيم نأمل يإستمرارهم كأعضاء في هيئة التحرير</p>
                        </div>


                        <div class="panel-group accordion style-3 shape" id="accordion-5" role="tablist">
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="heading-1">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion-5" href="#acc-1" aria-expanded="true" aria-controls="acc-1"><i class="fa fa-desktop main-color"></i>سياسات المجلة</a>
                                    </h4>
                                </div>
                                <div id="acc-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-1">
                                    <div class="panel-body">
                                        <p><?php echo e($Data->MagazinePupCondition); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="heading-2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-5" href="#acc-2" aria-expanded="false" aria-controls="acc-2"><i class="fa fa-circle-o-notch main-color"></i>سياسة النشر في المجلة</a>
                                    </h4>
                                </div>
                                <div id="acc-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
                                    <div class="panel-body">
                                        <p><?php echo e($Data->MagazinePupPolicy); ?></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('magazine', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>