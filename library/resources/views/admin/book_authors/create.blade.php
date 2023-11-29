<head>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<main>
    <body class="light-gray-bg">
        <div class="templatemo-content-widget templatemo-login-widget white-bg">
            <header class="text-center">
                <h1>Новая связь книга-автор</h1>
            </header>
            <form method="POST" action="{{ route('admin.book_authors.store') }}" class="templatemo-login-form">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-book fa-fw"></i></div>
                        <select id="book_id" name="book_id" class="form-control">
                            @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ $book->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
                        <select id="author_id" name="author_id" class="form-control">
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->surname }} {{ $author->name }} {{ $author->patname }}</option>
                            @endforeach
                        </select>                        
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="templatemo-blue-button width-100">Создать</button>
                </div>
            </form>
        </div>
    </body>
</main>
