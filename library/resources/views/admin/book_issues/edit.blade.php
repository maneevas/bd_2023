@php
    $users = \App\Models\User::where('is_admin', 0)->get();
@endphp
<head>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<main>
    <body class="light-gray-bg">
        <div class="templatemo-content-widget templatemo-login-widget white-bg">
            <header class="text-center">
                <h1>Редактирование связи пользователь-книга</h1>
            </header>
            <form method="POST" action="{{ route('admin.book_issues.update', $bookIssue->id) }}" class="templatemo-login-form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
                        <select id="user_id" name="user_id" class="form-control">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $user->id == $bookIssue->user_id ? 'selected' : '' }}>
                                    {{ $user->surname }} {{ $user->name }} {{ $user->patname }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-book fa-fw"></i></div>
                        <select id="book_id" name="book_id" class="form-control">
                            @foreach ($books as $book)
                                <option value="{{ $book->id }}" {{ $book->id == $bookIssue->book_id ? 'selected' : '' }}>
                                    {{ $book->title }} (
                                        @foreach ($book->authors as $author)
                                            {{ $author->name }} {{ $author->surname }} {{ $author->patname }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    )
                                </option>
                            @endforeach
                        </select>                        
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></div>
                        <input type="date" id="take_date" name="take_date" class="form-control" value="{{ $bookIssue->take_date }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></div>
                        <input type="date" id="return_date" name="return_date" class="form-control" value="{{ $bookIssue->return_date }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="templatemo-blue-button width-100">Обновить</button>
                </div>
            </form>
        </div>
    </body>
</main>
