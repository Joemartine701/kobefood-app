@extends('welcome')
@section('body')

<!-- Start Banner -->
<div class="ulockd-home-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="pogoSlider" id="js-main-slider">
                <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/rice4.jpg);">
                    <div class="lbox-caption pogoSlider-slide-element">
                        <div class="lbox-details">
                            <h1>Welcome to KOBE FOOD PRODUCTS</h1>
                            <p>Karibu sana kwenye Tovuti ya KOBE Food Products </p>
                            <a href="/services" class="btn">Services</a>
                        </div>
                    </div>
                </div>
                <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/rice5.jpg);">
                    <div class="lbox-caption pogoSlider-slide-element">
                        <div class="lbox-details">
                            <h1>We are Expert in The Field of Selling Rice and Other Products</h1>
                            <p>Tumebobea katika Uuzaji wa Mchele na Nafaka Mbalimbali</p>
                            <a href="/aboutUs" class="btn">About Us</a>
                        </div>
                    </div>
                </div>
                <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/rice6.jpg);">
                    <div class="lbox-caption pogoSlider-slide-element">
                        <div class="lbox-details">
                            <h1>Welcome to KOBE website </h1>
                            <p>Karibu sana kwenye Tovuti ya KOBE </p>
                            <a href="/contactUs" class="btn">Contact Us</a>
                        </div>
                    </div>

                </div>
            </div><!-- .pogoSlider -->
        </div>
    </div>
</div>
<!-- End Banner -->


<!-- Start Gallery -->

<div id="maintainance" class="services-bo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Gallery</h2>
                    <p>Some of galleries that shows our company services. </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme">
                    @foreach($viewgallery as $gallery)
                    <div class="item">

                        <div id="gallery" class="gallery-box">
                            <div class="container-fluid">
                                <div class="popup-gallery row clearfix ">

                                    <div class="box-gallery ">

                                        <div><img src="{{ asset('uploads/products/' . $gallery->image) }}" alt=""></div>

                                        <div class="box-content">
                                            <h3 class="title">{{$gallery->name}}</h3>
                                            <ul class="icon">
                                                <li><a href="{{ asset('uploads/products/' . $gallery->image) }}"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>




    <script>
        var showed_box = 0;

        function fNext() {

            showed_box += -500;

            if (showed_box < -2000)
                showed_box = 0;

            document.getElementById('sld').style.transform = "translateX(" + showed_box + "px)";
        }

        function fPrevious() {

            showed_box += 500;

            if (showed_box > 0)
                showed_box = -2000;

            document.getElementById('sld').style.transform = "translateX(" + showed_box + "px)";

        }
    </script>


    @endsection