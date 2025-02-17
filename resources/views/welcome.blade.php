<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Ben's Resume - Profile HTML Page</title>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="Tooplate">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
      <!-- MAIN CSS -->
      <link rel="stylesheet" href="{{asset('frontend/css/tooplate-ben-resume-style.css')}}">

   </head>
   <body data-spy="scroll" data-target="#navbarNav" data-offset="50">
      <!-- MENU BAR -->
      @include('pages.menu')
      <!-- HERO -->
      @include('pages.introduction')
      @include('pages.aboutme')
      <!-- TESTIMONIAL -->
      @include('pages.review')
      <!-- FAQ -->
      @include('pages.question')
      <!-- CONTACT -->
      @include('pages.contact')
      <!-- SCRIPTS -->
      <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
      <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('frontend/js/smoothscroll.js') }}"></script>
      <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('frontend/js/custom.js') }}"></script>
   </body>
</html>
