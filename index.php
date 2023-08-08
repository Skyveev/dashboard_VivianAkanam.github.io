<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="">

  <!-- Title -->
  <title>Dashboard</title>
<!--from pages load -->

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">


<!--end from pages load -->
  <!-- Favicon -->
  <link rel="shortcut icon" href="rgu.jpg">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/css/vendor.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.min-v=1.0.css">

  <link rel="preload" href="assets/css/theme.min.css" data-hs-appearance="default" as="style">
  <link rel="preload" href="assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

  <style data-hs-appearance-onload-styles>
    *
    {
      transition: unset !important;
    }

    body
    {
      opacity: 0;
    }
  </style>

  <!-- ONLY DEV -->

  <style>
    body
    {
      opacity: 0;
    }
  </style>

  <!-- END ONLY DEV -->

  <script>
  
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/index.html","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
  }
  throw new Error('Bad Hex');
}
            window.hs_config.gulpDarken = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = -parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            window.hs_config.gulpLighten = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            </script>
</head>

<body class="has-navbar-vertical-aside">

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.stock.min.js"></script>

<script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>

<script src="assets/js/hs.theme-appearance.js"></script>

<script src="assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

<script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>

<script src="https://canvasjs.com/assets/script/jquery-ui.1.11.2.min.js"></script>

<script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>

 










  <!-- ==========bring from page HEADER ========== -->

<div class="preloader">
<div class="container">
<div class="d-table">
<div class="d-table-cell">
<div class="preloader loading">
<span class="slice"></span>
<span class="slice"></span>
<span class="slice"></span>
<span class="slice"></span>
<span class="slice"></span>
<span class="slice"></span>
</div>
</div>
</div>
</div>
</div>

 

<div class="navbar-area">
<div class="main-responsive-nav">
<div class="container">
<div class="main-responsive-menu" >
<div class="logo">
<a href="">
<img src="assets/img/rgu1.jpg" alt="image">
</a>
</div>
</div>
</div>
</div>
<div class="main-navbar pag-nav" >
<div class="container" >
<nav class="navbar  navbar-expand-md navbar-two" >
<a class="navbar-brand" href="">
<img src="assets/img/rgu1.jpg" alt="image">
</a>

<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style=" margin-left: 184px;"  >
<ul class="navbar-nav mr-auto">

<li class="nav-item">
<a href="index.php" class="nav-link">
Dashboard
</a>
</li>

<li class="nav-item">
<a href="../pages/thread.html" class="nav-link">
Threat Intelligence Overview
</a>
</li>

<li class="nav-item">
<a href="../pages/predictive.php" class="nav-link">
  Predictive Analysis
</a>
</li>


<li class="nav-item">
<a href="../pages/summary.html" class="nav-link">
Summary and Heat Map
</a>
</li>
</ul>
</div>
</nav>
</div>
</div>
</div>

  <!-- ========== END from pageHEADER ========== -->



  <!-- End Navbar Vertical -->

  <main id="" role="" class="" style="background-color:lightgrey;">
    <!-- Content -->
    <div class="content container-fluid" >
      <!-- Page Header -->
      <div class="page-header">
       
        <div class="row align-items-center" >
          <div class="col">
           
          </div>
         
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <!-- Stats -->
      <div class="row">
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="../pages/summary.html#m1">
            <div class="card-body">
               <span class="text-body fs-6 ms-1">Percentage of Organization that have had more than one branch</span>

              <div class="row align-items-center gx-2 mb-1">
                 <h1 class="card-title text-inherit" style="font-size: 33px; padding-top: 23px;">83.3%</h1>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </a>
          <!-- End Card -->
        </div>

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <a class="card card-hover-shadow h-100" href="../pages/summary.html#m2">
            <div class="card-body">
               <span class="text-body fs-6 ms-1">Average cost of a critical infrastructure
data breach</span>

              <div class="row align-items-center gx-2 mb-1">
                 <h1 class="card-title text-inherit" style="font-size: 33px; padding-top: 38px;">USD 4.82M</h1>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </a>
          <!-- End Card -->
        </div>


         
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="../pages/summary.html#m3">
            <div class="card-body">
               <span class="text-body fs-6 ms-1">Average cost of a ransomeware attack, not including the cost of the ransom itself</span>

              <div class="row align-items-center gx-2 mb-1">
                 <h1 class="card-title text-inherit" style="font-size: 33px;">USD 4.54M </h1>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </a>
          <!-- End Card -->
        </div>

 <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
          <!-- Card -->
          <a class="card card-hover-shadow h-100" href="../pages/summary.html#m4">
            <div class="card-body">
               <span class="text-body fs-6 ms-1">Average cost of a breach in the United State the highest of any country</span>

              <div class="row align-items-center gx-2 mb-1">
                 <h1 class="card-title text-inherit" style="font-size: 33px; padding-top: 20px;">USD 9.44m</h1>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </a>
          <!-- End Card -->
        </div>


      </div>
      <!-- End Stats -->

      <!-- Card -->
      <div class="card mb-3 mb-lg-5">       
    <div class="row justify-content-between align-items-center flex-grow-1">   
      <!-- End Row -->
        </div>
        <div class="card-footer">
           <?php include('data.php'); ?>
        <div id="chartContainer1" style="height: 390px; width:100%;"></div> 
       
        <div class="close"></div>
        </div>
      </div>
      <!-- End Card -->

  <style>
  .roww:after {
    content: "";
    display: table;
    clear: both;
  }
  .coll {
    float: left;
    width: 33.33%;
    height: 100px;
  }
</style>

 <!-- begin Content -->
      <div class="row">
        <div class="col-lg-6 mb-3 mb-lg-0">
          <!-- Card -->
          <div class="card h-100">
            <div class="card-body">
            
                <div id="chartContainer3" style="height: 390px; width:100%;">
                    <?php include('data3.php'); ?>
                </div> 
                <div class="close"></div>
              <!-- End Row -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        <div class="col-lg-6">
          <!-- Card -->
          <div class="card h-100">
            <!-- Body -->
            <div class="card-body">  
       <?php 
       include('data2.php'); 
       ?>          
<div id="chartContainer2" style="height: 390px; width:100%;"></div> 
<div class="close"></div>
            </div>
            <script type="text/javascript">
            </script>
         

            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
    </div>
    <!-- End Content -->
 <!-- begin Content -->
      <div class="row" style="margin-top:33px; margin-bottom: 55px;">
        <div class="col-lg-6 mb-3 mb-lg-0">
          <!-- Card -->
          <div class="card h-100">
            <div class="card-body">
             <?php
              include('data4.php'); ?> 
        <div id="chartContainer4" style="height: 390px; width:100%;"></div>                    
               <div class="close"></div>
              <!-- End Row -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>

        <div class="col-lg-6">
          <!-- Card -->
          <div class="card h-100">
            <!-- Body -->
            <div class="card-body">
      <?php include('data5.php');?>    
 <div id="chartContainer5" style="height: 390px; width:100%;"></div> 
   
              <div class="close"></div>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
    </div>
    <!-- End Content -->

   

    <div class="footer" style="background-color:#3D4461;">
      <div class="row justify-content-between align-items-center">
        <div class="col" style="padding-top: 19px; margin-left: 316px; ">
         <p style="color: white;" class="fs-6 mb-0">&copy; RGU. <span class="d-none d-sm-inline-block">2023 Vivian Project</span></p>
        </div>
        <!-- End Col -->
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ONLY DEV -->
 <style type="text/css">

                              .close{
                                width: 100%;
                              position: sticky;
                               margin-top: -10px;
                              background-color: whitesmoke;
                              border: 4px solid;
                              }
                            </style>
  <!-- Builder -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasBuilder" aria-labelledby="offcanvasBuilderLabel">
   

    <div class="offcanvas-body">
      <div class="row gx-3">
        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layoutSkinsRadio" id="layoutSkinsRadio1" checked value="default">
            <label class="form-check-label mb-2" for="layoutSkinsRadio1">
              <img class="form-check-img" src="assets/img/415x310/img1.jpg" alt="Image Description">
            </label>
            <span class="form-check-text">Default</span>
          </div>
        </div>
        <!-- End Check -->

        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layoutSkinsRadio" id="layoutSkinsRadio2" value="dark">
            <label class="form-check-label mb-2" for="layoutSkinsRadio2">
              <img class="form-check-img" src="assets/img/415x310/img2.jpg" alt="Image Description">
            </label>
            <span class="form-check-text">Dark Mode</span>
          </div>
        </div>
        <!-- End Check -->
      </div>
      <!-- End Row -->

      <hr>

      <div class="row gx-3">
        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layout" id="navbarLayoutSkinsRadio1" checked value="default">
            <label class="form-check-label mb-2" for="navbarLayoutSkinsRadio1">
              <img class="form-check-img" src="assets/svg/layouts-light/sidebar-default.svg" alt="Image Description" data-hs-theme-appearance="dark">
              <img class="form-check-img" src="assets/svg/layouts/sidebar-default.svg" alt="Image Description" data-hs-theme-appearance="default">
            </label>
            <span class="form-check-text">Default</span>
          </div>
        </div>
        <!-- End Check -->

        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layout" id="navbarLayoutSkinsRadio2" value="navbar-dark">
            <label class="form-check-label mb-2" for="navbarLayoutSkinsRadio2">
              <img class="form-check-img" src="assets/svg/layouts-light/sidebar-dark.svg" alt="Image Description" data-hs-theme-appearance="dark">
              <img class="form-check-img" src="assets/svg/layouts/sidebar-dark.svg" alt="Image Description" data-hs-theme-appearance="default">
            </label>
            <span class="form-check-text">Dark</span>
          </div>
        </div>
        <!-- End Check -->
      </div>
      <!-- End Row -->

      <hr>

      <h4 class="mb-1">Sidebar Nav</h4>
      <p>Check out all <a href="https://htmlstream.com/preview/front-dashboard-v2.1.1/documentation/layout.html">Layout Options here</a></p>

     
      <!-- End Row -->

      <hr>

      <!-- Form Switch -->
      <label class="row form-check form-switch mb-3" for="builderFluidSwitch">
          <input type="checkbox" class="form-check-input" id="builderFluidSwitch">
        </span>
      </label>
      <!-- End Form Switch -->

      <div class="row gx-3">
        <!-- Check -->
        <div class="col-6">
          <div class="form-check form-check-label-highlighter text-center">
            <input type="radio" class="form-check-input" name="layout" id="headerLayoutOptions1" value="single-header">
            <label class="form-check-label mb-2" for="headerLayoutOptions1">
              <img class="form-check-img" src="assets/svg/layouts/header-default-container.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="form-check-img" src="assets/svg/layouts-light/header-default-container.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </label>
            
          </div>
        </div>
        <!-- End Check -->

        <!-- Check -->
      
        <!-- End Check -->
      </div>
      <!-- End Row -->
    </div>

    <!-- Footer -->
    <div class="offcanvas-footer">
      <div class="row gx-3"> 
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Footer -->
  </div>

 

  <div class="d-none js-build-layouts">
    <div class="js-build-layout-header-default">
      <!-- Single Header -->
      <header id="header" class="navbar navbar-expand-lg navbar-bordered bg-white  ">
        <div class="container">
          <nav class="js-mega-menu navbar-nav-wrap">
            <!-- Logo -->

            <a class="navbar-brand" href="index.html" aria-label="Front">
              <img class="navbar-brand-logo" src="assets/svg/logos/rgu.jpg" alt="Logo" data-hs-theme-appearance="default">
              <img class="navbar-brand-logo" src="assets/svg/logos-light/rgu.jpg" alt="Logo" data-hs-theme-appearance="dark">
            </a>

            <!-- End Logo -->

            <!-- Secondary Content -->
            <div class="navbar-nav-wrap-secondary-content">
              <!-- Navbar -->
              <ul class="navbar-nav">
                <li class="nav-item d-none d-md-inline-block">
                  <!-- Notification -->
                  <div class="dropdown">
                    <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                      <i class="bi-bell"></i>
                      <span class="btn-status btn-sm-status btn-status-danger"></span>
                    </button>

                   
                  </div>
                  <!-- End Notification -->
                </li>
              </ul>
              <!-- End Navbar -->
            </div>
            <!-- End Secondary Content -->

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContainerNavDropdown" aria-controls="navbarContainerNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>
            <!-- End Toggler -->

          
          </nav>
        </div>
      </header>

      <!-- End Single Header -->
    </div>
    <div class="js-build-layout-header-double">
      <!-- Double Header -->
      <header id="header" class="navbar navbar-expand-lg navbar-bordered navbar-spacer-y-0 flex-lg-column">
        <div class="navbar-dark w-100 bg-dark py-2">
          <div class="container">
            <div class="navbar-nav-wrap">
              <!-- Logo -->
              <a class="navbar-brand" href="index.html" aria-label="Front">
                <img class="navbar-brand-logo" src="assets/svg/logos/logo-white.svg" alt="Logo">
              </a>
              <!-- End Logo -->

              <!-- Content Start -->
              <div class="navbar-nav-wrap-content-start">
                <!-- Search Form -->
                <div class="d-none d-lg-block">
                  <div class="dropdown ms-2">
                    <!-- Input Group -->
                    <div class="d-none d-lg-block">
                      <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-search"></i>
                        </div>
  
                      </div>
                    </div>



                  </div>

                </div>
                <!-- End Search Form -->
              </div>
              <!-- End Content Start -->

              <!-- Content End -->
              <div class="navbar-nav-wrap-content-end">
                <!-- Navbar -->
                <ul class="navbar-nav">
                  <li class="nav-item d-none d-md-inline-block">
                    <!-- Notification -->
                    <div class="dropdown">
                      <button type="button" class="btn btn-ghost-light btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                        <i class="bi-bell"></i>
                        <span class="btn-status btn-sm-status btn-status-danger"></span>
                      </button>

                     
                    </div>
                    <!-- End Notification -->
                  </li>

              

                  <li class="nav-item">
                    <!-- Toggler -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDoubleLineContainerNavDropdown" aria-controls="navbarDoubleLineContainerNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-default">
                        <i class="bi-list"></i>
                      </span>
                      <span class="navbar-toggler-toggled">
                        <i class="bi-x"></i>
                      </span>
                    </button>
                    <!-- End Toggler -->
                  </li>
                </ul>
                <!-- End Navbar -->
              </div>
              <!-- End Content End -->
            </div>
          </div>
        </div>


      </header>
      <!-- End Double Header -->
    </div>
  </div>

  <script src="assets/js/demo.js"></script>

  <!-- END ONLY DEV -->

  <!-- ========== SECONDARY CONTENTS ========== -->

  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>

  <script src="assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>
  <script src="assets/js/hs.theme-appearance-charts.js"></script>
  <script src="assets/js/chartContainer1.js"></script>
  <script src="assets/js/chartContainer2.js"></script>
  <script src="assets/js/chartContainer3.js"></script>
  <script src="assets/js/chartContainer4.js"></script>
  <script src="assets/js/chartContainer5.js"></script>

  <!-- JS Plugins Init. -->

<!--beging from page-- -->

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>


<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/meanmenu.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.mixitup.min.js"></script>

<script src="assets/js/jquery.datetimepicker.full.min.js"></script>

<script src="assets/js/custom.js"></script>
<!-- End of the from page-->




    <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATERANGEPICKER
      // =======================================================
      $('.js-daterangepicker').daterangepicker();

      $('.js-daterangepicker-times').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });

      var start = moment();
      var end = moment();

      function cb(start, end) {
        $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
      }

      $('#js-daterangepicker-predefined').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);

      cb(start, end);
    });


    // INITIALIZATION OF DATATABLES
    // =======================================================
    HSCore.components.HSDatatables.init($('#datatable'), {
      select: {
        style: 'multi',
        selector: 'td:first-child input[type="checkbox"]',
        classMap: {
          checkAll: '#datatableCheckAll',
          counter: '#datatableCounter',
          counterInfo: '#datatableCounterInfo'
        }
      },
      language: {
        zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
      }
    });

    const datatable = HSCore.components.HSDatatables.getItem(0)

    document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
      item.addEventListener('change',function(e) {
        const elVal = e.target.value,
    targetColumnIndex = e.target.getAttribute('data-target-column-index'),
    targetTable = e.target.getAttribute('data-target-table');

    HSCore.components.HSDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
      })
    })
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      localStorage.removeItem('hs_theme')

      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        const HSFormSearchInstance = new HSFormSearch('.js-form-search')

        if (HSFormSearchInstance.collection.length) {
          HSFormSearchInstance.getItem(1).on('close', function (el) {
            el.classList.remove('top-0')
          })

          document.querySelector('.js-form-search-mobile-toggle').addEventListener('click', e => {
            let dataOptions = JSON.parse(e.currentTarget.getAttribute('data-hs-form-search-options')),
              $menu = document.querySelector(dataOptions.dropMenuElement)

            $menu.classList.add('top-0')
            $menu.style.left = 0
          })
        }


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart')


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('#updatingBarChart')
        const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart')

        // Call when tab is clicked
        document.querySelectorAll('[data-bs-toggle="chart-bar"]').forEach(item => {
          item.addEventListener('click', e => {
            let keyDataset = e.currentTarget.getAttribute('data-datasets')

            const styles = HSCore.components.HSChartJS.getTheme('updatingBarChart', HSThemeAppearance.getAppearance())

            if (keyDataset === 'lastWeek') {
              updatingBarChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
              updatingBarChart.data.datasets = [
                {
                  "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor,
                  "maxBarThickness": 10
                }
              ];
              updatingBarChart.update();
            } else {
              updatingBarChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
              updatingBarChart.data.datasets = [
                {
                  "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor,
                  "maxBarThickness": 10
                }
              ]
              updatingBarChart.update();
            }
          })
        })


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart-datalabels', {
          plugins: [ChartDataLabels],
          options: {
            plugins: {
              datalabels: {
                anchor: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                align: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                color: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                },
                font: function (context) {
                  var value = context.dataset.data[context.dataIndex],
                    fontSize = 25;

                  if (value.r > 50) {
                    fontSize = 35;
                  }

                  if (value.r > 70) {
                    fontSize = 55;
                  }

                  return {
                    weight: 'lighter',
                    size: fontSize
                  };
                },
                formatter: function (value) {
                  return value.r
                },
                offset: 2,
                padding: 0
              }
            },
          }
        })

        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        HSCore.components.HSClipboard.init('.js-clipboard')
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
    </script>

  <!-- End Style Switcher JS -->

<script>
//   Begin of Main Chart
window.onload = function () {
  CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#E2523A",
                "#E7922A",
                "#C0C0C0",
                "#800080",
                "#90EE90"                
                ]);
var chart = new CanvasJS.Chart("chartContainer1", {
  animationEnabled: true,
  theme: "light2",
  title:{
    text: "Share of attacks by industry 2018 – 2022",
      fontColor: "black",
     wrap: false,
      fontSize: 15
  },
  legend:{
   fontSize: 13,
       horizontalAlign: "right",
    verticalAlign: "left",
    fontSize: 10
  },
  axisY:{
    suffix: "%",
     title: "Percentage of an Attack",
     gridThickness: 0,
     titleFontSize: 10,
    includeZero: false

  },

   axisX:{
    title: "Industry",
    gridThickness: 0,
     titleFontSize: 10,
      labelFontSize: 10,
      labelMaxWidth: 70,
      labelWrap: true, 


  },
  legend:{
    cursor: "pointer",
    //fontSize: 9,
    verticalAlign: "center",
    horizontalAlign: "right"
   // itemclick: toggleDataSeries
  },

  data: [{
    type: "column",
    name: "2018",
  yValueFormatString: "#0.0"%"",
    showInLegend: true,
    dataPoints: <?php echo json_encode($tests1, JSON_NUMERIC_CHECK); ?>
  },{
    type: "column",
    name: "2019",
   
  yValueFormatString: "#0.0"%"",
    showInLegend: true,
    dataPoints: <?php echo json_encode($tests2, JSON_NUMERIC_CHECK); ?>
  },{
    type: "column",
    //name: "Artificial Trees",
    name: "2020",
    
   yValueFormatString: "#0.0"%"",
    showInLegend: true,
    dataPoints: <?php echo json_encode($tests3, JSON_NUMERIC_CHECK); ?>

    },{
    type: "column",
    name: "2021",
  
    yValueFormatString: "#0.0"%"",

    showInLegend: true,
    dataPoints: <?php echo json_encode($tests4, JSON_NUMERIC_CHECK); ?>

    },{
    type: "column",
    name: "2022",
  
   yValueFormatString: "#0.0"%"",
    showInLegend: true,
    dataPoints: <?php echo json_encode($tests5, JSON_NUMERIC_CHECK); ?>

  }]
});


chart.render();
 
function toggleDataSeries(e){
  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  }
  else{
    e.dataSeries.visible = true;
  }
  chart.render();
}
 
}
//   End of Main Chart
</script>


<script type="text/javascript"> 
//   Begin of hare of cyber attacks from 2018 to 2022 chart
   CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#E2523A",
                "#E7922A",
                "#C0C0C0",
                "#800080",
                "#90EE90"                
                ]);
var chart = new CanvasJS.Chart("chartContainer2", {
    colorSet: "greenShades",
  animationEnabled: true,
 theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Share of cyber attacks in the manufacturing industry worldwide from 2018 to 2022",
      fontColor: "black",
      wrap: true,
       fontSize: 15
  },
  axisY: {
     title: "Percentage of Attacks",
     gridThickness: 0,
      titleFontSize: 10,
     suffix: "%"
  },
   axisX: {
     title: "Year",
     gridThickness: 0,
       titleFontSize: 10,
       labelFontSize: 10,
       labelMaxWidth: 50,
       labelWrap: true, 
   },
  data: [{
     type: "column",
    indexLabel: "{y}",
    indexLabelPlacement: "inside",
    indexLabelFontColor: "white",
    yValueFormatString: "#,##0.0#\"%\"",
    dataPoints: <?php echo json_encode($test2, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();

//   End of Share of cyber attacks from 2018 to 2022 chart








//   Begin of Global common types of ransomware targeting critical industries 2022 chart
 CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#E7922A",
                "#E7922A",
                "#E7922A"                
                ]);
var chart = new CanvasJS.Chart("chartContainer3", {
  animationEnabled: true,
 theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
       text: "Global common types of ransomware targeting critical industries 2022",
     fontColor: "black",
      wrap: true,
       fontSize: 15
  },
    legend:{
     horizontalAlign: "right",
     verticalAlign: "center"
   },
    axisY: {
     title: "Growth Rate (in %)",
     suffix: "%"
   },
   axisX: {
     title: "Countries"

   },
    legend:{
   fontSize: 9,
    horizontalAlign: "right",
     verticalAlign: "center"
  },
  data: [{
     type: "pie",

    showInLegend: true,
     toolTipContent: "${label} (#percent%)",
     indexLabel: "{y}",
     legendText: "{label}",
     innerRadius: "70%",
     radius: "100%",
     indexLabelPlacement: "inside",


     //yValueFormatString: "#,##0.0#\"%\"",
      yValueFormatString: "##.#0 '%'",
    dataPoints: <?php echo json_encode($test3, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
//   End of Global common types of ransomware targeting critical industries 2022 chart




//   Begin of Distribution of cyber attacks across worldwide industries in 2022 cart
var chart = new CanvasJS.Chart("chartContainer4", {
  animationEnabled: true,
   theme: "light2", // "light1", "light2", "dark1", "dark2"
   title: {
     text: "Distribution of cyber attacks across worldwide industries in 2022",
      fontColor: "black",
     wrap: true,
       fontSize: 15
   },

      dataPointMaxWidth: 30,
     exportEnabled: false,
   
   axisY: {
     title: "Percentage of attack",
     gridThickness: 0,
     titleWrap: false,
      titleFontSize: 10,
      fontSize:7,
      dataPointWidth: 10,
     suffix: "%"
   },
   axisX: {
     title: "Industry",
     gridThickness: 0,
      titleFontSize: 10,
       labelFontSize: 8,
       labelMaxWidth: 70,
       labelWrap: true, 
   },
  data: [{
        type: "bar",
     indexLabel: "{y}",
    indexLabelPlacement: "inside",
    indexLabelFontColor: "white",
    //yValueFormatString: "#,##0.0#\"%\"",
    yValueFormatString: "##.#0 '%'",
    dataPoints: <?php echo json_encode($test4, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
//   End of Distribution of cyber attacks across worldwide industries in 2022 cart




//   Begin of Driving Technology for increase cyber security in Manufacturing companies in the United Kingdom (UK) as of September 2022
var chart = new CanvasJS.Chart("chartContainer5", {
  animationEnabled: true,
   theme: "light2", // "light1", "light2", "dark1", "dark2"
   title: {
         text: "Driving Technology for increase cyber security in Manufacturing companies in the United Kingdom (UK) as of September 2022",
     fontColor: "black",
     wrap: true,
      fontSize: 15
   },

      
  dataPointMaxWidth: 20,
  exportEnabled: false,

  axisY: {
    title: "Percentage of attack",
    titleWrap: true,
     titleFontSize: 5,
     //fontSize:4,
     //dataPointWidth: 10,
    suffix: "%"
  },
  
  legend:{
  fontSize: 9,
   horizontalAlign: "right",
    verticalAlign: "center"
 },
  data: [{
        type: "doughnut",
        radius: "10%",
    type: "doughnut",
    indexLabelFontSize: 10,
    indexLabelWrap: true,  // change to true
    indexLabelOrientation: "vertical",  // "horizontal", "vertical"
     indexLabel: "{y}",
    showInLegend: true,
    toolTipContent: "{label} (#percent%)",
    indexLabel: "{y}",
    legendText: "{label}",
    innerRadius: "40%",
    indexLabelPlacement: "inside",
  yValueFormatString: "##.#0 '%'",
    radius: "100%",
    indexLabelPlacement: "inside",
    indexLabelFontColor: "white",
  
    dataPoints: <?php echo json_encode($test5, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
//   end of Driving Technology for increase cyber security in Manufacturing companies in the United Kingdom (UK) as of September 2022


</script>

</body>
</html>
