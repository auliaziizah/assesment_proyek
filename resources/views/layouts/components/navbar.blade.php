<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            @if (Auth::check()) <!-- Check if user is authenticated -->
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    @if (Auth::user()->user_image)
                        <img src="{{ Auth::user()->user_image }}" class="user-image img-circle elevation-2" alt="User Image">
                    @else
                        <img src="{{ asset('vendor/adminlte3/img/user2-160x160.jpg') }}" class="user-image img-circle elevation-2" alt="User Image">
                    @endif
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        @if (Auth::user()->user_image)
                            <img src="{{ Auth::user()->user_image }}" class="img-circle elevation-2" alt="User Image">
                        @else
                            <img src="{{ asset('vendor/adminlte3/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                        @endif
                        <p>
                            {{ Auth::user()->name }}
                            <small>Bergabung pada {{ date('d F Y', strtotime(Auth::user()->created_at)) }}</small>
                        </p>
                    </li>
                    
                    <!-- Menu Footer -->
                    <li class="user-footer">
                        <a href="{{ route('profile') }}" class="btn btn-default btn-flat">Profile</a>
                        <a class="btn btn-default btn-flat float-right" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            @else
                <a href="#" class="nav-link">Guest</a> <!-- Provide a link or handle the case where the user is not authenticated -->
            @endif
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
