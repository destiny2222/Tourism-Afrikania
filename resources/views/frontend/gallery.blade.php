@extends('layouts.main')
@section('head', 'Gallery')
<style>
    .pagination{
        justify-content: center;
    }
</style>
@section('header-area')
   @include('layouts.header')
@endsection
@section('content')
    @section('breadcrumb', 'Gallery')
    <!-- breadcrumb-area -->
        @include('partials.breadcrumb-area')
    <!-- breadcrumb-area-end -->


    <!-- services-area -->
    <section class="services__area-five services__bg-five" data-background="assets/img/bg/inner_services_bg02.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center" style="margin-bottom:70px">
                        <h2 class="section__title section__title-44">Our Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="services-item-wrap">
                <div class="row justify-content-center">
                    @foreach ($gallery as $gallerys)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
                        <div class="services- shine-animate-item">
                            {{-- <div class="services-thumb" > --}}
                                <a class='shine-animate'>
                                    <img src="{{ asset('upload/gallery/'.$gallerys->image) }}" alt="">
                                </a>
                            {{-- </div> --}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                {{  $gallery->links() }}
            </div>
        </div>
    </section>
    <!-- services-area-end -->




@endsection    