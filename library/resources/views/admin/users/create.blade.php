<head>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

@section('title')Создание пользователя@endsection

<main>
    <body class="light-gray-bg">
        <div class="templatemo-content-widget templatemo-login-widget white-bg">
            <header class="text-center">
                <div class="square"></div>
                <h1>Новый пользователь</h1>
            </header>
            <form method="POST" action="{{ route('admin.users.store') }}" class="templatemo-login-form">
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
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>                    
                        <input type="password" id="password" name="password" class="form-control" placeholder="Пароль">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="checkbox squaredTwo">
                        <input type="checkbox" id="is_admin" name="is_admin" value="1">
                        <label for="is_admin"><span></span>Администратор?</label>
                    </div>                  
                </div>
                <div class="form-group">
                    <button type="submit" class="templatemo-blue-button width-100">Создать</button>
                </div>
            </form>
        </div>
    </body>
</main>