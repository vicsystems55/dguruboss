@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Material Dashboard')])

@section('content')
<div class="container" style="height: auto;">

  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
      <div class="p-5"></div>
     
          <h1 class="text-white text-center display-2">{{ __('Welcome to GuruBoss') }}</h1>

          
          
          @auth
            <div class="container col-md-4">
              <a href="{{ route('login')}}" class="btn btn-primary btn-lg btn-block float-center">Login</a>
            </div>
          @endauth
      </div>
  </div>
</div>
@endsection

<div class="modal fade bd-example-modal-lg" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="container">

        <h6>Art and Creativity</h6>

        <h6>Fashion</h6>

        <h6>Technology</h6>

        <h6>Relationship</h6>

      </div>
    </div>
  </div>
</div>