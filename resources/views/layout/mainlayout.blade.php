<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.partials.head')
</head>
<body>
@if(!Route::is(['change-password2','coming-soon','error-404','error-500','forgot-password','lock-screen','login','register']))
@include('layout.partials.header')
@include('layout.partials.nav')
@endif
@yield('content')
@include('layout.partials.footer-scripts')
  </body>
</html>