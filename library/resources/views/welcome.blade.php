@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
<main>
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <h1 class="text-white text-center">Все о Ваших Книгах</h1>
                    <h6 class="text-center" style="margin-bottom: 0;">за пару кликов</h6>
                    <form action="{{ Auth::check() ? (Auth::user()->is_admin ? route('admin.dashboard') : route('user.dashboard')) : route('login') }}" method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bi-search" id="basic-addon1"></span>
                            <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Хочу все знать . . !" aria-label="Search">
                            <button type="submit" class="form-control">Узнать</button>
                        </div>
                    </form>  
                </div>

            </div>
        </div>
    </section>

           <section class="faq-section section-padding" id="section_3">
               <div class="container">
                   <div class="row">

                       <div class="col-lg-6 col-12">
                           <h2 class="mb-4">Работа с сервисом</h2>
                       </div>

                       <div class="clearfix"></div>

                       <div class="col-lg-5 col-12">
                           <img src="images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                       </div>

                       <div class="col-lg-6 col-12 m-auto">
                           <div class="accordion" id="accordionExample">
                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="headingOne">
                                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Зарегистрируйтесь
                                       </button>
                                   </h2>

                                   <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                           При регистрации введите данные своего читательского билета и действующий адрес электронной почты.
                                       </div>
                                   </div>
                               </div>

                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="headingTwo">
                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       Посетите библиотеку
                                   </button>
                                   </h2>

                                   <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                           И возьмите все необходимые книги, а мы позаботимся о том, чтобы в Вашем личном кабинете появилась вся полезная информация.
                                       </div>
                                   </div>
                               </div>

                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="headingThree">
                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       Комфортно отслеживайте
                                   </button>
                                   </h2>

                                   <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                           Информация о всех взятых Вами книгах, дата их выдачи и день, когда наша библиотека ждет их возврата находится в разделе Вашего личного кабинета "Мои книги" :)
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                   </div>
               </div>
           </section>
</main>
@endsection