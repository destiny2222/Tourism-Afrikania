@extends('layouts.main')
@section('head', 'AHTES24')
@section('header-area')
   @include('layouts.header')
@endsection
@section('content')
    @section('breadcrumb', 'AHTES24')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->

    {{-- <section class="pricing-bg section-spacing section-padding ">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-5 mx-auto text-center">
                    <div class="section-title text-center pb-3 pt-3 pb-5">
                        <h2 class="wow">AHTES24 Registration Packages</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-11 mx-auto">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="pricing-wrap wow pulse py-4 " data-wow-delay="0.1s">
                                <h1 class="plan-price">VISITORS (FREE ACCESS)</h1>
                                <hr class="divider-default">
                                <h6>Benefits</h6>
                                <ul class="list-unstyled icons-listing theme-secondary tick">
                                    <li>- Network with scholars,  B2B, students, Educators and Professionals</li>
                                    <li>- Certificate of Participation on Request</li>
                                    <li>- Access to Vendors & Exhibitors</li>
                                    <li>- Full Summit Participation</li>
                                    <li>- Participate as a Quiz contestant or career contestant</li>
                                </ul>
                                <div class="text-center">
                                    <a href="{{  route('register-visitor') }}"  class="text-uppercase btn btn-default">
                                        <span class="outer-wrap"><span data-text="Register Now">Register Now</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="pricing-wrap popular-plan wow pulse py-4" data-wow-delay="0.2s">
                                <h1 class="plan-price">
                                    REGULAR DELEGATE N50,000 ($50) 
                                    </h1>
                                    <hr class="divider-default">
                                    <h6>Benefits</h6>
                                <ul class="list-unstyled icons-listing theme-secondary tick">
                                    <li>- Special Reservations</li>
                                    <li>- Certificate of Participation</li>
                                    <li> - Delegate Lunch ( Food & Beverage)</li>
                                    <li>- Participation in Lagos City Tour (EDU-TOUR OF LAGOS CITY)</li>
                                    <li>- FHOTEL / VISA SUPPORTS (IF ANY)
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a href="{{  route('register-regular') }}"  class="text-uppercase btn btn-default">
                                        <span class="outer-wrap"><span data-text="Register Now">Register Now</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="pricing-wrap wow pulse py-4" data-wow-delay="0.3s">
                                <h1 class="plan-price">DELEGATES N250,000($250)</h1>
                                <hr class="divider-default">
                                <h6>Benefits</h6>
                                <ul class="list-unstyled icons-listing theme-secondary tick">
                                    <li>- Special Reservations </li>
                                    <li>- Award of Corporate /
                                        Personal Social Responsible Brand or Person in Tourism & Hospitality Education</li>
                                    <li>- Certificate of Participation </li>
                                    <li>- Delegate Lunch ( Food & Beverage)</li>
                                    <li>- Participation in Lagos City Tour (EDU-TOUR OF LAGOS CITY)</li>
                                    <li>- HOTEL / VISA SUPPORTS (IF ANY)</li>
                                </ul>
                                <div class="text-center">
                                    <a href="{{  route('register-delegate') }}"  class="text-uppercase btn btn-default">
                                        <span class="outer-wrap"><span data-text="Register Now">Register Now</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="pricing-wrap wow pulse py-4" data-wow-delay="0.3s">
                                <h1 class="plan-price">PREMIUM DELEGATE N450,000 ($450)</h1>
                                <hr class="divider-default">
                                <h6>Benefits</h6>
                                <ul class="list-unstyled icons-listing theme-secondary tick">
                                    <li>- Award of Corporate /
                                        Personal Social Responsible Brand or Person in Tourism & Hospitality Education </li>
                                    <li>- Certificate of Participation</li>
                                    <li>- Delegate Lunch ( Food & Beverage)</li>
                                    <li>- Participation in Lagos City Tour (2 TICKET EDU-TOUR OF LAGOS CITY)</li>
                                    <li>- HOTEL / VISA SUPPORTS (IF ANY)</li>
                                    <li>- FREE BROCHURE ADVERT (QUARTER Page) </li>
                                    <li>- FREE BROCHURE (+EVENT PACK)</li>
                                </ul>
                                <div class="text-center">
                                    <a href="{{  route('register-premium') }}"  class="text-uppercase btn btn-default">
                                        <span class="outer-wrap"><span data-text="Register Now">Register Now</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!-- price area start -->
    <section class="price__area pb-85 pt-120">
        <div class="container">
           <div class="row">
              <div class="col-xxl-12">
                 <div class="section__title-wrapper text-center mb-60">
                    <span class="section__title-pre-3">AHTES24</span>
                    <h2 class="section__title-44">AHTES24 Registration Packages</h2>
                 </div>
              </div>
           </div>
           <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                 <div class="price__item active white-bg mb-30 transition-3 fix">
                    <h3 class="price__title">VISITORS (FREE ACCESS)</h3>

                    <div class="price__content">
                       <div class="price__list mb-35">
                          <h6>Benefits</h6>
                          <ul>
                            <li> Network with scholars,  B2B, students, Educators and Professionals <span><i class="fa-solid fa-check"></i></span></li>
                            <li> Certificate of Participation on Request <span><i class="fa-solid fa-check"></i></span></li>
                            <li> Access to Vendors & Exhibitors <span><i class="fa-solid fa-check"></i></span></li>
                            <li> Full Summit Participation <span><i class="fa-solid fa-check"></i></span></li>
                            <li> Participate as a Quiz contestant or career contestant <span><i class="fa-solid fa-check"></i></span></li>
                          </ul>
                       </div>
                        <div class="price__btn">
                            <a href="{{  route('register-visitor') }}" class="tp-btn-9 tp-btn-12 w-100">Register Now</a>
                        </div>
                    </div>
                 </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                 <div class="price__item active white-bg mb-30 transition-3 fix">
                    <h3 class="price__title">REGULAR DELEGATE N50,000 ($50)</h3>

                    <div class="price__content">
                       <div class="price__list mb-35">
                          <h6>Benefits</h6>
                          <ul>
                            <li> Special Reservations <span><i class="fa-solid fa-check"></i></span></li>
                            <li> Certificate of Participation <span><i class="fa-solid fa-check"></i></span></li>
                            <li> Delegate Lunch ( Food & Beverage) <span><i class="fa-solid fa-check"></i></span></li>
                            <li> Participation in Lagos City Tour (EDU-TOUR OF LAGOS CITY) <span><i class="fa-solid fa-check"></i></span></li>
                            <li> FHOTEL / VISA SUPPORTS (IF ANY)  <span><i class="fa-solid fa-check"></i></span></li>
                          </ul>
                       </div>
                       <div class="price__btn">
                          <a href="{{  route('register-regular') }}" class="tp-btn-9 tp-btn-12 w-100">Register Now</a>
                       </div>
                    </div>
                 </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="price__item active white-bg mb-30 transition-3 fix">
                        <h3 class="price__title">DELEGATES N250,000($250)</h3>

                        <div class="price__content">
                            <div class="price__list mb-35">
                                <h6>Benefits</h6>
                                <ul>
                                    <li> Special Reservations <span><i class="fa-solid fa-check"></i></span> </li>
                                    <li> Award of Corporate /
                                        Personal Social Responsible Brand or Person in Tourism & Hospitality Education <span><i class="fa-solid fa-check"></i></span></li>
                                    <li> Certificate of Participation <span><i class="fa-solid fa-check"></i></span> </li>
                                    <li> Delegate Lunch ( Food & Beverage) <span><i class="fa-solid fa-check"></i></span></li>
                                    <li> Participation in Lagos City Tour (EDU-TOUR OF LAGOS CITY) <span><i class="fa-solid fa-check"></i></span></li>
                                    <li> HOTEL / VISA SUPPORTS (IF ANY) <span><i class="fa-solid fa-check"></i></span></li>
                                </ul>
                            </div>
                            <div class="price__btn">
                                <a href="{{  route('register-delegate') }}" class="tp-btn-9 tp-btn-12 w-100">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="price__item active white-bg mb-30 transition-3 fix">
                        <h3 class="price__title">PREMIUM DELEGATE N450,000 ($450)</h3>

                        <div class="price__content">
                            <div class="price__list mb-35">
                                <h6>Benefits</h6>
                                <ul>
                                    <li>- Award of Corporate /
                                        Personal Social Responsible Brand or Person in Tourism & Hospitality Education <span><i class="fa-solid fa-check"></i></span> </li>
                                    <li>- Certificate of Participation <span><i class="fa-solid fa-check"></i></span></li>
                                    <li>- Delegate Lunch ( Food & Beverage) <span><i class="fa-solid fa-check"></i></span></li>
                                    <li>- Participation in Lagos City Tour (2 TICKET EDU-TOUR OF LAGOS CITY) <span><i class="fa-solid fa-check"></i></span></li>
                                    <li>- HOTEL / VISA SUPPORTS (IF ANY) <span><i class="fa-solid fa-check"></i></span></li>
                                    <li>- FREE BROCHURE ADVERT (QUARTER Page) <span><i class="fa-solid fa-check"></i></span> </li>
                                    <li>- FREE BROCHURE (+EVENT PACK) <span><i class="fa-solid fa-check"></i></span></li>
                                </ul>
                            </div>
                            <div class="price__btn">
                                <a href="{{  route('register-premium') }}" class="tp-btn-9 tp-btn-12 w-100">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
     </section>
     <!-- price area end -->

@endsection