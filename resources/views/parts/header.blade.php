<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>SearchClone</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset("css/app.css")}}" type="text/css"/>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3">
                        <div class="header-logo">
                            <div class="header-logo-image">
                                <a href="{{route('main')}}"></a>
                            </div>
                            <div class="header-logo-text">
                                <div class="header-logo-text-first_word">
                                    <a href="{{route('main')}}">Search</a>
                                </div>
                                <div class="header-logo-text-second_word">
                                    <a href="{{route('main')}}">Сlone</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-6">
                        <div class="header-menu">
                            <div class="header-menu-item">
                                <a href="{{route('tariffs')}}">Тарифы</a>
                            </div>
                            @auth
                                <div class="header-menu-item">
                                    <a href="{{route('history')}}">История поисков</a>
                                </div>
                                <div class="header-menu-item">
                                    <a href="{{route('search')}}">Найти клона</a>
                                </div>
                            @endauth
                            <div class="header-menu-item">
                                <a href="{{route('about')}}">О нас</a>
                            </div>
                            @auth
                                <div class="header-menu-item">
                                    <div class="button-personal-cabinet">
                                        <a href="{{route('personal_cabinet')}}"></a>
                                        <div class="button-personal-cabinet-logout">
                                            <a href="{{route('auth_logout')}}">
                                                Выйти
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endauth
                            @guest
                                <button class="header-menu-login">
                                    Войти
                                </button>
                            @endguest
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
        </header>
{{--        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}
