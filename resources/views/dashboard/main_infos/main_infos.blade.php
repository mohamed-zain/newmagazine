@extends('dashboard.index')
@section('content')


    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>لوحة التحكم
                        <small>البيانات الاساسية</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="zmdi zmdi-home"></i> الرئيسية</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">البيانات الاساسية</a></li>
                        <li class="breadcrumb-item active">قائمة البيانات الاساسية للمجلة</li>
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
                            <h2><strong>قائمة</strong> بيانات المجلة الاساسية</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>

                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
<?php

$TableControl = new App\Http\Controllers\TableControl;


echo $TableControl->SelectViewDataTable(
                                        //Table Name
	                                   "main_infos",
	                                    //array
	                                    array(
                                            "MagazineTitle" =>'اسم المجلة',
                                            "MagazinePupPolicy" =>'سياسات المجلة',
                                            "deanWord" =>'كلمة عميد المعهد',
                                            "vision" =>' الرؤية',
                                            "message" =>' الرسالة',
                                            "MagazinePupCondition" =>'شروط التحكيم العلمي',
							             ),

	                                    "*",
	                                    array('id'),
	                                    $where = array(),

                                        $forenkeyTable = array(),

                                        $formfeilds = array(

                                            "MagazineTitle" =>'text',
                                            "MagazinePupPolicy" =>'text',
                                            "deanWord" =>'textarea',
                                            "vision" =>'text',
                                            "message" =>'text',
                                            "MagazinePupCondition" =>'text',




                                            ),
                                          $CanNotUpdate = array("file")

	                                   );//end fun.

?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection