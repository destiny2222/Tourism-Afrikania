@extends('layouts.main')
@section('head', $Coursecategory->name)
@section('header-area')
   @include('layouts.header')
@endsection
@section('content')
    @section('breadcrumb', $Coursecategory->name)
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->



    <!-- course area start -->
   <section class="course__area  pt-110 pb-90">
    <div class="container">
          <div class="row">
             <div class="col-xxl-12">
                <div class="section__title-wrapper-2 text-center mb-40">
                      <span class="section__title-pre-2"> Courses</span>
                      <h3 class="section__title-2"> {{ $Coursecategory->name }}</h3>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-xxl-12">
                <div class="course__tab-wrapper">
                    <div class="row">
                    @forelse ($Coursecategory->courses as $course)
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                <div class="course__thumb-2 w-img fix p-3">
                                    <a href='{{ route('course-details',$course->slug) }}'>
                                    <img src="{{ asset('upload/course/'.$course->image)  }}" alt="">
                                    </a>
                                </div>
                                <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                    <div class="course__tag-2 purple-bg">
                                            <a href="{{ route('course-details', $course->slug) }}">{{ $Coursecategory->name }}</a>
                                    </div>
                                    </div>
                                    <h3 class="course__title">
                                    <a href="{{ route('course-details', $course->slug) }}">{{ $course->name }}</a>
                                    </h3>
                                    <h3 class="course__title-2">
                                    <a href="#">{!! \Str::limit($course->description, 200) !!}</a>
                                    </h3>
                                    <div class="course__more">
                                    <div class="course__btn">
                                        <a href="{{ route('course-details', $course->slug) }}" class="link-btn">
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
                    <div class="pagination-wrap mt-40">
                        <nav aria-label="Page navigation example">
                            {{  $courses->links() }}
                        </nav>
                    </div>
                    </div>
                </div>
             </div>
          </div>
    </div>
 </section>
 <!-- course area end -->
@endsection
