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
                        <h2 class="media-heading text-uppercase blue-text">Авторы</h2>
                        <a href="{{ route('admin.authors.create') }}" class="templatemo-blue-button">Добавить автора</a>
                    </div>     
                    <form action="{{ route('admin.authors.index') }}" method="GET">
                        <input type="text" style="width: 220px;height: 28px;" name="search" placeholder="Найти по фамилии/имени" value="{{ request()->get('search') }}" required/>
                        <button type="submit" class="btn btn-primary">Найти</button>
                        <a href="{{ route('admin.authors.index') }}" class="btn btn-default">Сбросить</a>
                    </form>
                    <p style="font-size: 14px;">Записей найдено: {{ $authors->total() }}</p>               
                    <div class="panel panel-default table-responsive">
                        <table class="table table-striped table-bordered templatemo-user-table" style="background-color: white;">
                            <thead>
                                <tr style="text-align: center;">
                                    <td>ID</td>
                                    <td>Фамилия</td>
                                    <td>Имя</td>
                                    <td>Отчество</td>
                                    <td>Дата рождения</td>
                                    <td>Изменение</td>
                                    <td>Удаление</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($authors as $author)
                                <tr @if(isset($search) && (strpos($author->name, $search) !== false || strpos($author->surname, $search) !== false)) style="text-align: center; background-color: #f1e9db;" @else style="text-align: center;" @endif>
                                    <td>{{ $author->id }}</td>
                                        <td>{{ $author->surname }}</td>
                                        <td>{{ $author->name }}</td>
                                        <td>{{ $author->patname }}</td>
                                        <td>{{ $author->bd_date }}</td>
                                        <td><a href="{{ route('admin.authors.edit', $author->id) }}" class="btn btn-default" style="background-color: #71bfc0;color: white">Изменить</a></td>
                                        <td><form method="POST" action="{{ route('admin.authors.destroy', $author->id) }}" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-default" style="background-color: #dd7676;color: white;">Удалить</button>
                                        </form></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>    
                        {{ $authors->links('vendor.pagination.bootstrap-4') }}
                    </div>                          
                </div>
            </div>
        </div>
    </div>
</main>

@endsection