<head>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<main>
    <body class="light-gray-bg">
        <div class="templatemo-content-widget templatemo-login-widget white-bg">
            <header class="text-center">
                <h1>Изменение связи книга-автор</h1>
            </header>
            <form method="POST" action="{{ route('admin.book_authors.update', $bookAuthor->id) }}" class="templatemo-login-form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-book fa-fw"></i></div>
                        <select id="book_id" name="book_id" class="form-control">
                            @foreach ($books as $book)
                                <option value="{{ $book->id }}" {{ $book->id == $bookAuthor->book_id ? 'selected' : '' }}>{{ $book->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
                        <select id="author_id" name="author_id" class="form-control">
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}" {{ $author->id == $bookAuthor->author_id ? 'selected' : '' }}>
                                    {{ $author->surname }} {{ $author->name }} {{ $author->patname }}
                                </option>
                            @endforeach
                        </select>                        
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="templatemo-blue-button width-100">Обновить</button>
                </div>
            </form>
        </div>
    </body>
</main>
