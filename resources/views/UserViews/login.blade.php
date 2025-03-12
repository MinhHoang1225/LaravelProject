@extends('ComponentViews.master')
@section('content')
<div class="background">
    <div class="login-container">
        <div class="logo">
            <img src="\assets\image\logo.png" alt="FPT Play">
        </div>
        <h2>Login</h2>
        
        <input type="text" placeholder="Phone number or email">
        <input type="password" placeholder="Password">

        <button>Login</button>

        <div class="signup-link">
            <p class='signyp-text'>Don't have an account? <a href="{{route('register')}}" id="switch-to-signup">Register now</a></p>
        </div>
    </div>
</div>

@endsection