<!DOCTYPE html>
<html lang="en">
    <head>

        <link rel="icon" type="image/png" href="img/favi.png">


        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <link href="/css/osahan.css" rel="stylesheet">

        <link rel="stylesheet" href="/vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="/vendor/owl-carousel/owl.theme.css">




    
    <style type="text/css">
      
    @media only screen and (max-width: 600px) {
          #wrapper #content-wrapper .container-fluid {
            padding-bottom: 15px !important;
            padding-left: 15px !important;
            padding-right: 15px !important;
            padding-top: 1rem !important;
        }


        footer.sticky-footer {
          margin-left: 0px !important;
      }

      }

    </style>





      @include('partials.head')
      @yield('head_page')
     
      <?php echo $adSettings->verification_script; ?>


    </head>



    <body id="page-top" class="">

      <?php echo $adSettings->popunder_script; ?>

      @yield('content')


      @include('partials.footer')
      @yield('footer_page')

    </body>
</html>
