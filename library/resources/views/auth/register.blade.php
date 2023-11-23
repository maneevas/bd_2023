@extends('layout')

@section('title')Регистрация@endsection

@section('main_content')
    
<main>
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-white text-center">Регистрация</h2>
                        </div>
                        

                    </div>
                </div>
            </header>
       

            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-8 mx-auto">

                            <form action="{{ route('register') }}" method="post" autocomplete="off" class="custom-form contact-form" role="form">
                               
                                @csrf

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-6">
                                        <div class="form-floating">
                                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" autofocus placeholder="Name" required="">
                                            
                                            <label for="floatingInput">Ваше имя</label>
                                        </div>
                                        @error('name')
                                        <p style="color:red;font-size:16px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mb-6">
                                        <div class="form-floating">
                                            <input type="text" name="surname" id="surname" value="{{ old('surname') }}" class="form-control" placeholder="SurName" required="">
                                            
                                            <label for="floatingInput">Ваша фамилия</label>
                                        </div>
                                        @error('surname')
                                        <p style="color:red;font-size:16px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mb-6">
                                        <div class="form-floating">
                                            <input type="text" name="patname" id="patname" value="{{ old('patname') }}" class="form-control" placeholder="PatName" required="">
                                            
                                            <label for="floatingInput">Ваше отчество</label>
                                        </div>
                                        @error('patname')
                                        <p style="color:red;font-size:16px;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12 mb-6"> 
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" value="{{ old('email') }}" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                            
                                            <label for="floatingInput">Ваш email</label>
                                        </div>
                                        @error('email')
                                        <p style="color:red;font-size:16px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mb-6">
                                        <div class="form-floating">
                                            <input type="password" name="password" minlength="8" id="password" class="form-control" placeholder="Password" required="">
                                            
                                            <label for="floatingInput">Ваш пароль</label>
                                        </div>
                                        @error('password')
                                        <p style="color:red;font-size:16px;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mb-6">
                                        <div class="form-floating">
                                            <input type="password" name="password_confirmation" minlength="8" id="password_confirmation" class="form-control" placeholder="Name" required="">
                                            
                                            <label for="floatingInput">Введите пароль еще раз</label>
                                        </div>
                                        @error('password_confirmation')
                                        <p style="color:red;font-size:16px;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <button type="submit" class="nav-link click-scroll form-control text-center">Зарегистрироваться</button>
                                    </div>

                                </div>
                                
                            </form>

                            <div class="text-center"><a href ="{{ route('login') }}">У меня уже есть аккаунт</a></div>

                        </div>

                    </div>
                </div>
            </section>
        </main>

@endsection