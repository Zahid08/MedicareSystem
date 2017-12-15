<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <link href="{{asset('/font')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/font')}}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('/font')}}/plugins/cubeportfolio/css/cubeportfolio.min.css">
    <link href="{{asset('/font')}}/css/nivo-lightbox.css" rel="stylesheet" />
    <link href="{{asset('/font')}}/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/font')}}/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="{{asset('/font')}}/css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="{{asset('/font')}}/css/animate.css" rel="stylesheet" />
    <link href="{{asset('/font')}}/css/style.css" rel="stylesheet">

    <!-- boxed bg -->
    <link id="bodybg" href="{{asset('/font')}}/bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="{{asset('/font')}}/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div id="wrapper">
@include('fontend.include.header')
  @include('fontend.include.slidebar')
    @include('fontend.include.appointmentsection')
@include('fontend.include.inanemergency')
   @include('fontend.include.srvice')
@include('fontend.include.doctor')
@include('fontend.include.facilities')
@include('fontend.include.emergenmcycase')
@include('fontend.include.pricing')
    @include('fontend.include.healthpackage')
  @include('fontend.include.footer')
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Core JavaScript Files -->
<script src="{{asset('/font')}}/js/jquery.min.js"></script>
<script src="{{asset('/font')}}/js/bootstrap.min.js"></script>
<script src="{{asset('/font')}}/js/jquery.easing.min.js"></script>
<script src="{{asset('/font')}}/js/wow.min.js"></script>
<script src="{{asset('/font')}}/js/jquery.scrollTo.js"></script>
<script src="{{asset('/font')}}/js/jquery.appear.js"></script>
<script src="{{asset('/font')}}/js/stellar.js"></script>
<script src="{{asset('/font')}}/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="{{asset('/font')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('/font')}}/js/nivo-lightbox.min.js"></script>
<script src="{{asset('/font')}}/js/custom.js"></script>

</body>

</html>
