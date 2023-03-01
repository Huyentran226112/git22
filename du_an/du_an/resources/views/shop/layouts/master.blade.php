<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Karma Shop</title>
    <!--
  CSS
  ============================================= -->
    <link rel="stylesheet" href="{{ asset('shop/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/ion.rangeSlider.css') }}" />
    <link rel="stylesheet" href="{{ asset('shop/css/ion.rangeSlider.skinFlat.css') }}" />
    <link rel="stylesheet" href="{{ asset('shop/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/css/main.css') }}">
</head>

<body>


    @include('shop.includes.header')

    <!-- start banner Area -->

    <!-- End banner Area -->

    <!-- start features Area -->
    @include('shop.includes.sidebar')
    @yield('content')

    <!-- end features Area -->

    <!-- Start category Area -->

    <!-- End category Area -->

    <!-- start product Area -->
    <section class="owl-carousel active-product-area section_gap">
        <!-- single product slide -->

                    <!-- single product -->

                </div>
            </div>
        </div>
        <!-- single product slide -->

    </section>
    <!-- end product Area -->

    <!-- Start exclusive deal Area -->
    <style>
        img.img-fluid {
            width: 300px;
            height: 200px;
        }
    </style>
    <section class="exclusive-deal-area">
        <div class="container-fluid">
            <div class="section-title">
                <h1>Sản phẩm nổi bật</h1>
                <p>Thương hiệu mang đến sự thành công</p>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding exclusive-left">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1>CAR WORLD!</h1>
                            <p>Cỗ máy thời thượng tốt nhất hoặc không gì. </p>
                        </div>
                            {{-- <div class="col-lg-12">
                                <div class="row clock-wrap">
                                    <div class="col clockinner1 clockinner">
                                        <h1 class="days">150</h1>
                                        <span class="smalltext">Days</span>
                                    </div>
                                    <div class="col clockinner clockinner1">
                                        <h1 class="hours">23</h1>
                                        <span class="smalltext">Hours</span>
                                    </div>
                                    <div class="col clockinner clockinner1">
                                        <h1 class="minutes">47</h1>
                                        <span class="smalltext">Mins</span>
                                    </div>
                                    <div class="col clockinner clockinner1">
                                        <h1 class="seconds">59</h1>
                                        <span class="smalltext">Secs</span>
                                    </div>
                                </div>
                            </div> --}}
                    </div>
                    {{-- <a href="" class="primary-btn">Shop Now</a> --}}
                </div>
                <div class="col-lg-6 no-padding exclusive-right">
                    {{-- <h5>san pham noi bat</h5> --}}
                    <div class="active-exclusive-product-slider">
                        @foreach ($products as $product)
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="{{ asset('public/assets/product/' . $product->image) }}"  >
                            <div class="product-details"><br>
                                <h4>{{ $product->name }}</h4>
                                <div class="price">
                                    <h6>{{ number_format($product->price) }} $</h6>
                                </div>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                    <span class="add-text text-uppercase">Giỏ hàng</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- End exclusive deal Area -->

    <!-- Start brand Area -->
    <section class="brand-area section_gap">
        <div class="container">
            <div class="row">

                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('shop/img/brand/2.png')}}" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('shop/img/brand/3.png')}}" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('shop/img/brand/4.png')}}" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('shop/img/brand/5.png')}}" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('shop/img/brand/6.png')}}" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('shop/img/brand/7.png')}}" alt="">
                </a>
            </div>
        </div>
    </section>


    @include('shop.includes.footer')


    <script src="{{ asset('shop/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('shop/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('shop/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('shop/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('shop/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('shop/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('shop/js/countdown.js') }}"></script>
    <script src="{{ asset('shop/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('shop/js/owl.carousel.min.js') }}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('shop/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('shop/js/main.js') }}"></script>
</body>

</html>
