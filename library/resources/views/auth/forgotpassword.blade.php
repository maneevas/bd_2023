@extends('layout')

@section('title')Восстановление пароля@endsection

@section('main_content')
    
<main>
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-white text-center">Восстановление пароля</h2>
                        </div>
                    </div>
                </div>
            </header>
            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-8 mx-auto">
                            @if (session('status'))
                            <h3 class="site-footer-title mb-3 text-center" style="font-size: 17px;">{{ session('status') }}</h3>
                            @endif
                            <form action="{{ route ('password.request') }}" method="post" class="custom-form contact-form" role="form">
                                @csrf
                                <div class="row">
                                    <div class=""> 
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                            
                                            <label for="floatingInput">Ваш email</label>
                                        </div>
                                    </div>
                                    @error('email')
                                    <p style="color:red;font-size:16px;">{{ $message }}</p>
                                    @enderror
                                    <div class="flex items-center justify-between">
                                        <div class="col-lg-12 col-12">
                                            <button type="submit" class="nav-link click-scroll form-control text-center">Восстановить</button>
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