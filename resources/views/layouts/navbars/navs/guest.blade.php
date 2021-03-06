<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
  <div class="container">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="{{ route('home') }}">GuruBoss</a>

        
          
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        
        <li class="nav-item{{ $activePage == 'register' ? ' active' : '' }}">
          <a class="btn btn-info" href="/regInstructor" class="nav-link">
            <i class="material-icons"></i> {{ __('Become a Tutor') }}
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
          <a class="btn btn-secondary" href="{{ route('login') }}" class="nav-link">
            <i class="material-icons"></i> {{ __('Login') }}
          </a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>


<!-- End Navbar -->