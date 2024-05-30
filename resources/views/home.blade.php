<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>سامانه مدیریت کاروان ها | پنل اسکان</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
                <span class="brand-text font-weight-light text-center">پنل اسکان</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 mb-3 text-center">
                    <div class="info text-center">
                        <a href="#" class="text-center">جناب آقای {{ $home_data->home_admin_family }} خوش آمدید</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="home" class="nav-link active">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    صفحه اصلی
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
                                <li class="breadcrumb-item active">مشخصات اسکان</li>
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

                <!-- Default box -->
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-tools float-left">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <h3 class="card-title float-right">مشخصات مدیر اسکان</h3>
                    </div>
                    <div class="card-body text-right" dir="rtl">

                        <div class="row">
                            <p class="mx-3">شناسه انحصاری اسکان:</p>
                            <p>@php echo strtoupper($home_data->home_UUID) @endphp</p>
                        </div>

                        <div class="row">
                            <p class="mx-3">شماره پرونده اسکان:</p>
                            <p>@php echo strtoupper($home_data->home_human_id) @endphp</p>
                        </div>

                        <div class="row">
                            <p class="mx-3">آدرس اسکان:</p>
                            <p>{{ $home_data -> home_address }}</p>
                        </div>

                        <div class="row">
                            <p class="mx-3">ظرفیت اسکان برادران:</p>
                            <p>{{ $home_data -> home_capacity_man }}</p>
                        </div>

                        <div class="row">
                            <p class="mx-3">ظرفیت اسکان خواهران:</p>
                            <p>{{ $home_data -> home_capacity_woman }}</p>
                        </div>

                        <div class="row">
                            <p class="mx-3">نام و نام خانوادگی مدیر اسکان:</p>
                            <p>{{ $home_data -> home_admin_name }} {{ $home_data -> home_admin_family }}</p>
                        </div>

                        <div class="row">
                            <p class="mx-3">شماره همراه مدیر اسکان:</p>
                            <p>{{ $home_data -> home_admin_mobile }}</p>
                        </div>
                    </div>
                </div>
                <!-- /.card -->


                <!-- ServantTableCard -->

                <div class="card">
                    <div class="card-header bg-warning">
                        <div class="card-tools float-left">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <h3 class="card-title float-right">مشخصات خادمین اسکان</h3>
                    </div>
                    <div class="card-body text-right" dir="rtl">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>شماره همراه</th>
                                        <th>سمت</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($servant_data as $index)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $index -> name }} {{ $index -> family }}</td>
                                        <td>{{ $index -> mobile }}</td>
                                        <td>{{ $index -> role }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ServantTableCard -->



                <div class="card">
                    <div class="card-header bg-success">
                        <div class="card-tools float-left">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <h3 class="card-title float-right">مشخصات زائرین اسکان (به ترتیب حروف الفبا)</h3>
                    </div>
                    <div class="card-body text-right" dir="rtl">
                        <div class="table-responsive">

                            <!-- ex table -->
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>شماره موبایل</th>
                                        <td>نمایش جزئیات</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($pilgrim_data as $index)

                                    <tr onclick="getPilgrimData('{{ $index -> pilgrim_caravan_UUID }}', '{{ $loop->iteration }}')" data-widget="expandable-table" id="u0{{ $loop->iteration }}" aria-expanded="false">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $index -> pilgrim_name }} {{ $index -> pilgrim_family }}</td>
                                        <td>{{ $index -> pilgrim_mobile }}</td>
                                        <td>نمایش</td>
                                    </tr>
                                    <tr class="expandable-body js-element{{ $loop->iteration }}">
                                        <td colspan="5">
                                            <p id="user0{{ $loop->iteration }}" is-exp="0">
                                                &nbsp;
                                            </p>
                                            <p class="text-primary" id="auser0{{ $loop->iteration }}">
                                                <strong>
                                                <br />
                                                &nbsp;
                                                <br />
                                                </strong>
                                            </p>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- ex /table -->
                        </div>
                    </div>

                </div>
                <!-- /.card -->
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
    <script src="{{ asset('assets/dist/js/showData.js') }}"></script>


    <script>
        jalaliDatepicker.startWatch();
    </script>
</body>


</html>