@extends('layouts.main')
@section('head', 'Blog')
@section('header-area')
   @include('layouts.subheader')
@endsection
@section('content')
    @section('breadcrumb', 'Blog')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


     <!-- blog area start -->
     {{-- <section class="blog__area pt-120 pb-120">
        <div class="container">
           <div class="row">
              <div class="col-xxl-8 col-xl-8 col-lg-8">
                 <div class="postbox__wrapper pr-20">
                    @foreach ($post as $posts)
                        <article class="postbox__item format-image mb-50 transition-3">
                        <div class="postbox__thumb w-img">
                                <a  href='{{ route('post-details',$posts->slug) }}'>
                                    <img src="{{ asset('upload/new/'.$posts->image)  }}" alt="">
                                </a>
                        </div>
                        <div class="postbox__content">
                            <div class="postbox__meta">
                                <span><i class="far fa-calendar-check"></i> {{ $posts->created_at }} </span>
                            </div>
                            <h3 class="postbox__title">
                                <a href='{{ route('post-details',$posts->slug) }}'>{{  \Str::limit($posts->title, 50 )}}</a>
                            </h3>
                            <div class="postbox__text">
                                <p>{!!  html_entity_decode(\Str::limit($posts->description, 50)) !!}</p>
                            </div>
                            <div class="postbox__read-more">
                                <a href="{{ route('post-details',$posts->slug)  }}" class="tp-btn">read more</a>
                            </div>
                        </div>
                        </article>
                    @endforeach    

                    <div class="basic-pagination">
                       <nav>
                          <ul>
                             <li>
                                <a href="#">
                                   <i class="far fa-angle-left"></i>
                                </a>
                             </li>
                             <li>
                                <a href="#">1</a>
                             </li>
                             <li>
                                <span class="current">2</span>
                             </li>
                             <li>
                                <a href="#">3</a>
                             </li>
                             <li>
                                <a href="#">
                                   <i class="far fa-angle-right"></i>
                                </a>
                             </li>
                          </ul>
                        </nav>
                    </div>
                 </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4">
                 <div class="blog__sidebar pl-70">
                    <div class="sidebar__widget mb-60">
                       <div class="sidebar__widget-content">
                          <div class="sidebar__search p-relative">
                             <form action="#">
                                <input type="text" placeholder="Search for courses...">
                                <button type="submit">
                                   <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 584.4 584.4" style="enable-background:new 0 0 584.4 584.4;" xml:space="preserve">
                                   <g>
                                      <g>
                                         <path class="st0" d="M565.7,474.9l-61.1-61.1c-3.8-3.8-8.8-5.9-13.9-5.9c-6.3,0-12.1,3-15.9,8.3c-16.3,22.4-36,42.1-58.4,58.4    c-4.8,3.5-7.8,8.8-8.3,14.5c-0.4,5.6,1.7,11.3,5.8,15.4l61.1,61.1c12.1,12.1,28.2,18.8,45.4,18.8c17.1,0,33.3-6.7,45.4-18.8    C590.7,540.6,590.7,499.9,565.7,474.9z"/>
                                         <path class="st1" d="M254.6,509.1c140.4,0,254.5-114.2,254.5-254.5C509.1,114.2,394.9,0,254.6,0C114.2,0,0,114.2,0,254.5    C0,394.9,114.2,509.1,254.6,509.1z M254.6,76.4c98.2,0,178.1,79.9,178.1,178.1s-79.9,178.1-178.1,178.1S76.4,352.8,76.4,254.5    S156.3,76.4,254.6,76.4z"/>
                                      </g>
                                   </g>
                                   </svg>
                                </button>
                             </form>
                          </div>
                       </div>
                    </div>
                    <div class="sidebar__widget mb-55">
                       <div class="sidebar__widget-head mb-35">
                          <h3 class="sidebar__widget-title">Recent posts</h3>
                       </div>
                       <div class="sidebar__widget-content">
                          <div class="rc__post-wrapper">
                             <div class="rc__post d-flex align-items-start">
                                <div class="rc__thumb mr-20">
                                   <a href="blog-details.html"><img src="assets/img/blog/sm/blog-sm-1.jpg" alt=""></a>
                                </div>
                                <div class="rc__content">
                                   <div class="rc__meta">
                                      <span>October 15, 2021</span>
                                   </div>
                                   <h6 class="rc__title"><a href="blog-details.html">The Importance  Intrinsic Motivation.</a></h6>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="sidebar__widget mb-55">
                       <div class="sidebar__widget-head mb-35">
                          <h3 class="sidebar__widget-title">Category</h3>
                       </div>
                       <div class="sidebar__widget-content">
                             <ul>
                                <li><a href="#">Category</a></li>
                             </ul>
                       </div>
                    </div>
                    <div class="sidebar__widget mb-55">
                       <div class="sidebar__widget-head mb-35">
                          <h3 class="sidebar__widget-title">Tags</h3>
                       </div>
                       <div class="sidebar__widget-content">
                          <div class="tagcloud">
                             <a href="#">Art & Design</a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section> --}}
     <!-- blog area end -->


@endsection    