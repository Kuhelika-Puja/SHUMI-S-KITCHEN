<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <a href="{{route('dashboard')}}" class="logo">
            <img src="{{url('frontend/logo/logo.png')}}" style="width: 60px; height: 30px;" > 
        </a>
    </div>
    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">
            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" target="_blank" href="{{url('/')}}">
                    <i class="zmdi zmdi-8tracks noti-icon"></i>
                    Visit Website
                </a>
            </li>
            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    
                    <img src="{{url('frontend/logo/logo.png')}}" class="rounded-circle" >
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>Welcome ! {{ Auth::guard('admin')->user()->name }} </small> </h5>
                    </div>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                    </a>
                    
                    <!-- item-->
                    <a href="{{url('/admin/change-password')}}" class="dropdown-item notify-item">
                        <i class="zmdi zmdi-lock-open"></i> <span>Change Password</span>
                    </a>
                    <!-- item-->
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                        <i class="zmdi zmdi-power"></i> <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                <i class="zmdi zmdi-menu"></i>
                </button>
            </li>
            <li class="hidden-mobile app-search">
                <form role="search" class="">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </li>
        </ul>
    </nav>
</div>