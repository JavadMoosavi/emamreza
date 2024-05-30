<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>سامانه مدیریت کاروان ها | پنل مدیریت</title>

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
                    <a href="admin" class="nav-link">صفحه اصلی</a>
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
                <span class="brand-text font-weight-light text-center">پنل مدیریت</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 mb-3 text-center">
                    <div class="info text-center">
                        <a href="#" class="text-center">جناب آقای خوش آمدید</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="./home" class="nav-link active">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    صفحه اصلی
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="discount" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    کاروان ها
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-coins"></i>
                                <p>
                                    اسکان ها
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/pilgrimRegister" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    مشخصات زائرین
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
                                <li class="breadcrumb-item"><a href="../admin">صفحه اصلی</a></li>
                                <li class="breadcrumb-item"><a href="#">مدیریت اسکان ها</a></li>
                            </ol>
                        </div>
                        <div class="col-sm-6 float-right">
                            <h1 class="float-sm-right">پنل مدیریت</h1>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-tools float-left">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <h3 class="card-title float-right">مشاهده و ویرایش مشخصات اسکان ها</h3>
                    </div>

                    <div class="card-body text-right" dir="rtl">
                        <div class="d-flex">
                            <p>جهت مشاهده و ویرایش مشخصات کاروان، کد ملی زائر را وارد نمایید</p>
                        </div>

                        <div class="col-lg-8 md-8 justify-content-center mb-2">
                            <div class="row mt-3 col-lg-4 md-4">
                                <label for="pilgrim_melli" class="form-label text-danger">کد ملی زائر</label>
                                <input type="text" class="form-control" name="pilgrim_melli" id="pilgrim_melli" autocomplete="false">
                            </div>

                            <div class="row mt-3">
                                <p class="mx-3">شناسه کاروان ثبت نام کننده:</p>
                                <p id="carvan_id" style="text-transform: uppercase; font-weight: bold;"></p>
                            </div>

                            <div class="row">
                                <p class="mx-3">نام کاروان ثبت نام کننده:</p>
                                <p id="carvan_name" style="text-transform: uppercase; font-weight: bold;"></p>
                            </div>

                            <div class="row">
                                <p class="mx-3">شناسه اسکان زائر:</p>
                                <p id="home_id" style="text-transform: uppercase; font-weight: bold;"></p>
                            </div>

                            <div class="row">
                                <p class="mx-3">نام مرکز اسکان زائر:</p>
                                <p id="home_name" style="text-transform: uppercase; font-weight: bold;"></p>
                            </div>

                            <input type="button" class="btn btn-danger my-3" value="حذف زائر از کاروان" id="freePilgrimCaravan" />
                            <input type="button" class="btn btn-warning my-3" value="حذف زائر از اسکان" id="freePilgrimHome" />

                        </div>
                        <hr />
                        <form id="pilgrimData">
                            <!-- Hidden Values -->
                            <input type="hidden" name="puid" id="puid" />
                            <input type="hidden" name="pilgrim_mid" id="pilgrim_mid" />
                            <!-- Hidden Values -->

                            <div class="col-lg-6 md-6 justify-content-center">
                                <div class="col-lg-4 md-4 justify-content-center">
                                    <label for="pilgrim_name" class="form-label">* نام زائر</label>
                                    <input type="text" class="form-control" name="pilgrim_name" id="pilgrim_name">
                                </div>
                            </div>

                            <div class="col-lg-6 md-6 justify-content-center">
                                <div class="col-lg-4 md-4 justify-content-center">
                                    <label for="pilgrim_family" class="form-label">* نام خانوادگی زائر</label>
                                    <input type="text" class="form-control" name="pilgrim_family" id="pilgrim_family">
                                </div>
                            </div>

                            <div class="col-lg-6 md-6 justify-content-center">
                                <div class="col-lg-4 md-4 justify-content-center">
                                    <label for="pilgrim_sex" class="form-label">* جنسیت زائر</label>
                                    <select class="form-control" aria-label="Default select example" id="pilgrim_sex" name="pilgrim_sex">
                                        <option>مذکر</option>
                                        <option>مونث</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 md-6 justify-content-center">
                                <div class="col-lg-4 md-4 justify-content-center">
                                    <label for="pilgrim_fathername" class="form-label">* نام پدر زائر</label>
                                    <input type="text" class="form-control" id="pilgrim_fathername" name="pilgrim_fathername">
                                </div>
                            </div>

                            <div class="col-lg-6 md-6 justify-content-center">
                                <div class="col-lg-4 md-4 justify-content-center">
                                    <label for="pilgrim_shenasname" class="form-label">* شماره شناسنامه زائر</label>
                                    <input type="text" class="form-control" id="pilgrim_shenasname" name="pilgrim_shenasname">
                                </div>
                            </div>

                            <div class="col-lg-6 md-6 justify-content-center">
                                <div class="col-lg-4 md-4 justify-content-center">
                                    <label for="pilgrim_mobile" class="form-label">* شماره موبایل زائر</label>
                                    <input type="text" class="form-control" id="pilgrim_mobile" name="pilgrim_mobile">
                                </div>
                            </div>

                            <div class="col-lg-6 md-6 justify-content-center">
                                <div class="col-lg-4 md-4 justify-content-center">
                                    <label for="pilgrim_birthdate" class="form-label">* تاریخ تولد زائر</label>
                                    <input type="text" class="form-control" id="pilgrim_birthdate" name="pilgrim_birthdate" data-jdp>
                                </div>
                            </div>



                            <div class="col-lg-6 md-6 justify-content-center">
                                <div class="col-lg-4 md-4 justify-content-center">
                                    <label for="pilgrim_education" class="form-label">* تحصیلات زائر</label>
                                    <select class="form-control" aria-label="Default select example" name="pilgrim_education" id="pilgrim_education">
                                        <option>کمتر از دیپلم</option>
                                        <option>دیپلم</option>
                                        <option>فوق دیپلم</option>
                                        <option>لیسانس</option>
                                        <option>فوق لیسانس</option>
                                        <option>دکتری</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 md-6 justify-content-center">
                                <div class="col-lg-4 md-4 justify-content-center">
                                    <label for="pilgrim_email" class="form-label">ایمیل زائر</label>
                                    <input type="text" class="form-control" id="pilgrim_email" name="pilgrim_email">
                                </div>
                            </div>

                            <input type="button" class="btn btn-primary my-3" value="تایید و به روز رسانی مشخصات زائر" id="updatePilgrim" />
                        </form>
                    </div>
                </div>
                <!-- /.card -->
        </div>
        <!-- /.container-fluid -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            نسخه 1.0.0
        </div>
        طراحی و پیاده سازی: جمعیت خدمتگزاران زائرین پیاده حضرت علی ابن موسی الرضا (ع)
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
    <script src="{{ asset('assets/dist/js/admin_senddata.js') }}"></script>

    <script>
        jalaliDatepicker.startWatch();
    </script>
</body>

</html>