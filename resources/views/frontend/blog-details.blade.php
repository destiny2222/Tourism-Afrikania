@extends('layouts.main')
@section('head', 'Blog Details')
@section('header-area')
   @include('layouts.subheader')
@endsection
@section('content')
    @section('breadcrumb', 'Blog Details')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->

    <!-- blog-details-area -->
    <section class="blog__details-area">
        <div class="container">
            <div class="blog__inner-wrap">
                <div class="row">
                    <div class="col-70">
                        <div class="blog__details-wrap">
                            <div class="blog__details-thumb">
                                <img src="{{ asset('storage/'.$post->image) }}" alt="">
                            </div>
                            <div class="blog__details-content">
                                <h2 class="title">{{ $post->title }}</h2>
                                <p>{!!  html_entity_decode($post->description) !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <aside class="blog__sidebar">
                            <div class="sidebar__widget">
                                <h4 class="sidebar__widget-title">Categories</h4>
                                <div class="sidebar__cat-list">
                                    <ul class="list-wrap">
                                        @foreach ($category as $categories)    
                                            <li>
                                                <a href="javascript:void()"><i class="flaticon-arrow-button"></i>{{ $categories->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <h4 class="sidebar__widget-title">Latest Posts</h4>
                                <div class="sidebar__post-list">
                                    @foreach ($recentpost as $recentposts)    
                                        <div class="sidebar__post-item">
                                            <div class="sidebar__post-thumb">
                                                <a href='{{ route('post-details',$recentposts->slug) }}'><img src="{{ asset('storage/'.$recentposts->image) }}" alt=""></a>
                                            </div>
                                            <div class="sidebar__post-content">
                                                <h5 class="title"><a href='{{ route('post-details',$recentposts->slug) }}'>{{ \Str::limit($recentposts->title,30) }}</a></h5>
                                                <span class="date"><i class="flaticon-time"></i>{{  $recentposts->created_at }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <h4 class="sidebar__widget-title">Tags</h4>
                                <div class="sidebar__tag-list">
                                    <ul class="list-wrap">
                                        @foreach ($tag as $tags)
                                           <li><a href="javascript:void()">{{  $tags->name  }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->


@endsection    