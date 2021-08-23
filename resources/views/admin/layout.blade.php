<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Admin - Dashboard | Asian Uncensored
    </title>
    <!-- Favicon -->
    <link href="/img/favi.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="../../css.css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="/js/plugins/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/css/argon-dashboard.css?v=1.1.2" rel="stylesheet">
</head>


<body class="">

    <!-- Navbar -->
    @include('admin.nav')
    <!-- End Navbar -->
    <!-- Header -->
   @yield('content')
    <!--   Core   -->
    <script src="/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--   Optional JS   -->
    <!--   Argon JS   -->
    <script src="/js/argon-dashboard.min.js?v=1.1.2"></script>
    <script src="../../agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });
    </script>
</body>

</html>