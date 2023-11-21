<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Aug 2022 19:05:16 GMT -->
<head>
	 {{-- this is meta  --}}
	 @include('backend.includes.head')
	<!-- google font -->
	{{-- css part  --}}
	@include('backend.includes.css')
	@yield('styles')
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		@include('backend.includes.header')
		<!-- end header -->
		<!-- start color quick setting -->
		@include('backend.includes.settingpanel')
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			@include('backend.includes.sidebar')
			<!-- end sidebar menu -->
		@yield('content')
		<!-- start footer -->
		@include('backend.includes.footer')
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	@include('backend.includes.js')
	@yield('scripts')
</body>



</html>