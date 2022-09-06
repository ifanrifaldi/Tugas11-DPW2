<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FANN.SHOES</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{url('public/assets')}}/img/logoweb.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{url('public/assets')}}/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{url('public/assets')}}/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{url('public/assets')}}/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{url('public/assets')}}/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-4) -->
    @include('template.frontview.header1')
    
    <!-- SLIDER AREA START (slider-1) -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          @include('template.utils.notif')
        </div>
      </div>
    </div>
    @yield('content')

    <!-- FEATURE AREA START ( Feature - 3) -->
    @include('template.frontview.footer1')
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{url('public/assets')}}/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="{{url('public/assets')}}/js/main.js"></script>
  
</body>
</html>

