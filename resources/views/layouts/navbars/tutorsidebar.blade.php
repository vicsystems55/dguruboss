<div class="sidebar" data-color="purple" data-background-color="azure" data-image="https://material-dashboard-pro-laravel.creative-tim.com/material/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://dguruboss.com/" class="simple-text logo-normal">
      {{ __('GuruBoss Tutor') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{ (request()->is('tutor')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tutor') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'allclasses' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
        <i class="material-icons">library_books</i>
          <p>{{ __('Classes') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
          
            <li class="nav-item 
            {{ (request()->is('tutor/allclasses','tutor/one_class_edit/*')) ? 'active' : '' }}

            {{ (request()->is('tutor/one_class/*')) ? 'active' : '' }}
            
            ">
              <a class="nav-link" href="{{ route('tutor.allclasses') }}">
              <i class="material-icons">bubble_chart</i>
                <span class="sidebar-normal">{{ __('All Classes') }} </span>
              </a>
            </li>
            <li class="nav-item {{ (request()->is('tutor/addclasses')) ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('tutor.addclasses') }}">
              <i class="material-icons">bubble_chart</i>
                <span class="sidebar-normal"> {{ __('Add New Class') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ (request()->is('tutor/profile')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tutor.profile') }}">
          <i class="material-icons">person</i>
            <p>{{ __('Profile') }}</p>
        </a>
      </li>

      <li class="nav-item {{ (request()->is('tutor/reports')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tutor.reports') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Reports') }}</p>
        </a>
      </li>
      <li class="nav-item {{ (request()->is('tutor/resources')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tutor.resources') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('GuruBoss Library') }}</p>
        </a>
      </li>
      
      <li class="nav-item  {{ (request()->is('tutor/wallet')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tutor.wallet') }}">
          <i class="material-icons">account_balance_wallet</i>
            <p>{{ __('Wallet') }}</p>
        </a>
      </li>
      <li class="nav-item {{ (request()->is('tutor/notifications')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tutor.notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
     
      
    </ul>
  </div>
</div>