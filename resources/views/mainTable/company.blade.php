@extends('layouts.master')
@section('styles1')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="{{asset('assets/css/Customizable-Background--Overlay.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Div-Overlay-with-Button.css')}}">
   	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700">
    <link rel="stylesheet" href="{{asset('assets/fonts/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/content_blocks_modernstyle.css')}}">
    <link rel="stylesheet" href="{{'assets/css/canito-detalle-producto-2.css'}}">
	<script src="https://use.fontawesome.com/53c818b251.js"></script>
@endsection


@section('content')


    <div style="background-image:url({{asset('assets/img/job-bank.jpeg')}});height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
        <div class="d-flex justify-content-center align-items-center" style="height: inherit;min-height: initial;width: 100%;position: absolute;left: 0;background-color: rgba(30,41,99,0.53);">
            <div class="d-flex justify-content-center align-items-center" style="height: 21;min-height: initial;width: 100%;position: absolute;left: 0;background-color: rgba(30,41,99,0.53);filter: saturate(200%);margin: 0;padding-right: 20px;padding-left: 20px;">
                <div class="container">
                    <h1 class="text-center" style="color: rgb(242,245,248);font-size: 56px;font-weight: bold;font-family: Roboto, sans-serif;">We Build You With Job Placements</h1>
					
					<form action="{{ route('jobbank.search') }}" method="GET" >
                <div class="row align-items-center">
                    <div class="col">
                        <div class="form-group">
                            
                            <input type="text" name="search" class="form-control" id="name" placeholder="What are you looking for" required="required" />
                        </div>
                      
                        
                    </div>
					<div class="col">
					<div class="form-group">
                            <select name="city_id" class="form-control" placeholder="Job Type">
                                    @foreach ($search_cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                                <p class="help-block"></p>
                                @if($errors->has('city_id'))
                                    <p class="help-block">
                                        {{ $errors->first('city_id') }}
                                    </p>
                                @endif
                        </div>
					</div>
					<div class="col">
					<div class="form-group">
                           
                            <select id="subject" name="categories" class="form-control" placeholder="Category" required="required">
                                @foreach ($search_categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                
                                @endforeach
                            </select>
                            
                              @if($errors->has('categories'))
                                    <p class="help-block">
                                        {{ $errors->first('categories') }}
                            		</p>
                             @endif
                        </div>
					</div>
                     <div align="center">
    <button class="button" type="submit" data-hover="Lets Go"><span>Search now</span></button></div>
                    
                </div>
                </form>
					
					
					
                   
                </div>
                <div class="d-flex align-items-center order-5" style="height:200px;"></div>
            </div>
        </div>
    </div>
<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">

            <div class="row">
                <div class="col-md-12"><strong>
                <h4><i class="fa fa-folder-open-o"></i> Category :</h4>
					<ul type=none><li><ul  class="list-group list-group-flush">
                        
                        @foreach ($company->categories as $singleCategories)
                     <li class="list-inline-item"><a class="text-decoration-none link-dark" href="{{ route('category', [$singleCategories->id]) }}">
                                        <span class="label label-info label-many">{{ $singleCategories->name }}</span>
                         </a>
						</li>
                      @endforeach
                    </ul></li></ul>
                      <ul class="list-group list-group-flush"> 
					<li class="list-inline-item"><i class="fa fa-trophy"></i> Job Type :{{ $company->city->name }}</li>
					<li class="list-inline-item"><i class="fa fa-location-arrow"></i> location :{{ $company->address}}</li>
					</ul>
</strong>
                </div>
            </div>
       
       
        <div class="row">
        <h1 class="my-4">About {{ $company->name }}<br></h1>
            <div class=".col-6 "style="width:100%">
            @if($company->logo)
							<a href="{{ $company->logo->getUrl() }}" target="_blank">
								<img src="{{ $company->logo->getUrl() }}" width="80%">
							</a>
						@endif
            </div>
            <div class=".col-md-6">
                
                <p>{{ $company->description}}</p>
           
                
            </div>
        </div>
</div>



       
	<!-- Container End -->
</section>

    @endsection
   @section('scripts')
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bs-init.js')}}"></script>
    <script src="{{asset('assets/js/agency.js')}}"></script>
    <script src="{{asset('assets/js/Client-Logo-Slider.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/js/Image-Tab-Gallery-Horizontal.js')}}"></script>
    <script src="{{asset('assets/js/Modal-commerce-popup-button.js')}}"></script>
    <script src="{{asset('assets/js/Portfolio-with-Category-switcher.js')}}"></script>
    @endsection