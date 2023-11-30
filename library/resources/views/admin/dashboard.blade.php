@extends('layout')

@section('styles')
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
    <style>
        .logout-button {
            text-align: right;
        }
    </style>
@endsection

@section('title')Личный кабинет@endsection

@section('main_content')
    
<main>
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
    </header>
    <div>
        <div class="templatemo-flex-row">
            <div class="templatemo-sidebar">
                <header class="templatemo-site-header">
                    <div class="square"></div>
                    <h1>Управление</h1>
                </header>
                <nav class="templatemo-left-nav">          
                    <ul>
                        <li><a href ="{{ route('admin.dashboard') }}" class="active"><i class="fa fa-home fa-fw"></i>Мой профиль</a></li>
                        <li><a href ="{{ route('admin.users.index') }}"><i class="fa fa-users fa-fw"></i>Пользователи</a></li>
                        <li><a href ="{{ route('admin.authors.index') }}"><i class="fa fa-database fa-fw"></i>Авторы</a></li>
                        <li><a href ="{{ route('admin.books.index') }}"><i class="fa fa-book fa-fw"></i>Книги</a></li>
                        <li><a href ="{{ route('admin.book_authors.index') }}"><i class="fa fa-book fa-fw"></i>Книги и авторы</a></li>
                        <li><a href ="{{ route('admin.book_issues.index') }}"><i class="fa fa-book fa-fw"></i>Пользователи и книги</a></li>
                    </ul>  
                </nav>
            </div>
            <div class="templatemo-content col-1 light-gray-bg">
                <div class="templatemo-flex-row flex-content-row">
                    <div class="templatemo-content-widget white-bg col-2">
                        <i class="fa fa-times"></i>
                        <div class="media margin-bottom-30">
                            <div class="media-body">
                                <h2 class="media-heading text-uppercase blue-text">Администратор {{ $user->patname }} {{ $user->name }} {{ $user->patname }}</h2>
                            </div>        
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><div class="circle green-bg"></div></td>
                                        <td>Email:</td>
                                        <td>{{ $user->email }}</td>                    
                                    </tr> 
                                    <tr>
                                        <td><div class="circle pink-bg"></div></td>
                                        <td>На сайте с:</td>
                                        <td>{{ $user->created_at->format('d/m/Y') }}</td>                    
                                    </tr>                     
                                </tbody>
                            </table>
                            <div class="logout-button">
                                <form method="POST" action="{{ route("logout") }}">
                                    @csrf
                                    <button type="submit" class="templatemo-blue-button" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Выйти из аккаунта</button>
                                </form>
                            </div>                            
                </div>
            </div>
        </div>
    </div>
    <section class="section-padding section-bg">

    </section>
</main>

@endsection
