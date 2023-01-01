<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Project Overview - MAWJA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/mawja22.png')}}">

        <link href="{{asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

        <!-- dropzone css -->
        <link href="{{asset('assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/logo.svg')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/logo-light.svg')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="50">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>


                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small" key="t-view-all"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-your-order">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="{{asset('assets/images/users/avatar-3.jpg')}}"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-shipped">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="{{asset('assets/images/users/avatar-4.jpg')}}"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/avatar-1.jpg')}}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header>


            <!-- ========== Left Sidebar Start ========== -->
            @include('layout.sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Project Overview</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Project</a></li>
                                            <li class="breadcrumb-item active">Project Overview</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-4">
                                                <img src="{{asset('assets/images/companies/img-1.png')}}" alt="" class="avatar-sm">
                                            </div>

                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="text-truncate font-size-15">{{$projects->name}}</h5>
                                                <p class="text-muted">Separate existence is a myth. For science, music, sport, etc.</p>
                                            </div>
                                        </div>

                                        <h5 class="font-size-15 mt-4">Project Details :</h5>

                                        <p class="text-muted">{{$projects->description}}</p>



                                        <div class="row task-dates">
                                            <div class="col-sm-4 col-6">
                                                <div class="mt-4">
                                                    <h5 class="font-size-14"><i class="bx bx-calendar me-1 text-primary"></i> Start Date</h5>
                                                    <p class="text-muted mb-0">{{$projects->start}}</p>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 col-6">
                                                <div class="mt-4">
                                                    <h5 class="font-size-14"><i class="bx bx-calendar-check me-1 text-primary"></i> Due Date</h5>
                                                    <p class="text-muted mb-0">{{$projects->End}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Team Members</h4>

                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50px;"><img src="{{asset(Storage::url($projects->Worker->image))}}" class="rounded-circle avatar-xs" alt=""></td>
                                                        <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">{{$projects->Worker->name}}</a></h5></td>
                                                        <td>
                                                            <div>
                                                                <a href="javascript: void(0);" class="badge bg-primary bg-soft text-primary font-size-11">{{$projects->Worker->job}}</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Similar works</h4>

                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <!-- <td style="width: 50px;"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt=""></td> -->
                                                        <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">{{$projects->file}}</a></h5></td>
                                                        <td>
                                                            <div class="text-center">
                                                              <form class="" action="{{route('projects.destroy',[$projects->id])}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <a href="/projects/{{$projects->id}}/edit" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                  <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                                &nbsp;
                                                                <button class="btn btn-outline-secondary btn-sm delete" title="Delete" type="submit">
                                                                  <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                                &nbsp;
                                                                <a href="javascript: void(0);" class="text-dark"><i class="bx bx-download h3 m-0" title="Download"></i></a>

                                                              </form>


                                                            </div>
                                                        </td>
                                                    </tr>


18-40

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <!-- <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Overview</h4>

                                        <div id="overview-chart" class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- end col -->



                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Attached Files</h4>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap align-middle table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 45px;">
                                                            <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-24">
                                                                    <i class="bx bxs-file-doc"></i>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">Skote Landing.Zip</a></h5>
                                                            <small>Size : 3.25 MB</small>
                                                        </td>
                                                        <td>
                                                            <div class="text-center">

                                                                <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                                &nbsp;
                                                                <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </a>
                                                                &nbsp;
                                                                <a href="javascript: void(0);" class="text-dark"><i class="bx bx-download h3 m-0" title="Download"></i></a>

                                                            </div>

                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                            <div class="text-center mt-4 pt-2">
                                                <a href="/add-work/{{$projects->id}}" class="btn btn-info btn-sm">  <i class="mdi mdi-plus me-1"></i>Add Work</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->


                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-5"> Timeline Project</h4>
                                        <div class="">
                                            <ul class="verti-timeline list-unstyled">
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle bx-fade-right"></i>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <i class="bx bx-copy-alt h2 text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5>Start the project </h5>
                                                                <!-- <p class="text-muted">New common language will be more simple and regular than the existing.</p> -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle"></i>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <i class="bx bx-desktop h2 text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5>Project under construction</h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="event-list active">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle"></i>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <i class="bx bx-package h2 text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5>Preparing the project for delivery</h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle"></i>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <i class="bx bx-badge-check h2 text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5>Project delivered</h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->




                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © MAWJA.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by MAWJA
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">

                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                        <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>


                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <script src="{{asset('assets/js/pages/project-overview.init.js')}}"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
