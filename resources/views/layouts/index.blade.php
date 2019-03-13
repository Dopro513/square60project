<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('css')
    <title>Hypo Real Estate</title>
</head>
<body>
    <div></div>
    <header>
        <nav class="navbar is-info is-bold " role="navigation" aria-label="dropdown navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img src="{{ asset('images/logo-white.svg') }}" alt="LOGO" width="160" >
                    </a>
                    <div class="navbar-burger burger" data-target="navMenuTransparentExample"></div>
                </div>
                <div id="navMenuTransparentExample" class="navbar-menu">
                    <div class="navbar-start"></div>
                    <div class="navbar-end">
                        <a href="/" class="navbar-item modal-button" >Home</a>
                        <a href="login" class="navbar-item modal-button" data-target="#modal">Sign in</a>
                        <div class="navbar-item">/</div>
                        <a href="register" class="navbar-item modal-button" data-target="#modal">Sign up</a>
                        <a href="register" class="navbar-item modal-button" data-target="#modal">Submit listing</a>
                        <div id="modal" class="modal">
                            <div class="modal-background"></div>
                            <div class="modal-content">
                                <div class="box">
                                    <article class="media">
                                        <div class="media-left">
                                            <figure class="image is-64x64">
                                                <img src="http://bulma.io/images/placeholders/128x128.png" alt="Image">
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <nav class="level">
                                                <div class="level-left">
                                                    <a class="level-item">
                                                        <span class="icon is-small"><i class="fa fa-reply"></i></span>
                                                    </a>
                                                    <a class="level-item">
                                                        <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                                                    </a>
                                                    <a class="level-item">
                                                        <span class="icon is-small"><i class="fa fa-heart"></i></span>
                                                    </a>
                                                </div>
                                            </nav>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <button class="modal-close"></button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer></footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('js')
</body>
</html>
