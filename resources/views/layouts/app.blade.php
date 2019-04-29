<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Voyage - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{  csrf_token()  }}">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
  </head>
  <body>

      @include('inc.navbar')
      @yield('content')
      @include('inc.footer')

      
      <script src="{{ URL::asset('js/jquery.min.js')}}"></script>
      <script src="{{ URL::asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
      <script src="{{ URL::asset('js/popper.min.js')}}"></script>
      <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
      <script src="{{ URL::asset('js/jquery.easing.1.3.js')}}"></script>
      <script src="{{ URL::asset('js/jquery.waypoints.min.js')}}"></script>
      <script src="{{ URL::asset('js/jquery.stellar.min.js')}}"></script>
      <script src="{{ URL::asset('js/owl.carousel.min.js')}}"></script>
      <script src="{{ URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{ URL::asset('js/aos.js')}}"></script>
      <script src="{{ URL::asset('js/jquery.animateNumber.min.js')}}"></script>
      <script src="{{ URL::asset('js/bootstrap-datepicker.js')}}"></script>
      <script src="{{ URL::asset('js/jquery.timepicker.min.js')}}"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
      <script src="{{ URL::asset('js/google-map.js')}}"></script>
      <script src="{{ URL::asset('js/main.js')}}"></script>
  </body>
</html>