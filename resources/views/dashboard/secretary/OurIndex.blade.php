@extends('dashboard.SecretaryIndex')
@section('content')

    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>لوحة تحكم السكرتيرة
                        <small>الرئيسية</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="zmdi zmdi-home"></i> لوحة التحكم</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);"> المحكمون</a></li>

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
                            <h2><strong>قائمة </strong>  المحكمون في المجلة</h2>
                        </div>
                        <div class="body">
                            <table id="myRecord" class="table table-bordered table-striped table-hover dataTable no-footer">
                                <thead>
                                <th>اسم المحكم</th>
                                <th>الهاتف</th>
                                <th> الدوله</th>
                                <th> الرتبه العلمية</th>
                                <th> التخصص</th>
                                <th> البريد</th>

                                </thead>
                                <tbody>
                                @if(isset($research))
                                    @foreach($research as $single)
                                        <tr>
                                            <td>{{ $single->AName }}</td>
                                            <td>{{ $single->Phone }}</td>
                                            <td>{{ $single->country }}</td>
                                            <td>{{ $single->Degree }}</td>
                                            <td>{{ $single->Specialty }}</td>
                                            <td>{{ $single->email }}</td>
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