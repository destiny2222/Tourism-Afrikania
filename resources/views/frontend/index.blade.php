@extends('layouts.main')
@section('head', 'Home')
@section('header-area')
   @include('layouts.header')
@endsection
@section('content')

   <!-- slider area start -->
      <section class="slider__area">
            <div class="slider__active swiper-container">
            <div class="swiper-wrapper">
               <div class="slider__item swiper-slide p-relative slider__height d-flex align-items-center z-index-1">
                  <div class="slider__bg slider__overlay include-bg" data-background="assets/img/slider/slider_bg01.jpg"></div>
                  <div class="container">
                        <div class="row">
                        <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 col-sm-10">
                           <div class="slider__content p-relative z-index-1">
                              <span data-animation="fadeInUp" data-delay=".3s">Welcome To</span>
                              <h2 class="slider__title" data-animation="fadeInUp" data-delay=".6s">Tourism Afrikania</h2>
                              <p data-animation="fadeInUp" data-delay=".9s">
                                    Tourism Afrikania is an African Global Brand, a renowned firm in the area of 
                                    Hospitality and Tourism Management, launched in 2019 to solve a number of issues facing the industry.
                              </p>
                              <div class="slider__btn" data-animation="fadeInUp" data-delay="1.1s">
                                    <a href="/about" class="tp-btn">Explore More</a>
                              </div>
                           </div>
                        </div>
                        </div>
                  </div>
               </div>
               <div class="slider__item swiper-slide p-relative slider__height d-flex align-items-center z-index-1">
                  <div class="slider__bg slider__overlay include-bg" data-background="assets/img/slider/slider_bg02.jpg"></div>
                  <div class="container">
                        <div class="row">
                        <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-10 col-sm-10">
                           <div class="slider__content p-relative z-index-1">
                              <span data-animation="fadeInUp" data-delay=".3s">Tourism and Hospitality</span>
                              <h2 class="slider__title" data-animation="fadeInUp" data-delay=".6s">Education Promotion</h2>
                              <p data-animation="fadeInUp" data-delay=".9s">Promoting education in tourism and hospitality sectors efficiently and effectively.</p>
                              <div class="slider__btn" data-animation="fadeInUp" data-delay="1.1s">
                                    <a href="/service" class="tp-btn">Explore More</a>
                              </div>
                           </div>
                        </div>
                        </div>
                  </div>
               </div>
            </div>
            <div class="main-slider-paginations">
               <button class="slider-button-next"><i class="fa-regular fa-arrow-right"></i></button>
               <button class="slider-button-prev"><i class="fa-regular fa-arrow-left"></i></button>
            </div>
            </div>
      </section>
   <!-- slider area end -->

   <!-- about area start -->
   <section class="about__area pb-120 p-relative" style="padding-top: 150px">
      <div class="container">
         <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
               <div class="about__thumb-wrapper d-sm-flex mr-20 p-relative">
                  <div class="about__shape">
                     <img class="about__shape-1 d-none d-sm-block" src="assets/img/about/about-shape-1.png" alt="">
                     <img class="about__shape-2 d-none d-sm-block" src="assets/img/about/about-shape-2.png" alt="">
                     <img class="about__shape-3" src="assets/img/about/about-shape-3.png" alt="">
                  </div>
                  <div class="about__thumb-left mr-10">
                     <div class="about__thumb-1 mb-10">
                        <img src="assets/img/about4.jpg" alt="">
                     </div>
                     <div class="about__thumb-1 mb-10 text-end">
                        <img src="assets/img/about4.png" alt="">
                     </div>
                  </div>
                  <div class="about__thumb-2 mb-10">
                     <img src="assets/img/about2.jpg" alt="">
                  </div>
               </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
               <div class="about__content pl-70 pr-25">
                  <div class="section__title-wrapper mb-15">
                     <span class="section__title-pre">Welcome To</span>
                     <h2 class="section__title">Tourism Afrikania</h2>
                  </div>
                  <p>
                        Tourism Afrikania is an African Global Hospitality and Tourism
                        Management brand dedicated to promoting hospitality and tourism
                        education in Africa. We aim to enable African economic growth by
                        helping business owners achieve their profitability goals through career
                        mentorship, training, marketing solutions, and general travel, tourism,
                        and hotel management. Our initiatives bring together secondary and
                        tertiary students, travel agencies, tour operators, airlines, hotels,
                        hospitality vendors, CEOs, hotel managers, and industry enthusiasts for
                        tourism mentorship and career guidance in travel, hospitality, and
                        tourism management as an academic field.
                  </p>
                  <div class="about__btn">
                     <a href="/about" class="tp-btn tp-btn-2">Read more</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- about area end -->


   <section class="category__area pt-120 pb-70">
      <div class="container">
         <div class="row align-items-end">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
               <div class="section__title-wrapper mb-45">
                  <h2 class="section__title">Our <span class="yellow-bg">Service  </span>
                  </h2>
               </div>
            </div>
         </div>
         <div class="row">
               <div class="col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                  <div class="category__item mb-30 transition-3 d-flex align-items-center">
                     <div class="category__icon mr-30">
                        <svg viewBox="0 0 512 512">
                              <g>
                                 <path class="st0" d="M178.7,492H120c-55.2,0-100-44.8-100-100V120C20,64.8,64.8,20,120,20h58.7C123.7,20,81,64.8,81,120v272   C81,447.2,123.7,492,178.7,492z M355.5,204.8l18.9-85.5c4.8-24.1,16.7-46.3,34.1-63.7l35.4-35.4c-15.1-1.4-30.7,3.7-42.3,15.3   l-61.1,61.1c-17.4,17.4-29.3,39.6-34.1,63.7L295,217l56.7-11.3C352.9,205.4,354.2,205.1,355.5,204.8L355.5,204.8z"></path>
                                 <path class="st1" d="M299,512H120C53.8,512,0,458.2,0,392V120C0,53.8,53.8,0,120,0h183c11,0,20,9,20,20s-9,20-20,20H120   c-44.1,0-80,35.9-80,80v272c0,44.1,35.9,80,80,80h179c44.1,0,80-35.9,80-80V272c0-11,9-20,20-20s20,9,20,20v120   C419,458.2,365.2,512,299,512z M298.9,236.6l56.7-11.3c28.1-5.6,53.7-19.3,73.9-39.6l61.1-61.1c28.5-28.5,28.5-74.8,0-103.2   c-28.5-28.5-74.8-28.5-103.2,0l-61.1,61.1c-20.3,20.3-33.9,45.8-39.6,73.9l-11.3,56.7c-1.3,6.6,0.7,13.3,5.5,18.1   c3.8,3.8,8.9,5.9,14.1,5.9C296.3,237,297.6,236.9,298.9,236.6L298.9,236.6z M462.4,49.7c6.2,6.2,9.7,14.5,9.7,23.3   s-3.4,17.1-9.7,23.3l-61.1,61.1c-14.7,14.7-33.2,24.6-53.5,28.6l-27.3,5.4l5.4-27.3c4.1-20.3,14-38.8,28.6-53.5l61.1-61.1   c6.2-6.2,14.5-9.7,23.3-9.7S456.1,43.4,462.4,49.7L462.4,49.7z"></path>
                                 <path class="st2" d="M319,352H101c-11,0-20-9-20-20s9-20,20-20h218c11,0,20,9,20,20S330.1,352,319,352z M211,387   c-13.8,0-25,11.2-25,25s11.2,25,25,25s25-11.2,25-25S224.8,387,211,387z"></path>
                              </g>
                           </svg>
                     </div>
                     <div class="category__content">
                        <h4 class="category__title"><a href="#">Tourism and Hospitality Education Promotion</a></h4>
                        <p>Promoting education in tourism and hospitality sectors efficiently and effectively.</p>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                  <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                        <svg viewBox="0 0 512 512">
                           <g>
                              <path class="st0" d="M81,392V120c0-55.2,44.8-100,100-100h-61C64.8,20,20,64.8,20,120v272c0,55.2,44.8,100,100,100h61   C125.8,492,81,447.2,81,392z"></path>
                              <path class="st1" d="M392,512H120C53.8,512,0,458.2,0,392V120C0,53.8,53.8,0,120,0h208c11,0,20,9,20,20s-9,20-20,20H120   c-44.1,0-80,35.9-80,80v272c0,44.1,35.9,80,80,80h272c44.1,0,80-35.9,80-80V207c0-11,9-20,20-20s20,9,20,20v185   C512,458.2,458.2,512,392,512z M385.3,236.8l112.1-134c0,0,0-0.1,0.1-0.1c22.1-26.7,18.4-66.3-8.3-88.4s-66.3-18.4-88.4,8.3   l-0.1,0.1L290.5,158.4c-7,8.6-5.7,21.2,2.9,28.1c8.6,7,21.2,5.7,28.1-2.9L431.7,48.2c8-9.6,22.4-10.9,32-2.9c9.7,8,11,22.4,3,32   l-112,133.9c-7.1,8.5-6,21.1,2.5,28.2c3.7,3.1,8.3,4.7,12.8,4.7C375.7,244,381.4,241.6,385.3,236.8L385.3,236.8z"></path>
                              <path class="st2" d="M169.5,433c-20.6,0-40.5-11.2-50.7-28.5c-8.7-14.8-9-31.6-0.9-46.3c10-18.1,15.8-34.9,21.3-51.1   c9.4-27.7,18.4-53.8,45.3-76.2c19.6-16.3,44.3-23.9,69.5-21.5c25.3,2.4,48.2,14.6,64.3,34.4c14,17.1,21.7,38.8,21.7,61.1   c0,39.4-23.7,74.5-66.7,99C242.2,421.6,201.4,433,169.5,433L169.5,433z M244.9,249c-12.7,0-24.9,4.4-34.9,12.7   c-18.3,15.2-24.5,33.3-33,58.4c-5.8,17-12.4,36.4-24.2,57.6c-0.6,1.1-1.7,3.1,0.4,6.6c2.6,4.4,9,8.8,16.3,8.8   C213.8,393.1,300,362,300,305c0-13.3-4.4-25.6-12.6-35.7c-9.4-11.4-22.6-18.5-37.2-19.9C248.4,249.1,246.6,249,244.9,249L244.9,249   z"></path>
                           </g>
                           </svg>
                        </div>
                        <div class="category__content">
                        <h4 class="category__title"><a href="#">Travel & Study Abroad Supports</a></h4>
                        <p>Supporting travel and study abroad endeavors with comprehensive assistance and guidance.</p>
                        </div>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                  <div class="category__item mb-30 transition-3 d-flex align-items-center">
                        <div class="category__icon mr-30">
                        <svg viewBox="0 0 512 512">
                           <g>
                              <path class="st0" d="M106.1,341.9V120c0-55.2,44.8-100,100-100h-61c-55.2,0-100,44.8-100,100v221.9c0,55.2,44.8,100,100,100h61   C150.8,441.8,106.1,397.1,106.1,341.9z"></path>
                              <path class="st1" d="M442.8,512c-10.5,0-20.9-3.9-29.2-11.3l-49.9-43.9c-8.3-7.3-9.1-19.9-1.8-28.2c7.3-8.3,19.9-9.1,28.2-1.8   l49.9,43.9c0.1,0,0.1,0.1,0.2,0.1c0.5,0.4,1.9,1.7,4.3,0.7c2.4-1.1,2.4-3,2.4-3.7V120c0-44.1-35.9-80-80-80H145   c-44.1,0-80,35.9-80,80v221.9c0,44.1,35.9,80,80,80h154c11,0,20,9,20,20s-9,20-20,20H145c-66.1,0-120-53.8-120-120V120   C25.1,53.8,78.9,0,145,0h222c66.1,0,120,53.8,120,120v348c0,17.6-10,33-26.1,40.2C455,510.7,448.8,512,442.8,512L442.8,512z    M350.7,264c-9.3-5.9-21.7-3.2-27.6,6.1c-0.2,0.4-25.1,38.7-67.1,38.7s-67.9-38.3-68.1-38.7c-5.9-9.3-18.3-12.1-27.6-6.1   c-9.3,5.9-12.1,18.3-6.1,27.6c1.5,2.3,38.2,57.2,101.8,57.2s99.3-54.9,100.8-57.2C362.8,282.3,360,270,350.7,264z"></path>
                              <path class="st2" d="M334,211.9c-11,0-20-9-20-20v-55c0-11,9-20,20-20s20,9,20,20v55C354,203,345,211.9,334,211.9z M199,191.9v-55   c0-11-9-20-20-20s-20,9-20,20v55c0,11,9,20,20,20S199,203,199,191.9z"></path>
                           </g>
                           </svg>
                        </div>
                        <div class="category__content">
                        <h4 class="category__title"><a href="#">Hotel and Restaurant Consulting Services</a></h4>
                        <p>Providing expert consulting services for hotels and restaurants to enhance performance.</p>
                        </div>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6">
               <div class="category__item mb-30 transition-3 d-flex align-items-center">
                  <div class="category__icon mr-30">
                     <svg viewBox="0 0 512 512">
                        <g>
                           <path class="st4" d="M438,512c-40.8,0-74-33.2-74-74V74c0-40.8,33.2-74,74-74s74,33.2,74,74v364C512,478.8,478.8,512,438,512z    M438,40c-18.7,0-34,15.3-34,34v364c0,18.7,15.3,34,34,34s34-15.3,34-34V74C472,55.3,456.7,40,438,40z M74,512   c-40.8,0-74-33.2-74-74v-82c0-40.8,33.2-74,74-74s74,33.2,74,74v82C148,478.8,114.8,512,74,512z M74,322c-18.7,0-34,15.3-34,34v82   c0,18.7,15.3,34,34,34s34-15.3,34-34v-82C108,337.3,92.7,322,74,322z M256,512c-40.8,0-74-33.2-74-74V213c0-40.8,33.2-74,74-74   s74,33.2,74,74v225C330,478.8,296.8,512,256,512z M256,179c-18.7,0-34,15.3-34,34v225c0,18.7,15.3,34,34,34s34-15.3,34-34V213   C290,194.3,274.7,179,256,179z"></path>
                           <path class="st5" d="M139,162.3c0-31.2-27.8-56.7-61.9-56.7c-14.5,0-25.1-7-25.1-16.7c0-9.2,7.4-16.7,16.5-16.7   c9.2,0,21.1,1,40.2,8.4c10.3,4,21.9-1.1,25.9-11.4s-1.1-21.9-11.4-25.9c-9.9-3.9-18.6-6.4-26.2-8.1V20C97,9,88,0,77,0S57,9,57,20   v13.5C31.3,38.9,12,61.7,12,89c0,32.3,28,56.7,65.1,56.7c11.9,0,21.9,7.6,21.9,16.7c0,8.9-8.3,16.7-17.7,16.7   c-7.3,0-25.8-2.7-43.9-9.9c-10.3-4.1-21.9,0.9-26,11.2s0.9,21.9,11.2,26c11.6,4.6,23.7,7.9,34.4,10V228c0,11,9,20,20,20s20-9,20-20   v-11.2c9.1-2.6,17.6-7.4,24.6-14.2C132.8,191.9,139,177.6,139,162.3L139,162.3z"></path>
                        </g>
                        </svg>
                  </div>
                  <div class="category__content">
                     <h4 class="category__title"><a href="#">Student Community and Mentorship</a></h4>
                     <p>Fostering student community through mentorship and support programs.</p>
                  </div>
               </div>
               </div>
               <div class="col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                  <div class="category__item mb-30 transition-3 d-flex align-items-center">
                     <div class="category__icon mr-30">
                        <svg viewBox="0 0 512 512">
                           <g>
                              <path class="st0" d="M111.3,491.6C60.1,487.1,20,444.2,20,392V223.7c0-31.2,14.6-60.6,39.4-79.5l136-103.7   c35.8-27.3,85.5-27.3,121.3,0l9.2,7c-24.6-2.4-49.8,4.2-70.5,20L93.6,190.8C85,197.4,80,207.5,80,218.3V419   C80,447.6,92,473.4,111.3,491.6L111.3,491.6z"></path>
                              <path class="st1" d="M392,512H120C53.8,512,0,458.1,0,392V223.7c0-37.2,17.7-72.9,47.2-95.4l136-103.7   c42.8-32.7,102.7-32.7,145.5,0L372,57.5V32c0-11,9-20,20-20s20,9,20,20v65.9c0,7.6-4.3,14.5-11.1,17.9c-6.8,3.4-15,2.6-21-2   l-75.4-57.4c-28.6-21.8-68.5-21.8-97,0l-136,103.7c-19.7,15-31.5,38.8-31.5,63.6V392c0,44.1,35.9,80,80,80h272   c44.1,0,80-35.9,80-80V223.7c0-25.1-11.6-49-31.1-63.8c-8.8-6.7-10.5-19.2-3.8-28s19.3-10.5,28-3.8c29.3,22.4,46.9,58.1,46.9,95.6   V392C512,458.1,458.2,512,392,512z"></path>
                              <path class="st2" d="M241,256c0,13.8-11.2,25-25,25s-25-11.2-25-25s11.2-25,25-25S241,242.2,241,256z M296,231   c-13.8,0-25,11.2-25,25c0,13.8,11.2,25,25,25s25-11.2,25-25C321,242.2,309.8,231,296,231z M216,311c-13.8,0-25,11.2-25,25   s11.2,25,25,25s25-11.2,25-25S229.8,311,216,311z M296,311c-13.8,0-25,11.2-25,25s11.2,25,25,25s25-11.2,25-25S309.8,311,296,311z"></path>
                           </g>
                           </svg>
                     </div>
                     <div class="category__content">
                        <h4 class="category__title"><a href="#">Educational Tours / School Excursions Management</a></h4>
                        <p>Managing educational tours and school excursions efficiently and effectively for students.</p>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                  <div class="category__item mb-30 transition-3 d-flex align-items-center">
                     <div class="category__icon mr-30">
                        <svg viewBox="0 0 512 512">
                           <g>
                              <path class="st0" d="M81.5,276c0-92.5,58.2-171.5,140-202.2c-9.2-7.6-21.6-11.2-34.4-8.2C91.4,87.7,20,173.5,20,276   c0,119.6,96.3,216,216,216c10.4,0,20.7-0.8,30.7-2.2C161.7,475,81.5,385.2,81.5,276z"></path>
                              <path class="st1" d="M236,512c-63.2,0-122.5-24.5-167-69S0,339.2,0,276c0-53.6,18.5-106.2,52.1-147.9c33.1-41.1,79.4-70.2,130.5-82   c17.9-4.1,36.3,0,50.7,11.5s22.7,28.6,22.7,47V236c0,11,9,20,20,20h131.4c18.4,0,35.6,8.3,47,22.7c11.4,14.4,15.6,32.9,11.5,50.7   c-11.8,51.1-41,97.4-82,130.5C342.1,493.5,289.6,512,236,512L236,512z M196.1,84.6c-1.5,0-3,0.2-4.5,0.5   C102.3,105.7,40,184.2,40,276c0,52.5,20.3,101.8,57.3,138.7c36.9,37,86.2,57.3,138.7,57.3c91.8,0,170.3-62.3,190.9-151.6   c1.4-5.9,0-12-3.8-16.8s-9.6-7.6-15.7-7.6H276c-33.1,0-60-26.9-60-60V104.6c0-6.1-2.8-11.9-7.6-15.7   C204.8,86,200.5,84.6,196.1,84.6L196.1,84.6z M187.1,65.6L187.1,65.6L187.1,65.6z"></path>
                              <path class="st2" d="M450.6,216h-93.2c-33.9,0-61.4-27.6-61.4-61.4V61.4c0-19.7,9.1-37.7,24.9-49.4c15.9-11.7,35.9-15,54.9-9.2   c31.3,9.7,60.1,27,83.2,50.2c23.2,23.2,40.5,51.9,50.2,83.2c5.9,18.9,2.5,38.9-9.3,54.8C488.3,206.9,470.3,216,450.6,216L450.6,216   z M357.4,40c-4.5,0-9,1.4-12.8,4.2c-5.5,4.1-8.7,10.3-8.7,17.2v93.2c0,11.8,9.6,21.4,21.4,21.4h93.2c6.9,0,13.1-3.2,17.2-8.7   c4.1-5.6,5.3-12.6,3.2-19.3c-7.8-25.1-21.7-48.2-40.3-66.8C412.1,62.7,389,48.8,363.9,41C361.8,40.4,359.6,40,357.4,40z"></path>
                           </g>
                           </svg>
                     </div>
                     <div class="category__content">
                        <h4 class="category__title"><a href="#">Hospitality and Tourism Capacity Building/Training Supports</a></h4>
                        <p>Supporting hospitality and tourism growth through capacity building and training initiatives.</p>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </section>

   <!-- course area start -->
   <section class="course__area grey-bg-4 pt-110 pb-90">
      <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="section__title-wrapper-2 text-center mb-40">
                        <span class="section__title-pre-2">Top Courses</span>
                        <h3 class="section__title-2"> Our Featured Courses</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-12">
                  <div class="course__tab-wrapper">
                        <div class="row">
                           @forelse ($course as $courses)
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                 <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix p-3">
                                       <a href="{{ route('course-details', $courses->slug) }}">
                                          <img src="{{ asset('upload/course/'.$courses->image) }}" alt="">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2 purple-bg">
                                                <a href="{{ route('course-details', $courses->slug) }}">{{ $courses->courseCategories->name }}</a>
                                          </div>
                                       </div>
                                       <h3 class="course__title">
                                          <a href="{{ route('course-details', $courses->slug) }}">{{ $courses->name }}</a>
                                       </h3>
                                       <h3 class="course__title-2">
                                          <a href="#">{!! \Str::limit($courses->description, 200) !!}</a>
                                       </h3>
                                       <div class="course__more">
                                          <div class="course__btn">
                                             <a href="{{ route('course-details', $courses->slug) }}" class="link-btn">
                                                Know Details
                                                <i class="far fa-arrow-right"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           @empty
                              <h4 class="title text-center">No Courses List</h4>
                           @endforelse
                        </div>
                        <div class="row">
                           <div class="col-xxl-12">
                              <div class="course__enroll-btn pt-5 text-center">
                                 <a href="/course" class="tp-btn-5 tp-btn-11">View all Course</a>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
      </div>
   </section>
   <!-- course area end -->


   <!-- research area start -->
   <section class="research__area pt-115 pb-60">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12">
               <div class="research__wrapper-2">
                  <div class="research__download">
                     <div class="research__download-bg include-bg" data-background="assets/img/research/2/research-bg.jpg"></div>
                     <div class="research__content-2 p-relative z-index-1">
                        <h3 class="research__title-2">Are you a student passionate about promoting Hospitality and Tourism Education in Africa?</h3>
                        <p>
                           <b>This great opportunity is for you!</b> <br>
                           <strong>
                              Join us today to participate and win a cash prize of N300,000.00 in the forthcoming Build Afrika Hospitality and Tourism Career Path Presentation Contest.
                              Become a finalist and present at the African Hospitality and Tourism Education Summit Nigeria 2024.
                           </strong>
                        </p>
                        <div class="research__store">
                           <ul>
                              <li>
                                 <a href="https://forms.gle/JBCgKSE7jwHnZC48A ">Register here Now</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="research__thumb-2">
                        <img src="assets/img/research/2/research-1.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
            {{-- <div class="col-xxl-6 col-xl-6 col-lg-6">
               <div class="research__wrapper-2">
                  <div class="research__download">
                     <div class="research__download-bg include-bg" data-background="assets/img/research/2/research-bg.jpg"></div>
                     <div class="research__content-2 p-relative z-index-1">
                        <h3 class="research__title-2">Start Learning by Downloading Apps</h3>
                        <div class="research__store">
                           <ul>
                              <li>
                                 <a href="#"><img src="assets/img/icon/google-play-store.png" alt="google-play-store"> Google play</a>
                              </li>
                              <li>
                                 <a href="#"><img src="assets/img/icon/apple-store.png" alt="apple-store">Apple store</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="research__thumb-2">
                        <img src="assets/img/research/2/research-1.png" alt="">
                     </div>
                  </div>
               </div>
            </div> --}}
         </div>
      </div>
   </section>
   <!-- research area end -->


   <!-- event area start -->
   <section class="event__area pt-115 pb-120">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="section__title-wrapper-2 text-center mb-60">
                  <span class="section__title-pre-2">event</span>
                  <h3 class="section__title-2">Join our upcoming event</h3>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-12">
               @forelse ($event as $events)
                  <div class="event__item white-bg mb-10 transition-3 p-relative d-lg-flex align-items-center justify-content-between">
                     <div class="event__left d-sm-flex align-items-center">
                        <div class="event__date">
                           @php
                              $date = \Carbon\Carbon::parse($events->date);
                           @endphp
                           <h4>{{ $date->format('j') }}</h4>
                           <p>{{ $date->format('F') }},  {{ $date->format('Y') }}</p>
                        </div>
                        <div class="event__content">
                           <div class="event__meta">
                              <ul>
                                 <li>
                                    <a href="{{ route('event-details',$events->slug) }}">
                                       <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M8.49992 9.51253C9.72047 9.51253 10.7099 8.52308 10.7099 7.30253C10.7099 6.08198 9.72047 5.09253 8.49992 5.09253C7.27937 5.09253 6.28992 6.08198 6.28992 7.30253C6.28992 8.52308 7.27937 9.51253 8.49992 9.51253Z" stroke="#5F6160" stroke-width="1.5"/>
                                       <path d="M2.56416 6.01334C3.95958 -0.120822 13.0475 -0.113738 14.4358 6.02043C15.2504 9.61876 13.0121 12.6646 11.05 14.5488C9.62625 15.9229 7.37375 15.9229 5.94291 14.5488C3.98791 12.6646 1.74958 9.61168 2.56416 6.01334Z" stroke="#5F6160" stroke-width="1.5"/>
                                       </svg>
                                       {{ $events->location }}
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <h3 class="event__title">
                              <a href="{{ route('event-details',$events->slug) }}">{{ $events->title }}</a>
                           </h3>
                        </div>
                     </div>
                     <div class="event__right d-sm-flex align-items-center">
                        <div class="event__time">
                           <span>
                              <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M13.75 7.50024C13.75 10.9502 10.95 13.7502 7.5 13.7502C4.05 13.7502 1.25 10.9502 1.25 7.50024C1.25 4.05024 4.05 1.25024 7.5 1.25024C10.95 1.25024 13.75 4.05024 13.75 7.50024Z" stroke="#258E46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M9.8188 9.48735L7.8813 8.3311C7.5438 8.1311 7.2688 7.64985 7.2688 7.2561V4.6936" stroke="#258E46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              {{ $events->time }}
                           </span>
                        </div>
                        <div class="event__more ml-30">
                           <a href="{{ route('event-details',$events->slug) }}" class="tp-btn-5 tp-btn-7">View Events </a>
                        </div>
                     </div>
                  </div>
                  @empty
                  <h4 class="title text-center">No Event List</h4>
               @endforelse
            </div>
         </div>
      </div>
   </section>
   <!-- event area end -->


   <!-- cta area start -->
   {{-- <section class="cta__area pb-120" style="padding-top:8%">
      <div class="container">
         <div class="cta__inner">
            <div class="row">
               <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="cta__item cta__item-border pl-85 pt-40 pb-15 d-sm-flex align-items-start pr-110" style="box-shadow: 0 0 #0000, 0 0 #0000, 0 0 #0000, 0 0 #0000, 0px 0px 30px rgba(0, 0, 0, 0.05);">
                     <div class="cta__icon mr-30">
                        <span>
                           <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0801 0C8.84004 0 4.58002 4.26003 4.58002 9.50006C4.58002 14.6401 8.60004 18.8001 13.8401 18.9801C14.0001 18.9601 14.1601 18.9601 14.2801 18.9801C14.3201 18.9801 14.3401 18.9801 14.3801 18.9801C14.4001 18.9801 14.4001 18.9801 14.4201 18.9801C19.5401 18.8001 23.5601 14.6401 23.5801 9.50006C23.5801 4.26003 19.3201 0 14.0801 0Z" fill="#192A88"/>
                              <path d="M24.2401 24.2998C18.6601 20.5798 9.56006 20.5798 3.94002 24.2998C1.40001 25.9998 0 28.2998 0 30.7598C0 33.2198 1.40001 35.4998 3.92002 37.1799C6.72004 39.0599 10.4001 39.9999 14.0801 39.9999C17.7601 39.9999 21.4401 39.0599 24.2401 37.1799C26.7602 35.4798 28.1602 33.1998 28.1602 30.7198C28.1402 28.2598 26.7602 25.9798 24.2401 24.2998Z" fill="#192A88"/>
                              <path d="M35.0602 10.6802C35.3802 14.5603 32.6202 17.9603 28.8002 18.4203C28.7802 18.4203 28.7802 18.4203 28.7602 18.4203H28.7002C28.5802 18.4203 28.4602 18.4203 28.3602 18.4603C26.4202 18.5603 24.6402 17.9403 23.3002 16.8003C25.3602 14.9603 26.5402 12.2002 26.3002 9.20023C26.1602 7.58022 25.6002 6.10021 24.7602 4.8402C25.5202 4.4602 26.4002 4.2202 27.3002 4.1402C31.2202 3.8002 34.7202 6.72021 35.0602 10.6802Z" fill="#FF7648"/>
                              <path d="M39.0602 29.1799C38.9002 31.1199 37.6602 32.7999 35.5802 33.9399C33.5802 35.0399 31.0602 35.5599 28.5602 35.4999C30.0002 34.1999 30.8402 32.5799 31.0002 30.8599C31.2002 28.3799 30.0202 25.9998 27.6601 24.0998C26.3201 23.0398 24.7601 22.1998 23.0601 21.5798C27.4801 20.2998 33.0402 21.1598 36.4602 23.9198C38.3002 25.3998 39.2402 27.2599 39.0602 29.1799Z" fill="#FF7648"/>
                           </svg>
                        </span>                             
                     </div>
                     <div class="cta__content">
                        <h3 class="cta__title">Become an Instructor</h3>
                        <p>Teach what you love. Learned gives you neccessary tools to become an instructor.</p>
                        <a href="contact.html" class="tp-btn tp-btn-3">Start Teaching</a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="cta__item pl-85 pt-40 pb-15 d-sm-flex align-items-start" style="box-shadow: 0 0 #0000, 0 0 #0000, 0 0 #0000, 0 0 #0000, 0px 0px 30px rgba(0, 0, 0, 0.05);">
                     <div class="cta__icon mr-30">
                        <span>
                           <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M32.2575 29.977C33.5417 29.1336 35.2283 30.0536 35.2283 31.587V34.0595C35.2283 36.4936 33.3308 39.1003 31.05 39.867L24.9358 41.8986C23.8625 42.2628 22.1183 42.2628 21.0642 41.8986L14.95 39.867C12.65 39.1003 10.7717 36.4936 10.7717 34.0595V31.5678C10.7717 30.0536 12.4583 29.1336 13.7233 29.9578L17.6717 32.5261C19.1858 33.542 21.1025 34.0403 23.0192 34.0403C24.9358 34.0403 26.8525 33.542 28.3667 32.5261L32.2575 29.977Z" fill="#FF7648"/>
                              <path d="M38.295 12.3817L26.8142 4.84924C24.7442 3.4884 21.3325 3.4884 19.2625 4.84924L7.72416 12.3817C4.02499 14.7776 4.02499 20.2017 7.72416 22.6167L10.7908 24.6101L19.2625 30.1301C21.3325 31.4909 24.7442 31.4909 26.8142 30.1301L35.2283 24.6101L37.8542 22.8851V28.7501C37.8542 29.5359 38.5058 30.1876 39.2917 30.1876C40.0775 30.1876 40.7292 29.5359 40.7292 28.7501V19.3201C41.4958 16.8476 40.71 13.9726 38.295 12.3817Z" fill="#192A88"/>
                           </svg>
                        </span>                             
                     </div>
                     <div class="cta__content">
                        <h3 class="cta__title">Apply for Admission</h3>
                        <p>Course completed? Then its time apply the certificate Do it in simplesteps with Learned.</p>
                        <a href="contact.html" class="tp-btn tp-btn-4">Apply Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}
   <!-- cta area end -->

   
   <!-- blog area start -->
   {{-- <section class="blog__area pt-120 pb-85 p-relative">
      <div class="blog__shape">
         <img class="blog__shape-1" src="assets/img/blog/blog-shape-1.png" alt="">
         <img class="blog__shape-2" src="assets/img/blog/blog-shape-2.png" alt="">
         <img class="blog__shape-3" src="assets/img/blog/blog-shape-3.png" alt="">
         <img class="blog__shape-4" src="assets/img/blog/blog-shape-4.png" alt="">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="section__title-wrapper mb-60 text-center">
                  <span class="section__title-pre">Latest News</span>
                  <h2 class="section__title section__title-44">The latest news</h2>
               </div>
            </div>
         </div>
         <div class="row">
            @foreach ($post as $posts)
            <div class="col-xxl-6 col-xl-6">
               <div class="blog__item-float blog__item-float-overlay p-relative fix transition-3 mb-30 d-flex align-items-end">
                  <div class="blog__thumb-bg w-img fix" data-background="assets/img/blog/blog-1.jpg"></div>
                  <div class="blog__content-float">
                     <div class="blog__tag-float mb-15">
                        <a href="#">Uncategorized</a>
                     </div>
                     <h3 class="blog__title-float">
                        <a href="blog-details.html">Individual master Courses For degree students.</a>
                     </h3>
                     <div class="blog__meta-float">
                        <ul>
                           <li>
                              <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16.4998 9C16.4998 13.14 13.1398 16.5 8.99976 16.5C4.85976 16.5 1.49976 13.14 1.49976 9C1.49976 4.86 4.85976 1.5 8.99976 1.5C13.1398 1.5 16.4998 4.86 16.4998 9Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M11.7822 11.3848L9.45723 9.99732C9.05223 9.75732 8.72223 9.17982 8.72223 8.70732V5.63232" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg><a href="#">Dec 28, 2022</a></span>
                           </li>
                           <li>
                              <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.6848 6.99994C10.6848 8.48494 9.48476 9.68494 7.99976 9.68494C6.51476 9.68494 5.31476 8.48494 5.31476 6.99994C5.31476 5.51494 6.51476 4.31494 7.99976 4.31494C9.48476 4.31494 10.6848 5.51494 10.6848 6.99994Z" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.99976 13.2025C10.6473 13.2025 13.1148 11.6425 14.8323 8.94254C15.5073 7.88504 15.5073 6.10754 14.8323 5.05004C13.1148 2.35004 10.6473 0.790039 7.99976 0.790039C5.35226 0.790039 2.88476 2.35004 1.16726 5.05004C0.492261 6.10754 0.492261 7.88504 1.16726 8.94254C2.88476 11.6425 5.35226 13.2025 7.99976 13.2025Z" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg><a href="#">1,526 views</a></span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
               <div class="blog__item mb-30 white-bg transition-3 mb-30">
                  <div class="blog__thumb w-img fix">
                     <a href="blog-details.html">
                        <img src="assets/img/blog/blog-2.jpg" alt="">
                     </a>
                  </div>
                  <div class="blog__content">
                     <div class="blog__tag">
                        <a href="#">University</a>
                     </div>
                     <h3 class="blog__title">
                        <a href="blog-details.html">How stay calm from the First time.</a>
                     </h3>
                     <div class="blog__meta">
                        <ul>
                           <li>
                              <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16.4998 9C16.4998 13.14 13.1398 16.5 8.99976 16.5C4.85976 16.5 1.49976 13.14 1.49976 9C1.49976 4.86 4.85976 1.5 8.99976 1.5C13.1398 1.5 16.4998 4.86 16.4998 9Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M11.7822 11.3848L9.45723 9.99732C9.05223 9.75732 8.72223 9.17982 8.72223 8.70732V5.63232" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg><a href="#">Jun 14, 2022</a></span>
                           </li>
                           <li>
                              <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.6848 6.99994C10.6848 8.48494 9.48476 9.68494 7.99976 9.68494C6.51476 9.68494 5.31476 8.48494 5.31476 6.99994C5.31476 5.51494 6.51476 4.31494 7.99976 4.31494C9.48476 4.31494 10.6848 5.51494 10.6848 6.99994Z" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.99976 13.2025C10.6473 13.2025 13.1148 11.6425 14.8323 8.94254C15.5073 7.88504 15.5073 6.10754 14.8323 5.05004C13.1148 2.35004 10.6473 0.790039 7.99976 0.790039C5.35226 0.790039 2.88476 2.35004 1.16726 5.05004C0.492261 6.10754 0.492261 7.88504 1.16726 8.94254C2.88476 11.6425 5.35226 13.2025 7.99976 13.2025Z" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg><a href="#">1,526 views</a></span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
               <div class="blog__item mb-30 white-bg transition-3 mb-30">
                  <div class="blog__thumb w-img fix">
                     <a href="blog-details.html">
                        <img src="assets/img/blog/blog-3.jpg" alt="">
                     </a>
                  </div>
                  <div class="blog__content">
                     <div class="blog__tag">
                        <a href="#">HR and L&D</a>
                     </div>
                     <h3 class="blog__title">
                        <a href="blog-details.html">Classroom adapts for the future of learning</a>
                     </h3>
                     <div class="blog__meta">
                        <ul>
                           <li>
                              <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16.4998 9C16.4998 13.14 13.1398 16.5 8.99976 16.5C4.85976 16.5 1.49976 13.14 1.49976 9C1.49976 4.86 4.85976 1.5 8.99976 1.5C13.1398 1.5 16.4998 4.86 16.4998 9Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M11.7822 11.3848L9.45723 9.99732C9.05223 9.75732 8.72223 9.17982 8.72223 8.70732V5.63232" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg><a href="#">Jun 14, 2022</a></span>
                           </li>
                           <li>
                              <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.6848 6.99994C10.6848 8.48494 9.48476 9.68494 7.99976 9.68494C6.51476 9.68494 5.31476 8.48494 5.31476 6.99994C5.31476 5.51494 6.51476 4.31494 7.99976 4.31494C9.48476 4.31494 10.6848 5.51494 10.6848 6.99994Z" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.99976 13.2025C10.6473 13.2025 13.1148 11.6425 14.8323 8.94254C15.5073 7.88504 15.5073 6.10754 14.8323 5.05004C13.1148 2.35004 10.6473 0.790039 7.99976 0.790039C5.35226 0.790039 2.88476 2.35004 1.16726 5.05004C0.492261 6.10754 0.492261 7.88504 1.16726 8.94254C2.88476 11.6425 5.35226 13.2025 7.99976 13.2025Z" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg><a href="#">1,526 views</a></span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </section> --}}
   <!-- blog area end -->

   

   <!-- brand area start partner__active-->

   <!-- brand area end -->

@endsection
      
