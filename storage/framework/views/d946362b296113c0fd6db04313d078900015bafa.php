<?php $__env->startSection('content'); ?>
    <div class="pageContent">
        <div class="page-title title-5">
            <div class="container">
                <div class="row">
                    <h1 class="shape new-angle">المجلة العلمية</h1>
                    <h3 class="shape new-angle"> تسجيل عضوية</h3>
                    <div class="breadcrumbs white-bg">
                        <a href="#">الرئيسية</a><i class="fa fa-long-arrow-left main-color"></i><span>تسجيل عضو جديد</span>
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
                                <p>يمكنك الان تسجيل الدخول لرفع البحوث</p>
                            </div>
                            <?php endif; ?>

                        <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>" id="">
                            <?php echo e(csrf_field()); ?>

                            <div class="modal-header">
                                <h4 class="modal-title" id="gridSystemModalLabel">انشاء حساب جديد</h4>
                            </div>
                            <div class="modal-body">
                                <div class="padding-horizontal-20 padding-vertical-20">
                                    <p>مرحبا بك عزيزي الزائر يمكنك انشاء حساب لدينا لتتمكن من رفع البحوث والاوراق العلمية </p>
                                    <div class="login-controls">

                                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                            <input name="name" type="text" class="form-control" placeholder="الاسم بالكامل "  value="<?php echo e(old('name')); ?>" required/>
                                            <?php if($errors->has('name')): ?>
                                                <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
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

                                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                            <input type="password" class="form-control" name="password" placeholder="كلمة المرور" required/>
                                            <?php if($errors->has('password')): ?>
                                                <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="تأكيد كلمة المرور" />
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
                            <h4>ارشادات:</h4>
                            <p>قم بتعبئة النموذج وتأكد من صحة البيانات المدخلة , سوف يتم التواصل معك خلال 24 ساعة لتتمكن بعدها من رفع البحوث ونشرها</p>
                            <p>يشترط رفع البحوث بصيغة DOC</p>
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