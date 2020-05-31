@extends('dashboard.index')
@section('content')


    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>لوحة التحكم
                        <small>المجلات</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="zmdi zmdi-home"></i> الرئيسية</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">المجلات</a></li>
                        <li class="breadcrumb-item active">قائمة المجلات</li>
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
                            <h2><strong>قائمة</strong> المجلات</h2>
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
	                                   "magazines",
	                                    //array
	                                    array(
                                            "MagazineName" =>'اسم المجلة عربي',
                                            "MagazineNameEn" => 'اسم المجلة انجليزي',
                                            "MagazineCEO" =>' رئيس مجلس الادارة',

                                            "MagazineNum" =>' أعداد المجلة',
                                            "MagazineAbout" =>'  عن المجلة',
                                            "One" =>'ردمد',
                                            "Tow" =>'رقم الايداع',
                                            "Three" =>'ترخيص وزارة الثقافة والاعلام',
                                               "file" =>'غلاف المجلة',
                                               "Policy" =>'سياسة المجلة',
                                               "PublishingPolicy" =>'سياسة النشر',
                                               "PublishingControls" =>'ضوابط النشر',
                                               "Email" =>'البريد الالكتروني'

							             ),

	                                    "*",
	                                    array('MagazineID'),
	                                    $where = array(),
                                        $forenkeyTable = array(),
	                                    $formfeilds = array(
                                            "MagazineName" =>'text',
                                            "MagazineNameEn" =>'text',
                                            "MagazineCEO" =>'text',
                                            "MagazineNum" =>'number',
                                            "MagazineAbout" =>'textarea',
                                            "One" =>'text',
                                            "Tow" =>'text',
                                            "Three" =>'text',
                                            "file" =>'file',
                                            "Policy" =>'textarea',
                                            "PublishingPolicy" =>'textarea',
                                            "PublishingControls" =>'textarea',
                                            "Email" =>'email'
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


@endsection