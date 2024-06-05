
<!-- breadcrumb area start -->
<section class="breadcrumb__area include-bg  breadcrumb__overlay" data-background="/assets/img/bg/breadcrumb_bg.jpg">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="breadcrumb__content text-center p-relative z-index-1">
                <h3 class="breadcrumb__title">@yield('breadcrumb')</h3>
                <div class="breadcrumb__list">
                   <span><a href="/">Home</a></span>
                   <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                   <span>@yield('breadcrumb')</span>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- breadcrumb area end -->