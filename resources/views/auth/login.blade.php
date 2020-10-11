@extends('edu.base2', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('GuruBoss')])

@section('content')
<section id="count-down-part" class="bg_cover pt-70 pb-120" data-overlay="8" style="background-image: url(/edu/images/bg-2.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="count-down-cont pt-50">
                        <h3>Create a 3 minutes informative clip and earn</h3>
                        <h2>Guruboss Portal</h2>
                        <a href="/" class="main-btn">Back to Main Site</a>

                        
                    </div> <!-- count down cont -->
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-8">
                    <div class="category-form category-form-3 pt-50">
                        <div class="form-title text-center">
                            <h3>Login</h3>
                        
                        </div>
                        <div class="main-form">
                            <form method="post" action="{{ route('login')}}">
                            @csrf
                                <div class="singel-form">
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                                <div class="singel-form">
                                    <input type="password" name="password" placeholder="Password">

                                    @if ($errors->has('password'))
                                        <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                        <strong>{{ $errors->first('password') }}lkl</strong>
                                        </div>
                                    @endif
                                </div>
                                
                                <div class="singel-form">
                                    <button class="main-btn shadow" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- category form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@endsection
