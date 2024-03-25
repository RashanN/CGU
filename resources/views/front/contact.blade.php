@extends('layouts.master')
@section('styles1')
<link rel="stylesheet" href="assets/css/contact.css">
@endsection
@section('content')


<section class="py-0">
            
                <div style="background-image:url(&quot;{{ asset('/assets/img/pexels-photo-160107.jpeg') }}&quot;);height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
                    <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(30,41,99,0.53);">
                        <div class="d-flex align-items-center order-5" style="height:200px;">
                            <div class="container">
                                <h1 class="text-center" style="color:rgb(242,245,248);font-size:56px;font-weight:bold;font-family:Roboto, sans-serif;">COME TALK WITH US</h1>
                                <h3 class="text-center" style="color:rgb(242,245,248);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;">We make your university life better</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div><div class="jumbotron-contact jumbotron-contact-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                        <!-- Success message -->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form  method="POST" action="{{ route('contact.store') }}">

                     @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" id="name" name="name" placeholder="Enter name" required="required" />
                            <!-- Error -->
                            @if ($errors->has('name'))
                            <div class="error">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="number">
                                Contact number</label>
                            <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }} " id="number" name="phone" placeholder="Enter number" required="required" />

                            @if ($errors->has('phone'))
                            <div class="error">
                                {{ $errors->first('phone') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" id="email" name="email" placeholder="Enter email" required="required" /></div>

                                @if ($errors->has('email'))
                                <div class="error">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" id="subject" name="subject" placeholder="Enter Subject" required="required" />

                             @if ($errors->has('subject'))
                                <div class="error">
                                    {{ $errors->first('subject') }}
                                </div>
                                @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control {{ $errors->has('message') ? 'error' : '' }}" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>

                                 @if ($errors->has('message'))
                                <div class="error">
                                    {{ $errors->first('message') }}
                                </div>
                                @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="send" value="Submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>{{ $general->title }}</strong><br>
                {{ $general->address1 }}<br>
                {{ $general->address2 }}<br>
                <abbr title="Phone">
                    Phone:</abbr>{{ $general->phone }}
                
            </address>
            <address>
                <strong>Email</strong><br>
                <a href="mailto:{{ $general->email }}">{{ $general->email }}</a>
            </address>
            <div id="container">
      <h1>QR Code Scanner</h1>

      <a id="btn-scan-qr">
        <img src="{{ asset('assets/img/qrcode/Career Guidance Unit.png') }}">
</a>

      <canvas hidden="" id="qr-canvas"></canvas>

      <div id="qr-result" hidden="">
        <b>Data:</b> <span id="outputData"></span>
      </div>
    </div>
            
        </div>
    </div>
</div></div>





           
        </section>
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
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
	@endsection
