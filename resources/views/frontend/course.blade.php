@extends('layouts.main')
@section('head', 'Course')
@section('header-area')
   @include('layouts.header')
@endsection
@section('content')
    @section('breadcrumb', 'Course')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


     <!-- blog area start -->
     <section class="blog__area pt-120 pb-120">
        <div class="container">
           <div class="row">
              <div class="col-xxl-4 col-xl-4 col-lg-4">
                 <div class="postbox__wrapper pr-20">
                    @foreach ($course as $courses)
                        <article class="postbox__item format-image mb-50 transition-3">
                            <div class="postbox__thumb w-img">
                            <a href="{{ route('course-details', $courses->slug) }}">
                                <img src="{{ asset('upload/course/'.$courses->image) }}" alt="">
                            </a>
                            </div>
                            <div class="postbox__content">
                            <div class="postbox__meta">
                                <span><a href="{{ route('course-details', $courses->slug) }}"><i class="far fa-user"></i> {{ $courses->courseCategories->name }}</a></span>
                            </div>
                            <h3 class="postbox__title">
                                <a href="{{ route('course-details', $courses->slug) }}">{{ $courses->name }}</a>
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
     </section>
     <!-- blog area end -->


@endsection    