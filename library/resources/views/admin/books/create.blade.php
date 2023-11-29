<head>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

@section('title')Добавление книги@endsection

<main>
    <body class="light-gray-bg">
        <div class="templatemo-content-widget templatemo-login-widget white-bg">
            <header class="text-center">
                <h1>Новая книга</h1>
            </header>
            <form method="POST" action="{{ route('admin.books.store') }}" class="templatemo-login-form">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>                    
                        <input type="text" id="title" name="title" class="form-control" placeholder="Название">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></div>                    
                        <input type="number" id="creation_year" name="creation_year" class="form-control" placeholder="Год выпуска">
                    </div>  
                </div>                
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>                    
                        <input type="text" id="genre" name="genre" class="form-control" placeholder="Жанр">
                    </div>  
                </div>
                <div class="form-group">
                    <button type="submit" class="templatemo-blue-button width-100">Добавить</button>
                </div>
            </form>
        </div>
    </body>
</main>