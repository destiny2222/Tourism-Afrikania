@extends('layouts.main')
@section('head', 'AHTES24')
@section('header-area')
   @include('layouts.subheader')
@endsection
@section('content')
    @section('breadcrumb', 'AHTES24')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


    <section class="membership-area pt-110">
        <div class="container">
           <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-6">
                 <div class="section-title text-center mb-40">
                    <h2>AHTES25 Registration Packages</h2>
                    <p>AHTES25 Registration Packages</p>
                 </div>
              </div>
              <div class="tab-content" id="priceTabContent"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                 <div class="tab-pane fade active show" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                    <div class="row">
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6">
                           <div class="membership-box mb-30">
                              <div class="membership-info">
                                 <h4>VISITORS (FREE ACCESS)</h4>
                                 <div class="membership-price">
                                    <span>Benefits</span>
                                 </div>
                                 <div class="membership-list">
                                    <ul>
                                       <li> <span><i class="far fa-check"></i></span>Network with scholars,  B2B, students, Educators and Professionals </li>
                                        <li><span><i class="far fa-check"></i></span> Certificate of Participation on Request </li>
                                        <li><span><i class="far fa-check"></i></span> Access to Vendors & Exhibitors </li>
                                        <li><span><i class="far fa-check"></i></span> Full Summit Participation </li>
                                        <li><span><i class="far fa-check"></i></span> Participate as a Quiz contestant or career contestant </li>
                                    </ul>
                                 </div>
                              </div>
                              <a class="membership-btn" href="{{  route('register-visitor') }}">Register Now</a>
                           </div>
                        </div>
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6">
                           <div class="membership-box  mb-30">
                              <div class="membership-info">
                                 <h4>REGULAR DELEGATE N50,000 ($50)</h4>
                                 <div class="membership-price">
                                    <span>Benefits</span>
                                 </div>
                                 <div class="membership-list">
                                    <ul>
                                        <li><i class="far fa-check"></i> Network with scholars,  B2B, students, Educators and Professionals </li>
                                        <li><i class="far fa-check"></i> Certificate of Participation on Request </li>
                                        <li><i class="far fa-check"></i> Access to Vendors & Exhibitors </li>
                                        <li><i class="far fa-check"></i> Full Summit Participation </li>
                                        <li><i class="far fa-check"></i> Participate as a Quiz contestant or career contestant </li>
                                    </ul>
                                 </div>
                              </div>
                              <a class="membership-btn" href="{{  route('register-regular') }}">Register Now</a>
                           </div>
                        </div>
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6">
                           <div class="membership-box mb-30">
                              <div class="membership-info">
                                 <h4>DELEGATES N250,000($250)</h4>
                                 <div class="membership-price">
                                    <span>Benefits</span>
                                 </div>
                                 <div class="membership-list">
                                    <ul>
                                        <li><i class="far fa-check"></i> Special Reservations  </li>
                                        <li><i class="far fa-check"></i> Award of Corporate /
                                            Personal Social Responsible Brand or Person in Tourism & Hospitality Education </li>
                                        <li><i class="far fa-check"></i> Certificate of Participation  </li>
                                        <li><i class="far fa-check"></i> Delegate Lunch ( Food & Beverage) </li>
                                        <li><i class="far fa-check"></i> Participation in Lagos City Tour (EDU-TOUR OF LAGOS CITY) </li>
                                        <li><i class="far fa-check"></i> HOTEL / VISA SUPPORTS (IF ANY) </li>
                                    </ul>
                                 </div>
                              </div>
                              <a class="membership-btn" href="{{  route('register-delegate') }}">Register Now</a>
                           </div>
                        </div>
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6">
                           <div class="membership-box  mb-30">
                              <div class="membership-info">
                                 <h4>PREMIUM DELEGATE N450,000 ($450)</h4>
                                 <div class="membership-price">
                                    <span>Benefits</span>
                                 </div>
                                 <div class="membership-list">
                                    <ul>
                                       <li><i class="far fa-check"></i> Award of Corporate /
                                            Personal Social Responsible Brand or Person in Tourism & Hospitality Education  </li>
                                        <li><i class="far fa-check"></i> Certificate of Participation </li>
                                        <li><i class="far fa-check"></i> Delegate Lunch ( Food & Beverage) </li>
                                        <li><i class="far fa-check"></i> Participation in Lagos City Tour (2 TICKET EDU<i class="far fa-check"></i>TOUR OF LAGOS CITY) </li>
                                        <li><i class="far fa-check"></i> HOTEL / VISA SUPPORTS (IF ANY) </li>
                                        <li><i class="far fa-check"></i> FREE BROCHURE ADVERT (QUARTER Page)  </li>
                                        <li><i class="far fa-check"></i> FREE BROCHURE (+EVENT PACK) </li>
                                    </ul>
                                 </div>
                              </div>
                              <a class="membership-btn" href="{{  route('register-premium') }}">Register Now</a>
                           </div>
                        </div>
                     </div>
                 </div>
              </div>
           </div>
        </div>
     </section>


@endsection