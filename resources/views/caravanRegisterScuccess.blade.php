<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="جمعیت امام رضا علیه السلام" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>فرم ثبت نام کاروان ها</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    <style>
        @import url('https://v1.fontapi.ir/css/Samim');
    </style>


</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">جمعیت امام رضا (ع)</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">راهنما</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">صفحه نخست</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-success bg-gradient text-white">
        <div class="container px-4 text-center">
            <h6 class="mb-5">بسم الله الرحمن الرحیم</h3>
                <h1 class="fw-bolder">السلام علیک یا علی ابن موسی الرضا (ع)</h1>
        </div>
    </header>

    <!-- Services section-->
    <section class="bg-light" id="start">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">

                @if(session('TrackingCode') == null)
                <div class="alert alert-danger" role="alert">

                    <h4 class="alert-heading">

                        خطایی رخ داده. ارتباط با سرور بر قرار نشد

                </div>

                @else
                <div class="alert alert-success" role="alert">

                    <h4 class="alert-heading">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                        </svg>
                        ثبت نام با موفقیت انجام شد
                    </h4>
                    <p>ضمن تشکر، مشخصات شما ثبت شد و در صف بررسی توسط کارشناسان جمعیت خدمتگزاران به زائرین پیاده حضرت علی ابن موسی الرضا (ع) قرار گرفت.</p>
                    <p>خواهشمند است هم اکنون با مشخصات ذیل در پنل کاروان وارد شده و نسبت به تکمیل سایر موارد درخواستی در اولین فرصت اقدام فرمایید.</p>
                    <p>لطفا جهت انجام ادامه مراحل، کد رهگیری را یادداشت فرمایید.</p>
                    <p>خاطر نشان می گردد مشخصات ورود شما به پنل کاروان، به این شرح است:</p>
                    <p><strong>نام کاربری: کد ملی مدیر کاروان<strong></p>
                    <p><strong>رمز عبور: شماره موبایل مدیر کاروان<strong></p>
                    <p><a href="/login" target="_blank">ورود به پنل کاروان</a></p>

                    <hr>
                    <p class="mb-0 text-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-subtract" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z" />
                        </svg>
                        <strong>
                            کد رهگیری ثبت نام: {{ session('TrackingCode'); }}
                        </strong>
                    </p>
                </div>
                @endif

            </div>
        </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4">
            <p class="m-0 text-center text-white">کلیه حقوق این وب سایت برای جمعیت خدمتگزاران به زائرین پیاده حضرت علی ابن موسی الرضا (ع) محفوظ است</p>
            <p class="m-0 text-center text-white">طراحی و پیاده سازی: فناوری اطلاعات جمعیت خدمتگزارن به زائرین پیاده حضرت علی ابن موسی الرضا (ع)</p>
        </div>
    </footer>
    <!-- jQuery-->
    <script src="{{ asset('/js/jQuery.js') }}"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('/js/scripts.js') }}"></script>
    <!-- Core New JS-->
    <script src="{{ asset('/js/transaction.js') }}"></script>
    <!-- Notification -->
    <script src="{{ asset('/js/notification.js') }}"></script>
</body>

</html>