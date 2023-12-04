<head>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

@section('title')Редактирование автора@endsection

<main>
    <body class="light-gray-bg">
        <div class="templatemo-content-widget templatemo-login-widget white-bg">
            <header class="text-center">
                <h1>Изменение данных о книге</h1>
            </header>
            <form method="POST" action="{{ route('admin.books.update', $book) }}" class="templatemo-login-form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>                    
                        <input type="text" id="title" name="title" class="form-control" placeholder="Название" value="{{ $book->title }}">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></div>                    
                        <input type="number" id="creation_year" name="creation_year" class="form-control" placeholder="Год выпуска" value="{{ $book->creation_year }}">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>                    
                        <input type="text" id="genre" name="genre" class="form-control" placeholder="Жанр" value="{{ $book->genre }}">
                    </div>  
                </div>
                <div class="form-group">
                    <button type="submit" class="templatemo-blue-button width-100">Обновить</button>
                </div>
            </form>
        </div>
    </body>
</main>
