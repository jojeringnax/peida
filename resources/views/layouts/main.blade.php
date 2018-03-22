<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}" />
        <script type="text/javascript" src="{{ asset('js/header.js') }}"></script>
        @yield('static')
        <title>@yield('title')</title>
    </head>
    <body>
        <header style="background-color: #201600;">
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
                <div class="img_header_wrapper">
                    <img id="header_img_1" title="Блог Светланы Пейда" alt="Блог Светланы Пейда" src="img/header/header_pic_1.png" style="z-index: 13;" />
                    <img id="header_img_2" title="Блог Светланы Пейда" alt="Блог Светланы Пейда" src="img/header/header_pic_2.png" style="z-index: 11;" />
                    <img id="header_img_3" title="Блог Светланы Пейда" alt="Блог Светланы Пейда" src="img/header/header_pic_3.png" style="z-index: 12;" />
                </div>
            </div>
            <div class="flex navigation">
                <a href="#blog">БЛОГ</a>
                <a href="#questions">ВОПРОС-ОТВЕТ</a>
                <a href="#library">БИБЛИОТЕКА</a>
                <a href="#announces">АНОНСЫ</a>
            </div>
        </header>
        @yield('content')
    <footer>
        <div class="flex column footer">
            <div class="flex signupform_navigation">
                <div class="footer main signupform" style="background: none;">
                    <form action="#">
                        <div class="footer flex signupform">
                            <input type="submit" class="envelope" value="" />
                            <div class="subscribe">ПОДПИСАТЬСЯ</div>
                            <input class="signupform text" type="text" placeholder="Ваше имя" />
                            <input class="signupform text" type="text" placeholder="Ваш e-mail" />
                        </div>
                    </form>
                </div>
                <div class="flex navigation footer">
                    <a href="#blog">Блог</a>
                    <a href="#questions">Вопрос-Ответ</a>
                    <a href="#library">Библиотека</a>
                    <a href="#announces">Анонсы</a>
                </div>
            </div>
            <div class="flex social">
                <div class="facebook">
                    <img src="img/social/facebook.png" />
                </div>
                <div class="twitter">
                    <img src="img/social/twitter.png" />
                </div>
                <div class="google">
                    <img src="img/social/google.png" />
                </div>
                <div class="linkedIn">
                    <img src="img/social/linkedIn.png" />
                </div>
                <div class="vk">
                    <img src="img/social/vk.png" />
                </div>
            </div>
            <div class="flex footer_bottom">
                <div class="copyrights">© 2018 Сайт разработан BI+TB</div>
                <div class="usefull">При разработке сайта были использованы материалы художника Кевин Слоан</div>
                <div class="flex counters">
                    <div class="visitors flex column">
                        <div class="img"><img src="img/footer_bottom/visitors.png" /></div>
                        <div class="num"></div>
                        <div class="word">Посетители</div>
                    </div>
                    <div class="subscribers flex column">
                        <div class="img"><img src="img/footer_bottom/subscribers.png" /></div>
                        <div class="num"></div>
                        <div class="word">Подписчики</div></div>
                    <div class="soical-networks flex column">
                        <div class="img"><img src="img/footer_bottom/socials.png" /></div>
                        <div class="num"></div>
                        <div class="word">Соцсети</div>
                    </div>
                    <div class="readers flex column">
                        <div class="img"><img src="img/footer_bottom/readers.png" /></div>
                        <div class="num"></div>
                        <div class="word">Читатели</div></div>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>
