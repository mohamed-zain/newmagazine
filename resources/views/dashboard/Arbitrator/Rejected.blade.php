@extends('dashboard.ArbitratorIndex')
@section('content')

    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>لوحة تحكم محكم المجلة
                        <small>الرئيسية</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="zmdi zmdi-home"></i> لوحة التحكم</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);"> الابحاث المرفوضة </a></li>

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
                            <h2><strong>طلبات </strong> النشر المرفوضة</h2>
                        </div>
                        <div class="body">
                            <table id="myRecord" class="table table-bordered table-striped table-hover dataTable no-footer">
                                <thead>
                                <th>اسم الباحث</th>
                                <th>المجلة</th>
                                <th>عنوان البحث</th>
                                <th>وصف البحث</th>
                                <th>مرفق البحث</th>

                                </thead>
                                <tbody>
                                @if(isset($research))
                                    @foreach($research as $single)
                                        <tr>
                                            <td>{{ $single->name }}</td>
                                            <td>{{ $single->MagazineName }}</td>
                                            <td>{{ $single->JournalTitle }}</td>
                                            <td>{{ $single->JournalAbout }}</td>
                                            <td><a href="{{ url('public/storage') }}/{{ $single->file }}">{{ $single->fileName }}</a> </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @endsection