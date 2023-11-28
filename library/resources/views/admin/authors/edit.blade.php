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
                <h1>Редактирование автора</h1>
            </header>
            <form method="POST" action="{{ route('admin.authors.update', $author) }}" class="templatemo-login-form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>                    
                        <input type="text" id="name" name="name" class="form-control" placeholder="Имя" value="{{ $author->name }}">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>                    
                        <input type="text" id="surname" name="surname" class="form-control" placeholder="Фамилия" value="{{ $author->surname }}">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>                    
                        <input type="text" id="patname" name="patname" class="form-control" placeholder="Отчество" value="{{ $author->patname }}">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></div>                    
                        <input type="date" id="bd_date" name="bd_date" class="form-control" placeholder="bd_date" value="{{ $author->bd_date }}">
                    </div>  
                </div>
                <div class="form-group">
                    <button type="submit" class="templatemo-blue-button width-100">Обновить</button>
                </div>
            </form>
        </div>
    </body>
</main>
