@extends('layout')

@section('title')Подтверждение почты@endsection

@section('main_content')
    
<main>
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-white text-center">Подтверждение почты</h2>
                        </div>
                        

                    </div>
                </div>
            </header>


            <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-8 mx-auto">
                            <form action="#" method="post" class="custom-form contact-form" role="form">
                               
                        <h4>Пожалуйста, подтвердите ваш email, на который было выслано письмо.</h4>
                                   
                                    <div class="flex items-center justify-between">
                                        <div class="col-lg-12 col-12">
                                            <a class="nav-link click-scroll form-control text-center" href="#">Отправить письмо на почту</a>
                                        </div>
                                    </div>
                                
                            </form>

                            <div class="text-center"><a href ="#">Выйти из аккаунта</a></div>

                        </div>

                    </div>
                </div>
            </section>
        </main>

@endsection