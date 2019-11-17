<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KiddoBox - Catering Service</title>
    <link href="{{asset('front/plugin/bootstrap/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('front/plugin/bootstrap/datepicker.css')}}" rel="stylesheet">
    <link href="{{asset('front/plugin/font-awesome/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('front/plugin/form-field/jquery.formstyler.css')}}" rel="stylesheet">
    <link href="{{asset('front/plugin/revolution-plugin/extralayers.css')}}" rel="stylesheet">
    <link href="{{asset('front/plugin/revolution-plugin/settings.css')}}" rel="stylesheet">
    <link href="{{asset('front/plugin/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('front/plugin/owl-carousel/owl.theme.default.css')}}" rel="stylesheet">
    <link href="{{asset('front/plugin/slick-slider/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('front/plugin/magnific/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('front/plugin/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('front/plugin/animation/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>
<body>
    <div class="wrapper">
        <!-- Start Header -->
        <header>
            <div class="header-part header-transparent header-expert sticky">
                <div class="header-top">
                    <div class="container">
                        <div class="header-top-inner">
                            <div class="header-top-left">
                                <a href="#" class="top-cell"><img src="{{asset('front/images/fon.png')}}" alt=""> <span>123-456-7890</span></a>
                                <a href="#" class="top-email"><span>support@kiddobox.com</span></a>
                            </div>
                            <div class="header-top-right">
                                <div class="social-top">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <div class="header-info">
                            <div class="header-info-inner">
                                <div class="book-table header-collect book-md">
                                    <a href="#" data-toggle="modal" data-target="#booktable"><img src="{{asset('front/images/icon-table-blue.png')}}" alt=""><button class="btn btn-success">Order Now</button></a>
                                </div>
                                <!-- <div class="shop-cart header-collect">
                                    <a href="#"><img src="images/icon-basket-blue.png" alt="">5 items - $ 20.89</a>
                                    <div class="cart-wrap">
                                        <div class="cart-blog">
                                            <div class="cart-item">
                                                <div class="cart-item-left">
                                                    <img src="images/img59.png" alt="">
                                                </div>
                                                <div class="cart-item-right">
                                                    <h6>Caramel Chesse Cake</h6>
                                                    <span>$ 14.00</span>
                                                </div>
                                                <span class="delete-icon"></span>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-item-left">
                                                    <img src="images/img60.png" alt="">
                                                </div>
                                                <div class="cart-item-right">
                                                    <h6>Caramel Chesse Cake</h6>
                                                    <span>$ 14.00</span>
                                                </div>
                                                <span class="delete-icon"></span>
                                            </div>
                                            <div class="subtotal">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h6>Subtotal :</h6>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <span>$ 140.00</span>
                                                </div>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="#" class="btn-black view">VIEW ALL</a>
                                                <a href="#" class="btn-main checkout">CHECK OUT</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="search-part">
                                    <a href="#"></a>
                                    <div class="search-box">
                                        <input type="text" name="txt" placeholder="Search">
                                        <input type="submit" name="submit" value=" ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-icon">
                            <a href="#" class="hambarger">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </a>
                        </div>
                        <div class="book-table header-collect book-sm">
                            <a href="#" data-toggle="modal" data-target="#booktable"><img src="{{asset('front/images/icon-table-blue.png')}}" alt="">Book Now</a>
                        </div>
                        <div class="menu-main">
                            <ul>
                                <li class="has-child active">
                                    <a href="index-2.html">Home</a>
                                </li>
                                <li class="mega-menu">
                                    <a href="#">Menu</a>
                                    <ul class="drop-nav">
                                        <li>
                                            <div class="drop-mega-part">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                                        <span class="mega-title">MAIN MENU</span>
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <ul>
                                                                    <li><a href="#">Ready Player One</a></li>
                                                                    <li><a href="#">Ernest Cline</a></li>
                                                                    <li><a href="#">Ender's Game</a></li>
                                                                    <li><a href="#">Orson Scott Card</a></li>
                                                                    <li><a href="#">Americam Gods</a></li>
                                                                    <li><a href="#">Neil Gaiman</a></li>
                                                                    <li><a href="#">The Great Gatsby</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <ul>
                                                                    <li><a href="#">Ready Player One</a></li>
                                                                    <li><a href="#">Ernest Cline</a></li>
                                                                    <li><a href="#">Ender's Game</a></li>
                                                                    <li><a href="#">Orson Scott Card</a></li>
                                                                    <li><a href="#">Americam Gods</a></li>
                                                                    <li><a href="#">Neil Gaiman</a></li>
                                                                    <li><a href="#">The Great Gatsby</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-12 col-xs-12">
                                                        <span class="mega-title">IMAGE</span>
                                                        <img src="{{asset('front/images/img13.png')}}" alt="">
                                                    </div>
                                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                                        <div class="mega-preview">
                                                            <span class="mega-title">DESCRIPTION</span>
                                                            <p>This column can contain whatever you like! Add text, shortcodes, or HTML.Various versions have evolved over the years, sometimes by accident, sometimes on</p>
                                                        </div>
                                                        <div class="mega-position"><img src="{{asset('front/images/img14.png')}}" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="#">About Us</a>
                                    <ul class="drop-nav">
                                        <li><a href="blog_list.html">Mission & Vision</a></li>
                                        <li><a href="blog_2col.html">Why Kiddobox</a></li>
                                    </ul>
                                </li>
                               
                                <li class="has-child">
                                    <a href="blog_2col.html">Services</a>
                                    <ul class="drop-nav">
                                        <li>
                                            <a href="blog_list.html">Service Area</a>
                                            <ul class="drop-nav">
                                                <li><a href="index-2.html">Running</a></li>
                                                <li><a href="homepage1.html">Upcoming</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="#">Offer</a>
                                    <ul class="drop-nav">
                                        <li><a href="contact1.html">Weekly</a></li>
                                        <li><a href="contact2.html">Biweekly</a></li>
                                        <li><a href="contact2.html">Monthly</a></li>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="contact1.html">Contact</a>
                                    <ul class="drop-nav">
                                        <li><a href="contact1.html">Contact 1</a></li>
                                        <li><a href="contact2.html">Contact 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="logo">
                            <a href="index-2.html"><img src="{{asset('front/images/logo5.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->
        @yield('content')
        <!-- Start Footer -->
        <footer>
            <div class="footer-part footer-action wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="container">
                    <div class="footer-inset">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="icon-default icon-dark">
                                    <img src="http://localhost/SuperBlog/public/front/images/logo5.png" alt="" style="margin-top: -50px;margin-left: -44px;">
                                </div>
                                <div class="equal-inset">
                                    <p>We have a hankering for some really in good melt in a mouth variety. Floury is the best choice to taste food and dessert.</p>
                                    <div class="social-top">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="equal-inset">
                                    <h5>Contact</h5>
                                    <p>Contract address here. <a href="1234567890.html">123 456 7890</a><a href="support%40laboom.html">support@kiddobox.com</a></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="equal-inset">
                                    <h5>Opening Hour</h5>
                                    <p>Monday - Friday: ........6am - 9pm
                                        <br> Saturday - Sunday: ........6am - 10pm
                                        <br> Close on special days</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="equal-inset">
                                    <h5>Kiddobox Video</h5>
                                    <p><a href="https://www.youtube.com/watch?v=D8tfbeyB6JY" class="magnific-youtube"><img src="{{asset('front/images/play-img.jpg')}}" alt=""></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-inset-copyright">
                    <div class="container"><span>Copyright © 2019 Kiddobox. All rights reserved.</span></div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <!-- Start Book Table -->
        <div class="modal fade booktable" id="booktable" tabindex="-1" role="dialog" aria-labelledby="booktable">
            <div class="modal-dialog" role="document">
                <form method="POST" action="{{ url('order-now')}}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <div class="table-title">
                                <h2>Order Now</h2>
                                <h6 class="heade-xs">Kiddobox food are good for health.</h6>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="select-dropbox" name="package" required="">
                                        <option value="">Select Package</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="biweekly">Biweekly</option>
                                        <option value="monthly">Monthly</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" placeholder="Enter Phone" required="">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" placeholder="Enter Your Name" required="">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="school_name" placeholder="Enter School Name" required="">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="class" placeholder="Enter Class Name" required="">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn-main btn-big">Order Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Book Table -->
    </div>
    <!-- Back To Top Arrow -->
    <a href="#" class="top-arrow"></a>
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/plugin/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/plugin/bootstrap/bootstrap-datepicker.js')}}"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf6My1Jfdi1Fmj-DUmX_CcNOZ6FLkQ4Os"></script> -->
    <script src="{{asset('front/plugin/form-field/jquery.formstyler.min.js')}}"></script>
    <script src="{{asset('front/plugin/revolution-plugin/jquery.themepunch.plugins.min.js')}}"></script>
    <script src="{{asset('front/plugin/revolution-plugin/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('front/plugin/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/plugin/slick-slider/slick.min.js')}}"></script>
    <script src="{{asset('front/plugin/isotop/isotop.js')}}"></script>
    <script src="{{asset('front/plugin/isotop/packery-mode.pkgd.min.js')}}"></script>
    <script src="{{asset('front/plugin/magnific/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/plugin/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('front/plugin/animation/wow.min.js')}}"></script>
    <script src="{{asset('front/plugin/parallax/jquery.stellar.js')}}"></script>
    <script src="{{asset('front/js/app.js')}}"></script>
    <script src="{{asset('front/js/script.js')}}"></script>

    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
        <script>
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error('{{ $error }}','Error',{
                    closeButton:true,
                    progressBar:true,

                });
            @endforeach
        @endif
    </script>
</body>


<!-- Mirrored from laboom.sk-web-solutions.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Oct 2019 05:38:27 GMT -->
</html>