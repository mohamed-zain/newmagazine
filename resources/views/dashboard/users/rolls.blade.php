@extends('dashboard.index')
@section('content')


    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>لوحة التحكم
                        <small>الصلاحيات </small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> الرئيسية</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">المستخدمين</a></li>
                        <li class="breadcrumb-item active">قائمة الصلاحيات</li>
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
                            <h2><strong>قائمة</strong> الصلاحيات </h2>
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
	                                   "rolls",
	                                    //array
	                                    array(
	                                    	   "RollName" =>'اسم الصلاحية'
							             ),

	                                    "*",
	                                    array('RollID'),
	                                    $where = array(),
	                                    $forenkeyTable = array(),
	                                    $formfeilds = array("RollName" =>'text')
	                                );




?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection