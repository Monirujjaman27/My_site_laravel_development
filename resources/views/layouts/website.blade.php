<!DOCTYPE html>
<html lang="en">

<head>
    <title>Avo - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('Frontend.partials.links')
</head>

<body class="position-relative">

    @include('Frontend.partials.chart')

    <!-- navigations  -->
    @include('Frontend.partials.header')
 
    <!-- container  -->
    @yield('content')
    <!-- container  end-->
    <!-- footer section  -->
    @include('Frontend.partials.footer')

    <!-- loader -->
    @include('Frontend.partials.preloader')
    <!-- scripts files -->
    @include('Frontend.partials.scripts')
</body>

</html>