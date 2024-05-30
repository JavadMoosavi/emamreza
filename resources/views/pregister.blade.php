<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="جمعیت خدمتگزاران به زائرین پیاده امام رضا علیه السلام" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>فرم ثبت نام زائرین</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
    <script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>

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
    <header class="bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">

            <h6 class="mb-5">بسم الله الرحمن الرحیم</h3>
                <h1 class="fw-bolder">السلام علیک یا علی ابن موسی الرضا (ع)</h1>
                <p class="lead">به سامانه ثبت نام زائرین خوش آمدید. لطفا مشخصات خواسته شده را به دقت در فرم زیر ثبت نمایید</p>
                <a class="btn btn-lg btn-light" href="#start">شروع فرآیند</a>
        </div>
    </header>

    <!-- Services section-->
    <section class="bg-light" id="start">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <p class="row justify-content-center">
                    این فرم صرفا مخصوص ثبت مشخصات زائرین گرامی است.
                    <br />
                    لطفا مشخصات خواسته شده را به دقت تکمیل فرمایید
                    <br />
                    مشخصات قابل ویرایش نخواهد بود، در ورود اطلاعات نهایت دقت را مبذول فرمایید.
                    <br />
                    تمامی بخش های عددی می بایست با اعداد لاتین تکمیل گردد.
                </p>

                <div class="row justify-content-center col-lg-8">
                    <div class="col-lg-4 md-4 justify-content-center mb-3">
                        <label for="melli" class="form-label">* کد ملی زائر</label>
                        <input type="text" class="form-control" id="melli" onblur="validate_melli()" placeholder="به صورت یک عدد ده رقمی">
                    </div>
                </div>

                <div class="row justify-content-center col-lg-8 my-3">
                    <div class="col-lg-4 md-4 justify-content-center">
                        <label for="name" class="form-label">* نام زائر</label>
                        <input type="text" class="form-control" id="name" onblur="validate_name()">
                    </div>
                </div>

                <div class="row justify-content-center col-lg-8 my-3">
                    <div class="col-lg-4 md-4 justify-content-center">
                        <label for="family" class="form-label">* نام خانوادگی زائر</label>
                        <input type="text" class="form-control" id="family" onblur="validate_family()">
                    </div>
                </div>

                <div class="row justify-content-center col-lg-8 my-3">
                    <div class="col-lg-4 md-4 justify-content-center">
                        <label for="sex" class="form-label">* جنسیت زائر</label>
                        <select class="form-select" aria-label="Default select example" id="sex" onblur="validate_sex()" onchange="validate_sex()">
                            <option value="0" selected>انتخاب کنید</option>
                            <option>مذکر</option>
                            <option>مونث</option>
                        </select>
                    </div>
                </div>

                <div class="row justify-content-center col-lg-8 my-3">
                    <div class="col-lg-4 md-4 justify-content-center">
                        <label for="fathername" class="form-label">* نام پدر زائر</label>
                        <input type="text" class="form-control" id="fathername" onblur="validate_fathername()">
                    </div>
                </div>

                <div class="row justify-content-center col-lg-8 my-3">
                    <div class="col-lg-4 md-4 justify-content-center">
                        <label for="shenasname" class="form-label">* شماره شناسنامه زائر</label>
                        <input type="text" class="form-control" id="shenasname" onblur="validate_shenasname()">
                    </div>
                </div>

                <div class="row justify-content-center col-lg-8 my-3">
                    <div class="col-lg-4 md-4 justify-content-center">
                        <label for="birthday" class="form-label">* تاریخ تولد زائر</label>
                        <input type="text" class="form-control" id="birthday" onblur="validate_birthday()" onchange="validate_birthday()" data-jdp>
                    </div>
                </div>

                <div class="row justify-content-center col-lg-8 my-3">
                    <div class="col-lg-4 md-4 justify-content-center">
                        <label for="education" class="form-label">* تحصیلات زائر</label>
                        <select class="form-select" aria-label="Default select example" id="education" onblur="validate_education()" onchange="validate_education()">
                            <option value="0" selected>انتخاب کنید</option>
                            <option>کمتر از دیپلم</option>
                            <option>دیپلم</option>
                            <option>فوق دیپلم</option>
                            <option>لیسانس</option>
                            <option>فوق لیسانس</option>
                            <option>دکتری</option>
                        </select>
                    </div>
                </div>

                <div class="row justify-content-center col-lg-8 my-3">
                    <div class="col-lg-4 md-4 justify-content-center">
                        <label for="province" class="form-label">* استان محل سکونت</label>
                        <select class="form-select" aria-label="Default select example" id="province" onblur="validate_province()" onchange="validate_province()">
                            <option value="0" selected>انتخاب کنید</option>
                            <option>آذربایجان شرقی</option>
                            <option>آذربایجان غربی</option>
                            <option>اردبیل</option>
                            <option>اصفهان</option>
                            <option>البرز</option>
                            <option>ایلام</option>
                            <option>بوشهر</option>
                            <option>تهران</option>
                            <option>چهارمحال و بختیاری</option>
                            <option>خراسان جنوبی</option>
                            <option>خراسان رضوی</option>
                            <option>خراسان شمالی</option>
                            <option>خوزستان</option>
                            <option>زنجان</option>
                            <option>سمنان</option>
                            <option>سیستان و بلوچستان</option>
                            <option>فارس</option>
                            <option>قزوین</option>
                            <option>قم</option>
                            <option>کردستان</option>
                            <option>کرمان</option>
                            <option>کرمانشاه</option>
                            <option>کهگیلویه و بویراحمد</option>
                            <option>گلستان</option>
                            <option>لرستان</option>
                            <option>گیلان</option>
                            <option>مازندران</option>
                            <option>مرکزی</option>
                            <option>هرمزگان</option>
                            <option>همدان</option>
                            <option>یزد</option>
                        </select>
                    </div>
                </div>

                <div class="row justify-content-center col-lg-8 my-3">
                    <div class="col-lg-4 md-4 justify-content-center">
                        <label for="city" class="form-label">* شهر محل سکونت</label>
                        <select class="form-select" aria-label="Default select example" id="city" onblur="validate_city()" onchange="validate_city()">
                            <option value="0" selected>انتخاب کنید</option>
                            <option>ابرکوه</option>
                            <option>ابریشم</option>
                            <option>ابوزیدآباد</option>
                            <option>ابوموسی</option>
                            <option>ابهر</option>
                            <option>احمدآباد</option>
                            <option>احمدآباد صولت</option>
                            <option>احمدسرگوراب</option>
                            <option>اختیارآباد</option>
                            <option>ادیمی</option>
                            <option>اراک</option>
                            <option>ارجمند</option>
                            <option>ارداق</option>
                            <option>اردبیل</option>
                            <option>اردستان</option>
                            <option>اردکان</option>
                            <option>اردکان</option>
                            <option>اردل</option>
                            <option>ارزوئیه</option>
                            <option>ارسک</option>
                            <option>ارسنجان</option>
                            <option>ارکواز</option>
                            <option>ارمغان خانه</option>
                            <option>ارومیه</option>
                            <option>اروندکنار</option>
                            <option>ازگله</option>
                            <option>ازنا</option>
                            <option>ازندریان</option>
                            <option>اژیه</option>
                            <option>اسارا</option>
                            <option>اسالم</option>
                            <option>اسپکه</option>
                            <option>استهبان</option>
                            <option>اسدآباد</option>
                            <option>اسدیه</option>
                            <option>اسفدن</option>
                            <option>اسفراین</option>
                            <option>اسفرورین</option>
                            <option>اسکو</option>
                            <option>اسلام آباد غرب</option>
                            <option>اسلامشهر</option>
                            <option>اسلامیه</option>
                            <option>اشترینان</option>
                            <option>اشتهارد</option>
                            <option>اشکذر</option>
                            <option>اشکنان</option>
                            <option>اشنویه</option>
                            <option>اصفهان</option>
                            <option>اصلاندوز</option>
                            <option>اطاقور</option>
                            <option>افزر</option>
                            <option>افوس</option>
                            <option>اقبالیه</option>
                            <option>اقلید</option>
                            <option>الشتر</option>
                            <option>الوان</option>
                            <option>الوند</option>
                            <option>الیگودرز</option>
                            <option>امام حسن</option>
                            <option>امام شهر</option>
                            <option>املش</option>
                            <option>امیدیه</option>
                            <option>امیرکلا</option>
                            <option>امیریه</option>
                            <option>امین شهر</option>
                            <option>انابد</option>
                            <option>انار</option>
                            <option>انارستان</option>
                            <option>انارک</option>
                            <option>انبارآلوم</option>
                            <option>اندوهجرد</option>
                            <option>اندیشه</option>
                            <option>اندیمشک</option>
                            <option>اوز</option>
                            <option>اهر</option>
                            <option>اهرم</option>
                            <option>اهل</option>
                            <option>اهواز</option>
                            <option>ایج</option>
                            <option>ایذه</option>
                            <option>ایرانشهر</option>
                            <option>ایزدخواست</option>
                            <option>ایزدشهر</option>
                            <option>ایلام</option>
                            <option>ایلخچی</option>
                            <option>ایمانشهر</option>
                            <option>اینچه برون</option>
                            <option>ایوان</option>
                            <option>ایوانکی</option>
                            <option>ایواوغلی</option>
                            <option>ایور</option>
                            <option>آب بر</option>
                            <option>آب پخش</option>
                            <option>آبادان</option>
                            <option>آباده</option>
                            <option>آباده طشک</option>
                            <option>آبدان</option>
                            <option>آبدانان</option>
                            <option>آبسرد</option>
                            <option>آبش احمد</option>
                            <option>آبعلی</option>
                            <option>آبگرم</option>
                            <option>آبی بیگلو</option>
                            <option>آبیک</option>
                            <option>آذرشهر</option>
                            <option>آرادان</option>
                            <option>آران وبیدگل</option>
                            <option>آرمرده</option>
                            <option>آرین شهر</option>
                            <option>آزادشهر</option>
                            <option>آستارا</option>
                            <option>آستانه</option>
                            <option>آستانه اشرفیه</option>
                            <option>آسمان آباد</option>
                            <option>آشتیان</option>
                            <option>آشخانه</option>
                            <option>آغاجاری</option>
                            <option>آق قلا</option>
                            <option>آقکند</option>
                            <option>آلاشت</option>
                            <option>آلونی</option>
                            <option>آمل</option>
                            <option>آواجیق</option>
                            <option>آوج</option>
                            <option>آیسک</option>
                            <option>باب انار</option>
                            <option>باباحیدر</option>
                            <option>بابارشانی</option>
                            <option>بابل</option>
                            <option>بابلسر</option>
                            <option>باجگیران</option>
                            <option>باخرز</option>
                            <option>بادرود</option>
                            <option>بار</option>
                            <option>باروق</option>
                            <option>بازار جمعه</option>
                            <option>بازرگان</option>
                            <option>باسمنج</option>
                            <option>باشت</option>
                            <option>باغ بهادران</option>
                            <option>باغ ملک</option>
                            <option>باغستان</option>
                            <option>باغین</option>
                            <option>بافت</option>
                            <option>بافران</option>
                            <option>بافق</option>
                            <option>باقرشهر</option>
                            <option>بالاده</option>
                            <option>بانه</option>
                            <option>بایگ</option>
                            <option>باینگان</option>
                            <option>بجستان</option>
                            <option>بجنورد</option>
                            <option>بخشایش</option>
                            <option>بدره</option>
                            <option>برازجان</option>
                            <option>بردخون</option>
                            <option>بردسکن</option>
                            <option>بردسیر</option>
                            <option>برزک</option>
                            <option>برزول</option>
                            <option>برف انبار</option>
                            <option>بروات</option>
                            <option>بروجرد</option>
                            <option>بروجن</option>
                            <option>بره سر</option>
                            <option>بزمان</option>
                            <option>بزنجان</option>
                            <option>بستان</option>
                            <option>بستان آباد</option>
                            <option>بستک</option>
                            <option>بسطام</option>
                            <option>بشرویه</option>
                            <option>بفروئیه</option>
                            <option>بلبان آباد</option>
                            <option>بلداجی</option>
                            <option>بلده</option>
                            <option>بم</option>
                            <option>بمپور</option>
                            <option>بن</option>
                            <option>بناب</option>
                            <option>بناب جدید</option>
                            <option>بنارویه</option>
                            <option>بنت</option>
                            <option>بنجار</option>
                            <option>بندرامام خمینی</option>
                            <option>بندرانزلی</option>
                            <option>بندرترکمن</option>
                            <option>بندرجاسک</option>
                            <option>بندرچارک</option>
                            <option>بندرخمیر</option>
                            <option>بندردیر</option>
                            <option>بندردیلم</option>
                            <option>بندرریگ</option>
                            <option>بندرعباس</option>
                            <option>بندرکنگان</option>
                            <option>بندرگز</option>
                            <option>بندرگناوه</option>
                            <option>بندرلنگه</option>
                            <option>بندرماهشهر</option>
                            <option>بنک</option>
                            <option>بوانات</option>
                            <option>بوشهر</option>
                            <option>بوکان</option>
                            <option>بومهن</option>
                            <option>بوئین زهرا</option>
                            <option>بوئین سفلی</option>
                            <option>بوئین و میاندشت</option>
                            <option>بهاباد</option>
                            <option>بهار</option>
                            <option>بهاران شهر</option>
                            <option>بهارستان</option>
                            <option>بهبهان</option>
                            <option>بهرمان</option>
                            <option>بهشهر</option>
                            <option>بهمن</option>
                            <option>بهنمیر</option>
                            <option>بیارجمند</option>
                            <option>بیجار</option>
                            <option>بیدخت</option>
                            <option>بیدستان</option>
                            <option>بیرجند</option>
                            <option>بیرم</option>
                            <option>بیستون</option>
                            <option>بیضا</option>
                            <option>بیکا</option>
                            <option>بیله سوار</option>
                            <option>بینالود</option>
                            <option>پاتاوه</option>
                            <option>پارس آباد</option>
                            <option>پارسیان</option>
                            <option>پاریز</option>
                            <option>پاکدشت</option>
                            <option>پاوه</option>
                            <option>پردیس</option>
                            <option>پرند</option>
                            <option>پرندک</option>
                            <option>پره سر</option>
                            <option>پل سفید</option>
                            <option>پلدختر</option>
                            <option>پلدشت</option>
                            <option>پهله</option>
                            <option>پیرانشهر</option>
                            <option>پیربازار</option>
                            <option>پیربکران</option>
                            <option>پیش قلعه</option>
                            <option>پیشوا</option>
                            <option>پیشین</option>
                            <option>تازه آباد</option>
                            <option>تازه شهر</option>
                            <option>تازه کند</option>
                            <option>تازه کندانگوت</option>
                            <option>تاکستان</option>
                            <option>تالش</option>
                            <option>تایباد</option>
                            <option>تبریز</option>
                            <option>تخت</option>
                            <option>تربت جام</option>
                            <option>تربت حیدریه</option>
                            <option>ترک</option>
                            <option>ترکالکی</option>
                            <option>ترکمانچای</option>
                            <option>تسوج</option>
                            <option>تفت</option>
                            <option>تفرش</option>
                            <option>تکاب</option>
                            <option>تنکابن</option>
                            <option>تنکمان</option>
                            <option>تنگ ارم</option>
                            <option>توتکابن</option>
                            <option>توحید</option>
                            <option>تودشک</option>
                            <option>توره</option>
                            <option>تویسرکان</option>
                            <option>تهران</option>
                            <option>تهران دشت</option>
                            <option>تیتکانلو</option>
                            <option>تیران</option>
                            <option>تیکمه داش</option>
                            <option>جاجرم</option>
                            <option>جالق</option>
                            <option>جاورسیان</option>
                            <option>جایزان</option>
                            <option>جبالبارز</option>
                            <option>جعفرآباد</option>
                            <option>جعفریه</option>
                            <option>جغتای</option>
                            <option>جلفا</option>
                            <option>جلین</option>
                            <option>جم</option>
                            <option>جناح</option>
                            <option>جنت شهر</option>
                            <option>جندق</option>
                            <option>جنگل</option>
                            <option>جوادآباد</option>
                            <option>جوان رود</option>
                            <option>جوپار</option>
                            <option>جورقان</option>
                            <option>جوزدان</option>
                            <option>جوزم</option>
                            <option>جوشقان و کامو</option>
                            <option>جوکار</option>
                            <option>جونقان</option>
                            <option>جویبار</option>
                            <option>جویم</option>
                            <option>جهرم</option>
                            <option>جیرفت</option>
                            <option>جیرنده</option>
                            <option>چابکسر</option>
                            <option>چابهار</option>
                            <option>چاپشلو</option>
                            <option>چادگان</option>
                            <option>چاف و چمخاله</option>
                            <option>چالانچولان</option>
                            <option>چالوس</option>
                            <option>چترود</option>
                            <option>چرام</option>
                            <option>چرمهین</option>
                            <option>چغادک</option>
                            <option>چغلوندی</option>
                            <option>چقابل</option>
                            <option>چکنه</option>
                            <option>چلگرد</option>
                            <option>چمران</option>
                            <option>چمستان</option>
                            <option>چمگردان</option>
                            <option>چناران</option>
                            <option>چناره</option>
                            <option>چوار</option>
                            <option>چوبر</option>
                            <option>چورزق</option>
                            <option>چویبده</option>
                            <option>چهارباغ</option>
                            <option>چهاربرج</option>
                            <option>چهاردانگه</option>
                            <option>چیتاب</option>
                            <option>حاجی آباد</option>
                            <option>حاجی آباد</option>
                            <option>حبیب آباد</option>
                            <option>حر</option>
                            <option>حسن آباد</option>
                            <option>حسن آباد</option>
                            <option>حسن آباد</option>
                            <option>حسینیه</option>
                            <option>حصارگرمخان</option>
                            <option>حلب</option>
                            <option>حمزه</option>
                            <option>حمیدیا</option>
                            <option>حمیدیه</option>
                            <option>حمیل</option>
                            <option>حنا</option>
                            <option>حویق</option>
                            <option>خاتون آباد</option>
                            <option>خارک</option>
                            <option>خاروانا</option>
                            <option>خاش</option>
                            <option>خاکعلی</option>
                            <option>خالدآباد</option>
                            <option>خامنه</option>
                            <option>خان ببین</option>
                            <option>خان زنیان</option>
                            <option>خانوک</option>
                            <option>خاوران</option>
                            <option>خراجو</option>
                            <option>خرامه</option>
                            <option>خرم آباد</option>
                            <option>خرم آباد</option>
                            <option>خرمدره</option>
                            <option>خرمدشت</option>
                            <option>خرمشهر</option>
                            <option>خرو</option>
                            <option>خسروشهر</option>
                            <option>خشت</option>
                            <option>خشکبیجار</option>
                            <option>خشکرود</option>
                            <option>خضرآباد</option>
                            <option>خضرلو</option>
                            <option>خضری دشت بیاض</option>
                            <option>خلخال</option>
                            <option>خلیل آباد</option>
                            <option>خلیل شهر</option>
                            <option>خمارلو</option>
                            <option>خمام</option>
                            <option>خمین</option>
                            <option>خمینی شهر</option>
                            <option>خنج</option>
                            <option>خنداب</option>
                            <option>خواجه</option>
                            <option>خواف</option>
                            <option>خوانسار</option>
                            <option>خور</option>
                            <option>خور</option>
                            <option>خورزوق</option>
                            <option>خورسند</option>
                            <option>خورموج</option>
                            <option>خوسف</option>
                            <option>خوش رودپی</option>
                            <option>خوی</option>
                            <option>دابودشت</option>
                            <option>داراب</option>
                            <option>داران</option>
                            <option>دارخوین</option>
                            <option>داریان</option>
                            <option>دالکی</option>
                            <option>دامغان</option>
                            <option>دامنه</option>
                            <option>دانسفهان</option>
                            <option>داودآباد</option>
                            <option>داورزن</option>
                            <option>دبیران</option>
                            <option>در رود</option>
                            <option>درب بهشت</option>
                            <option>درب گنبد</option>
                            <option>درجزین</option>
                            <option>درچه</option>
                            <option>درق</option>
                            <option>درگز</option>
                            <option>درگهان</option>
                            <option>دره شهر</option>
                            <option>دزآب</option>
                            <option>دزج</option>
                            <option>دزفول</option>
                            <option>دژکرد</option>
                            <option>دستجرد</option>
                            <option>دستگرد</option>
                            <option>دلبران</option>
                            <option>دلگشا</option>
                            <option>دلند</option>
                            <option>دلوار</option>
                            <option>دلیجان</option>
                            <option>دماوند</option>
                            <option>دمق</option>
                            <option>دندی</option>
                            <option>دوبرجی</option>
                            <option>دورود</option>
                            <option>دوزدوزان</option>
                            <option>دوست محمد</option>
                            <option>دوگنبدان</option>
                            <option>دولت آباد</option>
                            <option>دولت آباد</option>
                            <option>دهاقان</option>
                            <option>دهبارز</option>
                            <option>دهج</option>
                            <option>دهدز</option>
                            <option>دهدشت</option>
                            <option>دهرم</option>
                            <option>دهق</option>
                            <option>دهگلان</option>
                            <option>دهلران</option>
                            <option>دیباج</option>
                            <option>دیزج دیز</option>
                            <option>دیزیچه</option>
                            <option>دیزین</option>
                            <option>دیشموک</option>
                            <option>دیلمان</option>
                            <option>دیواندره</option>
                            <option>دیهوک</option>
                            <option>رابر</option>
                            <option>راز</option>
                            <option>رازقان</option>
                            <option>رازمیان</option>
                            <option>راسک</option>
                            <option>رامجرد</option>
                            <option>رامسر</option>
                            <option>رامشیر</option>
                            <option>رامهرمز</option>
                            <option>رامیان</option>
                            <option>رانکوه</option>
                            <option>راور</option>
                            <option>راین</option>
                            <option>رباط سنگ</option>
                            <option>رباط کریم</option>
                            <option>ربط</option>
                            <option>رحیم آباد</option>
                            <option>رزن</option>
                            <option>رزوه</option>
                            <option>رستم آباد</option>
                            <option>رستمکلا</option>
                            <option>رشت</option>
                            <option>رشتخوار</option>
                            <option>رضوانشهر</option>
                            <option>رضوانشهر</option>
                            <option>رضوانشهر</option>
                            <option>رضویه</option>
                            <option>رضی</option>
                            <option>رفسنجان</option>
                            <option>رفیع</option>
                            <option>روانسر</option>
                            <option>روداب</option>
                            <option>رودبار</option>
                            <option>رودبار</option>
                            <option>رودبنه</option>
                            <option>رودسر</option>
                            <option>رودهن</option>
                            <option>رونیز</option>
                            <option>رویان</option>
                            <option>رویدر</option>
                            <option>ریحان شهر</option>
                            <option>ریز</option>
                            <option>رینه</option>
                            <option>ریوش</option>
                            <option>زابل</option>
                            <option>زابلی</option>
                            <option>زارچ</option>
                            <option>زاغه</option>
                            <option>زاویه</option>
                            <option>زاهدان</option>
                            <option>زاهدشهر</option>
                            <option>زاینده رود</option>
                            <option>زرقان</option>
                            <option>زرگرمحله</option>
                            <option>زرند</option>
                            <option>زرنق</option>
                            <option>زرنه</option>
                            <option>زرین آباد</option>
                            <option>زرین دشت</option>
                            <option>زرین رود</option>
                            <option>زرین شهر</option>
                            <option>زرینه</option>
                            <option>زنجان</option>
                            <option>زنگنه</option>
                            <option>زنگی آباد</option>
                            <option>زنوز</option>
                            <option>زواره</option>
                            <option>زهان</option>
                            <option>زهره</option>
                            <option>زهک</option>
                            <option>زیارتعلی</option>
                            <option>زیباشهر</option>
                            <option>زیباکنار</option>
                            <option>زیدآباد</option>
                            <option>زیرآب</option>
                            <option>سادات شهر</option>
                            <option>ساروق</option>
                            <option>ساری</option>
                            <option>سالند</option>
                            <option>سامان</option>
                            <option>سامن</option>
                            <option>ساوجبلاغ</option>
                            <option>ساوه</option>
                            <option>سبزوار</option>
                            <option>سپیددشت</option>
                            <option>سجاس</option>
                            <option>سده</option>
                            <option>سده لنجان</option>
                            <option>سراب</option>
                            <option>سراب باغ</option>
                            <option>سراب دوره</option>
                            <option>سرابله</option>
                            <option>سراوان</option>
                            <option>سرایان</option>
                            <option>سرباز</option>
                            <option>سربیشه</option>
                            <option>سرپل ذهاب</option>
                            <option>سرخرود</option>
                            <option>سرخس</option>
                            <option>سرخنکلاته</option>
                            <option>سرخه</option>
                            <option>سردرود</option>
                            <option>سردشت</option>
                            <option>سردشت</option>
                            <option>سردشت</option>
                            <option>سرعین</option>
                            <option>سرکان</option>
                            <option>سرمست</option>
                            <option>سرو</option>
                            <option>سروآباد</option>
                            <option>سروستان</option>
                            <option>سریش آباد</option>
                            <option>سطر</option>
                            <option>سعادت شهر</option>
                            <option>سعدآباد</option>
                            <option>سعید آباد</option>
                            <option>سفیددشت</option>
                            <option>سفیدسنگ</option>
                            <option>سفیدشهر</option>
                            <option>سقز</option>
                            <option>سگزآباد</option>
                            <option>سگزی</option>
                            <option>سلامی</option>
                            <option>سلطان آباد</option>
                            <option>سلطانیه</option>
                            <option>سلفچگان</option>
                            <option>سلماس</option>
                            <option>سلمان شهر</option>
                            <option>سمنان</option>
                            <option>سمیرم</option>
                            <option>سنجان</option>
                            <option>سنخواست</option>
                            <option>سندرک</option>
                            <option>سنقر</option>
                            <option>سنگان</option>
                            <option>سنگر</option>
                            <option>سنندج</option>
                            <option>سودجان</option>
                            <option>سوران</option>
                            <option>سورشجان</option>
                            <option>سورک</option>
                            <option>سورمق</option>
                            <option>سوزا</option>
                            <option>سوسنگرد</option>
                            <option>سوق</option>
                            <option>سومار</option>
                            <option>سه قلعه</option>
                            <option>سهرورد</option>
                            <option>سهند</option>
                            <option>سی سخت</option>
                            <option>سیاهکل</option>
                            <option>سیدان</option>
                            <option>سیراف</option>
                            <option>سیرجان</option>
                            <option>سیردان</option>
                            <option>سیرکان</option>
                            <option>سیریک</option>
                            <option>سیس</option>
                            <option>سیلوانه</option>
                            <option>سیمین شهر</option>
                            <option>سیمینه</option>
                            <option>سیه چشمه</option>
                            <option>سیه رود</option>
                            <option>شادگان</option>
                            <option>شادمهر</option>
                            <option>شازند</option>
                            <option>شال</option>
                            <option>شاندیز</option>
                            <option>شاوور</option>
                            <option>شاهدشهر</option>
                            <option>شاهدیه</option>
                            <option>شاهرود</option>
                            <option>شاهو</option>
                            <option>شاهین دژ</option>
                            <option>شاهین شهر</option>
                            <option>شبانکاره</option>
                            <option>شبستر</option>
                            <option>شرافت</option>
                            <option>شربیان</option>
                            <option>شرفخانه</option>
                            <option>شریف آباد</option>
                            <option>شریفیه</option>
                            <option>ششتمد</option>
                            <option>ششده</option>
                            <option>شفت</option>
                            <option>شلمان</option>
                            <option>شلمزار</option>
                            <option>شمشک</option>
                            <option>شنبه</option>
                            <option>شندآباد</option>
                            <option>شوسف</option>
                            <option>شوش</option>
                            <option>شوشتر</option>
                            <option>شوط</option>
                            <option>شوقان</option>
                            <option>شویشه</option>
                            <option>شهداد</option>
                            <option>شهر جدید هشتگرد</option>
                            <option>شهر ری</option>
                            <option>شهرآباد</option>
                            <option>شهربابک</option>
                            <option>شهرپیر</option>
                            <option>شهرزو</option>
                            <option>شهرصدرا</option>
                            <option>شهرضا</option>
                            <option>شهرکرد</option>
                            <option>شهریار</option>
                            <option>شهمیرزاد</option>
                            <option>شیبان</option>
                            <option>شیراز</option>
                            <option>شیرگاه</option>
                            <option>شیروان</option>
                            <option>شیرود</option>
                            <option>شیرین سو</option>
                            <option>صاحب</option>
                            <option>صالح آباد</option>
                            <option>صالح آباد</option>
                            <option>صالح آباد</option>
                            <option>صالح آباد</option>
                            <option>صالح شهر</option>
                            <option>صائین قلعه</option>
                            <option>صباشهر</option>
                            <option>صحنه</option>
                            <option>صغاد</option>
                            <option>صفادشت</option>
                            <option>صفاشهر</option>
                            <option>صفائیه</option>
                            <option>صفی آباد</option>
                            <option>صفی آباد</option>
                            <option>صوفیان</option>
                            <option>صومعه سرا</option>
                            <option>صیدون</option>
                            <option>ضیاآباد</option>
                            <option>طاقانک</option>
                            <option>طالخونچه</option>
                            <option>طالقان</option>
                            <option>طبس</option>
                            <option>طبس</option>
                            <option>طرقبه</option>
                            <option>عباس آباد</option>
                            <option>عجب شیر</option>
                            <option>عسگران</option>
                            <option>عسلویه</option>
                            <option>عشق آباد</option>
                            <option>عقدا</option>
                            <option>علامرودشت</option>
                            <option>علویجه</option>
                            <option>علی اکبر</option>
                            <option>علی آباد کتول</option>
                            <option>عنبران</option>
                            <option>عنبرآباد</option>
                            <option>غرق آباد</option>
                            <option>فارسان</option>
                            <option>فارغان</option>
                            <option>فاروج</option>
                            <option>فاریاب</option>
                            <option>فاضل آباد</option>
                            <option>فامنین</option>
                            <option>فخرآباد</option>
                            <option>فدامی</option>
                            <option>فرادنبه</option>
                            <option>فراشبند</option>
                            <option>فرخ شهر</option>
                            <option>فرخی</option>
                            <option>فردوس</option>
                            <option>فردوسیه</option>
                            <option>فردیس</option>
                            <option>فرسفج</option>
                            <option>فرمهین</option>
                            <option>فرهادگرد</option>
                            <option>فریدونشهر</option>
                            <option>فریدونکنار</option>
                            <option>فریم</option>
                            <option>فریمان</option>
                            <option>فسا</option>
                            <option>فشم</option>
                            <option>فلاورجان</option>
                            <option>فنوج</option>
                            <option>فولادشهر</option>
                            <option>فومن</option>
                            <option>فهرج</option>
                            <option>فیرورق</option>
                            <option>فیروزان</option>
                            <option>فیروزآباد</option>
                            <option>فیروزآباد</option>
                            <option>فیروزکوه</option>
                            <option>فیروزه</option>
                            <option>فیض آباد</option>
                            <option>فین</option>
                            <option>قادرآباد</option>
                            <option>قاسم آباد</option>
                            <option>قاضی</option>
                            <option>قاین</option>
                            <option>قائم شهر</option>
                            <option>قائمیه</option>
                            <option>قدس</option>
                            <option>قدمگاه</option>
                            <option>قرچک</option>
                            <option>قروه</option>
                            <option>قروه درجزین</option>
                            <option>قره آغاج</option>
                            <option>قره ضیاءالدین</option>
                            <option>قزوین</option>
                            <option>قشم</option>
                            <option>قصرشیرین</option>
                            <option>قصرقند</option>
                            <option>قطب آباد</option>
                            <option>قطرویه</option>
                            <option>قطور</option>
                            <option>قلعه تل</option>
                            <option>قلعه خواجه</option>
                            <option>قلعه رئیسی</option>
                            <option>قلعه قاضی</option>
                            <option>قلعه گنج</option>
                            <option>قلندرآباد</option>
                            <option>قم</option>
                            <option>قمصر</option>
                            <option>قنوات</option>
                            <option>قوچان</option>
                            <option>قورچی باشی</option>
                            <option>قوشچی</option>
                            <option>قهاوند</option>
                            <option>قهجاورستان</option>
                            <option>قهدریجان</option>
                            <option>قهستان</option>
                            <option>قیامدشت</option>
                            <option>قیدار</option>
                            <option>قیر</option>
                            <option>کاخک</option>
                            <option>کارزین (فتح آباد)</option>
                            <option>کاریز</option>
                            <option>کازرون</option>
                            <option>کاشان</option>
                            <option>کاشمر</option>
                            <option>کاظم آباد</option>
                            <option>کاکی</option>
                            <option>کامفیروز</option>
                            <option>کامیاران</option>
                            <option>کانی دینار</option>
                            <option>کانی سور</option>
                            <option>کبودر آهنگ</option>
                            <option>کتالم</option>
                            <option>کدکن</option>
                            <option>کرج</option>
                            <option>کردان</option>
                            <option>کردکوی</option>
                            <option>کرکوند</option>
                            <option>کرمان</option>
                            <option>کرمانشاه</option>
                            <option>کرندغرب</option>
                            <option>کره ای</option>
                            <option>کرهرود</option>
                            <option>کشاورز</option>
                            <option>کشکسرای</option>
                            <option>کشکوئیه</option>
                            <option>کلات</option>
                            <option>کلاته خیج</option>
                            <option>کلاچای</option>
                            <option>کلارآباد</option>
                            <option>کلاردشت</option>
                            <option>کلاله</option>
                            <option>کلمه</option>
                            <option>کلوانق</option>
                            <option>کلور</option>
                            <option>کله بست</option>
                            <option>کلیبر</option>
                            <option>کلیشاد و سودرجان</option>
                            <option>کمال شهر</option>
                            <option>کمشچه</option>
                            <option>کمه</option>
                            <option>کمیجان</option>
                            <option>کنارتخته</option>
                            <option>کنارک</option>
                            <option>کندر</option>
                            <option>کنگ</option>
                            <option>کنگاور</option>
                            <option>کوار</option>
                            <option>کوچصفهان</option>
                            <option>کوراییم</option>
                            <option>کوزران</option>
                            <option>کوزه کنان</option>
                            <option>کوشک</option>
                            <option>کوشکنار</option>
                            <option>کومله</option>
                            <option>کونانی</option>
                            <option>کوهبنان</option>
                            <option>کوهپایه</option>
                            <option>کوهدشت</option>
                            <option>کوهسار</option>
                            <option>کوهی خیل</option>
                            <option>کوهین</option>
                            <option>کهریزسنگ</option>
                            <option>کهریزک</option>
                            <option>کهک</option>
                            <option>کهنوج</option>
                            <option>کیاسر</option>
                            <option>کیاشهر</option>
                            <option>کیاکلا</option>
                            <option>کیان</option>
                            <option>کیانشهر</option>
                            <option>کیش</option>
                            <option>کیلان</option>
                            <option>گالیکش</option>
                            <option>گتاب</option>
                            <option>گتوند</option>
                            <option>گراب</option>
                            <option>گراب سفلی</option>
                            <option>گراش</option>
                            <option>گردکشانه</option>
                            <option>گرگاب</option>
                            <option>گرگان</option>
                            <option>گرماب</option>
                            <option>گرمدره</option>
                            <option>گرمسار</option>
                            <option>گرمه</option>
                            <option>گرمی</option>
                            <option>گزبرخوار</option>
                            <option>گزنک</option>
                            <option>گشت</option>
                            <option>گل تپه</option>
                            <option>گلباف</option>
                            <option>گلبهار</option>
                            <option>گلپایگان</option>
                            <option>گلدشت</option>
                            <option>گلزار</option>
                            <option>گلستان</option>
                            <option>گلشهر</option>
                            <option>گلمکان</option>
                            <option>گلمورتی</option>
                            <option>گلوگاه</option>
                            <option>گله دار</option>
                            <option>گمیش تپه</option>
                            <option>گناباد</option>
                            <option>گنبدکاووس</option>
                            <option>گندمان</option>
                            <option>گوراب زرمیخ</option>
                            <option>گوگان</option>
                            <option>گوگد</option>
                            <option>گوهران</option>
                            <option>گهرو</option>
                            <option>گهواره</option>
                            <option>گیان</option>
                            <option>گیلانغرب</option>
                            <option>گیوی</option>
                            <option>لار</option>
                            <option>لالجین</option>
                            <option>لاله زار</option>
                            <option>لالی</option>
                            <option>لامرد</option>
                            <option>لاهرود</option>
                            <option>لاهیجان</option>
                            <option>لای بید</option>
                            <option>لپویی</option>
                            <option>لردگان</option>
                            <option>لشت نشا</option>
                            <option>لطف آباد</option>
                            <option>لطیفی</option>
                            <option>لنده</option>
                            <option>لنگرود</option>
                            <option>لواسان</option>
                            <option>لوجلی</option>
                            <option>لوشان</option>
                            <option>لولمان</option>
                            <option>لومار</option>
                            <option>لوندویل</option>
                            <option>لیسار</option>
                            <option>لیکک</option>
                            <option>لیلان</option>
                            <option>مادوان</option>
                            <option>مارگون</option>
                            <option>مارلیک</option>
                            <option>ماسال</option>
                            <option>ماسوله</option>
                            <option>ماکو</option>
                            <option>مال خلیفه</option>
                            <option>مامونیه</option>
                            <option>ماه نشان</option>
                            <option>ماهان</option>
                            <option>ماهدشت</option>
                            <option>ماهیدشت</option>
                            <option>مبارک آباددیز</option>
                            <option>مبارکه</option>
                            <option>مجلسی</option>
                            <option>مجن</option>
                            <option>محلات</option>
                            <option>محمدان</option>
                            <option>محمدآباد</option>
                            <option>محمدآباد</option>
                            <option>محمدآباد</option>
                            <option>محمدشهر</option>
                            <option>محمدشهر</option>
                            <option>محمدی</option>
                            <option>محمدیار</option>
                            <option>محمدیه</option>
                            <option>محمودآباد</option>
                            <option>محمودآباد</option>
                            <option>محمودآباد نمونه</option>
                            <option>محی آباد</option>
                            <option>مراغه</option>
                            <option>مراوه</option>
                            <option>مرجقل</option>
                            <option>مردهک</option>
                            <option>مرزن آباد</option>
                            <option>مرزیکلا</option>
                            <option>مرند</option>
                            <option>مرودشت</option>
                            <option>مروست</option>
                            <option>مریانج</option>
                            <option>مریوان</option>
                            <option>مزدآوند</option>
                            <option>مس سرچشمه</option>
                            <option>مسجدسلیمان</option>
                            <option>مشکات</option>
                            <option>مشکان</option>
                            <option>مشکین دشت</option>
                            <option>مشگین شهر</option>
                            <option>مشهد</option>
                            <option>مصیری</option>
                            <option>معلم کلایه</option>
                            <option>معمولان</option>
                            <option>ملاثانی</option>
                            <option>ملارد</option>
                            <option>ملایر</option>
                            <option>ملک آباد</option>
                            <option>ملک کیان</option>
                            <option>ملکان</option>
                            <option>ممقان</option>
                            <option>منجیل</option>
                            <option>منظریه</option>
                            <option>منوجان</option>
                            <option>موچش</option>
                            <option>مود</option>
                            <option>مورموری</option>
                            <option>موسیان</option>
                            <option>مومن آباد</option>
                            <option>مهاباد</option>
                            <option>مهاباد</option>
                            <option>مهاجران</option>
                            <option>مهدی شهر</option>
                            <option>مهر</option>
                            <option>مهران</option>
                            <option>مهربان</option>
                            <option>مهردشت</option>
                            <option>مهریز</option>
                            <option>میامی</option>
                            <option>میان راهان</option>
                            <option>میاندوآب</option>
                            <option>میانرود</option>
                            <option>میانه</option>
                            <option>میبد</option>
                            <option>میرآباد</option>
                            <option>میرجاوه</option>
                            <option>میگون</option>
                            <option>میلاجرد</option>
                            <option>میمند</option>
                            <option>میمه</option>
                            <option>میمه</option>
                            <option>میناب</option>
                            <option>مینودشت</option>
                            <option>مینوشهر</option>
                            <option>ناغان</option>
                            <option>نافچ</option>
                            <option>نالوس</option>
                            <option>نائین</option>
                            <option>نجف آباد</option>
                            <option>نجف شهر</option>
                            <option>نخل تقی</option>
                            <option>ندوشن</option>
                            <option>نراق</option>
                            <option>نرجه</option>
                            <option>نرماشیر</option>
                            <option>نسیم شهر</option>
                            <option>نشتارود</option>
                            <option>نشتیفان</option>
                            <option>نصرآباد</option>
                            <option>نصرآباد</option>
                            <option>نصرت آباد</option>
                            <option>نصیرآباد</option>
                            <option>نطنز</option>
                            <option>نظام شهر</option>
                            <option>نظرآباد</option>
                            <option>نظرکهریزی</option>
                            <option>نقاب</option>
                            <option>نقده</option>
                            <option>نقنه</option>
                            <option>نکا</option>
                            <option>نگار</option>
                            <option>نگور</option>
                            <option>نگین شهر</option>
                            <option>نمین</option>
                            <option>نوبران</option>
                            <option>نوبندگان</option>
                            <option>نوجین</option>
                            <option>نوخندان</option>
                            <option>نودان</option>
                            <option>نودژ</option>
                            <option>نودشه</option>
                            <option>نوده خاندوز</option>
                            <option>نور</option>
                            <option>نورآباد</option>
                            <option>نورآباد</option>
                            <option>نوسود</option>
                            <option>نوش آباد</option>
                            <option>نوشهر</option>
                            <option>نوشین</option>
                            <option>نوک آباد</option>
                            <option>نوکنده</option>
                            <option>نهاوند</option>
                            <option>نهبندان</option>
                            <option>نی ریز</option>
                            <option>نیاسر</option>
                            <option>نیر</option>
                            <option>نیر</option>
                            <option>نیشابور</option>
                            <option>نیک آباد</option>
                            <option>نیک شهر</option>
                            <option>نیل شهر</option>
                            <option>نیمبلوک</option>
                            <option>نیمور</option>
                            <option>واجارگاه</option>
                            <option>وایقان</option>
                            <option>وحدتیه</option>
                            <option>وحیدیه</option>
                            <option>ورامین</option>
                            <option>وراوی</option>
                            <option>ورزقان</option>
                            <option>ورزنه</option>
                            <option>ورنامخواست</option>
                            <option>وزوان</option>
                            <option>ونک</option>
                            <option>ویس</option>
                            <option>ویسیان</option>
                            <option>هادی شهر</option>
                            <option>هجدک</option>
                            <option>هرات</option>
                            <option>هرسین</option>
                            <option>هرگلان</option>
                            <option>هرمز</option>
                            <option>هرند</option>
                            <option>هریس</option>
                            <option>هشتبندی</option>
                            <option>هشتجین</option>
                            <option>هشترود</option>
                            <option>هشتگرد</option>
                            <option>هفتگل</option>
                            <option>هفشجان</option>
                            <option>هلشی</option>
                            <option>همت آباد</option>
                            <option>همدان</option>
                            <option>هندودر</option>
                            <option>هندیجان</option>
                            <option>هوراند</option>
                            <option>هویزه</option>
                            <option>هیدج</option>
                            <option>هیدوچ</option>
                            <option>هیر</option>
                            <option>یاسوج</option>
                            <option>یاسوکند</option>
                            <option>یامچی</option>
                            <option>یزد</option>
                            <option>یزدان شهر</option>
                            <option>یونسی</option>

                        </select>
                    </div>
                </div>


                <div class="row justify-content-center col-lg-8 my-3">
                    <div class="col-lg-4 md-4 justify-content-center">
                        <label for="mobile" class="form-label">* تلفن همراه زائر</label>
                        <input type="text" class="form-control" id="mobile" onblur="validate_mobile()" placeholder="به صورت 09123">
                    </div>
                </div>

                <div class="row justify-content-center col-lg-8 my-3">
                    <div class="col-lg-4 md-4 justify-content-center">
                        <label for="email" class="form-label">ایمیل زائر</label>
                        <input type="text" class="form-control" id="email" placeholder="یک ایمیل معتبر وارد کنید">
                        <span>فقط در صورتی که ایمیل فعال و معتبر دارید، آن را وارد نمایید.</span>
                    </div>
                </div>

                <div class="row justify-content-center col-lg-8 my-3">
                    <div class="col-lg-4 md-4  d-flex flex-row justify-content-center">

                        
                        <div class="input-group-prepend mx-1" id="reload">
                            <div class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z" />
                                    <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z" />
                                </svg>
                            </div>
                        </div>

                        @csrf
                        <input type="text" class="form-control mx-1" id="captchaField" placeholder="کد امنیتی" dir="rtl">
                        {!! captcha_img() !!}
                    </div>
                </div>



                @csrf

                <div class="row justify-content-center col-lg-8 my-3">
                    <div class="col-lg-4 md-4 justify-content-center">
                        <span class="text-danger">
                            با کلیک بر روی دکمه ثبت نام، تایید می کنم تمامی اطلاعات و مشخصات فوق به درستی ثبت شده و مسئولیت عواقب ثبت مشخصات و اطلاعات نادرست را بر عهده می گیرم.
                        </span>
                        <br />
                        <br />
                        <a class="btn btn-primary" id="registerBtn">ثبت نام</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4">
            <p class="m-0 text-center text-white">کلیه حقوق محفوظ است</p>
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

    <script>
        jalaliDatepicker.startWatch();
    </script>
</body>

</html>