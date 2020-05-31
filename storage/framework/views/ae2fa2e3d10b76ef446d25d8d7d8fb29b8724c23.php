<?php $__env->startSection('content'); ?>


    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>لوحة التحكم
                        <small> اعضاء هيئة التحرير</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="zmdi zmdi-home"></i> الرئيسية</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">المجلات</a></li>
                        <li class="breadcrumb-item active">قائمة الاعضاء</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>أعضاء</strong>  هيئة التحرير</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>

                                </li>
                            </ul>
                        </div>
                        <div class="body">

<?php

$TableControl = new App\Http\Controllers\TableControl;


echo $TableControl->SelectViewDataTable(
                                        //Table Name
	                                   "members",
	                                    //array
	                                    array(

	                                    	   "MagazineID"=>'المجلة',
                                            "file" =>'صورة العضو',
	                                    	   "MemberName" =>'اسم العضو',


							             ),

	                                    "*",
	                                    array('id'),
	                                    $where = array(),
                                        $forenkeyTable = array("MagazineID"=>array("magazines","MagazineName")),
	                                    $formfeilds = array(
	                                    	             "MagazineID" =>'MagazineID',
                                            "file" =>'file',
                                                         "MemberName" =>'text',


	                                    	            ),
                                                   $CanNotUpdate = array("file")
	                                );

                                  ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>