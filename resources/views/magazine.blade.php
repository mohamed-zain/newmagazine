<!DOCTYPE html>
<html>

@include('layouts.magazinehead')
<style>

    .spinner {
        margin: 25px auto;
        left: 50%;
        top: 50%;
        width: 50px;
        height: 40px;
        text-align: center;
        font-size: 10px;
        position: fixed;
        z-index: 9999;

    }

    .spinner > div {
        background-color: #0569b1;
        height: 100%;
        width: 6px;
        display: inline-block;
        -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
        animation: sk-stretchdelay 1.2s infinite ease-in-out;
    }

    .spinner .rect2 {
        -webkit-animation-delay: -1.1s;
        animation-delay: -1.1s;
    }

    .spinner .rect3 {
        -webkit-animation-delay: -1.0s;
        animation-delay: -1.0s;
    }

    .spinner .rect4 {
        -webkit-animation-delay: -0.9s;
        animation-delay: -0.9s;
    }

    .spinner .rect5 {
        -webkit-animation-delay: -0.8s;
        animation-delay: -0.8s;
    }

    @-webkit-keyframes sk-stretchdelay {
        0%, 40%, 100% { -webkit-transform: scaleY(0.4) }
        20% { -webkit-transform: scaleY(1.0) }
    }

    @keyframes sk-stretchdelay {
        0%, 40%, 100% {
            transform: scaleY(0.4);
            -webkit-transform: scaleY(0.4);
        }20% {
             transform: scaleY(1.0);
             -webkit-transform: scaleY(1.0);
         }
    }
    * {
        box-sizing: border-box;
    }

</style>
<body>


<div class="pageWrapper animsition">
    <!-- Footer start -->
    <div class="top-bar main-bg">
        <div class="container">
            <div class="center-tbl">
                <ul>
                    <li>
                        <a href="{{ url('login') }}" class="shape" ><i class="fa fa-lock"></i>تسجيل دخول</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @include('layouts.magazineheader')
    @yield('content')
    @include('layouts.footer')
    <!-- Footer end -->
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registermodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}" id="">
                {{ csrf_field() }}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">انشاء حساب جديد</h4>
            </div>
            <div class="modal-body">
                <div class="padding-horizontal-20 padding-vertical-20">
                    <p>مرحبا بك عزيزي الزائر يمكنك انشاء حساب لدينا لتتمكن من رفع البحوث والاوراق العلمية </p>
                    <div class="login-controls">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input name="name" type="text" class="form-control" placeholder="الاسم بالكامل "  value="{{ old('name') }}" required/>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
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
                        <div class="form-group floated-controls">
                            <span class="block checkbox-block"><input type="checkbox" class="checkbox" /> <span>موافق علي الشروط ! </span></span>
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
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Back to top Link -->
<a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>

<!-- Load JS plugins file -->
@include('layouts.magazinescript')
<script>
    $(document).ready(function () {
    $(document).ajaxStart(function () {
        $(".spinner").show();
    }).ajaxStop(function () {
        $(".spinner").hide();
    });
    $('#Regbutton').click(function () {
console.log('done');


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            event.preventDefault();

            var data2    = $( "#Regform" ).serialize();
            $.ajax({
                type: 'POST',
                url : "{{ route('register') }}",
                data : data2 ,
                //dataType: 'json',
                cache:false,

                success  : function(data) {

                    swal("شكرا", "تم ترشيح المستفيد", "success");

                },
                error: function(xhr, textStatus, thrownError){
                    // console.log(thrownError);
                    swal("للأسف!", "لم يتم حفظ البيانات!", "error");
                }

            });




    });
    });
</script>
</body>

</html>