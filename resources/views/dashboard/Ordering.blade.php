@extends('dashboard.index')
@section('content')


    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>لوحة التحكم
                        <small>ترتيب ظهور الاعداد </small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> الرئيسية</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">الاعداد</a></li>
                        <li class="breadcrumb-item active"> ترتيب ظهور الاعداد</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> <strong>قم بإختيار </strong> <small> المجلة المراد ترتيب اعدادها </small> </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">

                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <form action="{{ route('OrderingMaga') }}" method="post">
                                        {{ csrf_field() }}
                                        <select class="form-control show-tick" name="MagazineID" onchange="submit();">
                                            <option value="">-- اختار المجلة --</option>
                                            @foreach($maga as $magas)
                                                <option value="{{ $magas->MagazineID }}">{{ $magas->MagazineName }}</option>
                                            @endforeach
                                        </select>
                                    </form>

                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">

                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>

                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table id="myRecord" class="table table-bordered table-striped table-hover dataTable no-footer">
                                    <thead>
                                    <th>العدد </th>
                                    <th>الترتيب</th>
                                    <th>خيارات</th>
                                    </thead>
                                    <tbody>
                                    @if(isset($jour))
                                        @foreach($jour as $single)

                                            <tr class="text-right">
                                                <td>{{ $single->JournalTitle }}</td>
                                                <td>{{ $single->Jorder }}</td>
                                                <td>
                                                    <form action="{{ route('Submitorder') }}" method="post">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="JournalID" value="{{ $single->JournalID }}">
                                                        <select class="form-control text-right" name="Jorder" onchange="submit();">
                                                            <option value="">-- اختار الترتيب --</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>

                                                        </select>
                                                    </form>
                                                </td>

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

        </div>
    </section>

@endsection