<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet"> 
<!-- //web font -->
<!-- Custom Theme files -->
<link href="{{asset('assets/css/app.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
    @yield('content')
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>&copy; {{date('Y')}} {{$data->title}}. All rights reserved | Developed by <a href="https://www.facebook.com/ThizIzTonoy/" target="_blank">Mahbub Rashid Tonoy</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>