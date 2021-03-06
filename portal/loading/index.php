
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Landrick - Components</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Admin Dashboard Template" />
    <meta name="keywords" content="Saas, CRM, Admin, Dashboard, Modern, Classic" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v3.8.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- simplebar -->
    <link href="assets/css/simplebar.css" rel="stylesheet" type="text/css" />

    <!-- Icons -->
    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/tabler-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://unicons.iconscout.com/release/v3.0.6/css/line.css"  rel="stylesheet">
    <!-- Css -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />

</head>

<body>
<!-- Loader -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader -->

<div class="page-wrapper landrick-theme">
    <!-- sidebar-wrapper  -->

    <!-- Start Page Content -->
    <main class="page-content bg-light">
        <div class="top-header">
            <div class="header-bar d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <a href="#" class="logo-icon me-3">
                        <img src="assets/images/logo-icon.png" height="30" class="small" alt="">
                        <span class="big">
                                    <img src="assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                                    <img src="assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
                                </span>
                    </a>
                    <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                    <div class="search-bar p-0 d-none d-md-block ms-2">
                        <div id="search" class="menu-search mb-0">
                            <form role="search" method="get" id="searchform" class="searchform">
                                <div>
                                    <input type="text" class="form-control border rounded" name="s" id="s" placeholder="Search Keywords...">
                                    <input type="submit" id="searchsubmit" value="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <ul class="list-unstyled mb-0">
                    <li class="list-inline-item mb-0">
                        <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <div class="btn btn-icon btn-soft-light"><i class="ti ti-settings"></i></div>
                        </a>
                    </li>

                    <li class="list-inline-item mb-0 ms-1">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-icon btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-bell"></i></button>
                            <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>

                            <div class="dropdown-menu dd-menu bg-white shadow rounded border-0 mt-3 p-0" data-simplebar style="height: 320px; width: 290px;">
                                <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                                    <h6 class="mb-0 text-dark">Notifications</h6>
                                    <span class="badge bg-soft-danger rounded-pill">3</span>
                                </div>
                                <div class="p-3">
                                    <a href="#!" class="dropdown-item features feature-primary key-feature p-0">
                                        <div class="d-flex align-items-center">
                                            <div class="icon text-center rounded-circle me-2">
                                                <i class="ti ti-shopping-cart"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-dark title">Order Complete</h6>
                                                <small class="text-muted">15 min ago</small>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/client/04.jpg" class="avatar avatar-md-sm rounded-circle border shadow me-2" alt="">
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-dark title"><span class="fw-bold">Message</span> from Luis</h6>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="icon text-center rounded-circle me-2">
                                                <i class="ti ti-currency-dollar"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-dark title"><span class="fw-bold">One Refund Request</span></h6>
                                                <small class="text-muted">2 hour ago</small>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="icon text-center rounded-circle me-2">
                                                <i class="ti ti-truck-delivery"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-dark title">Deliverd your Order</h6>
                                                <small class="text-muted">Yesterday</small>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/client/15.jpg" class="avatar avatar-md-sm rounded-circle border shadow me-2" alt="">
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-dark title"><span class="fw-bold">Cally</span> started following you</h6>
                                                <small class="text-muted">2 days ago</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="list-inline-item mb-0 ms-1">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/client/05.jpg" class="avatar avatar-ex-small rounded" alt=""></button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                                    <img src="assets/images/client/05.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                    <div class="flex-1 ms-2">
                                        <span class="d-block">Cristina Julia</span>
                                        <small class="text-muted">UI / UX Designer</small>
                                    </div>
                                </a>
                                <a class="dropdown-item text-dark" href="index.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span> Dashboard</a>
                                <a class="dropdown-item text-dark" href="profile.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span> Profile</a>
                                <a class="dropdown-item text-dark" href="email.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-mail"></i></span> Email</a>
                                <div class="dropdown-divider border-top"></div>
                                <a class="dropdown-item text-dark" href="lock-screen.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-lock"></i></span> Lockscreen</a>
                                <a class="dropdown-item text-dark" href="login.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container-fluid">
            <div class="layout-specing">
                <div class="d-md-flex justify-content-between align-items-center">
<!--                    <h5 class="mb-0">Components</h5>-->
                </div>

                <div class="row">
                    <div class="col-lg-3 col-12 mt-4">
                        <div class="card shadow rounded border-0 overflow-hidden">
                            <img src="assets/images/blog/01.jpg" class="img-fluid" alt="">
                            <div class="card-body">
                                <h5 class="card-title">music </h5>
                                <p class="text-muted">sambil nunggu putra putrinya silahkan nikmati music dulu</p>
                                <div class="btn-group dropdown-primary me-2 mt-2">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        yuk dengerin
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="https://www.youtube.com/results?search_query=indonesia+playlist+song" class="dropdown-item">Indonesia</a>
                                        <a href="javascript:void(0)" class="dropdown-item">Barat</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-12 mt-4">
                        <div class="card shadow rounded border-0 overflow-hidden">
                            <img src="assets/images/blog/01.jpg" class="img-fluid" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Saas & Software : Landrick</h5>
                                <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance</p>
                                <a href="javascript:void(0)" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-12 mt-4">
                        <div class="card shadow rounded border-0 overflow-hidden">
                            <img src="assets/images/blog/01.jpg" class="img-fluid" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Saas & Software : Landrick</h5>
                                <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance</p>
                                <a href="javascript:void(0)" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-12 mt-4">
                        <div class="card shadow rounded border-0 overflow-hidden">
                            <img src="assets/images/blog/01.jpg" class="img-fluid" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Saas & Software : Landrick</h5>
                                <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance</p>
                                <a href="javascript:void(0)" class="text-primary">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div>
            </div>
        </div><!--end container-->

        <!-- Footer Start -->
        <footer class="bg-white shadow py-3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="text-sm-start text-center">
                            <p class="mb-0 text-muted">?? <script>document.write(new Date().getFullYear())</script> Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->
    </main>
    <!--End page-content" -->
</div>
<!-- page-wrapper -->

<!-- Offcanvas Start -->
<div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom">
        <h5 id="offcanvasRightLabel" class="mb-0">
            <img src="assets/images/logo-dark.png" height="24" class="light-version" alt="">
            <img src="assets/images/logo-light.png" height="24" class="dark-version" alt="">
        </h5>
        <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="mdi mdi-close fs-4"></i></button>
    </div>
    <div class="offcanvas-body p-4 px-md-5">
        <div class="row">
            <div class="col-12">
                <!-- Style switcher -->
                <div id="style-switcher">
                    <div>
                        <ul class="text-center list-unstyled mb-0">
                            <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="assets/images/demos/rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">RTL Version</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme('style')"><img src="assets/images/demos/ltr.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">LTR Version</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="assets/images/demos/dark-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">RTL Version</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme('style-dark')"><img src="assets/images/demos/dark.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">LTR Version</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark')"><img src="assets/images/demos/dark.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">Dark Version</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style')"><img src="assets/images/demos/ltr.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">Light Version</span></a></li>
                            <li class="d-grid"><a href="../landing/index.html" target="_blank" class="mt-4"><img src="assets/images/demos/landing.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">Landing Demos</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end Style switcher -->
            </div><!--end col-->
        </div>
    </div>

    <div class="offcanvas-footer p-3 border-top text-center">
        <ul class="list-unstyled social-icon mb-0">
            <li class="list-inline-item mb-0"><a href="https://1.envato.market/4n73n" target="_blank" class="rounded"><i class="ti ti-shopping-cart align-middle" title="Buy Now"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="ti ti-brand-dribbble align-middle" title="dribbble"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="ti ti-brand-facebook align-middle" title="facebook"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="ti ti-brand-instagram align-middle" title="instagram"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i class="ti ti-brand-twitter align-middle" title="twitter"></i></a></li>
            <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i class="ti ti-mail align-middle" title="email"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank" class="rounded"><i class="ti ti-world align-middle" title="website"></i></a></li>
        </ul><!--end icon-->
    </div>
</div>
<!-- Offcanvas End -->

<!-- javascript -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- simplebar -->
<script src="assets/js/simplebar.min.js"></script>
<!-- Icons -->
<script src="assets/js/feather.min.js"></script>
<!-- Main Js -->
<script src="assets/js/plugins.init.js"></script>
<script src="assets/js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>