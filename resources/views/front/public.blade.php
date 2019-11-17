@extends('front.master')
@section('content')
<!-- Start Main -->
<main>
    <div class="main-part">
        <!-- Start Slider Part -->
        <section class="home-slider">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <li data-transition="zoomout" data-slotamount="2" data-masterspeed="1000" data-thumb="" data-saveperformance="on" data-title="Slide">
                            <img src="{{asset('front/images/dummy.png')}}" alt="slidebg1" data-lazyload="{{asset('front/images/slider1.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption very_large_text" data-x="center" data-hoffset="0" data-y="250" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="500" data-easing="Back.easeInOut" data-endspeed="300">WE’RE <span>KiddoBox,</span> <i>For Catering Service</i>
                            </div>
                            <!-- LAYERS -->
                          
                        </li>
                        <li data-transition="zoomout" data-slotamount="2" data-masterspeed="1000" data-thumb="" data-saveperformance="on" data-title="Slide">
                            <img src="{{asset('front/images/dummy.png')}}" alt="slidebg1" data-lazyload="{{asset('front/images/slider1.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption very_large_text" data-x="center" data-hoffset="0" data-y="250" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="500" data-easing="Back.easeInOut" data-endspeed="300">WE’RE <span>Kiddobox</span> <i></i>
                            </div>
                            <!-- LAYERS -->
                    
                        </li>
                        <li data-transition="zoomout" data-slotamount="2" data-masterspeed="1000" data-thumb="" data-saveperformance="on" data-title="Slide">
                            <img src="{{asset('front/images/dummy.png')}}" alt="slidebg1" data-lazyload="{{asset('front/images/slider1.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption very_large_text" data-x="center" data-hoffset="0" data-y="250" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="500" data-easing="Back.easeInOut" data-endspeed="300">WE’RE <span>Kiddobox</span> <i>Catering Service</i>
                            </div>
                         
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Slider Part -->
        <!-- Start Welcome Part -->
        <section id="reach-to" class="welcome-part home-icon">
            <div class="icon-default">
                <a href="#reach-to" class="scroll"><img src="{{asset('front/images/scroll-arrow.png')}}" alt=""></a>
            </div>
            <div class="container">
                <div class="build-title">
                    <h2>Welcome To KiddoBox</h2>
                    <h6>Good Food for your health.</h6>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <p>With a strong desire to create an exceptional School tiffin services in Dhaka Prompt us to get into this Service. “Kiddobox” was incorporated by two passionate food lovers. An idea that stemmed from a basic necessity for quality and delicious food in School break was soon transformed into Kiddobox. we wanted to do something different from the conventional.
                        Students in Dhaka mostly takes unhealthy, unhygienic and Fast-food items in tiffin’s. Kiddobox, want to transform the way you relish your tiffin.</p>
                        <p> We want you to wait for it eagerly, be excited when you look at it, be tempted when you indulge in its aroma and be utterly delighted with every bite! This is what inspires us to work diligently towards delivering outstanding tiffin services! We at Kiddobox realize the importance of good food i.e “taste combined with health” and thus our efforts are constantly focused towards providing tiffins that are healthy, nutritious, hygienic and last but not the least finger licking tasty.
                        </p>
                        <!-- <p><img src="images/signature.png" alt=""></p> -->
                        <p><a href="#" class="btn-black">LEARN MORE</a></p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <img src="{{asset('front/images/img2.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="float-main">
                <div class="icon-top-left">
                    <img src="{{asset('front/images/icon1.png')}}" alt="">
                </div>
                <div class="icon-bottom-left">
                    <img src="{{asset('front/images/icon2.png')}}" alt="">
                </div>
                <div class="icon-top-right">
                    <img src="{{asset('front/images/icon3.png')}}" alt="">
                </div>
                <div class="icon-bottom-right">
                    <img src="{{asset('front/images/icon4.png')}}" alt="">
                </div>
            </div>
        </section>
        <!-- End Welcome Part -->
         <!-- Start Feature list -->
        <section class="bg-skeen feature-list text-center home-icon wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="icon-default icon-skeen">
                <img src="{{asset('front/images/icon22.png')}}" alt="">
            </div>
            <div class="container">
                <div class="build-title">
                    <h2>Our Package</h2>
                    <h6>The role of a good cook ware in the preparation of a sumptuous meal cannot be <br> over emphasized then one consider white bread</h6>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-list-icon">
                            <div class="feature-icon-table">
                                <img src="{{asset('front/images/img9.png')}}" alt="">
                            </div>
                        </div>
                        <h5>Weekly</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-list-icon">
                            <div class="feature-icon-table">
                                <img src="{{asset('front/images/img10.png')}}" alt="">
                            </div>
                        </div>
                        <h5>Biweekly</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-list-icon">
                            <div class="feature-icon-table">
                                <img src="{{asset('front/images/img11.png')}}" alt="">
                            </div>
                        </div>
                        <h5>Monthly</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Feature list -->
      
  
        <!-- Start Feature Blog -->
        <section style="background: #fff;" class="feature-blog-wrap bg-skeen home-icon wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="icon-default icon-skeen" style="background:url({{asset('front/images/pattern-white.png')}}) no-repeat center center;">
                <img src="{{asset('front/images/icon20.png')}}" alt="">
            </div>
            <div class="container">
                <div class="build-title">
                    <h2>Feature Blog</h2>
                    <h6>Read Latest Delicious Posts And News</h6>
                </div>
                <div class="feature-blog">
                    <div class="owl-carousel owl-theme" data-items="3" data-laptop="3" data-tablet="2" data-mobile="1" data-nav="true" data-dots="false" data-autoplay="true" data-speed="1800" data-autotime="5000">
                        <div class="item">
                            <div class="feature-img">
                                <img src="{{asset('front/images/feature1.jpg')}}" alt="">
                                <div class="date-feature">27
                                    <br> <small>may</small></div>
                            </div>
                            <div class="feature-info">
                                <span><i class="icon-user"></i> By Ali TUFAN</span>
                                <span><i class="icon-comment"></i> 5 Comments</span>
                                <h5>Easy Sparkling Sangria</h5>
                                <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                <a href="#">Read More <i class="icon-more"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature-img">
                                <img src="{{asset('front/images/feature2.jpg')}}" alt="">
                                <div class="date-feature">27
                                    <br> <small>may</small></div>
                            </div>
                            <div class="feature-info">
                                <span><i class="icon-user"></i> By Ali TUFAN</span>
                                <span><i class="icon-comment"></i> 5 Comments</span>
                                <h5>Disclosue - Real food here</h5>
                                <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                <a href="#">Read More <i class="icon-more"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature-img">
                                <img src="{{asset('front/images/feature3.jpg')}}" alt="">
                                <div class="date-feature">27
                                    <br> <small>may</small></div>
                            </div>
                            <div class="feature-info">
                                <span><i class="icon-user"></i> By Ali TUFAN</span>
                                <span><i class="icon-comment"></i> 5 Comments</span>
                                <h5>The Best Drink on Market</h5>
                                <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                <a href="#">Read More <i class="icon-more"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature-img">
                                <img src="{{asset('front/images/feature1.jpg')}}" alt="">
                                <div class="date-feature">27
                                    <br> <small>may</small></div>
                            </div>
                            <div class="feature-info">
                                <span><i class="icon-user"></i> By Ali TUFAN</span>
                                <span><i class="icon-comment"></i> 5 Comments</span>
                                <h5>Easy Sparkling Sangria</h5>
                                <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                <a href="#">Read More <i class="icon-more"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature-img">
                                <img src="{{asset('front/images/feature2.jpg')}}" alt="">
                                <div class="date-feature">27
                                    <br> <small>may</small></div>
                            </div>
                            <div class="feature-info">
                                <span><i class="icon-user"></i> By Ali TUFAN</span>
                                <span><i class="icon-comment"></i> 5 Comments</span>
                                <h5>Disclosue - Real food here</h5>
                                <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                <a href="#">Read More <i class="icon-more"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature-img">
                                <img src="{{asset('front/images/feature3.jpg')}}" alt="">
                                <div class="date-feature">27
                                    <br> <small>may</small></div>
                            </div>
                            <div class="feature-info">
                                <span><i class="icon-user"></i> By Ali TUFAN</span>
                                <span><i class="icon-comment"></i> 5 Comments</span>
                                <h5>The Best Drink on Market</h5>
                                <p>Aptent taciti sociosqu ad litora euismod atras vulputate iltricies etri elit class.</p>
                                <a href="#">Read More <i class="icon-more"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Feature Blog -->
        <!-- Start Client Say -->
        <section class="client banner-bg invert invert-black home-icon wow fadeInDown" data-background="{{asset('front/images/slider1.jpg')}}" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="icon-default icon-black">
                <img src="{{asset('front/images/icon21.png')}}" alt="">
            </div>
            <div class="container">
                <div class="build-title">
                    <h2>What Clients Say</h2>
                    <h6>1500+ Satisfied Clients</h6>
                </div>
                <div class="client-say">
                    <div class="owl-carousel owl-theme" data-items="1" data-laptop="1" data-tablet="1" data-mobile="1" data-nav="false" data-dots="true" data-autoplay="true" data-speed="1800" data-autotime="5000">
                        <div class="item">
                            <p><img src="{{asset('front/images/client1.png')}}" alt=""></p>
                            <h5>Alice Williams</h5>
                            <p>Kitchen Manager</p>
                            <p>Success isn’t really that difficult. There is a significant portion of the
                                <br> population here in North America, that actually want and need
                                <br>success really no magic to be hard.</p>
                        </div>
                        <div class="item">
                            <p><img src="{{asset('front/images/client1.png')}}" alt=""></p>
                            <h5>Alice Williams</h5>
                            <p>Kitchen Manager</p>
                            <p>Success isn’t really that difficult. There is a significant portion of the
                                <br> population here in North America, that actually want and need
                                <br>success really no magic to be hard.</p>
                        </div>
                        <div class="item">
                            <p><img src="{{asset('front/images/client1.png')}}" alt=""></p>
                            <h5>Alice Williams</h5>
                            <p>Kitchen Manager</p>
                            <p>Success isn’t really that difficult. There is a significant portion of the
                                <br> population here in North America, that actually want and need
                                <br>success really no magic to be hard.</p>
                        </div>
                        <div class="item">
                            <p><img src="{{asset('front/images/client1.png')}}" alt=""></p>
                            <h5>Alice Williams</h5>
                            <p>Kitchen Manager</p>
                            <p>Success isn’t really that difficult. There is a significant portion of the
                                <br> population here in North America, that actually want and need
                                <br>success really no magic to be hard.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Client Say -->
       
        <!-- Start Instagram -->
        <section class="instagram-main home-icon wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="icon-default">
                <img src="{{asset('front/images/icon23.png')}}" alt="">
            </div>
            <div class="container">
                <div class="build-title">
                    <h2>#Kiddobox</h2>
                    <h6>Enjoyed your stay at KiddoBox? Share your moments with us. Follow us on Instagram and use</h6>
                </div>
            </div>
            <div class="gallery-slider">
                <div class="owl-carousel owl-theme" data-items="6" data-laptop="5" data-tablet="4" data-mobile="1" data-nav="true" data-dots="false" data-autoplay="true" data-speed="2000" data-autotime="3000">
                    <div class="item">
                        <a href="{{asset('front/images/gallery/gallery-big1.jpg')}}" class="magnific-popup">
                            <img src="{{asset('front/images/gallery/gallery1.png')}}" alt="" class="animated">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-inner">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('front/images/gallery/gallery-big2.jpg')}}" class="magnific-popup">
                            <img src="{{asset('front/images/gallery/gallery2.png')}}" alt="" class="animated">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-inner">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('front/images/gallery/gallery-big3.jpg')}}" class="magnific-popup">
                            <img src="{{asset('front/images/gallery/gallery3.png')}}" alt="" class="animated">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-inner">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('front/images/gallery/gallery-big4.jpg')}}" class="magnific-popup">
                            <img src="{{asset('front/images/gallery/gallery4.png')}}" alt="" class="animated">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-inner">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('front/images/gallery/gallery-big5.jpg')}}" class="magnific-popup">
                            <img src="{{asset('front/images/gallery/gallery5.png')}}" alt="" class="animated">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-inner">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('front/images/gallery/gallery-big6.jpg')}}" class="magnific-popup">
                            <img src="{{asset('front/images/gallery/gallery6.png')}}" alt="" class="animated">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-inner">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('front/images/gallery/gallery-big1.jpg')}}" class="magnific-popup">
                            <img src="{{asset('front/images/gallery/gallery1.png')}}" alt="" class="animated">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-inner">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('front/images/gallery/gallery-big2.jpg')}}" class="magnific-popup">
                            <img src="{{asset('front/images/gallery/gallery2.png')}}" alt="" class="animated">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-inner">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('front/images/gallery/gallery-big3.jpg')}}" class="magnific-popup">
                            <img src="{{asset('front/images/gallery/gallery3.png')}}" alt="" class="animated">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-inner">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('front/images/gallery/gallery-big4.jpg')}}" class="magnific-popup">
                            <img src="{{asset('front/images/gallery/gallery4.png')}}" alt="" class="animated">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-inner">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('front/images/gallery/gallery-big5.jpg')}}" class="magnific-popup">
                            <img src="{{asset('front/images/gallery/gallery5.png')}}" alt="" class="animated">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-inner">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{asset('front/images/gallery/gallery-big6.jpg')}}" class="magnific-popup">
                            <img src="{{asset('front/images/gallery/gallery6.png')}}" alt="" class="animated">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-inner">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Instagram -->
    </div>
</main>
<!-- End Main -->
@endsection