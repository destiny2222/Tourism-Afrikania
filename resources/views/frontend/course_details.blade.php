@extends('layouts.main')
@section('head', 'Course')
@section('header-area')
   @include('layouts.header')
@endsection
@section('content')
    @section('breadcrumb', 'Course Details')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


    <!-- course area start -->
    <section class="course__area pt-115 pb-90">
        <div class="container">
           <div class="row">
              <div class="col-xxl-12 col-xl-12 col-lg-12">
                 <div class="course__wrapper">
                    <div class="page__title-content mb-25"> 
                       <span class="breadcrumb__title-pre">{{  $course->courseCategories->name }}</span>
                       <h5 class="breadcrumb__title-2">{{  $course->name }}</h5>
                    </div>
                    <div class="course__img w-img mb-30">
                       <img src="{{  asset('upload/course/'.$course->image)  }}" alt="">
                    </div>
                    <div class="course__tab-content mb-95">
                       <div class="tab-content" id="courseTabContent">
                          <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                             <div class="course__description">
                                <h3>Course Overview</h3>
                                <p>
                                    {!! html_entity_decode($course->description) !!}
                                </p>                            
                             </div>
                          </div>
                        </div>
                    </div>
                    <div class="course__related">
                       <div class="row">
                          <div class="col-xxl-12">
                             <div class="section__title-wrapper mb-40">
                                <h2 class="section__title">Related Course</h2>
                                <p>You don't have to struggle alone, you've got our assistance and help.</p>
                             </div>
                          </div>
                       </div>
                       <div class="row">
                          <div class="col-xxl-12">
                             <div class="course__slider swiper-container pb-60">
                                <div class="swiper-wrapper">
                                    @foreach ($recent as $recents)  
                                    <div class="course__item-2 swiper-slide transition-3 white-bg mb-30 fix">
                                        <div class="course__thumb-2 w-img fix">
                                            <a href='{{ route('course-details', $recents->slug) }}'>
                                                <img src="{{  asset('upload/course/'.$recents->image) }}"  alt="">
                                            </a>
                                        </div>
                                        <div class="course__content-2">
                                            <div class="course__top-2 d-flex align-items-center justify-content-between">
                                                <div class="course__tag-2">
                                                   <a href="#">{{  $recents->courseCategories->name }}</a>
                                                </div>
                                            </div>
                                            <h3 class="course__title-2">
                                                <a href='{{ route('course-details', $recents->slug) }}'>
                                                    {!! \Str::limit($recents->description, 200) !!}
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- course area end -->



@endsection