<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
{!! Html::style("Wep/vendor/bootstrap/css/bootstrap.min.css") !!}
{!! Html::style("Wep/vendor/fontawesome-free/css/all.min.css") !!}
{!! Html::style("Wep/css/clean-blog.min.css") !!}
    <!-- Bootstrap core CSS -->

    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
@yield('head')
</head>

<body>

<!-- Navigation -->
@include('site.includes.navbar')


<!-- Page Header -->
<header class="masthead" style="background-image: url('Wep/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1></h1>
                    <h2 class="subheading"></h2>
                    <span style="text-align: center" class="meta">@yield('subject')</span>

                </div>
            </div>
        </div>
    </div>
</header>
