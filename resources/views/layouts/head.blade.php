<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>e-PRINT</title>
<meta name="description" content="">
<meta name="author" content="">

@section('style')
<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="image/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="image/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="image/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
@show
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1>e-PRINT</h1>
          @yield('content')
          
      </div>
    </div>
  </div>
</header>

@include('pages.navbar')

@include('pages.footer')

@section('script')
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
@show

</body>
</html>