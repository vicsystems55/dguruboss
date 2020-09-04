@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div style="min-height: 800px;" class="conten">
  <div style="height: 30px;" class="d mt-2 p-2"></div>
      <div style="min-height: 320px; position: relative;" class="container-flui mt-5 bg-dark text-white p-2">
        <div

          style="
            top: 0;
            left: 0;
            position: absolute;
            width: 100%;
            min-height: 100%;
            background-color: purple;
            z-index: 0;
            opacity: 0.3;
          "
          >
        
        </div>
          <div  class="col-md-12 on">

              <div class="container">
                  <div class="row">
                      <div class="col-md-3">
                          <div class="mt-4 card-avatar">
                            <a href="#pablo">
                              <img class="img rounded-circle m" src="http://i.pravatar.cc/200">
                            </a>
                          </div>
                      </div>

                      <div class="col-md-7">
                        <h1 class="mt-5">Hello, {{Auth::user()->name}}</h1>
                          
                          <p class="col-md-10">
                          {{ Auth::user()->bio}}
                          </p>
                      </div>

                      <div class="col-md-1">
                      
                      
                      </div>
                  </div>

              </div>
          
          
          </div>

      </div>

        <div style="position: absolute; margin-top: -6em;" class="container">
          <div class="container">

          <div class="row">
          
          <div class="col-md-6 card bg-white">

                <div class="card-body text-dark">
                    <h3>user information</h3>

                    <div class="row">
                        <label class="col-sm-3 col-form-label">Full Name:</label>
                        <div class="col-sm-7">
                          <div class="form-grou ">
                            <input class="form-control" name="name" id="input-name" type="text" placeholder="Name" value="{{$user->name}}" required="true" aria-required="true">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-sm-3 col-form-label">Email:</label>
                        <div class="col-sm-7">
                          <div class="form-grou ">
                            <input class="form-control" name="name" id="input-name" type="text" placeholder="Name" value="{{$user->email}}" required="true" aria-required="true">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-sm-3 col-form-label">Phone:</label>
                        <div class="col-sm-7">
                          <div class="form-grou ">
                            <input class="form-control" name="phone" id="input-name" type="text" placeholder="Phone" value="{{$user->phone}}" required="true" aria-required="true">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-sm-3 col-form-label">Bio:</label>
                        <div class="col-sm-7">
                          <div class="form-grou ">
                          <textarea type="text" name="bio" id="Bio">
                            {{$user->bio}}
                          </textarea>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-sm-3 col-form-label">Address:</label>
                        <div class="col-sm-7">
                          <div class="form-grou ">
                          <textarea type="text" name="address" id="address"  >
                            {{$user->address}}
                          </textarea>
                          </div>
                        </div>
                      </div>

                      <h3>Bank Info</h3>

                      <h4>No records yet</h4>

                      <a class="btn btn-primary" href="">Update Record</a>

                    
                      

                  

          </div>

    </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h3>Update Password </h3>

                <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
                    @csrf
                    @method('put')

                    <div class="car ">
                    
                      <div class="card-bod ">
                        @if (session('status_password'))
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <i class="material-icons">close</i>
                                </button>
                                <span>{{ session('status_password') }}</span>
                              </div>
                            </div>
                          </div>
                        @endif
                        <div class="row">
                          
                          <div class="col-sm-12">
                            <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                              <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Current Password') }}" value="" required />
                              @if ($errors->has('old_password'))
                                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                              @endif
                            </div>
                          </div>
                        </div>
                        <div class="row">
                        
                          <div class="col-sm-12">
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                              <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                              @if ($errors->has('password'))
                                <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                              @endif
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>
                      </div>
                    </div>
                </form>

              </div>
            </div>
          </div>

          



    </div>
  </div>

          </div>

    </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush