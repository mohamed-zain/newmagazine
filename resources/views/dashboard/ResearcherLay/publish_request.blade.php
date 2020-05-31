@extends('dashboard.ResearcherIndex')
@section('content')

    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>لوحة تحكم الباحث
                        <small>الرئيسية</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="zmdi zmdi-home"></i> لوحة التحكم</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">الرئيسية</a></li>

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
                            <h2><strong>قائمة</strong> ابحاثك</h2>
                        </div>
                        <div class="body">
                            <?php

                            $TableControl = new App\Http\Controllers\TableControl;

                            $MyWhere = [];

                                $MyWhere = array('WHERE UserID='=>Auth::user()->id);

                            echo $TableControl->SelectViewDataTable(
                            //Table Name
                                "publish_request",
                                //array
                                array(

                                    "MagazineID"=>'المجلة',
                                    "JournalTitle" =>'عنوان البحث',
                                    "JournalAbout" =>'مستخلص البحث',
                                    "file" =>' إرفاق البحث',
                                    "UserID" => 'jgj'
                                ),

                                "*",
                                array('id'),
                                $where = $MyWhere,
                                $forenkeyTable = array("MagazineID"=>array("magazines","MagazineName")),
                                $formfeilds = array(
                                    "MagazineID" =>'MagazineID',
                                    "JournalTitle" =>'text',
                                    "JournalAbout" =>'textarea',
                                    "file" =>'file',
                                    "UserID"=>array('hidden',Auth::user()->id)
                                ),
                                $CanNotUpdate = array(),
                                $CanNotShow = array('UserID')
                            );

                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @endsection