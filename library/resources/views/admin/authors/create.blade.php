<head>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

@section('title')Добавление автора@endsection

<main>
    <body class="light-gray-bg">
        <div class="templatemo-content-widget templatemo-login-widget white-bg">
            <header class="text-center">
                <h1>Новый автор</h1>
            </header>
            <form method="POST" action="{{ route('admin.authors.store') }}" class="templatemo-login-form">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>                    
                        <input type="text" id="name" name="name" class="form-control" placeholder="Имя">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>                    
                        <input type="text" id="surname" name="surname" class="form-control" placeholder="Фамилия">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>                    
                        <input type="text" id="patname" name="patname" class="form-control" placeholder="Отчество">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></div>                    
                        <input type="date" id="bd_date" name="bd_date" class="form-control" placeholder="Дата рождения">
                    </div>  
                </div>
                <div class="form-group">
                    <button type="submit" class="templatemo-blue-button width-100">Создать</button>
                </div>
            </form>
        </div>
    </body>
</main>