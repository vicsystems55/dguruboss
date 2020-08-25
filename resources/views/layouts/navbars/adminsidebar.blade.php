<div class="sidebar" data-color="orange" data-background-color="white" data-image="https://material-dashboard-pro-laravel.creative-tim.com/material/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ config('app.url') }}" class="simple-text logo-normal">
      Administrator
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{ (request()->is('admin')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons"></i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Manage Accounts') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item
            {{ (request()->is('admin/accounts')) ? 'active' : '' }}

            {{ (request()->is('admin/accounts_details/')) ? 'active' : '' }}

            {{ (request()->is('admin/accounts_details/*')) ? 'active' : '' }}
            
            ">
              <a class="nav-link" href="{{ route('admin.accounts') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('All Registrations') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Add New Account') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item {{ (request()->is('admin/tournament')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.tournament')}}">
          <i class="material-icons"></i>
          <p>{{ __('Tournament') }}</p>
        </a>
      </li>
      <li class="nav-item {{ (request()->is('admin/resources')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.resources')}}">
          <i class="material-icons"></i>
          <p>{{ __('Guruboss Library') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="">
          <i class="material-icons"></i>
            <p>{{ __('Reports') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="">
          <i class="material-icons"></i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      
      
    </ul>
  </div>
</div>