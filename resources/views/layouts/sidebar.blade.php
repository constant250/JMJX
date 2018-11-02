<div class="sidebar" id="sidebar">
    <div class="sidebar-profile center-block position-relative">
        <div class="profile-container">
            <div class="position-relative avatar-initials center-block text-center overflow-hidden">
                <span class="center-position width-100-percent text-center white-font-color px-22-font proximanova-bold"><!-- <canvas width="47" height="47" data-jdenticon-value="{{ Auth::user()->id }}"></canvas> --><img width="47" height="47" src="/avatar/{{Auth::user()->avatar}}"></span>
            </div>
            <div class="divider center-block"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
            <span class="avatar-name gulf-blue-font-color px-14-font text-center center-block proximanova-bold"><a href="{{route('users.profile', Auth::user()->id)}}">{{ Auth::user()->party->name }}<a></span>
        </div>
    </div>
    <div class="sidebar-nav">
        <ul class="list-unstyled text-center">

            @foreach( $menus as $menu )
            <li>
                <a href="{{ $menu->url }}" data-title="{{ $menu->menu_name}}"><img src="{{ asset($menu->icon) }}" class="img-responsive center-block" alt=""></a>
            </li>
            @endforeach

        </ul>
    </div>
    <div class="sidebar-overlay sidebar-toggle"></div>
</div>