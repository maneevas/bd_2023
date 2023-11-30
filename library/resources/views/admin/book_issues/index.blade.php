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
@php
    $users = DB::table('book_issues')->paginate(10);
@endphp
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
              <li><a href ="{{ route('admin.book_issues.index') }}"><i class="fa fa-book fa-fw"></i>Пользователи и книги</a></li>
            </ul>  
          </nav>
        </div>
        <div class="templatemo-content col-1 light-gray-bg">
            <div class="templatemo-content-container">
                <div class="templatemo-content-widget no-padding">
                    <div class="logout-button d-flex align-items-center justify-content-between">
                        <h2 class="media-heading text-uppercase blue-text">Пользователи и книги</h2>
                        <a href="{{ route('admin.book_issues.create') }}" class="templatemo-blue-button">Добавить связь пользователь-книга</a>
                    </div>                    
                    <div class="panel panel-default table-responsive">
                        <table class="table table-striped table-bordered templatemo-user-table" style="background-color: white;">
                            <thead>
                                <tr>
                                    <td>id</td>
                                    <td>Имя пользователя</td>
                                    <td>Название книги</td>
                                    <td>Авторы книги</td>
                                    <td>Дата взятия</td>
                                    <td>Дата возврата</td>
                                    <td>Изменение</td>
                                    <td>Удаление</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookIssues as $issue)
                                <tr>
                                    <td>{{ $issue->id }}</td>
                                    <td>{{ $issue->user->name }} {{ $issue->user->surname }} {{ $issue->user->patname }}</td>
                                    <td>{{ $issue->book->title }}</td>
                                    <td>
                                        @foreach ($issue->book->authors as $author)
                                            {{ $author->name }} {{ $author->surname }} {{ $author->patname }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $issue->take_date }}</td>
                                    <td>{{ $issue->return_date }}</td>
                                    <td><a href="{{ route('admin.book_issues.edit', $issue->id) }}" class="templatemo-edit-btn">Изменить</a></td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.book_issues.destroy', $issue->id) }}" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach                                
                            </tbody>
                        </table>
                                 
                        {{ $bookIssues->links() }}
                    </div>                          
                </div>
            </div>
        </div>
    </div>
</main>

@endsection