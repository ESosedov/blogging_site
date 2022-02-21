<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{  asset('assets/front/css/front.css') }}"/>
    <!-- Custom styles for this template -->
</head>
<body>
<!-- Navigation -->

@include('layouts.navbar')
<div class="container">

    <header>
        <a href="index.html"><img src="{{ asset('assets/front/images/logo.png')}}"></a>
    </header>

    @yield('page-title')

    <section>
        <div class="row">
            <div class="col-md-4 sidebar-gutter">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-8">
                @yield('content')
            </div>
        </div>

    </section>
</div><!-- /.container -->

<footer class="footer">

    <div class="footer-socials">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-reddit"></i></a>
    </div>

    <div class="footer-bottom">
        <i class="fa fa-copyright"></i> Copyright 2015. All rights reserved.<br>
        Theme made by <a href="http://www.moozthemes.com">MOOZ Themes</a>
    </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('/assets/front/js/front.js') }}"></script>
</body>
</html>
