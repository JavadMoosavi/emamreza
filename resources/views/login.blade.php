<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ورود به سیستم</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <link rel="preconnect" href="//fdn.fontcdn.ir">
    <link rel="preconnect" href="//v1.fontapi.ir">
    <link href="https://v1.fontapi.ir/css/Shabnam" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="font-family: Shabnam, sans-serif;">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img class="img-responsive mb-4" src="{{ asset('assets/img/logo.png') }}" width="250px" />
                <p class="h4 my-2">جمعیت خدمتگزاران به زائرین پیاده حضرت رضا (ع)</p>
                <br>
                <p class="h5 mt-1">سامانه مدیریت زائرین و کاروان ها</p>

            </div>
            <div class="card-body">
                <p class="login-box-msg">برای ورود مشخصات کاربری را وارد نمایید</p>
                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="کد ملی" dir="rtl">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fas fa-lock"> </span>
                            </div>
                        </div>
                        <input type="password" class="form-control" id="password" placeholder="رمز عبور" dir="rtl">
                    </div>
                    <div class="d-flex flex-row justify-content-between mb-4">

                        <div class="captchaSpan">{!! captcha_img() !!}</div>

                        <div class="input-group-prepend mx-2" id="reload">
                            <div class="input-group-text">
                                <span class="fas fa-sync-alt"></span>
                            </div>
                        </div>

                        @csrf
                        <input type="text" class="form-control" id="captchaField" placeholder="کد امنیتی" dir="rtl">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-primary btn-block" id="subbtn">ورود به سیستم</button>
                        </div>
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
    <!-- jQuery -->
    <!-- <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script> -->
    <script src="{{ asset('js/jQuery.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/clearcache.js') }}"></script>
    <!-- Notif -->
    <script src="{{ asset('assets/dist/js/notiflix-aio.min.js') }}"></script>


</body>

</html>