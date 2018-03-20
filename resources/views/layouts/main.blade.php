<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/app.css" />
        <link rel="stylesheet" type="text/css" href="css/header.css" />
        @yield('static')
        <title>@yield('title')</title>
    </head>
    <body>
        <header style="background-color: #201600; height: 700px;">
            <div class="flex new_letter_search">
                <div class="row new_letter_search">
                    <div class="new col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        @if (isset($new) && $new)
                            <span class="new">new!</span>
                        @endif
                    </div>
                    <div class="search col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <span class="glyphicon glyphicon-search"></span>
                    </div>
                    <div class="letter col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <span class="glyphicon glyphicon-send"></span>
                    </div>
                </div>
            </div>
            <div class="title">
                blog SVETLANA PEIDA
            </div>
            <div class="flex img_header">
                <img title="Блог Светланы Пейда" alt="Блог Светланы Пейда" src="img/header/header_pic_1.png" />
            </div>
            <div class="flex navigation">
                <a href="#blog">БЛОГ</a>
                <a href="#answers">ВОПРОС-ОТВЕТ</a>
                <a href="#library">БИБЛИОТЕКА</a>
                <a href="#anounce">АНОНСЫ</a>
            </div>
        </header>
        @yield('content')
    </body>
</html>
