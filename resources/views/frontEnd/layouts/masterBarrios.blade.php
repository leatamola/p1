<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/css/font-awesome.min.css"/>
	<script src="https://kit.fontawesome.com/67b88da45c.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/css/flaticon.css"/>
	<link rel="stylesheet" href="/css/slicknav.min.css"/>
	<link rel="stylesheet" href="/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="/css/animate.css"/>
	<link rel="stylesheet" href="/css/style.css"/>


</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	@include('frontEnd.includes.header')

	@yield('content')

	@include('frontEnd.includes.footer')


	<!--====== Javascripts & Jquery ======-->
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.slicknav.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.nicescroll.min.js"></script>
	<script src="/js/jquery.zoom.min.js"></script>
	<script src="/js/jquery-ui.min.js"></script>
	<script src="/js/main.js"></script>

	</body>
</html>
