<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSS FILES -->        
    <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        
        <link rel="stylesheet" href="{{asset('css/templatemo-topic-listing.css') }}">
        <link rel="stylesheet" type="text/css" href="/resouces/css/templatemo-topic-listing.css">
</head>


    <body id="top">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <i class="bi-back"></i>
                        <span>Главная</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/#section_1">Поиск</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/#section_2">Подборки</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="/#section_3">Помощь</a>
                            </li>

                            @guest
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="{{ route('login') }}">Вход</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="{{ route('register') }}">Регистрация</a>
                            </li>
                            @endguest

                            @auth
                                <li class="nav-item">
                                    @if (Auth::user()->is_admin)
                                        <a class="nav-link click-scroll" href="{{ route('admin.dashboard') }}">Панель управления</a>
                                    @else
                                        <a class="nav-link click-scroll" href="{{ route('user.dashboard') }}">Личный кабинет</a>
                                    @endif
                                </li>
                            @endauth


                        </ul>
                    </div>
                </div>
            </nav>

@yield('main_content')

<footer class="site-footer section-padding">
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Центральная городская библиотека им. И. А. Гончарова</h6>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Как с нами связаться</h6>

                        <p class="text-white d-flex mb-1">
                            <a class="site-footer-link">
                                +7 (8422) 32-32-33
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a class="site-footer-link">
                                улица Кирова, 40, Ульяновск
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Навигация по сайту</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="/#section_1" class="site-footer-link">Поиск</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="/#section_2" class="site-footer-link">Подборки</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="/#section_3" class="site-footer-link">Помощь</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>
        <script src="/js/jquery.sticky.js"></script>
        <script src="/js/click-scroll.js"></script>
        <script src="/js/custom.js"></script>

    </body>
</html>
