@extends('magazine')
@section('content')
    <div class="pageContent">
        <div class="page-title title-5">
            <div class="container">
                <div class="row">
                    <h1 class="shape new-angle">المجلات العلمية</h1>
                    <h3 class="shape new-angle"> تسجيل عضوية محكم</h3>
                    <div class="breadcrumbs white-bg">
                        <a href="#">الرئيسية</a><i class="fa fa-long-arrow-left main-color"></i><span>تسجيل محكم جديد</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 contact-form">
                        <div class="heading">
                            <h3 class="uppercase head-6"><span class="main-color">نموذج </span> التسجيل</h3>
                        </div>
                        @if(Session::has('Flash'))
                            <div class="msg-box info-box round">
                                <h4>شكرا:</h4>
                                <p>{{ Session::get('Flash') }}</p>
                                <p>تم ارسال بياناتك , سيتم التواصل معك قريبا ...</p>
                            </div>
                            @endif

                        <form class="form-horizontal" method="POST" action="{{ route('NewArbit') }}" id="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="modal-header">
                                <h4 class="modal-title" id="gridSystemModalLabel">انشاء حساب محكم جديد</h4>
                            </div>
                            <div class="modal-body">
                                <div class="padding-horizontal-20 padding-vertical-20">
                                    <p>مرحبا بك عزيزي الزائر يمكنك انشاء حساب لدينا كمحكم </p>
                                    <div class="login-controls">
                                        <div class="form-group{{ $errors->has('MagazineID') ? ' has-error' : '' }}">
                                            <select name="MagazineID" class="form-group">
                                                <option value="">--------اختر المجلة--------</option>
                                                @foreach($magazine as $journal)
                                                    <option value="{{ $journal->MagazineID }}">{{ $journal->MagazineName }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('MagazineID'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('MagazineID') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('AName') ? ' has-error' : '' }}">
                                            <input name="AName" type="text" class="form-control" placeholder="الاسم بالكامل "  value="{{ old('AName') }}" required/>
                                            @if ($errors->has('AName'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('AName') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input name="email" value="{{ old('email') }}" type="text" class="form-control" placeholder="البريد الالكتروني" required/>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                        <div class="form-group{{ $errors->has('Phone') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" name="Phone" placeholder="رقم الجوال" required/>
                                            @if ($errors->has('Phone'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('Phone') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="country" type="text" class="form-control" name="country" required placeholder="الدولة" />
                                        </div>
                                        <div class="form-group">
                                            <input id="" type="text" class="form-control" name="University" required placeholder="الجامعة" />
                                        </div>
                                        <div class="form-group">
                                            <input id="" type="text" class="form-control" name="College" required placeholder="الكلية" />
                                        </div>
                                        <div class="form-group">
                                            <input id="" type="text" class="form-control" name="Dept" required placeholder="القسم" />
                                        </div>
                                        <div class="form-group">
                                            <input id="" type="text" class="form-control" name="Degree" required placeholder="الرتبة العلمية" />
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <input type="password" class="form-control" name="password" placeholder="كلمة المرور" required/>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="تأكيد كلمة المرور" />
                                        </div>
                                        <div class="form-group">
                                            <label>أرفق السيرة الذاتية</label>
                                            <input id="" type="file" class="form-control" name="file" required />
                                        </div>

                                        <div class="form-group floated-controls">
                                            <span class="block checkbox-block"><input name="fbf" type="checkbox" class="checkbox"  value=""/> <span>موافق علي الشروط ! </span></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="spinner pull-right">
                                    <div class="rect1"></div>
                                    <div class="rect2"></div>
                                    <div class="rect3"></div>
                                    <div class="rect4"></div>
                                    <div class="rect5"></div>
                                </div>
                                <button type="submit" class="btn main-bg" id="4">تسجيل</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-5">

                        <div class="msg-box warning-box shape">
                            <h4>ملحوظة:</h4>
                            <p>النشر والتحكيم في المجلة مجاني ويهدف لخدمة العملية البحثية , وفتح المجال للباحثين والأكادميين للمشاركة في هذا العمل العلمي, علما بأن المتفاعلين في التحكيم نأمل يإستمرارهم كأعضاء في هيئة التحرير</p>
                        </div>


                        <div class="panel-group accordion style-3 shape" id="accordion-5" role="tablist">
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="heading-1">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion-5" href="#acc-1" aria-expanded="true" aria-controls="acc-1"><i class="fa fa-desktop main-color"></i>سياسات المجلة</a>
                                    </h4>
                                </div>
                                <div id="acc-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-1">
                                    <div class="panel-body">
                                        <p>{{ $Data->MagazinePupCondition }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="heading-2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-5" href="#acc-2" aria-expanded="false" aria-controls="acc-2"><i class="fa fa-circle-o-notch main-color"></i>سياسة النشر في المجلة</a>
                                    </h4>
                                </div>
                                <div id="acc-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
                                    <div class="panel-body">
                                        <p>{{ $Data->MagazinePupPolicy }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    @endsection