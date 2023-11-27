@extends('layout')

@section('title')Панель управления@endsection

@section('main_content')
    
<main>
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-white text-center">Панель управления</h2>
                </div>
                

            </div>
        </div>
    </header>


    <section class="section-padding section-bg">
        <div class="container">
            <div class="col-lg-12 col-12">
                <form method="POST" action="{{ route("logout") }}">
                    @csrf

                    <button type="submit" class="nav-link click-scroll form-control text-center" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Выйти из аккаунта</button>
                </form>
            </div>
            </div>
        </div>
    </section>
</main>

@endsection