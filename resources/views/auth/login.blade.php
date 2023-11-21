@extends('layouts.logindex')
@section('auth')
<div class="main">
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{asset('backend/img/pages/signin.jpg')}}" alt="sing up image"></figure>
                    <a href="{{route('register')}}" class="signup-image-link">Create an account</a>
                </div>
                <div class="signin-form">
                    <h2 class="form-title">Login</h2>
                    @if(Session::has('error'))
        
            <span id="flash-message" class="alert alert-danger">{{ Session::get('error') }}</span>
               @endif
                <form action="{{route('login')}}" method="post" class="register-form" id="login-form">
                       @csrf
                        <div class="form-group">
                            <div class="">
                                <input name="email" type="text" placeholder="Email"
                                    class="form-control input-height" /> </div>
                                    <span class="text-danger">
                                        @error('email')
                                          {{ $message }}
                                        @enderror
                                      </span>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <input name="password" type="password" placeholder="Password"
                                    class="form-control input-height" /> </div>
                                    <span class="text-danger">
                                        @error('password')
                                          {{ $message }}
                                        @enderror
                                      </span>
                                      <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                me</label>
                        </div>
                        <div class="form-group form-button">
                            <button class="btn btn-round btn-primary" name="signin" id="signin">Login</button>
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            setTimeout(function () {
                flashMessage.style.display = 'none';
            }, 3000); // 3 seconds
        }
    });
    
    
        </script>
@endsection