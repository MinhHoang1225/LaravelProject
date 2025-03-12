@extends('ComponentViews.master')
@section('content')
<div class="background">
        <div class="login-container">
            <div class="logo">
                <img src="assets/image/logo.png" alt="FPT Play">
            </div>
            <h2>Register</h2>
            
            <input type="text" placeholder="Full Name">
            <input type="text" placeholder="Phone number or email">
            <input type="password" placeholder="Password">
            <input type="password" placeholder="Confirm Password">

            <button class="login-btn">Register</button>

            <div class="signup-link">
                <p class="signup-text">Already have an account? <a href="{{route('login')}}" id="switch-to-login">Login now</a></p>
            </div>
        </div>
    </div>

@endsection