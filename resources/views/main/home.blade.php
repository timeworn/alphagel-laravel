@extends('layouts.app_main')

@section('content')
    <?php
    $landingPage = 'Open';
    ?>
    <section class="aboveTheFold">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-1 col-md-1 col-lg-1">
                    <div class="head-wrapper">
                        <div class="logo-wrapper">
                            <a href="{{lang_url('/')}}"><img class="content-logo" src="{{ asset('img/logo-1.png') }}"></a>
                        </div>
                        <img class="content-img-01" src="{{ asset('img/img-01.png') }}">
                        <img class="content-img-02 desktopImage" src="{{ asset('img/sachetblue01.png') }}">
                        <img class="content-img-02 mobileImage" src="{{ asset('img/packageMobile01.png') }}">
                    </div>
                </div>
                <div class="col-11 col-md-7 col-md-custom col-7">
                    <div class="head-wrapper-center">
                        <div class="logo-wrapper-center">
                            <img class="logo-center-01" src="{{ asset('img/logo-2.png') }}">
                            <img class="logo-center-02" src="{{ asset('img/logo-3.png') }}">
                            <img class="logo-center-03" src="{{ asset('img/logo-4.png') }}">
                        </div>
                        <div class="headings-wrapper">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="logo-wrapper-02">
                                        <img class="content-logo" src="{{ asset('img/logo-5.png') }}">
                                    </div>
                                    <div class="Fold-head-wrap01">
                                        <h3 class="Fold-head01">Medical Strength Testosterone</h3>
                                        <h1 class="Fold-head02">Get Maximum</h1>
                                        <h2 class="Fold-head03">Muscle Benefits</h2>
                                    </div>
                                    <div class="logo-wrapper-center-02">
                                        <img class="logo-center-01" src="{{ asset('img/seal-lg.png') }}">
                                        <img class="logo-center-02" src="{{ asset('img/seal2-lg.png') }}">
                                        <img class="logo-center-03" src="{{ asset('img/seal3-lg.png') }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mediaBox-wrapper">
                                        <div class="media">
                                            <img class="mr-3" src="{{ asset('img/icon-01.png') }}">
                                            <div class="media-body">
                                                <h4 class="mt-0">Real Muscle Growth</h4>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <img class="mr-3" src="{{ asset('img/icon-01.png') }}">
                                            <div class="media-body">
                                                <h4 class="mt-0">Increase Strength</h4>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <img class="mr-3" src="{{ asset('img/icon-01.png') }}">
                                            <div class="media-body">
                                                <h4 class="mt-0">Reduce Bodyfat</h4>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <img class="mr-3" src="{{ asset('img/icon-01.png') }}">
                                            <div class="media-body">
                                                <h4 class="mt-0">Improve your Mood</h4>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <img class="mr-3" src="{{ asset('img/icon-01.png') }}">
                                            <div class="media-body">
                                                <h4 class="mt-0">Boost Self-Esteem</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="Fold-pack-wrapper">
                                        <img class="Fold-pack-img" src="{{ asset('img/img-02.png') }}">
                                        <div class="Fold-pack01">
                                            <h5>Claim your</h5>
                                        </div>
                                        <div class="Fold-pack02">
                                            <h2>Package Today!</h2>
                                        </div>
                                        <div class="Fold-pack03">
                                            <h6>Now available without a prescription</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="Fold-last-heading">
                                        <h6 class="last-head01">THIS OFFER IS ONLY FOR A SPECIFIC TIME</h6>
                                        <h6 class="last-head02">AND ONLY WHILE THE STORAGE IS ENOUGH!</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-4">
                    <div class="head-wrapper-right">
                        <form method="POST" action="{{lang_url('checkout')}}" id="set-order">
                                {{ csrf_field() }}
                            <div class="package-wrapper">
                                <div class="package-header">
                                    <div class="package-content-wrap">
                                        <h5 class="package-head01">Choose</h5>
                                        <h3 class="package-head02">Your Package!</h3>
                                    </div>
                                    <img class="package-bg w-100" src="{{ asset('img/img-header.png') }}">
                                </div>
                                <div class="package-form-wrapper">
                                    <!-- <form action="" method="post"> -->
                                    <div class="form-group  {{ $errors->has('name') ? ' has-error' : '' }} ">
                                        <div class="row no-gutters">
                                            <div class="col-5">
                                                <label for="fullname">Name</label>
                                            </div>
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="name" name="name" required>
                                                @if ($errors->has('name'))
                                                    <span class="help-block text-danger">
                                                         <strong>{{ $errors->first('name') }}</strong>
                                                 </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="row no-gutters">
                                            <div class="col-5">
                                                <label for="email">Email Address</label>
                                            </div>
                                            <div class="col-7">
                                                <input type="email" class="form-control formControl2" id="email" name="email"
                                                       required>
                                                @if ($errors->has('email'))
                                                    <span class="help-block text-danger">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                                <div class="package-bundles-wrapper">
                                    @php
                                        $index = 0;
                                    @endphp
                                    @foreach ($products as $product)
                                        <div class="form-check" {{$index}}>
                                            <div class="form-check-label-wrapper">
                                                <input class="form-check-input" type="radio" name="product_id" id="bundle{{$product->p_id}}" value="{{$product->p_id}}" {{ $index == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label bundle{{$product->p_id}} {{ $index === 0 ? 'checked' : '' }}"  for="bundle{{$product->p_id}}" >
                                                    <div class="row no-gutters">
                                                        <div class="col-7">
                                                            <div class="bundles-info">
                                                                <div class="info01-wrapper">
                                                                    <img src="{{asset('storage/'.$product->info01_image)}}">
                                                                    <h6 class="info01">{{$product->info01}}</h6>
                                                                </div>
                                                                <h6 class="info02">{{$product->info02}}</h6>
                                                                <h6 class="info03">{{$product->info03}}</h6>
                                                                <h4 class="info04">{{$product->price}}€</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-5 text-right">
                                                            <div class="img-bundle-wrap">
                                                                <img class="img-bundle01 w-100" src="{{asset('storage/'.$product->image)}}" alt="{{$product->name}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </label>
                                            </div>
                                        </div>
                                        @php
                                            $index++;
                                        @endphp                                    @endforeach
                                </div>
                                @if (!empty($cart_info))
                                <div class="package-form-wrapper package-form-wrapper-captcha">
                                    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                {!! app('captcha')->display() !!}
                                                @if ($errors->has('g-recaptcha-response'))
                                                    <span class="help-block text-danger">
                                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                <div class="package-btn-wrapper">
                                    <div class="btn-action text-center py-3">
                                        <input class="btn btn-custom pulsate" type="submit" name="submit" value="Rush my Order">
                                    </div>
                                </div>
                                <div class="package-icons-wrapper">
                                    <div class="row no-gutters">
                                        <div class="package-icon-group text-center">
                                            <img class="groupSecure" src="{{ asset('img/groupSecure.jpg') }}" alt="secure-group">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="rushOrderBtn">
            <div class="btn-action text-center py-3">
                <a class="btn btn-custom pulsate" href="checkout.php">Rush my order</a>
                <div class="Fold-last-heading-02">
                    <h6 class="last-head01">THIS OFFER IS ONLY FOR A SPECIFIC TIME</h6>
                    <h6 class="last-head02">AND ONLY WHILE THE STORAGE IS ENOUGH!</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="section01">
        <div class="container">
            <div class="sec01-bg-img">
                <img src="{{ asset('img/bg-02.png') }}">
            </div>
            <div class="row no-gutters">
                <div class="col-md-12 col-lg-6 order-1 order-sm-1 order-md-1 order-lg-1">
                    <div class="sec01-headings-wrapper">
                        <div class="sec01-head01">
                            <h5>Introducing</h5>
                        </div>
                        <div class="sec01-head02">
                            <h1>Alphagel</h1>
                        </div>
                        <div class="sec01-head03">
                            <h3>testosterone booster</h3>
                        </div>
                        <div class="sec01-head04">
                            <h6>Ut interdum malesuada ante, nec sagittis felis pretium et. Vivamus non mollis lectus, sit amet facilisis mi. Nam id risus ac turpis scelerisque hendrerit ac laoreet odio. Vestibulum mollis convallis mauris vitae lobortis. </h6>
                        </div>
                        <div class="sec01-head05">
                            <h6>3Phasellus dictum magna ut sem fermentum, ut consectetur augue fermentum. Maecenas semper consectetur elit vitae fermentum. Cras eget quam vel nisl volutpat dictum vitae ac ante. Vivamus fringilla feugiat dui et vulputate. </h6>
                        </div>
                        <div class="sec01-head06">
                            <img src="{{ asset('img/img-09.png') }}">
                            <div class="head06-01">
                                <h5>triple intensity</h5>
                            </div>
                            <div class="head06-02">
                                <h3>testosterone booster</h3>
                            </div>
                            <div class="head06-03">
                                <h4>for maximum results</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 order-3 order-sm-3 order-md-3 order-lg-2 images-wrap">
                    <div class="sec01-headings02-wrapper">
                        <div class="sec01-head02-img-wrapper">
                            <img class="head02-img" src="{{ asset('img/logo-lg-01.png') }}">
                        </div>
                    </div>
                    <div class="img-tablet-mobile">
                        <img src="{{ asset('img/img-08.png') }}">
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 order-2 order-sm-2 order-md-2 order-lg-3 media-wrapper">
                    <div class="sec01-media-wrap">
                        <div class="row no-gutters">
                            <div class="col-4 col-md-4 col-lg-3">
                                <div class="media">
                                    <img class="mr-3" src="{{ asset('img/img-04.png') }}">
                                    <div class="media-body">
                                        <div class="media-mobile-titles">
                                            <h5 class="mt-0 first-title">All</h5>
                                            <h5 class="mt-0 first-title">Natural</h5>
                                        </div>
                                        <div class="media-desktop-titles">
                                            <h5 class="mt-0 first-title">All Natural</h5>
                                        </div>
                                        <h5 class="mt-0 second-title">Ingredients</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-3">
                                <div class="media">
                                    <img class="mr-3" src="{{ asset('img/img-05.png') }}">
                                    <div class="media-body">
                                        <h5 class="mt-0 first-title clr">Rapid action</h5>
                                        <h5 class="mt-0 second-title clr">Formula</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-6">
                                <div class="media">
                                    <img class="mr-3" src="{{ asset('img/img-06.png') }}">
                                    <div class="media-body">
                                        <h5 class="mt-0 first-title">triple laboratory</h5>
                                        <h5 class="mt-0 second-title">Tested</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('main.includes.ordernow')

    <section class="section02">
        <div class="container custom-md">
            <div class="row no-gutters">
                <div class="col-md-12 col-lg-2 order-2 order-md-2 order-lg-1 ">
                    <div class="sec02-img-wrapper">
                        <img class="img11-desktop-view" src="{{ asset('img/img-11.png') }}">
                        <img class="img11-mobile-view" src="{{ asset('img/img-11-mobile.png') }}">
                    </div>
                    <div class="sec02-headings-float-wrapper">
                        <h5 class="sec02-float01">#1</h5>
                        <h6 class="sec02-float02">Doctor</h6>
                        <h6 class="sec02-float03">Recommended*</h6>
                    </div>
                    <div class="sec02-img02-mobile-wrapper">
                        <img src="{{ asset('img/img-13.png') }}">
                    </div>
                </div>
                <div class="col-md-12 col-lg-10 order-1 order-md-1 order-lg-2">
                    <div class="sec02-headings-wrapper">
                        <div class="sec02-head01-wrap">
                            <h1 class="sec02-head01">The Science Behind</h1>
                        </div>
                        <div class="sec02-head02-wrap">
                            <h3 class="sec02-head02">better, intense & more growth muscle</h3>
                        </div>
                        <div class="sec02-head03-wrap">
                            <div class="head03-wrap">
                                <h6 class="sec02-head03">Ut interdum malesuada ante, nec sagittis felis pretium et. Vivamus non mollis lectus, sit amet facilisis mi. Nam id risus ac turpis scelerisque hendrerit ac laoreet odio. Vestibulum mollis convallis mauris vitae lobortis.</h6>
                            </div>
                        </div>
                        <div class="sec02-head04-wrap">
                            <div class="head04-wrap">
                                <h6 class="sec02-head04">3Phasellus dictum magna ut sem fermentum, ut consectetur augue fermentum. Maecenas semper consectetur elit vitae fermentum. Cras eget quam vel nisl volutpat dictum vitae ac ante. Vivamus fringilla feugiat dui et vulputate.</h6>
                            </div>
                        </div>
                        <div class="sec02-img02-wrapper">
                            <img class="sec02-img" class="" src="{{ asset('img/img-12.png') }}">
                        </div>
                        <div class="sec02-head05-wrap">
                            <div class="head05-wrap">
                                <h1 class="sec02-head05">how it works to</h1>
                                <h1 class="sec02-head06">support muscle growth</h1>
                            </div>
                        </div>
                        <div class="sec02-head06-wrap">
                            <div class="head06-wrap">
                                <h6 class="sec02-head07">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam cursus augue ac eros porttitor dignissim. Vivamus blandit diam in arcu sagittis, et condimentum orci blandit. Sed suscipit nisl dolor, sed finibus sapien i </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec02-head05-mobile-wrapper">
            <div class="head05-wrap">
                <h1 class="sec02-head05">how it works to</h1>
                <h1 class="sec02-head06">support muscle growth</h1>
            </div>
        </div>
        <div class="sec02-head06-mobile-wrap">
            <div class="head06-wrap">
                <h6 class="sec02-head07">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam cursus augue ac eros porttitor dignissim. Vivamus blandit diam in arcu sagittis, et condimentum orci blandit. Sed suscipit nisl dolor, sed finibus sapien i </h6>
            </div>
        </div>
    </section>

    <section class="section03">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 col-lg-6">
                    <div class="sec03-headings-wrapper">
                        <div class="sec03-img-wrap">
                            <div class="media">
                                <img class="mr-3" src="{{ asset('img/image0.png') }}">
                                <div class="media-body">
                                    <h4 class="mt-0">Brain</h4>
                                    <h6 class="mt-0">Increased sex drive. Improved mood. Confidence. Memory function</h6>
                                </div>
                            </div>
                        </div>
                        <div class="sec03-img-wrap">
                            <div class="media">
                                <img class="mr-3" src="{{ asset('img/image1.png') }}">
                                <div class="media-body">
                                    <h4 class="mt-0">Muscles</h4>
                                    <h6 class="mt-0">Muscle growth. Increased strength. Increased endurance</h6>
                                </div>
                            </div>
                        </div>
                        <div class="sec03-img-wrap">
                            <div class="media">
                                <img class="mr-3" src="{{ asset('img/image2.png') }}">
                                <div class="media-body">
                                    <h4 class="mt-0">Bone</h4>
                                    <h6 class="mt-0">Bone mass density maintenance</h6>
                                </div>
                            </div>
                        </div>
                        <div class="sec03-img-wrap">
                            <div class="media">
                                <img class="mr-3" src="{{ asset('img/image3.png') }}">
                                <div class="media-body">
                                    <h4 class="mt-0">Bone Marrow</h4>
                                    <h6 class="mt-0">Red blood cell production</h6>
                                </div>
                            </div>
                        </div>
                        <div class="sec03-img-wrap">
                            <div class="media">
                                <img class="mr-3" src="{{ asset('img/image4.png') }}">
                                <div class="media-body">
                                    <h4 class="mt-0">Sex Organs</h4>
                                    <h6 class="mt-0">Sperm production. Eriktile function. Prostate growth</h6>
                                </div>
                            </div>
                        </div>
                        <div class="sec03-img-wrap">
                            <div class="media">
                                <img class="mr-3" src="{{ asset('img/image5.png') }}">
                                <div class="media-body">
                                    <h4 class="mt-0">Skin</h4>
                                    <h6 class="mt-0">Hair and Collagen growth</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="sec03-img-wrap-right">
                        <img class="sec03-img15" src="{{ asset('img/img-15.png') }}">
                        <img class="sec03-img14 desktop-img14" src="{{ asset('img/sachetblue03.png') }}">
                        <img class="sec03-mobile-img14" src="{{ asset('img/packageMobile0303.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('main.includes.ordernow')

    <section class="section04">
        <div class="container">
            <div class="sec04-title text-center">
                <div class="sec04-title01">
                    <h1 class="title01">Main benefits of Alphagel</h1>
                    <h3 class="title02">Testosterone booster</h3>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-12 col-lg-4 order-2 order-md-2 order-lg-1">
                    <div class="sec04-images-wrapper">
                        <img class="sec04-img-01" src="{{ asset('img/img-21.png') }}">
                        <img class="sec04-img-02 desktop-img14" src="{{ asset('img/sachetblue04.png') }}">
                        <img class="sec04-img-02 sec07view02" src="{{ asset('img/packageMobile0303.png') }}">
                        <img class="sec04-img-03" src="{{ asset('img/logo-lg-3.png') }}">
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 order-1 order-md-1 order-lg-2">
                    <div class="sec04-content-wrap">
                        <div class="sec04-media-wrapper">
                            <div class="media">
                                <img class="img-after-desktop mr-5" src="{{ asset('img/img-16.jpg') }}">
                                <img class="img-after-mobile" src="{{ asset('img/img-16-mobile.jpg') }}">
                                <img class="img02" src="{{ asset('img/icon-02.png') }}">
                                <div class="media-body">
                                    <h4>Real Muscle Growth</h4>
                                    <h6 class="mt-3">Naturally and safely increase your testosterone level, which is essential for real muscle growth.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="sec04-media-wrapper">
                            <div class="media">
                                <img class="img-after-desktop mr-5" src="{{ asset('img/img-17.jpg') }}">
                                <img class="img-after-mobile" src="{{ asset('img/img-17-mobile.jpg') }}">
                                <img class="img02" src="{{ asset('img/icon-03.png') }}">
                                <div class="media-body">
                                    <h4>Increase Strength</h4>
                                    <h6 class="mt-3">Increase muscle size and strength without resorting to countless feeble supplements.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="sec04-media-wrapper">
                            <div class="media">
                                <img class="img-after-desktop mr-5" src="{{ asset('img/img-18.jpg') }}">
                                <img class="img-after-mobile" src="{{ asset('img/img-18-mobile.jpg') }}">
                                <img class="img02" src="{{ asset('img/icon-04.png') }}">
                                <div class="media-body">
                                    <h4>Reduce Bodyfat</h4>
                                    <h6 class="mt-3">Can help to reduce bodyfat, including on your stomach.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="sec04-media-wrapper">
                            <div class="media">
                                <img class="img-after-desktop mr-5" src="{{ asset('img/img-19.jpg') }}">
                                <img class="img-after-mobile" src="{{ asset('img/img-19-mobile.jpg') }}">
                                <img class="img02" src="{{ asset('img/icon-05.png') }}">
                                <div class="media-body">
                                    <h4>Improve your Mood</h4>
                                    <h6 class="mt-3">Testosterone is known to improve mood, so it's easier to stay motivated and on track towards your goals.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="sec04-media-wrapper">
                            <div class="media">
                                <img class="img-after-desktop mr-5" src="{{ asset('img/img-20.jpg') }}">
                                <img class="img-after-mobile" src="{{ asset('img/img-20-mobile.jpg') }}">
                                <img class="img02" src="{{ asset('img/icon-06.png') }}">
                                <div class="media-body">
                                    <h4>Boost Self-Esteem</h4>
                                    <h6 class="mt-3">Feel more confident, in and out of the gym.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('main.includes.ordernow')

    <section class="section05">
        <div class="container">
            <div class="sec05-title text-center">
                <div class="sec05-title01">
                    <h1 class="sec05title01">frequently asked questions</h1>
                    <h3 class="sec05title02">about our alphagel</h3>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">

                    <div class="bs-example accordion-wrapper">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <a type="button" class="btn-link float-right" data-toggle="collapse" data-target="#collapseOne">
                                    <div class="card-header" id="headingOne">
                                        <div class="card-01">
                                            <h6 class="mb-0 d-inline pl-2">Mauris fringilla leo sit amet arcu pellentesque, quis tincidunt tortor cursus.</h6>
                                        </div>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body pl-5">
                                        <p>Fusce quis congue nunc. Curabitur a lacus vitae risus volutpat semper. Aliquam erat volutpat. Suspendisse ante neque, fermentum at molestie id, bibendum ac orci. Pellentesque viverra tincidunt feugiat. Integer quis ante non lacus vulputate gravida non ac magna. Donec nec elementum libero.</p><br>

                                        <p>Aliquam varius ipsum nisl, ut aliquam est blandit in. Nam quis faucibus dui, at luctus enim. Suspendisse congue leo metus, sed accumsan arcu cursus ac. Vestibulum sed turpis id mauris faucibus scelerisque at quis risus. Pellentesque tincidunt sit amet felis ac fermentum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a type="button" class="btn-link float-right" data-toggle="collapse" data-target="#collapseTwo">
                                    <div class="card-header" id="headingTwo">
                                        <div class="card-01">
                                            <h6 class="mb-0 d-inline pl-2">Mauris fringilla leo sit amet arcu pellentesque, quis tincidunt tortor cursus.</h6>
                                        </div>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body pl-5">
                                        <p>Fusce quis congue nunc. Curabitur a lacus vitae risus volutpat semper. Aliquam erat volutpat. Suspendisse ante neque, fermentum at molestie id, bibendum ac orci. Pellentesque viverra tincidunt feugiat. Integer quis ante non lacus vulputate gravida non ac magna. Donec nec elementum libero.</p><br>

                                        <p>Aliquam varius ipsum nisl, ut aliquam est blandit in. Nam quis faucibus dui, at luctus enim. Suspendisse congue leo metus, sed accumsan arcu cursus ac. Vestibulum sed turpis id mauris faucibus scelerisque at quis risus. Pellentesque tincidunt sit amet felis ac fermentum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a type="button" class="btn-link float-right" data-toggle="collapse" data-target="#collapseThree">
                                    <div class="card-header" id="headingThree">
                                        <div class="card-01">
                                            <h6 class="mb-0 d-inline pl-2">Aliquam bibendum elit quis efficitur rutrum.</h6>
                                        </div>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body pl-5">
                                        <p>Fusce quis congue nunc. Curabitur a lacus vitae risus volutpat semper. Aliquam erat volutpat. Suspendisse ante neque, fermentum at molestie id, bibendum ac orci. Pellentesque viverra tincidunt feugiat. Integer quis ante non lacus vulputate gravida non ac magna. Donec nec elementum libero.</p><br>

                                        <p>Aliquam varius ipsum nisl, ut aliquam est blandit in. Nam quis faucibus dui, at luctus enim. Suspendisse congue leo metus, sed accumsan arcu cursus ac. Vestibulum sed turpis id mauris faucibus scelerisque at quis risus. Pellentesque tincidunt sit amet felis ac fermentum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a type="button" class="btn-link float-right" data-toggle="collapse" data-target="#collapseFour">
                                    <div class="card-header" id="headingFour">
                                        <div class="card-01">
                                            <h6 class="mb-0 d-inline pl-2">Nulla posuere eros vitae fringilla semper.</h6>
                                        </div>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body pl-5">
                                        <p>Fusce quis congue nunc. Curabitur a lacus vitae risus volutpat semper. Aliquam erat volutpat. Suspendisse ante neque, fermentum at molestie id, bibendum ac orci. Pellentesque viverra tincidunt feugiat. Integer quis ante non lacus vulputate gravida non ac magna. Donec nec elementum libero.</p><br>

                                        <p>Aliquam varius ipsum nisl, ut aliquam est blandit in. Nam quis faucibus dui, at luctus enim. Suspendisse congue leo metus, sed accumsan arcu cursus ac. Vestibulum sed turpis id mauris faucibus scelerisque at quis risus. Pellentesque tincidunt sit amet felis ac fermentum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a type="button" class=" btn-link float-right" data-toggle="collapse" data-target="#collapseFive">
                                    <div class="card-header" id="headingFive">
                                        <div class="card-01">
                                            <h6 class="mb-0 d-inline pl-2">Quisque egestas tellus nec lorem vehicula tincidunt.</h6>
                                        </div>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body pl-5">
                                        <p>Fusce quis congue nunc. Curabitur a lacus vitae risus volutpat semper. Aliquam erat volutpat. Suspendisse ante neque, fermentum at molestie id, bibendum ac orci. Pellentesque viverra tincidunt feugiat. Integer quis ante non lacus vulputate gravida non ac magna. Donec nec elementum libero.</p><br>

                                        <p>Aliquam varius ipsum nisl, ut aliquam est blandit in. Nam quis faucibus dui, at luctus enim. Suspendisse congue leo metus, sed accumsan arcu cursus ac. Vestibulum sed turpis id mauris faucibus scelerisque at quis risus. Pellentesque tincidunt sit amet felis ac fermentum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a type="button" class="btn-link float-right" data-toggle="collapse" data-target="#collapseSix">
                                    <div class="card-header" id="headingSix">
                                        <div class="card-01">
                                            <h6 class="mb-0 d-inline pl-2">Etiam tincidunt odio lacinia urna fringilla venenatis.</h6>
                                        </div>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                    <div class="card-body pl-5">
                                        <p>Fusce quis congue nunc. Curabitur a lacus vitae risus volutpat semper. Aliquam erat volutpat. Suspendisse ante neque, fermentum at molestie id, bibendum ac orci. Pellentesque viverra tincidunt feugiat. Integer quis ante non lacus vulputate gravida non ac magna. Donec nec elementum libero.</p><br>

                                        <p>Aliquam varius ipsum nisl, ut aliquam est blandit in. Nam quis faucibus dui, at luctus enim. Suspendisse congue leo metus, sed accumsan arcu cursus ac. Vestibulum sed turpis id mauris faucibus scelerisque at quis risus. Pellentesque tincidunt sit amet felis ac fermentum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a type="button" class="btn-link float-right" data-toggle="collapse" data-target="#collapseSeven">
                                    <div class="card-header" id="headingSeven">
                                        <div class="card-01">
                                            <h6 class="mb-0 d-inline pl-2">Suspendisse placerat turpis efficitur metus rhoncus, eget tempor enim faucibus.</h6>
                                        </div>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                    <div class="card-body pl-5">
                                        <p>Fusce quis congue nunc. Curabitur a lacus vitae risus volutpat semper. Aliquam erat volutpat. Suspendisse ante neque, fermentum at molestie id, bibendum ac orci. Pellentesque viverra tincidunt feugiat. Integer quis ante non lacus vulputate gravida non ac magna. Donec nec elementum libero.</p><br>

                                        <p>Aliquam varius ipsum nisl, ut aliquam est blandit in. Nam quis faucibus dui, at luctus enim. Suspendisse congue leo metus, sed accumsan arcu cursus ac. Vestibulum sed turpis id mauris faucibus scelerisque at quis risus. Pellentesque tincidunt sit amet felis ac fermentum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a type="button" class=" btn-link float-right" data-toggle="collapse" data-target="#collapseEight">
                                    <div class="card-header" id="headingEight">
                                        <div class="card-01">
                                            <h6 class="mb-0 d-inline pl-2">Nulla bibendum ex vitae gravida porta.</h6>
                                        </div>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                    <div class="card-body pl-5">
                                        <p>Fusce quis congue nunc. Curabitur a lacus vitae risus volutpat semper. Aliquam erat volutpat. Suspendisse ante neque, fermentum at molestie id, bibendum ac orci. Pellentesque viverra tincidunt feugiat. Integer quis ante non lacus vulputate gravida non ac magna. Donec nec elementum libero.</p><br>

                                        <p>Aliquam varius ipsum nisl, ut aliquam est blandit in. Nam quis faucibus dui, at luctus enim. Suspendisse congue leo metus, sed accumsan arcu cursus ac. Vestibulum sed turpis id mauris faucibus scelerisque at quis risus. Pellentesque tincidunt sit amet felis ac fermentum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a type="button" class=" btn-link float-right" data-toggle="collapse" data-target="#collapseNine">
                                    <div class="card-header" id="headingNine">
                                        <div class="card-01">
                                            <h6 class="mb-0 d-inline pl-2">Quisque a diam sit amet neque dignissim facilisis.</h6>
                                        </div>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                                    <div class="card-body pl-5">
                                        <p>Fusce quis congue nunc. Curabitur a lacus vitae risus volutpat semper. Aliquam erat volutpat. Suspendisse ante neque, fermentum at molestie id, bibendum ac orci. Pellentesque viverra tincidunt feugiat. Integer quis ante non lacus vulputate gravida non ac magna. Donec nec elementum libero.</p><br>

                                        <p>Aliquam varius ipsum nisl, ut aliquam est blandit in. Nam quis faucibus dui, at luctus enim. Suspendisse congue leo metus, sed accumsan arcu cursus ac. Vestibulum sed turpis id mauris faucibus scelerisque at quis risus. Pellentesque tincidunt sit amet felis ac fermentum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('main.includes.ordernow')

    <section class="section06">
        <div class="container">
            <div class="sec06-title text-center">
                <div class="sec06-title01">
                    <h1 class="sec06title01">real people. real results.</h1>
                    <h3 class="sec06title02">Join the hundres of thousands of <span>alphagel</span> customers</h3>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-12 col-custom-6">
                    <div class="row no-gutters">
                        <div class="col-5">
                            <img class="group1" src="{{ asset('img/img-real-01.jpg') }}">
                            <img class="group1" src="{{ asset('img/img-real-02.jpg') }}">
                            <img class="group1" src="{{ asset('img/img-real-03.jpg') }}">
                        </div>
                        <div class="col-7">
                            <img class="group2" src="{{ asset('img/img-real-04.jpg') }}">
                            <img class="group2" src="{{ asset('img/img-real-05.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-custom-3">
                    <div class="row no-gutters">
                        <div class="col-12 group-3">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <img src="{{ asset('img/img-real-06.jpg') }}">
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('img/img-real-07.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 group-3">
                            <img src="{{ asset('img/img-real-08.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-custom-3">
                    <div class="row no-gutters">
                        <div class="col-12 order-2 order-md-1">
                            <img src="{{ asset('img/img-real-09.jpg') }}">
                        </div>
                        <div class="col-12 order-3 order-md-2">
                            <img src="{{ asset('img/img-real-10.jpg') }}">
                        </div>
                        <div class="col-12 order-1 order-md-3">
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <img src="{{ asset('img/img-real-11.jpg') }}">
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('img/img-real-12.jpg') }}">
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('img/img-real-13.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('main.includes.ordernow')

{{--    @extends('main.includes.offers')--}}

    @include('main.includes.ordernow')

    <section class="section07">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="sec07-img-wrapper">
                        <img class="sec07-img d-none d-sm-none d-md-none d-lg-block" src="{{ asset('img/sachetblue05.png') }}">
                        <img class="sec07-img d-block d-sm-block d-md-block d-lg-none" src="{{ asset('img/packageMobile01.png') }}">
                    </div>
                </div>
                <div class="col-8">
                    <div class="sec07-wrapper text-center">
                        <div class="head-wrapper">
                            <div class="logo-wrapper">
                                <img class="content-logo" src="{{ asset('img/logo-1.png') }}">
                            </div>
                            <div class="logo-wrapper-center">
                                <img class="logo-center-01" src="{{ asset('img/seal-lg.png') }}">
                                <img class="logo-center-02" src="{{ asset('img/seal2-lg.png') }}">
                                <img class="logo-center-03" src="{{ asset('img/seal3-lg.png') }}">
                            </div>
                        </div>
                        <div class="Fold-head-wrap01">
                            <h3 class="Fold-head01">Medical Strength Testosterone</h3>
                            <h1 class="Fold-head02">Get Maximum</h1>
                            <h2 class="Fold-head03">Muscle Benefits</h2>
                        </div>
                        <div class="mediaBox-wrapper">
                            <div class="media">
                                <img class="mr-3" src="{{ asset('img/icon-01.png') }}">
                                <div class="media-body">
                                    <h4 class="mt-0">Real Muscle Growth</h4>
                                </div>
                            </div>
                            <div class="media">
                                <img class="mr-3" src="{{ asset('img/icon-01.png') }}">
                                <div class="media-body">
                                    <h4 class="mt-0">Increase Strength</h4>
                                </div>
                            </div>
                            <div class="media">
                                <img class="mr-3" src="{{ asset('img/icon-01.png') }}">
                                <div class="media-body">
                                    <h4 class="mt-0">Reduce Bodyfat</h4>
                                </div>
                            </div>
                            <div class="media">
                                <img class="mr-3" src="{{ asset('img/icon-01.png') }}">
                                <div class="media-body">
                                    <h4 class="mt-0">Improve your Mood</h4>
                                </div>
                            </div>
                            <div class="media">
                                <img class="mr-3" src="{{ asset('img/icon-01.png') }}">
                                <div class="media-body">
                                    <div class="sec07view01">
                                        <h4 class="mt-0">Boost Self-Esteem</h4>
                                    </div>

                                    <div class="sec07view02">
                                        <h4 class="mt-0">Boost<br>Self-Esteem</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-sm-none d-md-none d-lg-block">
                                <div class="package-btn-wrapper">
                                    <div class="btn-action text-center py-3">
                                        <a class="btn btn-custom pulsate" href="checkout.php">Rush my order</a>
                                    </div>
                                </div>
                                <div class="package-icons-wrapper">
                                    <div class="row no-gutters">
                                        <div class="package-icon-group text-center w-100">
                                            <img class="groupSecure2" src="{{ asset('img/groupSecure2.jpg') }}" alt="secure-group">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-block d-sm-block d-md-block d-lg-none">
                    <div class="package-btn-wrapper">
                        <div class="btn-action text-center py-3">
                            <a class="btn btn-custom pulsate" href="checkout.php">Rush my order</a>
                        </div>
                    </div>
                    <div class="package-icons-wrapper">
                        <div class="row no-gutters">
                            <div class="package-icon-group text-center w-100">
                                <img class="groupSecure2" src="{{ asset('img/groupSecure2.jpg') }}" alt="secure-group">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
