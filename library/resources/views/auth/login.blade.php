@extends('layout')

@section('title')Вход@endsection

@section('main_content')
    
<main>
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-white text-center">Вход</h2>
                        </div>
                        

                    </div>
                </div>
            </header>


            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-8 mx-auto">
                            <form action="{{ route('login') }}" method="post" autocomplete="off" class="custom-form contact-form" role="form">
                               
                                @csrf

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12"> 
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" value="{{ old('email') }}" pattern="[^ @]*@[^ @]*" autofocus class="form-control" placeholder="Email address" required="">
                                            <label for="floatingInput">Ваш email</label>
                                        </div>
                                        @error('email')
                                        <p style="color:red;font-size:16px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="password" name="password" minlength="8" id="password" class="form-control" placeholder="Password" required="">
                                            <label for="floatingInput">Ваш пароль</label>
                                        </div>
                                        @error('password')
                                        <p style="color:red;font-size:16px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="d-flex justify-content-between align-items-center w-100">
                                            <div>
                                                <input type="checkbox" id="remember" name="remember" />
                                                <label for="remember">Запомнить меня</label>
                                            </div>
                                            <a href="/forgotpassword">Забыли пароль?</a>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <button type="submit" class="nav-link click-scroll form-control text-center">Войти</button>
                                        </div>
                                    </div>

                                </div>
                                
                            </form>

                            <div class="text-center"><a href ="{{ route('register') }}">У меня еще нет аккаунта</a></div>

                        </div>

                    </div>
                </div>
            </section>
        </main>

@endsection
