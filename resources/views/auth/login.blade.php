<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body id="LoginForm">
<div class="container">
    <div class="login-form">
        <div class="main-div">
            <div>
                <h2>Admin Login</h2>
                <p>Please enter your email and password</p>
            </div>
            <form id="Login">
                <div class="form-group">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
                <div class="forgot">
                    <a href="reset.html">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
