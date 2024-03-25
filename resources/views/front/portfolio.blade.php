@extends('layouts.master')
@section('content')


        <section class="py-2" style="width:100%;">
           
                <div style="background-image:url(&quot;{{ asset('assets/img/eventpic.jpeg') }}&quot;);height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
                    <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(30,41,99,0.53);">
                        <div class="d-flex align-items-center order-5" style="height:200px;">
                            <div class="container">
                                <h1 class="text-center" style="color:rgb(242,245,248);font-size:56px;font-weight:bold;font-family:Roboto, sans-serif;">OUR EVENTS </h1>
                                <h3 class="text-center" style="color:rgb(242,245,248);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;">We make beautiful events these are small of them</h3>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
             <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title pt-4 pb-4">
                <h2>Gallery</h2>
                <p>Career Guidance Unit of University of Ruhuna is established with the intention of developing the undegradutes of into soltion-orientated, innovative graduates who are ready embrace the challenges of the 21st century job market. We have been conducting various sessions to develop soft skills and professional skills of the undegradutes as well awareness sessions to develop their understanding on the current job market.</p>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li class="filter-active" data-filter="*">all</li>
                        @foreach ($pcategories as $category)
                        <li data-filter=".t{{ $category->id }}">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container justify-content-center row-cols-lg-2">
            @foreach ($portfolio as $portfolio)
                <div class="col portfolio-item t{{ $portfolio->pcategory_id }} col-lg-3 col-md-4 col-sm-6 px-2 mb-4"><img class="img-fluid rounded-1" src="{{ asset('storage/'.$portfolio->cover) }}">
                    <div class="portfolio-info">
                        <h4>{{ $portfolio->name }}</h4>
                        <p>{{ $portfolio->pcategory->name }}</p><a class="portfolio-lightbox preview-link" href="{{ asset('storage/'.$portfolio->cover) }}" data-gallery="portfolioGallery" title="{{ $portfolio->name }}"><i class="fas fa-plus"></i></a><a class="details-link" href="{{ route('portfolioshow',$portfolio->slug) }}" ><i class="fas fa-link"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
            <h3 class="my-4">Recent News<br></h3>
            <div class="row">
              @foreach ($lpost as $recent)
                <div class="col-sm-6 col-md-3 mb-4"><a href="{{ route('blogshow',$recent->slug) }}"><img class="img-fluid" src="{{ asset('storage/'.$recent->cover) }}"></a></div>
             @endforeach
            </div>
        </div>
 </section>
    <!-- End Portfolio Section -->
	@endsection
	@section('scripts')
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/Client-Logo-Slider.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/Image-Tab-Gallery-Horizontal.js"></script>
    <script src="assets/js/Modal-commerce-popup-button.js"></script>
    <script src="assets/js/Portfolio-with-Category-switcher.js"></script>
	@endsection
