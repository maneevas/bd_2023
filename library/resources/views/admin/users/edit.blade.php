<head>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

@section('title')Редактирование пользователя@endsection

<main>
    <body class="light-gray-bg">
        <div class="templatemo-content-widget templatemo-login-widget white-bg">
            <header class="text-center">
                <h1>Редактирование пользователя</h1>
            </header>
            <form method="POST" action="{{ route('admin.users.update', $user) }}" class="templatemo-login-form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>                    
                        <input type="text" id="name" name="name" class="form-control" placeholder="Имя" value="{{ $user->name }}">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>                    
                        <input type="text" id="surname" name="surname" class="form-control" placeholder="Фамилия" value="{{ $user->surname }}">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>                    
                        <input type="text" id="patname" name="patname" class="form-control" placeholder="Отчество" value="{{ $user->patname }}">
                    </div>  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></div>                    
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
                    </div>  
                </div>
                <div class="form-group">
                    <button type="submit" class="templatemo-blue-button width-100">Обновить</button>
                </div>
            </form>
        </div>
    </body>
</main>
