
    <div class="col-md-3">
      <div class="sidebar">
          <ul>
            <li><a href="{{url('dashboard')}}" class="nav-link">Dashboard</a></li>
            <li><a href="{{url('profile')}}" class="nav-link">Profile</a></li>
            <li><a href="{{url('orders')}}" class="nav-link">Orders</a></li>
            <li><a href="{{url('change-password')}}" class="nav-link">Change Password</a></li>
            <li>
            <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="nav-link">
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
          </ul>
      </div>
    </div>
