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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">طلبات التحكيم</a></li>

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
                            <h2><strong>طلبات </strong> التحكيم</h2>
                        </div>
                        <div class="body">
                            @if(Session::has('Flash'))

                                <div class="alert alert-info text-right">
                                    <strong>شكرا !</strong>{{ Session::get('Flash') }}
                                </div>
                            @endif
                                @if ($errors->any())
                                        <div class="alert alert-danger text-right">

                                                @foreach ($errors->all() as $error)
                                                <strong>{{ $error }}</strong>
                                                @endforeach

                                        </div>
                                @endif
                            <table id="myRecord" class="table table-bordered table-striped table-hover dataTable no-footer">
                                <thead>

                                <th>المجلة</th>
                                <th>عنوان البحث</th>
                                <th>وصف البحث</th>
                                <th>مرفق البحث</th>
                                <th>خيارات</th>
                                </thead>
                                <tbody>
                                @if(isset($research))
                                @foreach($research as $single)

                                <tr>

                                    <td>{{ $single->MagazineName }}</td>
                                    <td>{{ $single->JournalTitle }}</td>
                                    <td>{{ $single->JournalAbout }}</td>
                                    <td><a href="{{ url('public/storage') }}/{{ $single->file }}">{{ $single->fileName }}</a> </td>
                                    <td class="text-right">
                                        <div class="btn-group hidden-sm-down text-right">
                                            <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">خيارات<span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-left">
                                                <li><a href="#" data-toggle="modal" data-target="#accept{{ $single->ReID }}">موافقة</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#edit{{ $single->ReID }}">رفض مع التعديل</a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#reject{{ $single->ReID }}">رفض</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="accept{{ $single->ReID }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="title" id="defaultModalLabel">الموافقة وتحويل البحث للنشر </h4>
                                            </div>
                                            <form action="{{ route('ArbitAcceptions') }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="ReID" value="{{ $single->ReID }}">
                                            <div class="modal-body">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary btn-round waves-effect">الموافقة</button>
                                                <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">الغاء</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="edit{{ $single->ReID }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="title" id="defaultModalLabel">الموافقة مع التعديل </h4>
                                            </div>
                                            <form action="{{ route('ArbitEdit') }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="ReID" value="{{ $single->ReID }}">
                                                <div class="modal-body">
                                                    <div class="form-group form-float text-right">
                                                    <label>التعديلات المطلوبة</label>
                                                    <textarea class="form-control" name="EditNote"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary btn-round waves-effect">الموافقة</button>
                                                    <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">الغاء</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="reject{{ $single->ReID }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="title" id="defaultModalLabel">رفض البحث </h4>
                                            </div>
                                            <form action="{{ route('ArbitRejection') }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="ReID" value="{{ $single->ReID }}">
                                                <div class="modal-body">
                                                    <div class="form-group form-float text-right">
                                                        <label> اسباب الرفض</label>
                                                    <textarea class="form-control" name="RejectNote"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary btn-round waves-effect">الموافقة</button>
                                                    <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">الغاء</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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