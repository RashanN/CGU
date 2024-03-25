@extends('layouts.master')

@section('content')


        <section class="py-2" style="width:100%;">
           
                <div style="background-image:url({{asset('assets/img/eventpic.jpeg')}});height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
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
             <div class="container">
        <h1 class="my-4">Event<br></h1>
        <div class="row">
            <div class="col-md-8"><img class="img-fluid" src="{{ asset('storage/'.$portfolio->cover) }}" alt="Alt Text"></div>
            <div class="col-md-4">
                <h3 class="my-3">{{ $portfolio->name }}</h3>
                <p>{!! $portfolio->desc !!}</p>
                <h3 class="my-3">Project information</h3>
                <ul class="list-unstyled">
                    <li><strong>Category</strong>:  {{ $portfolio->pcategory->name }}</li>
                    <li><strong>Client</strong>: {{ $portfolio->client }}</li>
                    <li><strong>Project date</strong>: {{ Carbon\Carbon::parse($portfolio->date)->format("d F, Y") }}</li>
                </ul>
            </div>
        </div>
        <h3 class="my-4">Recent News<br></h3>
        <div class="row">
          @foreach ($lpost as $recent)
            <div class="col-sm-6 col-md-3 mb-4"><a href="{{ asset('storage/'.$recent->cover) }}"><img class="img-fluid" src="{{ asset('storage/'.$recent->cover) }}"></a></div>
         @endforeach
        </div>
    </div>
   
    <!-- End Portfolio Section -->
  @endsection
  @section('scripts')
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bs-init.js')}}"></script>
    <script src="{{asset('assets/js/agency.js')}}"></script>
    <script src="{{asset('assets/js/Client-Logo-Slider.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js')}}"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/js/Image-Tab-Gallery-Horizontal.js')}}"></script>
    <script src="{{asset('assets/js/Modal-commerce-popup-button.js')}}"></script>
    <script src="{{asset('assets/js/Portfolio-with-Category-switcher.js')}}"></script>
  @endsection


