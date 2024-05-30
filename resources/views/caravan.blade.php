<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>سامانه مدیریت کاروان ها | پنل کاروان</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <link rel="preconnect" href="//fdn.fontcdn.ir">
    <link rel="preconnect" href="//v1.fontapi.ir">
    <link href="https://v1.fontapi.ir/css/Shabnam" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
    <script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>

</head>

<body class="hold-transition sidebar-mini" style="font-family: Shabnam, sans-serif;">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">صفحه اصلی</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">تماس با پشتیبانی</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">1</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{ asset('assets/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        مدیر سیستم
                                        <span class="float-right text-sm text-success"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm" dir="rtl">ورود شما را به سامانه خیر مقدم عرض می کنیم</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>2 ساعت قبل</p>
                                </div>
                            </div>
                            <!-- Message End -->
                            <div class="dropdown-divider"></div>

                            <a href="#" class="dropdown-item dropdown-footer">مشاهده تمامی پیام ها</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">اعلان جدیدی وجود ندارد</span>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">مشاهده همه اعلان ها</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link text-center" dir="rtl">
                <span class="brand-text font-weight-light text-center">پنل کاروان</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 mb-3 text-center">
                    <div class="info text-center">
                        <a href="#" class="text-center text-wrap">جناب آقای {{ $caravan_data->admin_family }} خوش آمدید</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    صفحه اصلی
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="/caravanHomeInfo" class="nav-link">
                                <i class="nav-icon fas fa-coins"></i>
                                <p>
                                    مشخصات اسکان
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/pilgrimRegister" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    ثبت و ویرایش زائرین
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/logout" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    تغییر رمز عبور
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="/logout" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    خروج از سیستم
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="#">اصلی</a></li>
                                <li class="breadcrumb-item active">مشخصات کاروان</li>
                            </ol>
                        </div>
                        <div class="col-sm-6">
                            <h1 class=" float-sm-right">صفحه نخست</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">

                <div class="alert alert-warning text-center" dir="rtl">
                    <h5><i class="icon fas fa-warning"></i> توجه </h5>
                    مدیر محترم، لطفا در اولین فرصت نسبت به تکمیل اطلاعات خواسته شده در همین صفحه اقدام فرمایید.
                    <hr />
                    دقت داشته باشید، ثبت مشخصات در هر مرحله به منزله تایید نهایی بوده و امکان ویرایش میسر نیست.
                    در صورت درج اطلاعات نادرست، امتیاز شما لغو می شود.
                </div>

                <!-- Default box -->
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-tools float-left">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <h3 class="card-title float-right">مشخصات مدیر کاروان</h3>
                    </div>
                    <div class="card-body text-right" dir="rtl">

                        <div class="row">
                            <p class="mx-3">شناسه انحصاری کاروان:</p>
                            <p>@php echo strtoupper($caravan_data->caravan_UUID) @endphp</p>
                        </div>

                        <div class="row">
                            <p class="mx-3">شماره پرونده کاروان:</p>
                            <p>@php echo strtoupper($caravan_data->caravan_human_id) @endphp</p>
                        </div>


                        <div class="row">
                            <p class="mx-3">نام و نام خانوادگی:</p>
                            <p>{{ $caravan_data->admin_name }} {{ $caravan_data->admin_family }}</p>
                        </div>

                        <div class="row">
                            <p class="mx-3">کد ملی: </p>
                            <p>{{ $caravan_data->admin_melli }}</p>
                        </div>
                        <div class="row">
                            <p class="mx-3">نام پدر: </p>
                            <p>{{ $caravan_data->admin_fathername }}</p>
                        </div>
                        <div class="row">
                            <p class="mx-3">شماره شناسنامه: </p>
                            <p>{{ $caravan_data->admin_shenasname }}</p>
                        </div>
                        <div class="row">
                            <p class="mx-3">تاریخ تولد: </p>
                            <p>{{ $caravan_data->admin_birthdate }}</p>
                        </div>
                        <div class="row">
                            <p class="mx-3">تحصیلات: </p>
                            <p>{{ $caravan_data->admin_education }}</p>
                        </div>
                        <div class="row">
                            <p class="mx-3">جنسیت: </p>
                            <p>{{ $caravan_data->admin_sex }}</p>
                        </div>
                        <div class="row">
                            <p class="mx-3">تلفن همراه: </p>
                            <p>{{ $caravan_data->admin_mobile }}</p>
                        </div>
                        <div class="row">
                            <p class="mx-3">تلفن ثابت: </p>
                            <p>{{ $caravan_data->admin_phone }}</p>
                        </div>
                        <div class="row">
                            <p class="mx-3">آدرس: </p>
                            <p>{{ $caravan_data->admin_province }} - {{ $caravan_data->admin_city }} - {{ $caravan_data->admin_address }}</p>
                        </div>
                        <div class="row">
                            <p class="mx-3">کد پستی: </p>
                            <p>{{ $caravan_data->admin_zipcode }}</p>
                        </div>

                        <div class="row">
                            <p class="mx-3">ایمیل: </p>
                            <p>{{ $caravan_data->admin_email }}</p>
                        </div>

                        <div class="row">
                            <p class="mx-3">وضعیت: </p>
                            @if($caravan_data->verified == 'No')
                            <p class="text-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-exclamation" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm-.55 8.502L7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0zM8.002 12a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                </svg>
                                در حال بررسی
                            </p>
                            @else
                            <p class="text-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                تایید شده
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- /.card -->


                <!-- Caravan Detail -->
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-tools float-left">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <h3 class="card-title float-right">مشخصات کاروان</h3>
                    </div>
                    <div class="card-body text-right" dir="rtl">

                        <form id="caravan_detail">
                            <h4 class="card-title float-right text-danger">پر کردن تمامی موارد الزامی است.</h4>
                            <br />

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="caravan_name" class="form-label">نام کاروان</label>
                                <input type="text" class="form-control" name="caravan_name" value="{{ $caravan_data->caravan_name }}" disabled>
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="start_date" class="form-label">تاریخ شروع پیاده روی در جاده:
                                    @if($caravan_data->start_date != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data->start_date }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="start_date" data-jdp>
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="days" class="form-label">تعداد روز پیاده روی:
                                    @if($caravan_data->duration != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data->duration }}</span>
                                    @endif
                                </label>
                                <input type="number" class="form-control" name="days" value="0">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="route" class="form-label">محور حرکت:
                                    @if($caravan_data-> route != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> route }}</span>
                                    @endif
                                </label>
                                <select class="form-control" aria-label="Default select example" name="route">
                                    <option value="0" selected>انتخاب کنید</option>
                                    <option>نیشابور</option>
                                    <option>قوچان</option>
                                    <option>فریمان</option>
                                    <option>کلات</option>
                                    <option>طرقبه - شاندیز</option>
                                </select>
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="entrance_date" class="form-label">تاریخ ورود
                                    @if($caravan_data-> entrance != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> entrance }}</span>
                                    @endif
                                </label>
                                <select class="form-control" aria-label="Default select example" name="entrance_date">
                                    <option value="0" selected>انتخاب کنید</option>
                                    <option>بعد از ظهر چهار شنبه 27 صفر - 22 شهریور 1402 - ساعت 17 به بعد</option>
                                    <option>قبل از ظهر پنج شنبه 28 صفر - 23 شهریور 1402 - ساعت 00 به بعد</option>
                                    <option>بعد از ظهر پنج شنبه 28 صفر - 23 شهریور 1402 - ساعت 00 به بعد</option>
                                </select>
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="exit_date" class="form-label">تاریخ خروج
                                    @if($caravan_data-> exit != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> exit }}</span>
                                    @endif
                                </label>
                                <select class="form-control" aria-label="Default select example" name="exit_date">
                                    <option value="0" selected>انتخاب کنید</option>
                                    <option>قبل از ظهر جمعه 29 صفر - 24 شهریور 1402</option>
                                    <option>بعد از ظهر جمعه 29 صفر - 24 شهریور 1402</option>
                                </select>
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="man" class="form-label">تعداد زائر مرد:
                                    @if($caravan_data-> pilgrim_man != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> pilgrim_man }}</span>
                                    @endif
                                </label>
                                <input type="number" value="0" class="form-control" name="man">
                            </div>


                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="man_old" class="form-label">تعداد زائر مرد - سال گذشته
                                    @if($caravan_data-> pilgrim_man_old != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> pilgrim_man_old }}</span>
                                    @endif
                                </label>
                                <input type="number" value="0" class="form-control" name="man_old">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="woman" class="form-label">تعداد زائر زن:
                                    @if($caravan_data-> pilgrim_woman != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> pilgrim_woman }}</span>
                                    @endif
                                </label>
                                <input type="number" value="0" class="form-control" name="woman">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="woman_old" class="form-label">تعداد زائر زن - سال گذشته
                                    @if($caravan_data-> pilgrim_woman_old != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> pilgrim_woman_old }}</span>
                                    @endif
                                </label>
                                <input type="number" value="0" class="form-control" name="woman_old">
                            </div>

                        </form>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">

                        <button type="button" class="btn btn-primary" id="caravan_detail_reg">تایید نهایی و ثبت مشخصات کاروان</button>
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->


                <!-- co-admin Detail -->
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-tools float-left">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <h3 class="card-title float-right">مشخصات معاون کاروان</h3>
                    </div>
                    <div class="card-body text-right" dir="rtl">

                        <h4 class="card-title float-right text-danger">غیراز ایمیل، سایر فیلدها لزوما باید تکمیل گردد</h4>
                        <br />

                        <form id="caravan_coadmin_detail">
                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="coadmin_name" class="form-label">نام معاون کاروان
                                    @if($caravan_data-> coadmin_name != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> coadmin_name }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="coadmin_name">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="coadmin_family" class="form-label">نام خانوادگی معاون کاروان
                                    @if($caravan_data-> coadmin_family != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> coadmin_family }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="coadmin_family">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="coadmin_fathername" class="form-label">نام پدر معاون کاروان
                                    @if($caravan_data-> coadmin_fathername != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> coadmin_fathername }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="coadmin_fathername">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="coadmin_sex" class="form-label">جنسیت معاون کاروان
                                    @if($caravan_data-> coadmin_sex != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> coadmin_sex }}</span>
                                    @endif
                                </label>
                                <select class="form-control" aria-label="Default select example" name="coadmin_sex">
                                    <option selected>انتخاب کنید</option>
                                    <option>مذکر</option>
                                    <option>مونث</option>
                                </select>
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="coadmin_melli" class="form-label">کد ملی معاون کاروان
                                    @if($caravan_data-> coadmin_melli != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> coadmin_melli }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="coadmin_melli">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="coadmin_shenasname" class="form-label">شماره شناسنامه معاون کاروان
                                    @if($caravan_data-> coadmin_shenasname != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> coadmin_shenasname }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="coadmin_shenasname">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="coadmin_birthdate" class="form-label">تاریخ تولد معاون کاروان
                                    @if($caravan_data-> coadmin_birthdate != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> coadmin_birthdate }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="coadmin_birthdate" data-jdp>
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="coadmin_mobile" class="form-label">شماره همراه معاون کاروان
                                    @if($caravan_data-> coadmin_mobile != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> coadmin_mobile }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="coadmin_mobile" placeholder="09xxxx">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="coadmin_edu" class="form-label">تحصیلات معاون کاروان
                                    @if($caravan_data-> coadmin_education != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> coadmin_education }}</span>
                                    @endif
                                </label>
                                <select class="form-control" aria-label="Default select example" name="coadmin_edu">
                                    <option value="0" selected>انتخاب کنید</option>
                                    <option>کمتر از دیپلم</option>
                                    <option>دیپلم</option>
                                    <option>فوق دیپلم</option>
                                    <option>لیسانس</option>
                                    <option>فوق لیسانس</option>
                                    <option>دکتری</option>
                                </select>
                            </div>
                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="coadmin_email" class="form-label">ایمیل معاون کاروان (اختیاری)
                                    @if($caravan_data-> coadmin_email != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> coadmin_email }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="coadmin_email">
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" id="caravan_coadmin_reg">تایید نهایی و ثبت مشخصات معاون کاروان</button>
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card co-admin -->

                <!-- rowhani -->
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-tools float-left">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <h3 class="card-title float-right">مشخصات روحانی کاروان</h3>
                    </div>
                    <div class="card-body text-right" dir="rtl">
                        <h4 class="card-title float-right text-danger">غیراز ایمیل، سایر فیلدها لزوما باید تکمیل گردد</h4>
                        <br />
                        <form id="caravan_rowhani_detail">
                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="rowhani_name" class="form-label">نام روحانی کاروان
                                    @if($caravan_data-> rowhani_name != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> rowhani_name }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="rowhani_name">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="rowhani_family" class="form-label">نام خانوادگی روحانی کاروان
                                    @if($caravan_data-> rowhani_family != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> rowhani_family }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="rowhani_family">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="rowhani_melli" class="form-label">کد ملی روحانی کاروان
                                    @if($caravan_data-> rowhani_melli != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> rowhani_melli }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="rowhani_melli">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="rowhani_code" class="form-label">کد روحانی کاروان
                                    @if($caravan_data-> rowhani_code != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> rowhani_code }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="rowhani_code">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="rowhani_sex" class="form-label">جنسیت روحانی کاروان
                                    @if($caravan_data-> rowhani_sex != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> rowhani_sex }}</span>
                                    @endif
                                </label>
                                <select class="form-control" aria-label="Default select example" name="rowhani_sex">
                                    <option value="0" selected>انتخاب کنید</option>
                                    <option>مذکر</option>
                                    <option>مونث</option>
                                </select>
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="rowhani_shenasname" class="form-label">شماره شناسنامه روحانی کاروان
                                    @if($caravan_data-> rowhani_shenasname != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> rowhani_shenasname }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="rowhani_shenasname">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="rowhani_shenasname" class="form-label">نام پدر روحانی کاروان
                                    @if($caravan_data-> rowhani_fathername != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> rowhani_fathername }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="rowhani_fathername">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="rowhani_birthdate" class="form-label">تاریخ تولد روحانی کاروان
                                    @if($caravan_data-> rowhani_birthdate != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> rowhani_birthdate }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="rowhani_birthdate" data-jdp>
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="rowhani_mobile" class="form-label">شماره همراه روحانی کاروان
                                    @if($caravan_data-> rowhani_mobile != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> rowhani_mobile }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="rowhani_mobile">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="rowhani_edu" class="form-label">تحصیلات روحانی کاروان
                                    @if($caravan_data-> rowhani_education != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> rowhani_education }}</span>
                                    @endif
                                </label>
                                <select class="form-control" aria-label="Default select example" name="rowhani_edu">
                                    <option value="0" selected>انتخاب کنید</option>
                                    <option>کمتر از دیپلم</option>
                                    <option>دیپلم</option>
                                    <option>فوق دیپلم</option>
                                    <option>لیسانس</option>
                                    <option>فوق لیسانس</option>
                                    <option>دکتری</option>
                                </select>
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="rowhani_email" class="form-label">ایمیل روحانی کاروان (اختیاری)
                                    @if($caravan_data-> rowhani_email != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> rowhani_email }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="rowhani_email">
                            </div>
                        </form>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" id="caravan_rowhani_reg">تایید نهایی و ثبت مشخصات روحانی کاروان</button>
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card rowhani -->


                <!-- connect detail رابط ثبت نام -->
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-tools float-left">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <h3 class="card-title float-right">مشخصات رابط پذیرش و ثبت نام کاروان</h3>
                    </div>
                    <div class="card-body text-right" dir="rtl">
                        <h4 class="card-title float-right text-danger">غیراز ایمیل، سایر فیلدها لزوما باید تکمیل گردد</h4>
                        <br />
                        <form id="caravan_connect_detail">
                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="connect_name" class="form-label">نام رابط پذیرش و ثبت نام کاروان
                                    @if($caravan_data-> connect_name != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> connect_name }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="connect_name">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="connect_family" class="form-label">نام خانوادگی رابط پذیرش و ثبت نام کاروان
                                    @if($caravan_data-> connect_family != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> connect_family }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="connect_family">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="connect_fathername" class="form-label">نام پدر رابط پذیرش و ثبت نام کاروان
                                    @if($caravan_data-> connect_fathername != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> connect_fathername }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="connect_fathername">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="connect_sex" class="form-label">جنسیت رابط پذیرش و ثبت نام کاروان
                                    @if($caravan_data-> connect_sex != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> connect_sex }}</span>
                                    @endif
                                </label>
                                <select class="form-control" aria-label="Default select example" name="connect_sex">
                                    <option value="0" selected>انتخاب کنید</option>
                                    <option>مذکر</option>
                                    <option>مونث</option>
                                </select>
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="connect_melli" class="form-label">کد ملی رابط پذیرش و ثبت نام کاروان
                                    @if($caravan_data-> connect_melli != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> connect_melli }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="connect_melli">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="connect_shenasname" class="form-label">شماره شناسنامه رابط پذیرش و ثبت نام کاروان
                                    @if($caravan_data-> connect_shenasname != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> connect_shenasname }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="connect_shenasname">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="connect_birthdate" class="form-label">تاریخ تولد رابط پذیرش و ثبت نام کاروان
                                    @if($caravan_data-> connect_birthdate != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> connect_birthdate }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="connect_birthdate" data-jdp>
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="connect_mobile" class="form-label">شماره همراه رابط پذیرش و ثبت نام کاروان
                                    @if($caravan_data-> connect_mobile != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> connect_mobile }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="connect_mobile">
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="connect_edu" class="form-label">تحصیلات رابط پذیرش و ثبت نام کاروان
                                    @if($caravan_data-> connect_education != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> connect_education }}</span>
                                    @endif
                                </label>
                                <select class="form-control" aria-label="Default select example" name="connect_edu">
                                    <option value="0" selected>انتخاب کنید</option>
                                    <option>کمتر از دیپلم</option>
                                    <option>دیپلم</option>
                                    <option>فوق دیپلم</option>
                                    <option>لیسانس</option>
                                    <option>فوق لیسانس</option>
                                    <option>دکتری</option>
                                </select>
                            </div>

                            <div class="col-lg-4 md-4 justify-content-center">
                                <label for="connect_email" class="form-label">ایمیل رابط پذیرش و ثبت نام کاروان (اختیاری)
                                    @if($caravan_data-> connect_email != '0')
                                    <span class="text-primary mx-2">{{ $caravan_data-> connect_email }}</span>
                                    @endif
                                </label>
                                <input type="text" class="form-control" name="connect_email">
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" id="caravan_connect_reg">تایید نهایی و ثبت مشخصات رابط پذیرش کاروان</button>
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card connect -->


        </div><!-- /.container-fluid -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            نسخه 1.0.0
        </div>
        طراحی و پیاده سازی: جمعیت خدمتگزاران زائرین پیاده حضرت علی این موسی الرضا (ع)
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <!-- Notif -->
    <script src="{{ asset('assets/dist/js/notiflix-aio.min.js') }}"></script>
    <!-- Send data -->
    <script src="{{ asset('assets/dist/js/senddata.js') }}"></script>

    <script>
        jalaliDatepicker.startWatch();


            
        
    </script>
</body>

</html>