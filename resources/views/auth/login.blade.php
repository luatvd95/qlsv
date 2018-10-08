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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            {!! Form::open(['route' => 'login']) !!}
            <div class="form-group">
                {!! Form::text('email',
                      null,
                      [
                          'class'=>'form-control',
                          'placeholder'=>'E-Mail Address'
                      ]
                )
                !!}
            </div>
            <div class="form-group">
                {!! Form::password('password',
                      [
                          'class'=>'form-control',
                          'placeholder'=>'Password'
                      ]
                )
                !!}
            </div>
            <div class="form-group">
                {!! Form::label('remember','Remember Me') !!}
                {!! Form::checkbox('remember', old('remember') ? 'true' : '') !!}
            </div>
            <div class="form-group">
                {!! Form::submit('login',
                      [
                         'class'=>'btn btn-primary'
                      ]
                )
                !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
