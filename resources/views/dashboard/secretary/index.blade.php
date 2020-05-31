@extends('dashboard.SecretaryIndex')
@section('content')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>لوحة تحكم سكرتير المجلة
                        <small>الرئيسية</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="zmdi zmdi-home"></i> لوحة التحكم</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">طلبات النشر</a></li>

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
                            <h2><strong>طلبات </strong> النشر</h2>
                        </div>
                        <div class="body table-responsive">
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
                                <th>اسم الباحث</th>
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
                                    <td>{{ $single->name }}</td>
                                    <td>{{ $single->MagazineName }}</td>
                                    <td>{{ $single->JournalTitle }}</td>
                                    <td>{{ $single->JournalAbout }}</td>
                                    <td><a href="{{ url('storage/app/public') }}/{{ $single->Fileaa }}">{{ $single->Namea }}</a> </td>
                                    <td class="text-right">
                                        <div class="btn-group hidden-sm-down text-right">
                                            <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">خيارات<span class="caret"></span> </button>
                                            <ul class="dropdown-menu dropdown-menu-left">
                                                <li><a href="#" data-toggle="modal" data-target="#{{ $single->ReID }}">موافقة</a></li>
                                                <li><a href="{{ url('Rejection') }}/{{ $single->ReID }}">رفض</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="{{ $single->ReID }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="title" id="defaultModalLabel">الموافقة وتحويل البحث لمحكم في المجلة </h4>
                                            </div>
                                            <div class="container">
                                                <div id="message{{ $single->ReID }}"></div>
                                            </div>
                                            <form action="{{ route('Acceptions') }}" method="post" id="Registrationform{{ $single->ReID }}">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="ReID" value="{{ $single->ReID }}" id="ReID{{ $single->ReID }}">
                                            <div class="modal-body">

                                                    <select class="form-control text-right" name="arbitration" id="arbitration{{ $single->ReID }}">
                                                        <option value="">-- اختار المحكم --</option>
                                                        @foreach($P as $s)
                                                        <option value="{{ $s->id }}">{{ $s->AName }}</option>
                                                       @endforeach
                                                    </select>
                                                

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary btn-round waves-effect" id="btsubmit{{ $single->ReID }}">الموافقة</button>
                                                <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">الغاء</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <script>

                                        $('#btsubmit{{ $single->ReID }}').click(function () {

                                            var arbitration = document.getElementById("arbitration{{ $single->ReID }}").value;

                                            var rid = $('input[name=ReID]').val();
                                            if (arbitration == "") {
                                                var audio = document.getElementById('audioError');
                                                audio.play();
                                                text = '<div class="alert alert-danger"> <strong>عفوا </strong>الرجاء اختيار المحكم</div>';
                                                document.getElementById('message{{ $single->ReID }}').innerHTML = text;

                                                return false;
                                            }
                                                $("#Registrationform{{ $single->ReID }}").on("submit", function (event) {
                                                    event.preventDefault();
                                                    $.ajaxSetup({
                                                        headers: {
                                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                        }
                                                    });

                                                    var myForm = document.getElementById('Registrationform{{ $single->ReID }}');
                                                    var formData = new FormData(myForm);

                                                    //var data2    = $( "#Registrationform" ).serialize();
                                                    console.log(formData);
                                                    $.ajax({
                                                        type: 'POST',
                                                        url: $(this).attr('action'),
                                                        data: {
                                                                'ReID' :rid,
                                                                'arbitration':arbitration
                                                            }
                                                        ,
                                                        cache: false,


                                                        success: function (data) {
                                                            text2 = '<div class="alert alert-success"> <strong>شكرا </strong> تمت عملية الموافقة علي البحث </div>';

                                                            document.getElementById('message{{ $single->ReID }}').innerHTML = text2;

                                                            var audio = document.getElementById('audioSuccess');
                                                            audio.play();


                                                            setTimeout(function(){

                                                                window.location.href = "{{ url('') }}"+"/SecretaryIndex";
                                                            }, 3000);

                                                            return true;
                                                            //console.log(data);


                                                        },
                                                        error: function (xhr, textStatus, thrownError) {
                                                            text3 = '<div class="alert alert-danger"> <strong>عفوا </strong> يوجد خطأ غير قادر علي اتمام العملية </div>';
                                                            document.getElementById('message{{ $single->ReID }}').innerHTML = text3;
                                                            var audio = document.getElementById('audioError');
                                                            audio.play();

                                                        }

                                                    });


                                                });




                                        });

                                </script>
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