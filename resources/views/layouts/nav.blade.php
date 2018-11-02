<nav class="navbar navbar-default navbar-fixed-top no-margin no-border">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="sidebar-toggle">
                <span class="ship-cove-blue-font-color"><i class="fa fa-tasks" aria-hidden="true"></i></span>
            </a>
            <a class="navbar-brand height-auto" href="#">
                <img src="{{ asset('/images/logos/ETI-coloredtext-logo.png') }}" alt="" class="img-responsive" style="width: 140px!important;">
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top_nav_collapse" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top_nav_collapse">
            <form class="top-navbar-search navbar-form navbar-left">
                <div class="form-group">
                    <div class="input-group">
                        <!-- <input type="text" class="form-control form-input" id="global-search-input" placeholder="Search for...">
                        <span class="input-group-btn">
                          <button class="btn btn-default form-btn" id="global-search-btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </span> -->
                        <button class="btn btn-default form-btn" id="global-search-btn" type="button"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
                    </div>
                </div>
            </form>
            <ul class="top-navbar-menu nav navbar-nav navbar-right text-center">
                 <li>
                    <a href="{{ route('weekly-conversion.index') }}" style="padding: 15px 10px;">
                        <div><i class="fa fa-retweet    " aria-hidden="true"></i></div>
                        <div class="px-12-font line-height-1">
                            Weekly Conversion
                        </div>
                        {{-- <div class="notification-toast proximanova-regular px-10-font">{{ $task }}</div> --}}
                    </a>
                </li>
                <li>
                    <a href="{!! url('/email'); !!}">
                        <div><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="px-12-font line-height-1">
                            My Inbox
                        </div>
                        <div class="notification-toast proximanova-regular px-10-font"> {{ $msgbox }}</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('taskboard.index') }}">
                        <div><i class="fa fa-tasks" aria-hidden="true"></i></div>
                        <div class="px-12-font line-height-1">
                            My Task
                        </div>
                        <div class="notification-toast proximanova-regular px-10-font">{{ $task }}</div>
                    </a>
                </li>
                {{-- <li>
                    <a href="#">
                        <div><i class="fa fa-bell" aria-hidden="true"></i></div>
                        <div class="px-12-font line-height-1">Notification</div>
                        <div class="notification-toast proximanova-regular px-10-font">7</div>
                    </a>
                </li> --}}
                <li>
                    <a id="ch-tl" href="/timelog">
                        <div><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        <div class="px-12-font line-height-1">My Timelog</div>
                    </a>
                </li>
                {{-- <li>
                    <a href="/configurations">
                        <div><i class="fa fa-cog" aria-hidden="true"></i></div>
                        <div class="px-12-font line-height-1">Settings</div>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="#">
                        <div><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                        <div class="px-12-font line-height-1">Help</div>
                    </a>
                </li> --}}
                <li>
                    <form action="{{ route('user.logout') }}" method="post">
                        {{ csrf_field() }}
                        <button type="submit" class="btn">
                            <div><i class="fa fa-power-off" aria-hidden="true"></i></div>
                            <div class="px-12-font line-height-1">Logout</div>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
