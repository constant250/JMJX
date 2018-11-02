@extends ('layouts.master')

@section ('page-content')

<style>
    .bootstrap-datetimepicker-widget tr td:nth-child(1){text-align:center !important; vertical-align: middle !important;}
    .dropdown-menu>li>a:hover{background: #5f6367 !important;}
    .sub-menu-item{height: 150px;  position: relative; padding: 10px;}
    .sub-menu-item img{    width: 60px;}
    .sub-menu-label{position: absolute; bottom: 10px; left: 10px;}
</style>
<!-- Pages/Dashboard Content Goes Here -->
<div class="inner-content-container">
    <div class="content-header position-relative">

        <div class="dropdown center-position width-100-percent">
            <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <h1 class="proximanova-regular white-font-color px-20-font no-margin">{{ ucfirst(Route::current()->uri) }} &nbsp;<i class="fa fa-chevron-down"></i></h1>
            </a>
            <ul class="dropdown-menu white-font-color no-margin no-padding" aria-labelledby="dropdownMenu1" style="left:45px; background: #525558;">
                @foreach ( $submenus as $submenu )

                <li><a href="{{ $submenu->url }}">{{ $submenu->menu_name }}</a></li>

                @endforeach
            </ul>
        </div>



    </div>
    <div class="content-user-interface" style="padding: 20px 20px 10px 20px">
        <ul class="large-block-grid-4 medium-block-grid-2 small-block-grid-1">

            @foreach ( $submenus as $submenu )

            <li>
                <a href="{{ $submenu->url }}">
                    <div class="sub-menu-item iris-blue-bg-color white-font-color">
                        <div class="px-40-font center-position width-100-percent text-center">
                            <img src="{{ asset($submenu->icon) }}" class="img-responsive center-block" alt="">
                        </div>
                        <span class="sub-menu-label px-10-font">{{ $submenu->menu_name }}</span>
                    </div>
                </a>
            </li>

            @endforeach
        </ul>
    </div>
</div>
<!-- End Pages/Dashboard Content Goes Here -->

@endsection