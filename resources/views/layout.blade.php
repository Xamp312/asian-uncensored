<!DOCTYPE html>
<html lang="en">
    <head>


        <link rel="icon" type="image/png" href="img/favicon.png">

        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <link href="css/osahan.css" rel="stylesheet">

        <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">

      @include('partials.head')
      @yield('head_page')


    </head>



    <body id="page-top">
      @yield('content')


      @include('partials.footer')
      @yield('footer_page')

    </body>
</html>
