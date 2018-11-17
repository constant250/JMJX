<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logos/vorx_logo-white.png') }}" alt="" class="img-fluid">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="material-icons vertical-align-middle">menu</i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="nav-search-form form-inline my-2 my-lg-auto mr-auto">
              <div class="input-group w-100">
                <input type="text" class="form-control" placeholder="Search for (ex. name, address, course)" aria-label="Search" aria-describedby="button-addon">
                <div class="input-group-append">
                  <button class="btn" type="button" id="button-addon"><i class="fas fa-search text-primary"></i></button>
                </div>
              </div>
            </form>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="fas fa-bell"></i></a>
              </li>
              <li class="nav-item item-divider"></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="{{ asset('images/avatars/default.png') }}" alt="" class="profile-avatar img-fluid">
                  <span class="profile-name ml-2">Student, {{\Auth::user->party->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">My Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>