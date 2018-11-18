{{-- <!DOCTYPE html>
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

	    footer
	    @include ('layouts.footer')
	    <!-- end footer -->

	    <!-- Sidebar -->
	    <!-- @include ('layouts.sidebar') -->
	    <!-- End Sidebar -->

	    <!-- main content -->
	    <div class="main-content" id="main_content">
	        <!-- Main Content Wrapper -->
	        <div class="main-content-container">
	        <!-- @yield ('page-content') -->
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
</html> --}}

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Portal</title>
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--endbuild-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

  </head>
  <body class="student-portal">
    <main>
      @include ('layouts.nav')
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="inner-content-container">
                <!-- <div class="content-header position-relative">
                  <h1 class="proximanova-regular white-font-color px-20-font no-margin center-position width-100-percent">Welcome, Student Name</h1>
                </div> -->
                <div class="content-user-interface no-padding">
                   @yield ('page-content') 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include ('layouts.footer')
  </body>
</html>