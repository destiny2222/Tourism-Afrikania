@extends('layouts.main')
@section('head', 'Event ')
@section('header-area')
   @include('layouts.header')
@endsection
@section('content')
    @section('breadcrumb', 'Event ')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


    <!-- course area start -->
    <section class="course__area pt-115 pb-90 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-40">
                        <span class="sub-title">Event</span>
                        <h2 class="section__title section__title-44">Featured Event</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="course__tab-conent">
                        <div class="row">
                        @foreach ($event as $events)
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix">
                                        <a class='shine-animate' href='{{ route('event-details', $events->slug)  }}'>
                                            <img src="{{ asset('upload/event/'.$events->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="course__content-2">
                                        <div class="course__top-2 d-flex align-items-center justify-content-between">
                                            <h3 class="course__title-2">
                                                <a href="{{ route('event-details', $events->slug)  }}">{{ \Str::limit($events->title, 40) }}</a>
                                            </h3>
                                        </div>
                                        <p>{!!  html_entity_decode(\Str::limit($events->description, 100)) !!}</p>
                                        <a class='' href='{{ route('event-details', $events->slug)  }}'>Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-12">
                    <div class="basic-pagination text-center">
                        <nav>
                            <ul>
                                <li>
                                <a href="course-v2.html">
                                    <i class="far fa-angle-left"></i>
                                </a>
                                </li>
                                <li>
                                <a href="course-v2.html">1</a>
                                </li>
                                <li>
                                <span class="current">2</span>
                                </li>
                                <li>
                                <a href="course-v2.html">3</a>
                                </li>
                                <li>
                                <a href="course-v1.html">
                                    <i class="far fa-angle-right"></i>
                                </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course area end -->



@endsection    