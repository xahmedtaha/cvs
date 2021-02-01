<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="{{route('admin.home')}}">
                <img src="{{asset('argon/img/brand/blue.png')}}" class="navbar-brand-img">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{url()->current() !== route('admin.home') ?: 'active'}}" href="{{route('admin.home')}}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{url()->current() !== route('admin.profile') ?: 'active'}}" href="{{route('admin.profile')}}">
                            <i class="ni ni-single-02 text-orange"></i>
                            <span class="nav-link-text">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{url()->current() !== route('admin.playlist.index') ?: 'active'}}" href="{{route('admin.playlist.index')}}">
                            <i class="fab fa-youtube text-red"></i>
                            <span class="nav-link-text">Playlists</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{url()->current() !== route('admin.article.index') ?: 'active'}}" href="{{route('admin.article.index')}}">
                            <i class="fas fa-edit text-muted"></i>
                            <span class="nav-link-text">Articles</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{url()->current() !== route('admin.show') ?: 'active'}}" href="{{route('admin.show')}}">
                            <i class="fas fa-users text-blue"></i>
                            <span class="nav-link-text">Admins</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{url()->current() !== route('admin.roles') ?: 'active'}}" href="{{route('admin.roles')}}">
                            <i class="fas fa-user-cog text-green"></i>
                            <span class="nav-link-text">Roles</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
