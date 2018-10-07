<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('assets.css')
    @yield('css_admin')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('admin.layout.header')
    @include('admin.layout.sidebar')
    <div class="content-wrapper">
        <section class="content">
            @yield('content_admin')
        </section>
    </div>
</div>
@include('assets.js')
@yield('js_admin')
</body>
</html>
