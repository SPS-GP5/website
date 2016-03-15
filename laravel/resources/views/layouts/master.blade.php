<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="G5BOT Hagenberg Lego Project Information Website">
        <meta name="author" content="G5BOT Team">
        <link rel="shortcut icon" href="/assets/ico/favicon.png">

        <title>@yield('title') | G5BOT</title>

        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="/css/main.css" rel="stylesheet">
        <link href="/css/icomoon.css" rel="stylesheet">
        <link href="/css/animate-custom.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">

        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,700" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/modernizr.custom.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="/js/html5shiv.js"></script>
        <script src="/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
        <div id="navbar-main">
            <!-- Fixed navbar -->
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <img src="/img/g5botlogo.png" class="logo-bigger">
                        </button>
                        <a class="navbar-brand hidden-xs hidden-sm" href="/">
                            <img src="/img/g5botlogo.png">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            @yield('navbar-elements')
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        @yield('content')


        <div id="footerwrap">
            <div class="container">
                <h4>G5BOT | Copyright 2016</h4>
            </div>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <!--<script type="text/javascript" src="/js/retina.js"></script>-->
        <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="/js/smoothscroll.js"></script>
        <script type="text/javascript" src="/js/jquery-func.js"></script>
    </body>
</html>
