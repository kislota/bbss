<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="blog-masthead">
        <div class="row">
            <div class="col-sm-4">
                <div class="blog-logo">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="slog">
                                <p>БИЗНЕС БЕЗ</p>
                                <p class="slog-red">СОЗДАНИЯ САЙТА</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="logo">
                                <span>ББ</span><span class="logo-red">СС</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <nav class="blog-nav">
                    <a class="blog-nav-item" href="{{ url('/') }}">Главная</a><span>/</span>
                    <a class="blog-nav-item" href="{{ url('/busposts') }}">Бизнес Объявления</a><span>/</span>
                    <a class="blog-nav-item" href="{{ url('/reviews') }}">Отзывы</a><span>/</span>
                    <a class="blog-nav-item active" href="{{ url('/posts') }}">Блог</a><span>/</span>
                    <a class="blog-nav-item" href="{{ url('/contacts') }}">Контакты</a>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <hr class="line3">
    <div class="bg-title">
        @yield('title')
    </div>
    <hr class="line3">
    <hr class="line1">
</div>
<div class="container">
    @yield('content')
</div>
<div class="container">
    <div class="blog-footer">
        <hr class="line1">
        <hr class="line2">
        <hr class="line3">
        <div class="logo logo-footer">
            <span>ББ</span><span class="logo-red">СС</span>
        </div>
        <div class="copyright">Все права защищены 2018</div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</body>
</html>