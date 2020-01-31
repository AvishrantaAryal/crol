<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Page Title -->
    <title>@yield('page-title')</title>


    <!-- FavIcon Link -->
    <link rel="icon" type="image/ico" href="{{url('public/frontend/favicon.ico')}}">


    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="description" content="@yield('seo_description')">
    <meta name="keywords" content="@yield('seo_keyword')">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/css/bootstrap.min.css')}}">


    <!-- Global CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/css/style.css')}}">


    <!-- PageLevel CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/creatu/css/test/test.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/creatu/css/header/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/creatu/css/footer/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/creatu/css/home/home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/creatu/css/about/about.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/creatu/css/gallery/gallery.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/creatu/css/contact/contact.css')}}">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Jquery 1.9.1 -->
    <script type="text/javascript" src="{{url('public/frontend/js/jquery-1.9.1.min.js')}}"></script>
        <!-- Bootstrap 4     -->

</head>
<body>

    <div>
        @include('frontend.header.header')
    </div>

    <div style="min-height: 50vh;">
        @yield('content')
    </div>

    <div>
        @include('frontend.footer.footer')
    </div>
</body>

<!-- Popper, Boostrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{url('public/frontend/js/bootstrap.js')}}"></script>


<!-- Global JS -->
<script type="text/javascript" src="{{url('public/frontend/js/js.js')}}"></script>

<!-- Font Awesome JS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


<!-- PageLevel JS -->
<script type="text/javascript" src="{{url('public/frontend/creatu/js/test/test.js')}}"></script>
<script type="text/javascript" src="{{url('public/frontend/creatu/js/home/home.js')}}"></script>

<!-- Fancybox JS -->
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</html>