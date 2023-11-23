@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
<main>
           <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
               <div class="container">
                   <div class="row">

                       <div class="col-lg-8 col-12 mx-auto">
                           <h1 class="text-white text-center">Быстро. Удобно. Доступно</h1>

                           <h6 class="text-center">все нужное здесь</h6>

                           <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                               <div class="input-group input-group-lg">
                                   <span class="input-group-text bi-search" id="basic-addon1">
                                       
                                   </span>

                                   <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Найти книгу или автора. . ." aria-label="Search">

                                   <button type="submit" class="form-control">Найти</button>
                               </div>
                           </form>
                       </div>

                   </div>
               </div>
           </section>

           <section class="explore-section section-padding" id="section_2">
               <div class="container">
                   <div class="row">

                       <div class="col-12 text-center">
                           <h2 class="mb-4">Подборки для Вас</h1>
                       </div>

                   </div>
               </div>

               <div class="container-fluid">
                   <div class="row">
                       <ul class="nav nav-tabs" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                               <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Design</button>
                           </li>

                           <li class="nav-item" role="presentation">
                               <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Marketing</button>
                           </li>

                           <li class="nav-item" role="presentation">
                               <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Finance</button>
                           </li>

                           <li class="nav-item" role="presentation">
                               <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Music</button>
                           </li>

                           <li class="nav-item" role="presentation">
                               <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Education</button>
                           </li>
                       </ul>
                   </div>
               </div>

               <div class="container">
                   <div class="row">

                       <div class="col-12">
                           <div class="tab-content" id="myTabContent">
                               <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                   <div class="row">
                                       <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                           <div class="custom-block bg-white shadow-lg">
                                               <a href="topics-detail.html">
                                                   <div class="d-flex">
                                                       <div>
                                                           <h5 class="mb-2">Web Design</h5>

                                                           <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                       </div>

                                                       <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                   </div>

                                                   <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                               </a>
                                           </div>
                                       </div>

                                       <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                           <div class="custom-block bg-white shadow-lg">
                                               <a href="topics-detail.html">
                                                   <div class="d-flex">
                                                       <div>
                                                           <h5 class="mb-2">Graphic</h5>

                                                               <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                       </div>

                                                       <span class="badge bg-design rounded-pill ms-auto">75</span>
                                                   </div>

                                                   <img src="images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="">
                                               </a>
                                           </div>
                                       </div>

                                       <div class="col-lg-4 col-md-6 col-12">
                                           <div class="custom-block bg-white shadow-lg">
                                               <a href="topics-detail.html">
                                                   <div class="d-flex">
                                                       <div>
                                                           <h5 class="mb-2">Logo Design</h5>

                                                               <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                       </div>

                                                       <span class="badge bg-design rounded-pill ms-auto">100</span>
                                                   </div>

                                                   <img src="images/topics/colleagues-working-cozy-office-medium-shot.png" class="custom-block-image img-fluid" alt="">
                                               </a>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                               <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                   <div class="row">
                                       <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                               <div class="custom-block bg-white shadow-lg">
                                                   <a href="topics-detail.html">
                                                       <div class="d-flex">
                                                           <div>
                                                               <h5 class="mb-2">Advertising</h5>

                                                               <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                           </div>

                                                           <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                                                       </div>

                                                       <img src="images/topics/undraw_online_ad_re_ol62.png" class="custom-block-image img-fluid" alt="">
                                                   </a>
                                               </div>
                                           </div>

                                           <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                               <div class="custom-block bg-white shadow-lg">
                                                   <a href="topics-detail.html">
                                                       <div class="d-flex">
                                                           <div>
                                                               <h5 class="mb-2">Video Content</h5>

                                                               <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                           </div>

                                                           <span class="badge bg-advertising rounded-pill ms-auto">65</span>
                                                       </div>

                                                       <img src="images/topics/undraw_Group_video_re_btu7.png" class="custom-block-image img-fluid" alt="">
                                                   </a>
                                               </div>
                                           </div>

                                           <div class="col-lg-4 col-md-6 col-12">
                                               <div class="custom-block bg-white shadow-lg">
                                                   <a href="topics-detail.html">
                                                       <div class="d-flex">
                                                           <div>
                                                               <h5 class="mb-2">Viral Tweet</h5>

                                                               <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                           </div>

                                                           <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                                                       </div>

                                                       <img src="images/topics/undraw_viral_tweet_gndb.png" class="custom-block-image img-fluid" alt="">
                                                   </a>
                                               </div>
                                           </div>
                                       </div>
                                 </div>

                               <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   <div class="row">
                                       <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                           <div class="custom-block bg-white shadow-lg">
                                               <a href="topics-detail.html">
                                                   <div class="d-flex">
                                                       <div>
                                                           <h5 class="mb-2">Investment</h5>

                                                           <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                       </div>

                                                       <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                                   </div>

                                                   <img src="images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                                               </a>
                                           </div>
                                       </div>

                                       <div class="col-lg-6 col-md-6 col-12">
                                           <div class="custom-block custom-block-overlay">
                                               <div class="d-flex flex-column h-100">
                                                   <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                                   <div class="custom-block-overlay-text d-flex">
                                                       <div>
                                                           <h5 class="text-white mb-2">Finance</h5>

                                                           <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis</p>

                                                           <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                                       </div>

                                                       <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                                   </div>

                                                   <div class="social-share d-flex">
                                                       <p class="text-white me-4">Share:</p>

                                                       <ul class="social-icon">
                                                           <li class="social-icon-item">
                                                               <a href="#" class="social-icon-link bi-twitter"></a>
                                                           </li>

                                                           <li class="social-icon-item">
                                                               <a href="#" class="social-icon-link bi-facebook"></a>
                                                           </li>

                                                           <li class="social-icon-item">
                                                               <a href="#" class="social-icon-link bi-pinterest"></a>
                                                           </li>
                                                       </ul>

                                                       <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                                   </div>

                                                   <div class="section-overlay"></div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                               <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                   <div class="row">
                                       <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                           <div class="custom-block bg-white shadow-lg">
                                               <a href="topics-detail.html">
                                                   <div class="d-flex">
                                                       <div>
                                                           <h5 class="mb-2">Composing Song</h5>

                                                           <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                       </div>

                                                       <span class="badge bg-music rounded-pill ms-auto">45</span>
                                                   </div>

                                                   <img src="images/topics/undraw_Compose_music_re_wpiw.png" class="custom-block-image img-fluid" alt="">
                                               </a>
                                           </div>
                                       </div>

                                       <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                           <div class="custom-block bg-white shadow-lg">
                                               <a href="topics-detail.html">
                                                   <div class="d-flex">
                                                       <div>
                                                           <h5 class="mb-2">Online Music</h5>

                                                           <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                       </div>

                                                       <span class="badge bg-music rounded-pill ms-auto">45</span>
                                                   </div>

                                                   <img src="images/topics/undraw_happy_music_g6wc.png" class="custom-block-image img-fluid" alt="">
                                               </a>
                                           </div>
                                       </div>

                                       <div class="col-lg-4 col-md-6 col-12">
                                           <div class="custom-block bg-white shadow-lg">
                                               <a href="topics-detail.html">
                                                   <div class="d-flex">
                                                       <div>
                                                           <h5 class="mb-2">Podcast</h5>

                                                           <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                       </div>

                                                       <span class="badge bg-music rounded-pill ms-auto">20</span>
                                                   </div>

                                                   <img src="images/topics/undraw_Podcast_audience_re_4i5q.png" class="custom-block-image img-fluid" alt="">
                                               </a>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                               <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                                   <div class="row">
                                       <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                           <div class="custom-block bg-white shadow-lg">
                                               <a href="topics-detail.html">
                                                   <div class="d-flex">
                                                       <div>
                                                           <h5 class="mb-2">Graduation</h5>

                                                           <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                       </div>

                                                       <span class="badge bg-education rounded-pill ms-auto">80</span>
                                                   </div>

                                                   <img src="images/topics/undraw_Graduation_re_gthn.png" class="custom-block-image img-fluid" alt="">
                                               </a>
                                           </div>
                                       </div>

                                       <div class="col-lg-6 col-md-6 col-12">
                                           <div class="custom-block bg-white shadow-lg">
                                               <a href="topics-detail.html">
                                                   <div class="d-flex">
                                                       <div>
                                                           <h5 class="mb-2">Educator</h5>

                                                           <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                       </div>

                                                       <span class="badge bg-education rounded-pill ms-auto">75</span>
                                                   </div>

                                                   <img src="images/topics/undraw_Educator_re_ju47.png" class="custom-block-image img-fluid" alt="">
                                               </a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                   </div>
               </div>
           </section>


           <section class="faq-section section-padding" id="section_3">
               <div class="container">
                   <div class="row">

                       <div class="col-lg-6 col-12">
                           <h2 class="mb-4">Frequently Asked Questions</h2>
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
                                       What is Topic Listing?
                                       </button>
                                   </h2>

                                   <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                           Topic Listing is free Bootstrap 5 CSS template. <strong>You are not allowed to redistribute this template</strong> on any other template collection website without our permission. Please contact TemplateMo for more detail. Thank you.
                                       </div>
                                   </div>
                               </div>

                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="headingTwo">
                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       How to find a topic?
                                   </button>
                                   </h2>

                                   <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                           You can search on Google with <strong>keywords</strong> such as templatemo portfolio, templatemo one-page layouts, photography, digital marketing, etc.
                                       </div>
                                   </div>
                               </div>

                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="headingThree">
                                       <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       Does it need to paid?
                                   </button>
                                   </h2>

                                   <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                           You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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