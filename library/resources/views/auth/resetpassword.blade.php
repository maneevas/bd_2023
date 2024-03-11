@extends('layout')

@section('title')Сброс пароля@endsection

@section('main_content')
    
<main>
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-white text-center">Сброс пароля</h2>
                </div>
            </div>
        </div>
    </header>

    <section class="section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-8 mx-auto">
                    <form action="{{ route ('password.update') }}" method="post" class="custom-form contact-form" role="form">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->token }}">

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12"> 
                                <div class="form-floating">
                                    <input type="email" name="email" id="email" value="{{ old('email', $request->email) }}" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                    <label for="floatingInput">Ваш email</label>
                                </div>
                                @error('email')
                                <p style="color:red;font-size:16px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-floating">
                                    <input type="password" name="password" minlength="8" id="password" class="form-control" placeholder="Password" required="">
                                    <label for="floatingInput">Ваш пароль</label>
                                </div>
                                @error('password')
                                <p style="color:red;font-size:16px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-floating">
                                    <input type="password" name="password_confirmation" minlength="8" id="password_confirmation" class="form-control" placeholder="Name" required="">
                                    <label for="floatingInput">Введите пароль еще раз</label>
                                </div>
                                @error('password_confirmation')
                                <p style="color:red;font-size:16px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="col-lg-12 col-12">
                                    <button type="submit" class="nav-link click-scroll form-control text-center">Сбросить</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
