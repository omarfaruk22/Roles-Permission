@extends('layouts.logindex')
@section('auth')
<div class="main">
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div > @if(Session::has('message'))
                    
                            <span id="flash-message" class="alert alert-danger mx-2">{{ Session::get('message') }}</span>
                               @endif</div>
                        <div class="form-group"> 
                            <input type="text" name="name"class="form-control fc-outline-dark" placeholder="Enter your name">
                            <span class="text-danger">
                                @error('name')
                                  {{ $message }}
                                @enderror
                              </span>
                          </div><!-- form-group -->
            
                      <div class="form-group">
                        <input type="text" name="email" class="form-control fc-outline-dark" placeholder="Enter your Email">
                        <span class="text-danger">
                            @error('email')
                              {{ $message }}
                            @enderror
                          </span>
                      </div><!-- form-group -->
                      <div class="form-group">
                        <input type="password" name="password" class="form-control fc-outline-dark" placeholder="password">
                        <span class="text-danger">
                            @error('password')
                              {{ $message }}
                            @enderror
                          </span>
                      </div><!-- form-group -->
                      <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control fc-outline-dark" placeholder="Confirm password">
                        <span class="text-danger">
                            @error('password_confirmation')
                              {{ $message }}
                            @enderror
                          </span>
                      </div>
                      <button type="submit" class="btn btn-info btn-block">Register</button>
                      
                    </form>
            
                </div>
                <div class="signup-image">
                    <figure><img src="{{asset('backend/img/pages/signup.jpg')}}" alt="sing up image"></figure>
                    <a href="{{route('login')}}" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection