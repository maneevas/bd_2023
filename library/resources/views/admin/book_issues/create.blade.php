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
                <h1>Новая связь пользователь-книга</h1>
            </header>
            <form method="POST" action="{{ route('admin.book_issues.store') }}" class="templatemo-login-form">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
                        <select id="user_id" name="user_id" class="form-control">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">
                                    {{ $user->name }} {{ $user->surname }} {{ $user->patname }}
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
                                <option value="{{ $book->id }}">
                                    {{ $book->title }} ({{ $book->authors->pluck('name')->implode(', ') }})
                                </option>
                            @endforeach
                        </select>                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></div>
                        <input type="date" id="take_date" name="take_date" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></div>
                        <input type="date" id="return_date" name="return_date" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="templatemo-blue-button width-100">Создать</button>
                </div>
            </form>
        </div>
    </body>
</main>
