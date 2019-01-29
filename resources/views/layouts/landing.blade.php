<!doctype html>
<html lang="en">
<!--

Page    : index / MobApp
Version : 1.0
Author  : Colorlib
URI     : https://colorlib.com

 -->

<head>
    <title>MobApp - App Landing Page Template</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme|Dancing+Script|Indie+Flower|Lobster|Pacifico" rel="stylesheet">
    <!-- Awesomicon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>@yield('title')</title>
    @stack('styles')
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="30">
@include('layouts.landing-header')
@yield('content')
@include('landing.popups.popup')
@include('layouts.landing-footer')
@stack('scripts')
</body>

</html>

