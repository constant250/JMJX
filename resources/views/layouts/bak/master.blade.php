<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Vorx CRM</title>
	
	@include ('layouts.constant.links')
	@yield ('custom-links')
</head>
<body>
	<main class="main-wrapper" id="main_wrapper" role="main-wrapper">
	    <!-- header -->
	    <header class="header">
	        @include ('layouts.nav')
	    </header>
	    <!-- end header -->

	    <!-- footer -->
	    @include ('layouts.footer')
	    <!-- end footer -->

	    <!-- Sidebar -->
	    @include ('layouts.sidebar')
	    <!-- End Sidebar -->

	    <!-- main content -->
	    <div class="main-content" id="main_content">
	        <!-- Main Content Wrapper -->
	        <div class="main-content-container">
	        @yield ('page-content')
	        </div>
	        <!-- End Main Content Wrapper -->
	    </div>
	    <!-- end main content -->
	</main>

	<!-- constant page scripts -->
	@include ('layouts.constant.scripts')

	<!-- custom page scripts -->
	@yield ('custom-page-scripts')
	
</body>
</html>