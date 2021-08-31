<!DOCTYPE html>
<html lang="en">
    <head>


        <link rel="icon" type="image/png" href="img/favi.png">

        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <link href="/css/osahan.css" rel="stylesheet">

        <link rel="stylesheet" href="/vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="/vendor/owl-carousel/owl.theme.css">

      @include('partials.head')
      @yield('head_page')


    </head>



    <body id="">
      @yield('content')







      <script src="/vendor/jquery/jquery.min.js" type="text/javascript"></script>
      <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

      <script src="/vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>

      <script src="/vendor/owl-carousel/owl.carousel.js" type="text/javascript"></script>

      <script src="/js/custom.js" type="text/javascript"></script>

      <script src="/js/rocket-loader.min.js" type="text/javascript"></script>
      <script src="/js/beacon.min.js" type="text/javascript"></script>



      @yield('footer_page')

    </body>
</html>
