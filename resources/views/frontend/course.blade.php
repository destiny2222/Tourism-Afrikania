@extends('layouts.main')
@section('head', 'Course')
@section('header-area')
   @include('layouts.subheader')
@endsection
@section('content')
    @section('breadcrumb', 'Course')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


     <!-- blog area start -->
     {{-- <section class="blog__area pt-120 pb-120">
        <div class="container">
           <div class="row">
              <div class="col-xxl-4 col-xl-4 col-lg-4">
                 <div class="postbox__wrapper pr-20">
                    
                        <article class="postbox__item format-image mb-50 transition-3">
                            <div class="postbox__thumb w-img">
                            <a href="{{ route('course-details', $courses->slug) }}">
                                <img src="{{ asset('upload/course/'.$courses->image) }}" alt="">
                            </a>
                            </div>
                            <div class="postbox__content">
                            <div class="postbox__meta">
                                <span><a href=""><i class="far fa-user"></i> </a></span>
                            </div>
                            <h3 class="postbox__title">
                                <a href="{{ route('course-details', $courses->slug) }}"></a>
                            </h3>
                            <div class="postbox__text">
                                <p>{!! \Str::limit($courses->description, 200) !!}</p>
                            </div>
                            <div class="postbox__read-more">
                                <a href="{{ route('course-details', $courses->slug) }}" class="tp-btn">read more</a>
                            </div>
                            </div>
                        </article>
                    @endforeach
                    <div class="basic-pagination">
                       <nav>
                          <ul>
                             <li>
                                <a href="blog.html">
                                   <i class="far fa-angle-left"></i>
                                </a>
                             </li>
                             <li>
                                <a href="blog.html">1</a>
                             </li>
                             <li>
                                <span class="current">2</span>
                             </li>
                             <li>
                                <a href="blog.html">3</a>
                             </li>
                             <li>
                                <a href="blog.html">
                                   <i class="far fa-angle-right"></i>
                                </a>
                             </li>
                          </ul>
                        </nav>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section> --}}
     <!-- blog area end -->

     <!-- course-content-start -->
     <section class="course-content-area pb-90 pt-120">
      <div class="container">
         <div class="row mb-10">
            @foreach ($course as $courses)
               <div class="col-12 col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                  <div class="row">
                     <div class="col-12 col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="eduman-course-main-wrapper mb-30">
                           <div class="eduman-course-thumb w-img">
                              <a href="{{ route('course-details', $courses->slug) }}">
                                 <img src="{{ asset('upload/course/'.$courses->image) }}" alt="course-img">
                              </a>
                           </div>
                           <div class="eduman-course-wraper">
                              <div class="eduman-course-heading">
                                 <a href="{{ route('course-details', $courses->slug) }}" class="course-link-color-1">{{ $courses->courseCategories->name }}</a>
                              </div>
                              <div class="eduman-course-text">
                                 <h3><a href="{{ route('course-details', $courses->slug) }}">{{ $courses->name }}</a></h3>
                              </div>
                              <div class="eduman-course-meta">
                                 <p>{!! \Str::limit($courses->description, 200) !!}</p>
                              </div>
                           </div>
                           <div class="eduman-course-footer">
                              <div class="course-deteals-btn">
                                 <a href="{{ route('course-details', $courses->slug) }}"><span class="me-2">View Details</span><i
                                       class="far fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="edu-pagination mt-30 mb-20">
                        <ul>
                           <li><a href="#"><i class="fal fa-angle-left"></i></a></li>
                           <li class="active"><a href="#"><span>01</span></a></li>
                           <li><a href="#"><span>02</span></a></li>
                           <li><a href="#"><i class="fal fa-angle-right"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>
      </div>
   </section>
   <!-- course-content-end -->


@endsection    