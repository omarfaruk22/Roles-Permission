<!DOCTYPE html>
<html>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Aug 2022 19:06:13 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Smart University | Bootstrap Responsive Admin Template</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
	<link rel="stylesheet" href="{{asset('backend/plugins/iconic/css/material-design-iconic-font.min.css')}}">
	<!-- bootstrap -->
	<link href="{{asset('backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="{{asset('backend/css/theme/light/theme_style.css')}}" rel="stylesheet" id="rt_style_components" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="{{asset('backend/css/pages/login.css')}}">
	<!-- favicon -->
	<link rel="shortcut icon" href="https://www.einfosoft.com/templates/admin/smart/source/assets/img/favicon.ico" />
</head>

<body>
	@yield('auth')

	<!-- start js include path -->
	<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- end js include path -->
</body>

</html>