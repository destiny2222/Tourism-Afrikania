@extends('layouts.main')
@section('head', 'Community')
@section('header-area')
   @include('layouts.header')
@endsection
@section('content')
    @section('breadcrumb', 'Community')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


     <!-- services-area -->
     <section class="services__area-four services__bg-four" data-background="assets/img/bg/inner_services_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">Our Student</span>
                        <h2 class="section__title section__title-44">Community</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gutter-24">

                <div class="col-12 col-lg-10 col-md-10">
                    <div class="services__item-three">
                        <div class="services__content-three">
                            <p>
                                Tourism Afrikania is an African Global Hospitality and Tourism Management
                                Company dedicated to promoting hospitality and tourism education across
                                Africa. Our mission is to enable African economic growth by assisting business
                                owners in achieving their profitability goals through comprehensive career
                                mentorship, training, marketing solutions, and general travel and hotel
                                management services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-10 col-md-10">
                    <div class="services__item-three">
                        <div class="services__content-three">
                            <div class="services__item-top-title">
                                <h2 class="title"><a href='javascript:void()'>TA Network / Community of Students and Graduates:</a></h2>
                            </div>
                            <p>
                                Our TA Network is a vibrant community that provides invaluable resources and
                                support to students and graduates pursuing careers in the hospitality and
                                tourism industry. By joining our community, you gain access to a wide range of
                                benefits and opportunities tailored to enhance your professional development
                                and accelerate your career growth.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-10 col-md-10">
                    <div class="services__item-three">
                        <div class="services__content-three">
                            <div class="services__top-title">
                                <h2 class="title"><a href='javascript:void()'>Key Features of Our Student Community:</a></h2>
                            </div>
                            <p>
                                • Career Mentorship: Receive personalized guidance and support from industry
                                professionals to navigate your career path and achieve your professional goals.
                                • Students' Cash Prize Supports / Competitions: Participate in competitions such
                                as Build Afrika to showcase your skills and talents and win cash prizes to
                                support your educational journey.
                                • Professional Development Training: Access training opportunities to enhance
                                your skills and stay updated on industry best practices and trends.
                                • Professional Skill Acquisition: Acquire practical skills and knowledge through
                                hands-on training and workshops conducted by industry experts.
                                • Job / Internship Opportunities: Explore internship and job opportunities in
                                leading hospitality and tourism organizations through our extensive network of
                                industry partners.
                                • Business/Entrepreneurship Coaching: Receive guidance and mentorship to
                                develop your entrepreneurial skills and explore business opportunities in the
                                hospitality and tourism sector.
                                • Networking: Connect with fellow students, graduates, and industry
                                professionals to expand your professional network and explore collaborative
                                opportunities.
                                • Scholarship Opportunities: Apply for scholarships to fund your education and
                                pursue further studies in hospitality and tourism-related fields.
                                • Industry News and Trends: Stay informed about the latest news, trends, and
                                developments in the hospitality and tourism industry to remain competitive in
                                the job market.
                                • CV / Resume Assistance: Receive assistance in crafting professional resumes
                                and CVs that comply with Applicant Tracking System (ATS) requirements to
                                increase your chances of landing interviews.
                                    
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services__shape-wrap-two">
            <img src="assets/img/services/inner_services_shape01.png" alt="" data-aos="fade-right" data-aos-delay="400">
            <img src="assets/img/services/inner_services_shape02.png" alt="" data-aos="fade-left" data-aos-delay="400">
        </div>
    </section>
    <!-- services-area-end -->


@endsection    