<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Portal</title>

    @include ('layouts.constant.links')
	@yield ('custom-links')
  </head>
  <body class="student-portal">
    <main>
      <header class="header">
        @include ('layouts.nav')
      </header>
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
      <footer class="footer bg-primary py-2">
        @include ('layouts.footer')
      </footer>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- constant page scripts -->
	@include ('layouts.constant.scripts')

	<!-- custom page scripts -->
	@yield ('custom-page-scripts')
	
  </body>
</html>