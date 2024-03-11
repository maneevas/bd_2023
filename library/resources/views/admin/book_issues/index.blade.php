@php
    $users = \App\Models\User::where('is_admin', 0)->get();
@endphp
@extends('layout')

@section('styles')
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
    <style>
        .logout-button {
            margin-bottom: 20px;
            text-align: right;
        }
    </style>    
@endsection

@section('title')Личный кабинет@endsection
@section('main_content')
    
<main>
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
    </header>
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
              <li><a href ="{{ route('admin.book_issues.index') }}"><i class="fa fa-book fa-fw"></i>Читатели и книги</a></li>
            </ul>  
          </nav>
        </div>
        <div class="templatemo-content col-1 light-gray-bg">
            <div class="templatemo-content-container">
                <div class="templatemo-content-widget no-padding">
                    <div class="logout-button d-flex align-items-center justify-content-between">
                        <h2 class="media-heading text-uppercase blue-text">Читатели и книги</h2>
                        <a href="{{ route('admin.book_issues.create') }}" class="templatemo-blue-button">Выдать книгу</a>
                    </div>     
                    <form action="{{ route('admin.book_issues.index') }}" method="GET">
                        <input type="text" style="width: 220px;height: 28px;" name="search" placeholder="Найти по названию/имени читателя" value="{{ request()->get('search') }}" required/>
                        <button type="submit" class="btn btn-primary">Найти</button>
                        <a href="{{ route('admin.book_issues.index') }}" class="btn btn-default">Сбросить</a>
                    </form>
                    <p style="font-size: 14px;">Записей найдено: {{ $bookIssues->total() }}</p>                
                    <div class="panel panel-default table-responsive">
                        <table class="table table-striped table-bordered templatemo-user-table" style="background-color: white;">
                            <thead>
                                <tr style="text-align: center;">
                                    <td>ID</td>
                                    <td>Имя читателя</td>
                                    <td>Название книги</td>
                                    <td>Авторы книги</td>
                                    <td>Дата получения</td>
                                    <td>Дата возврата</td>
                                    <td>Изменение</td>
                                    <td>Удаление</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookIssues as $bookIssue)
                                <tr @if(isset($search) && (strpos($bookIssue->book->title, $search) !== false || strpos($bookIssue->user->name, $search) !== false || strpos($bookIssue->user->surname, $search) !== false)) style="text-align: center; background-color: #f1e9db;" @else style="text-align: center;" @endif>
                                    <td>{{ $bookIssue->id }}</td>
                                    <td>{{ $bookIssue->user->surname }} {{ $bookIssue->user->name }} {{ $bookIssue->user->patname }}</td>
                                    <td>{{ $bookIssue->book->title }}</td>
                                    <td>
                                        @foreach ($bookIssue->book->authors as $author)
                                            {{ $author->name }} {{ $author->surname }} {{ $author->patname }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $bookIssue->take_date }}</td>
                                    <td>{{ $bookIssue->return_date }}</td>
                                    <td><a href="{{ route('admin.book_issues.edit', $bookIssue->id) }}" class="btn btn-default" style="background-color: #71bfc0;color: white">Изменить</a></td>
                                    <td><form method="POST" action="{{ route('admin.book_issues.destroy', $bookIssue->id) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-default" style="background-color: #dd7676;color: white;">Удалить</button>
                                    </form></td>
                                </tr>
                                @endforeach
                                                            
                            </tbody>
                        </table>
                                 
                        {{ $bookIssues->links('vendor.pagination.bootstrap-4') }}
                    </div>                          
                </div>
            </div>
        </div>
    </div>
</main>

@endsection