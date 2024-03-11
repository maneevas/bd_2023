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
            <h1>Меню</h1>
          </header>
          <nav class="templatemo-left-nav">          
            <ul>
              <li><a href ="{{ route('user.dashboard') }}" class="active"><i class="fa fa-home fa-fw"></i>Мой профиль</a></li>
              <li><a href ="{{ route('user.books', ['user' => Auth::user()->id]) }}"><i class="fa fa-users fa-fw"></i>Мои книги</a></li>
            </ul>  
          </nav>
        </div>
        <div class="templatemo-content col-1 light-gray-bg">
            <div class="templatemo-content-container">
                <div class="templatemo-content-widget no-padding">
                    <div class="logout-button d-flex align-items-center justify-content-between">
                        <h2 class="media-heading text-uppercase blue-text">Мои книги</h2>
                    </div>                    
                    <div class="panel panel-default table-responsive">
                        <table class="table table-striped table-bordered templatemo-user-table" style="background-color: white;">
                            <thead>
                                <tr>
                                    <td>Книга</td>
                                    <td>Дата получения</td>
                                    <td>Дата возврата</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookIssues as $issue)
                                <tr>
                                    <td>
                                        "{{ $issue->book->title }}"
                                        @foreach ($issue->book->authors as $author)
                                            {{ $author->name }} {{ $author->surname }} {{ $author->patname }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $issue->take_date }}</td>
                                    <td>{{ $issue->return_date }}</td>
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
