<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover">

<head>

    <meta charset="utf-8" />
    <title>Simba car hire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <!--<link rel="shortcut icon" href="{{url('assets')}}/images/favicon.ico">-->

    <!-- jsvectormap css -->
    <link href="{{url('assets')}}/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{url('assets')}}/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script href="{{url('assets')}}/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{url('assets')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('assets')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('assets')}}/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{url('assets')}}/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!--    my style-->
    <link href="{{url('assets')}}/css/my-style.css" rel="stylesheet" type="text/css" />
    <!-- Data table css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- Data table Js -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">

    <!-- Date Range Picker -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <style>
        body{
            font-family: 'Raleway', sans-serif!important;
        }
        [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu .btn-vertical-sm-hover {
            display: inline-block!important;
        }
        [data-layout=vertical][data-sidebar-size=sm-hover] .navbar-menu:hover {
            width: 250px!important;
        }

    .table>tbody {
        text-align: center;
    }

    .table>thead {
        text-align: center;
    }

    .breakLineStyle {
        border: 1px solid white;

    }

    .dropdown-menu.show{
        left: 0!important;
        width: 0!important;
    }

    .table-responsive{
           padding:15px;
    }

    table.dataTable thead th, table.dataTable thead td {
    padding: 10px 18px;
    border-bottom: 1px solid #ccc;
}

tbody, td, tfoot, th, thead, tr{
    border-color: #ccc;
    border-style: solid;
    border-width: 0;
}

table.dataTable.no-footer {
    border-bottom: 1px solid #fff;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{
    color: white !important;
    border: 1px solid #5ea3cb;
    background: linear-gradient(to bottom, #5ea3cb 0%, #5ea3cb 100%);
}
.dataTables_wrapper .dataTables_filter input{
    border: 2px solid #5ea3cb;
}
    .dataTables_wrapper .dataTables_length select{
        border: 2px solid #5ea3cb;

    }
    .bg-light{
        background-color: #5ea3cb!important;
    }

    .modal-title{
        color:white;
    }

    .card-title {
        font-size: 16px;
        margin: 0 0 7px 0;
        background: #5ea3cb;
        color: white;
        padding: 8px;
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
        width: fit-content;
        position: relative;
        left: -16px;
    }
    .dropdown-menu.show {
        left: -21px!important;
        width: 0!important;
    }
    .dropdown-item{
        padding: 0.35rem 7px;
    }

.car-body .card-title{
    width: auto;
    position: static;
    color:black;
    border-radius: 0;
    background-color: white;

}

    .form-control {
        background-color: #e5e9ff!important;
        border-radius: 3px!important;
        border: 2px solid #9999!important;
        padding: 10px;
        color: #666666!important;
    }
    .form-select{
        background-color: #e5e9ff!important;
        border-radius: 3px!important;
        border: 2px solid #9999!important;
        padding: 10px;
        color: #666666!important;
    }

    .sec label, .four label, .five label {
        font-size: 14px!important;
        font-weight: 600;
    }
    .form-label{
        font-weight: 600;
    }
        table.dataTable thead .sorting{
            background-color: #d8deff;
            color: black;
        }
        .btn-primary {
            color: #fff;
            background-color: #283891;
            border-color: #ffffff;
            padding: 10px!important;
            border-bottom: none;
        }
        .card-title{
            background: #283891;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            color: white !important;
            border: 1px solid #283891;
            background: linear-gradient(to bottom, #283891 0%, #283891 100%);
        }
        .dataTables_wrapper .dataTables_filter input {
            border: 2px solid #283891;
        }
        .dataTables_wrapper .dataTables_length select {
            border: 2px solid #283891;
        }

        .dataTables_wrapper .ri-eye-fill{
            color:#283891;
        }
        .dataTables_wrapper .ri-pencil-fill{
            color:#283891;
        }

        .btn-primary:hover{
            background-color: #283891;
            border-color: #283891;
            padding:10px!important;
            border-bottom: none;
        }

        .ribbon-box .ribbon-primary {
            background: #283891;
        }

    </style>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar" class="">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{url('assets')}}/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{url('assets')}}/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>
                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{url('assets')}}/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{url('assets')}}/images/logo-light.png" alt="" height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon open">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" autocomplete="off" id="search-options" value=""
                                    style="display: none">
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                    id="search-close-options"></span>

{{--                                <select name="" class="form-control">--}}
{{--                                    <option value="">All Branch</option>--}}
{{--                                    <option value="">Adelaide</option>--}}
{{--                                    <option value="">Sydney</option>--}}
{{--                                </select>--}}
                            </div>
                            <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                <div data-simplebar="init" style="max-height: 320px;">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                    aria-label="scrollable content"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <!-- item-->
                                                        <div class="dropdown-header">
                                                            <h6 class="text-overflow text-muted mb-0 text-uppercase">
                                                                Recent Searches</h6>
                                                        </div>

                                                        <div class="dropdown-item bg-transparent text-wrap">
                                                            <a href="index.html"
                                                                class="btn btn-soft-secondary btn-sm btn-rounded">how to
                                                                setup <i class="mdi mdi-magnify ms-1"></i></a>
                                                            <a href="index.html"
                                                                class="btn btn-soft-secondary btn-sm btn-rounded">buttons
                                                                <i class="mdi mdi-magnify ms-1"></i></a>
                                                        </div>
                                                        <!-- item-->
                                                        <div class="dropdown-header mt-2">
                                                            <h6 class="text-overflow text-muted mb-1 text-uppercase">
                                                                Pages</h6>
                                                        </div>

                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <i
                                                                class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                                            <span>Analytics Dashboard</span>
                                                        </a>

                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <i
                                                                class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                                            <span>Help Center</span>
                                                        </a>

                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <i
                                                                class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                                            <span>My account settings</span>
                                                        </a>

                                                        <!-- item-->
                                                        <div class="dropdown-header mt-2">
                                                            <h6 class="text-overflow text-muted mb-2 text-uppercase">
                                                                Members</h6>
                                                        </div>

                                                        <div class="notification-list">
                                                            <!-- item -->
                                                            <a href="javascript:void(0);"
                                                                class="d-flex dropdown-item notify-item py-2">
                                                                <img src="{{url('assets')}}/images/users/avatar-2.jpg"
                                                                    class="me-3 rounded-circle avatar-xs"
                                                                    alt="user-pic">
                                                                <div class="flex-1">
                                                                    <h6 class="m-0">Angela Bernier</h6>
                                                                    <span class="fs-13 mb-0 text-muted">Manager</span>
                                                                </div>
                                                            </a>
                                                            <!-- item -->
                                                            <a href="javascript:void(0);"
                                                                class="d-flex dropdown-item notify-item py-2">
                                                                <img src="{{url('assets')}}/images/users/avatar-3.jpg"
                                                                    class="me-3 rounded-circle avatar-xs"
                                                                    alt="user-pic">
                                                                <div class="flex-1">
                                                                    <h6 class="m-0">David Grasso</h6>
                                                                    <span class="fs-13 mb-0 text-muted">Web
                                                                        Designer</span>
                                                                </div>
                                                            </a>
                                                            <!-- item -->
                                                            <a href="javascript:void(0);"
                                                                class="d-flex dropdown-item notify-item py-2">
                                                                <img src="{{url('assets')}}/images/users/avatar-5.jpg"
                                                                    class="me-3 rounded-circle avatar-xs"
                                                                    alt="user-pic">
                                                                <div class="flex-1">
                                                                    <h6 class="m-0">Mike Bunch</h6>
                                                                    <span class="fs-13 mb-0 text-muted">React
                                                                        Developer</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div>

                                <div class="text-center pt-3 pb-1">
                                    <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results
                                        <i class="ri-arrow-right-line ms-1"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>






                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-toggle="fullscreen">
                                <i class="bx bx-fullscreen fs-22"></i>
                            </button>
                        </div>



{{--                        <div class="dropdown topbar-head-dropdown ms-1 header-item">--}}
{{--                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"--}}
{{--                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"--}}
{{--                                aria-expanded="false">--}}
{{--                                <i class='bx bx-bell fs-22'></i>--}}
{{--                                <span--}}
{{--                                    class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span--}}
{{--                                        class="visually-hidden">unread messages</span></span>--}}
{{--                            </button>--}}
{{--                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"--}}
{{--                                aria-labelledby="page-header-notifications-dropdown">--}}

{{--                                <div class="dropdown-head bg-primary bg-pattern rounded-top">--}}
{{--                                    <div class="p-3">--}}
{{--                                        <div class="row align-items-center">--}}
{{--                                            <div class="col">--}}
{{--                                                <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-auto dropdown-tabs">--}}
{{--                                                <span class="badge badge-soft-light fs-13"> 4 New</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="px-2 pt-2">--}}
{{--                                        <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true"--}}
{{--                                            id="notificationItemsTab" role="tablist">--}}
{{--                                            <li class="nav-item waves-effect waves-light">--}}
{{--                                                <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab"--}}
{{--                                                    role="tab" aria-selected="true">--}}
{{--                                                    All (4)--}}
{{--                                                </a>--}}
{{--                                            </li>--}}

{{--                                        </ul>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div class="tab-content" id="notificationItemsTabContent">--}}
{{--                                    <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">--}}
{{--                                        <div data-simplebar style="max-height: 300px;" class="pe-2">--}}
{{--                                            <div--}}
{{--                                                class="text-reset notification-item d-block dropdown-item position-relative">--}}
{{--                                                <div class="d-flex">--}}
{{--                                                    <div class="avatar-xs me-3">--}}
{{--                                                        <span--}}
{{--                                                            class="avatar-title bg-soft-info text-info rounded-circle fs-16">--}}
{{--                                                            <i class="bx bx-badge-check"></i>--}}
{{--                                                        </span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-1">--}}
{{--                                                        <a href="#!" class="stretched-link">--}}
{{--                                                            <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author--}}
{{--                                                                Graphic--}}
{{--                                                                Optimization <span class="text-secondary">reward</span>--}}
{{--                                                                is ready!--}}
{{--                                                            </h6>--}}
{{--                                                        </a>--}}
{{--                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">--}}
{{--                                                            <span><i class="mdi mdi-clock-outline"></i> Just 30 sec--}}
{{--                                                                ago</span>--}}
{{--                                                        </p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="px-2 fs-15">--}}
{{--                                                        <input class="form-check-input" type="checkbox">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div--}}
{{--                                                class="text-reset notification-item d-block dropdown-item position-relative">--}}
{{--                                                <div class="d-flex">--}}
{{--                                                    <img src="{{url('assets')}}/images/users/avatar-2.jpg"--}}
{{--                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">--}}
{{--                                                    <div class="flex-1">--}}
{{--                                                        <a href="#!" class="stretched-link">--}}
{{--                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="fs-13 text-muted">--}}
{{--                                                            <p class="mb-1">Answered to your comment on the cash flow--}}
{{--                                                                forecast's--}}
{{--                                                                graph 🔔.</p>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">--}}
{{--                                                            <span><i class="mdi mdi-clock-outline"></i> 48 min--}}
{{--                                                                ago</span>--}}
{{--                                                        </p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="px-2 fs-15">--}}
{{--                                                        <input class="form-check-input" type="checkbox">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div--}}
{{--                                                class="text-reset notification-item d-block dropdown-item position-relative">--}}
{{--                                                <div class="d-flex">--}}
{{--                                                    <div class="avatar-xs me-3">--}}
{{--                                                        <span--}}
{{--                                                            class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">--}}
{{--                                                            <i class='bx bx-message-square-dots'></i>--}}
{{--                                                        </span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex-1">--}}
{{--                                                        <a href="#!" class="stretched-link">--}}
{{--                                                            <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b--}}
{{--                                                                    class="text-success">20</b> new messages in the--}}
{{--                                                                conversation</h6>--}}
{{--                                                        </a>--}}
{{--                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">--}}
{{--                                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>--}}
{{--                                                        </p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="px-2 fs-15">--}}
{{--                                                        <input class="form-check-input" type="checkbox">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div--}}
{{--                                                class="text-reset notification-item d-block dropdown-item position-relative">--}}
{{--                                                <div class="d-flex">--}}
{{--                                                    <img src="{{url('assets')}}/images/users/avatar-8.jpg"--}}
{{--                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">--}}
{{--                                                    <div class="flex-1">--}}
{{--                                                        <a href="#!" class="stretched-link">--}}
{{--                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="fs-13 text-muted">--}}
{{--                                                            <p class="mb-1">We talked about a project on linkedin.</p>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">--}}
{{--                                                            <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>--}}
{{--                                                        </p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="px-2 fs-15">--}}
{{--                                                        <input class="form-check-input" type="checkbox">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="my-3 text-center">--}}
{{--                                                <button type="button"--}}
{{--                                                    class="btn btn-soft-secondary waves-effect waves-light">View--}}
{{--                                                    All Notifications <i--}}
{{--                                                        class="ri-arrow-right-line align-middle"></i></button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}

{{--                                    <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"--}}
{{--                                        aria-labelledby="messages-tab">--}}
{{--                                        <div data-simplebar style="max-height: 300px;" class="pe-2">--}}
{{--                                            <div class="text-reset notification-item d-block dropdown-item">--}}
{{--                                                <div class="d-flex">--}}
{{--                                                    <img src="{{url('assets')}}/images/users/avatar-3.jpg"--}}
{{--                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">--}}
{{--                                                    <div class="flex-1">--}}
{{--                                                        <a href="#!" class="stretched-link">--}}
{{--                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="fs-13 text-muted">--}}
{{--                                                            <p class="mb-1">We talked about a project on linkedin.</p>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">--}}
{{--                                                            <span><i class="mdi mdi-clock-outline"></i> 30 min--}}
{{--                                                                ago</span>--}}
{{--                                                        </p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="px-2 fs-15">--}}
{{--                                                        <input class="form-check-input" type="checkbox">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="text-reset notification-item d-block dropdown-item">--}}
{{--                                                <div class="d-flex">--}}
{{--                                                    <img src="{{url('assets')}}/images/users/avatar-2.jpg"--}}
{{--                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">--}}
{{--                                                    <div class="flex-1">--}}
{{--                                                        <a href="#!" class="stretched-link">--}}
{{--                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="fs-13 text-muted">--}}
{{--                                                            <p class="mb-1">Answered to your comment on the cash flow--}}
{{--                                                                forecast's--}}
{{--                                                                graph 🔔.</p>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">--}}
{{--                                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>--}}
{{--                                                        </p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="px-2 fs-15">--}}
{{--                                                        <input class="form-check-input" type="checkbox">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="text-reset notification-item d-block dropdown-item">--}}
{{--                                                <div class="d-flex">--}}
{{--                                                    <img src="{{url('assets')}}/images/users/avatar-6.jpg"--}}
{{--                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">--}}
{{--                                                    <div class="flex-1">--}}
{{--                                                        <a href="#!" class="stretched-link">--}}
{{--                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="fs-13 text-muted">--}}
{{--                                                            <p class="mb-1">Mentionned you in his comment on 📃 invoice--}}
{{--                                                                #12501. </p>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">--}}
{{--                                                            <span><i class="mdi mdi-clock-outline"></i> 10 hrs--}}
{{--                                                                ago</span>--}}
{{--                                                        </p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="px-2 fs-15">--}}
{{--                                                        <input class="form-check-input" type="checkbox">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="text-reset notification-item d-block dropdown-item">--}}
{{--                                                <div class="d-flex">--}}
{{--                                                    <img src="{{url('assets')}}/images/users/avatar-8.jpg"--}}
{{--                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">--}}
{{--                                                    <div class="flex-1">--}}
{{--                                                        <a href="#!" class="stretched-link">--}}
{{--                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>--}}
{{--                                                        </a>--}}
{{--                                                        <div class="fs-13 text-muted">--}}
{{--                                                            <p class="mb-1">We talked about a project on linkedin.</p>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">--}}
{{--                                                            <span><i class="mdi mdi-clock-outline"></i> 3 days--}}
{{--                                                                ago</span>--}}
{{--                                                        </p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="px-2 fs-15">--}}
{{--                                                        <input class="form-check-input" type="checkbox">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="my-3 text-center">--}}
{{--                                                <button type="button"--}}
{{--                                                    class="btn btn-soft-success waves-effect waves-light">View--}}
{{--                                                    All Messages <i--}}
{{--                                                        class="ri-arrow-right-line align-middle"></i></button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel"--}}
{{--                                        aria-labelledby="alerts-tab">--}}
{{--                                        <div class="w-25 w-sm-50 pt-3 mx-auto">--}}
{{--                                            <img src="{{url('assets')}}/images/svg/bell.svg" class="img-fluid" alt="user-pic">--}}
{{--                                        </div>--}}
{{--                                        <div class="text-center pb-5 mt-2">--}}
{{--                                            <h6 class="fs-18 fw-semibold lh-base">Hey! You have no any notifications--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{url('assets/images/users/user-dummy-img.jpg')}}" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                                        <span
                                            class="d-none d-xl-block ms-1 fs-13 text-muted user-name-sub-text">Admin</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Anna!</h6>
{{--                                <a class="dropdown-item" href="profile.blade.php"><i--}}
{{--                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span--}}
{{--                                        class="align-middle">Profile</span></a>--}}
{{--                                <a class="dropdown-item" href="add-user.blade.php"><i--}}
{{--                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span--}}
{{--                                        class="align-middle">Add User</span></a>--}}
                                <a class="dropdown-item" href="{{route('addition_options',['edit'])}}">
                                    <i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Additional Options</span></a>
{{--                                <a class="dropdown-item" href="integration.blade.php"><i--}}
{{--                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span--}}
{{--                                        class="align-middle">Integration</span></a>--}}
                                <a class="dropdown-item" href="{{url('admin/logout')}}"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{url('assets')}}/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{url('assets')}}/images/logo.png" alt="" height="17">
                    </span>
                </a>

                <!-- Light Logo-->
                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{url('assets')}}/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{url('assets')}}/images/logo.png" alt="" height="35">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu"></div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu"></span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="las  la-calendar-check"></i> <span data-key="t-dashboards">Rental</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{url('admin/reservations')}}" class="nav-link" data-key="t-analytics"> Reservations
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="return-table-detail.blade.php" class="nav-link" data-key="t-analytics">
                                            Return
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('admin/quotation/view/view-all-quotation')}}" class="nav-link" data-key="t-analytics">
                                            Quotes
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('admin/reservation/payments')}}" class="nav-link" data-key="t-ecommerce"> Payments </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="incident-report-table.blade.php" class="nav-link" data-key="t-crypto">
                                            Incident Report</a>
                                    </li>

                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->
                       <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApps">
                                <i class=" las la-calendar-check"></i> <span data-key="t-apps">Rent to own</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('rto')}}" class="nav-link" data-key="t-analytics"> View RTO
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('rto-quotation',[''])}}" class="nav-link" data-key="t-analytics">
                                            View All Quotations
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="payment-rto.blade.php" class="nav-link" data-key="t-ecommerce"> Payments </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Uber start -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#uber" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="uber">
                                <i class=" las la-car"></i> <span data-key="t-layouts">Uber</span>
                            </a>
                            <div class="collapse menu-dropdown" id="uber">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.uber')}}" class="nav-link" data-key="t-horizontal">View All
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('admin/uber/view/view-all-uber-maintenance')}}" class="nav-link"
                                           data-key="t-detached">Maintenance</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Uber End -->

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class=" las la-car"></i> <span data-key="t-layouts">Fleet</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{url('admin/add_vehicle')}}" class="nav-link" data-key="t-horizontal">Add New</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('admin/vehicles')}}" class="nav-link" data-key="t-horizontal">View All
                                            </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('admin/vehicle/view/view-all-maintenance')}}" class="nav-link"
                                           data-key="t-horizontal">Maintenance</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{url('admin/vehicle/view/commitmentSchedule')}}" class="nav-link"
                                           data-key="t-detached">Commitment Schedule</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#customer" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="  las la-users"></i> <span data-key="t-layouts">Customers</span>
                            </a>
                            <div class="collapse menu-dropdown" id="customer">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{url('admin/add_customer')}}" class="nav-link" data-key="t-horizontal">Add New</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('admin/customers')}}" class="nav-link" data-key="t-horizontal">View
                                            All
                                            </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Driver start -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#driver" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="driver">
                                <i class="  las la-users"></i> <span data-key="t-layouts">Drivers</span>
                            </a>
                            <div class="collapse menu-dropdown" id="driver">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{url('admin/add_driver')}}" class="nav-link" data-key="t-horizontal">Add
                                            Driver</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('admin/drivers')}}" class="nav-link" data-key="t-horizontal">View All
                                            Drivers</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Driver End -->

                        <!--                        User -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#user" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="driver">
                                <i class="  las la-users"></i> <span data-key="t-layouts">Users</span>
                            </a>
                            <div class="collapse menu-dropdown" id="user">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{url('admin/add_users')}}" class="nav-link" data-key="t-horizontal">Add
                                            User</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('admin/users')}}" class="nav-link" data-key="t-horizontal">View All
                                            Users</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!--user end-->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#invoice" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="driver">
                                <i class="  las la-file"></i> <span data-key="t-layouts">Invoice</span>
                            </a>
                            <div class="collapse menu-dropdown" id="invoice">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="invoice.blade.php" class="nav-link" data-key="t-horizontal">View All
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- end Dashboard Menu -->

                    </ul>
                    <hr class="breakLineStyle">
                    <!-- CMS Menu Start -->
                    <ul class="navbar-nav">
                        <li class="menu-title">
                            <span style="font-size:16px;">Web Management</span>
                        </li>
                        <!-- Rental Tab Start -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('admin.viki_rental')}}" role="button">
                                <i class="las  la-calendar-check"></i> <span data-key="t-dashboards">Rental</span>
                            </a>
                        </li>
                        <!-- Rental Tab End -->
                        <!-- Cars tab start -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{route('admin.viki_car')}}" role="button">
                                <i class="las la-car"></i> <span data-key="t-dashboards">Cars</span>
                            </a>
                        </li>
                        <!-- Cars tab end -->
                        <!-- Pricing tab Start-->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#cmsSidebarDashboards" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="las la-money-bill"></i> <span data-key="t-dashboards">Pricing</span>
                            </a>
                            <div class="collapse menu-dropdown" id="cmsSidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('admin.viki_price.fares_table')}}" class="nav-link" data-key="t-analytics"> Fares
                                            Table
                                        </a>
                                    </li>
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="{{route('admin.viki_price.special_price')}}" class="nav-link" data-key="t-analytics">--}}
{{--                                            Special Prices--}}
{{--                                        </a>--}}
{{--                                    </li>--}}

{{--                                    <li class="nav-item">--}}
{{--                                        <a href="{{route('admin.viki_price.dropoff_fees')}}" class="nav-link" data-key="t-ecommerce"> Pickup--}}
{{--                                            Dropoff Fees--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="{{route('admin.viki_price.out_of_hours_fees')}}" class="nav-link" data-key="t-crypto">--}}
{{--                                            Out Off Hours Fees</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="{{route('admin.viki_price.fares_overview')}}" class="nav-link" data-key="t-analytics">--}}
{{--                                            Fares Overview--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                    <li class="nav-item">
{{--                                        <a href="couponsCms.blade.php" class="nav-link" data-key="t-analytics">--}}
{{--                                            Coupons--}}
{{--                                        </a>--}}
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Pricing tab end -->

                    </ul>
                    <!-- CMS Menu End -->
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
