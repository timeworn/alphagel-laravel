@extends('layouts.app_main')

@section('content')
    <?php
    $checkOut = 'Open';
    ?>
    <form method="POST" action="{{lang_url('complete')}}">
        {{ csrf_field() }}
    <section class="checkout">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 checkout-headings">
                    <div class="head-wrapper">
                        <div class="row no-gutters">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 order-1 order-sm-1 order-md-1 order-lg-1">
                                <div class="logo-wrapper">
                                    <a href="{{lang_url('/')}}"><img class="content-logo" src="{{ asset('img/logo-1.png') }}"></a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-3 order-2 order-sm-2 order-md-2 order-lg-3">
                                <div class="logo-wrapper-center">
                                    <img class="logo-center-01" src="{{ asset('img/logo-2.png') }}">
                                    <img class="logo-center-02" src="{{ asset('img/logo-3.png') }}">
                                    <img class="logo-center-03" src="{{ asset('img/logo-4.png') }}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-3 order-sm-3 order-md-3 order-lg-2">
                                <div class="prgress-wrapper text-center">
                                    <img class="desktopImg26" src="{{ asset('img/img-26.png') }}">
                                    <img class="mobileImg26" src="{{ asset('img/img-26-mobile.png') }}">

                                    <div class="row no-gutters progress-title">
                                        <div class="col-4 left">
                                            <h6>Select Package</h6>
                                        </div>
                                        <div class="col-4 middle">
                                            <h6>Checkout Order</h6>
                                        </div>
                                        <div class="col-4 right">
                                            <h6>Summary</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="checkout-offer">
            <div class="container">
                <div class="ck-wrapper">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="ckOffer-heading">
                                <h3 class="ckOfferHead01"><img class="ckOfferIcon" src="{{ asset('img/icon-09.png') }}">You have been approved for free shipping</h3>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="ckOffer-heading-02 text-center">
                                <h5 style="margin-top:24px;">Limited supply available CHOOSE YOUR PACKAGEas of <span>Friday, 7/20/2020</span> . We currently have product in stock and ready to ship within 24 hours.</h5>
                            </div>
                            <div class="ckOffer-heading-03 text-center">
                                <h5 style="margin-top:24px;">Current Availability : <img class="ck-battery" src="{{ asset('img/battery.png') }}"> <span class="ck1">LOW STOCK. </span>Sell out Risk : <span class="ck2">HIGH</span></h5>
                            </div>
                            <div class="ckOffer-heading-04 text-center">
                                <h6 class="ck04-head01">Step 1</h6>
                                <h3 class="ck04-head02">Choose Your Package</h3>
                            </div>
                        </div>
                    </div>

                    @php
                        if(empty($cart_info)) {
                            $plan = $products[1]->p_id;
                        }else {
                            $plan = $cart_info['cart_info']['product_id'];
                        }
                    @endphp
                    <section class="offers">
                        <div class="container">
                            <div class="sec07-headings text-center">
                                <h6 class="sec07-head01">Shop With Us Today And See The AlphaGel Difference!</h6>
                                <h1 class="sec07-head02">The 100% No-Risk Promise</h1>
                                <h6 class="sec07-head03">Order right now with confidence!</h6>
                            </div>

                                <div class="row offers-desktop-view">
                                    <!-- bundle 1 -->

                                    @foreach ($products as $product)
                                        <div class="col-lg-4 theBundles">
                                            <div class="sec07-bundle-01 sec07-bundle-wrapper text-center">
                                                <div class="form-check-label-wrapper CK-form-wrapper"
                                                     >
                                                    <input class="form-check-input" type="radio" name="product_id" value="{{$product->p_id}}"
                                                    <?php echo $plan == $product->p_id ? 'checked' : '' ?>>
                                                    <label class="form-check-label"  for="">
                                                        <div class="sec07-head01-wrap">
                                                            <h6 class="sec07-head1">{{$product->info01}}</h6>
                                                        </div>
                                                        <img class="sec07-head02-img w-100" src="{{ asset('img/img-header02.png') }}">
                                                        <div class="sec07-head02-wrap">
                                                            <h5 class="sec07-head2">{{$product->info02}}</h5>
                                                        </div>
                                                        <div class="sec07-head03-wrap">
                                                            <img class="sec07-head3 w-100" src="{{asset('storage/'.$product->image)}}">
                                                            <h6 class="sec07-head03-p">{{$product->info03}}</h6>
                                                        </div>
                                                        <div class="sec07-head04-wrap">
                                                            <h2 class="sec07-head04 left">{{$product->price}}<span class="sp1">€</span></h2>
                                                        </div>
                                                        <div class="sec07-head05-wrap">
                                                            <div class="media">
                                                               <img class="ml-2" src="{{ asset('img/icon-08.png') }}">
                                                                <div class="media-body">
                                                                    <h4 class="mt-0">FREE Shipping For Everything!</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="btn-wrapper">
                                                            <div class="ratings">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <div class="btn-icons text-center">
                                                                <img src="{{ asset('img/groupCards.png') }}">
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            <!-- mobile view -->
                    </section>


                    <div class="checkOutFormWrapper">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="checkOut-form-wrapper1">
                                    <div class="form-head-wrap">
                                        <img class="form-head-img" src="{{ asset('img/img-27.png') }}">
                                        <h6 class="formHead1">Step 2</h6>
                                        <h3 class="formHead2">Fill in the Form</h3>
                                    </div>
                                    <div class="checkOut-form-wrapper2">
                                            <div class="row no-gutters form-edits">
                                                <div class="col-sm-12 col-md-6 col-lg-6 wrapper2">
                                                    <div class="form-group">
                                                        <label class="form-check-label2" for="fname">FIRST NAME</label>
                                                        <input type="text" class="form-control formControl2" name="first_name" id="fname" value="{{!empty($cart_info)? $cart_info['cart_info']['first_name']: ''}}" required>
                                                        <input type="hidden" name="order_id" value="{{!empty($cart_info)? $cart_info['cart_info']['order_id']: ''}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 wrapper2">
                                                    <div class="form-group">
                                                        <label class="form-check-label2" for="lname">LAST NAME</label>
                                                        <input type="text" class="form-control formControl2" id="lname" name="last_name" value="{{!empty($cart_info)? $cart_info['cart_info']['last_name']: ''}}" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 wrapper2">
                                                    <div class="form-group">
                                                        <label class="form-check-label2" for="email">EMAIL (for confirmation)</label>
                                                        <input type="email" class="form-control formControl2" id="email"  name="email" value="{{!empty($cart_info)? $cart_info['cart_info']['email']: ''}}" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 wrapper2">
                                                    <div class="form-group">
                                                        <label class="form-check-label2" for="exampleInputEmail1">PHONE NUMBER (for shipping)</label>
                                                        <input type="text" class="form-control formControl2" name="phone" id="phone" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 wrapper2">
                                                    <div class="form-group">
                                                        <label class="form-check-label2" for="apt">APT / SUITE # (optional)</label>
                                                        <input type="text" class="form-control formControl2" id="apt" name="apt">
                                                    </div>
                                                </div>
                                                <div class="col-12 wrapper2">
                                                    <div class="form-group">
                                                        <label class="form-check-label2" for="streetadd">STREET ADDRESS</label>
                                                        <input type="text" class="form-control formControl2" id="streetadd" name="address" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 wrapper2">
                                                    <div class="form-group">
                                                        <label class="form-check-label2" for="city">CITY</label>
                                                        <input type="text" class="form-control formControl2" name="city" id="city" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 wrapper2">
                                                    <div class="form-group">
                                                        <label class="form-check-label2" for="postal">POSTAL CODE</label>
                                                        <input type="text" class="form-control formControl2" name="post_code" id="postal" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 wrapper2">
                                                    <div class="form-group">
                                                        <label class="form-check-label2" for="country">COUNTRY</label>
                                                        <select class="form-control formControl2" id="country" name="country">
                                                            @foreach($countries as $country_item)
                                                                <option value="{{$country_item->code}}" {{isset($country_code) && $country_code == $country_item->code ? 'selected':''}}>{{$country_item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-12 text-center">
                                            <small class="form-text text-muted">Your order is estimated to arrive by: July 20, 2020 via</small>
                                        </div>
                                        <div class="col-12">
                                            <div class="checkOut-form-wrapper3">
                                                <div class="wrapper3-imgs text-center">
                                                    <img src="{{ asset('img/fedex.jpg') }}" alt="FedEx">
                                                    <img src="{{ asset('img/ups.jpg') }}" alt="Ups">
                                                    <div class="iconsMobile">
                                                        <img src="{{ asset('img/royal.jpg') }}" alt="Royal Mail">
                                                        <img src="{{ asset('img/dhl.png') }}" alt="DHL">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="checkOut-form-wrapper1">
                                    <div class="form-head-wrap">
                                        <img class="form-head-img" src="{{ asset('img/img-27.png') }}">
                                        <h6 class="formHead1">Step 3</h6>
                                        <h3 class="formHead2">Payment method</h3>
                                    </div>
                                    <div class="bundles-right-wrapper">
                                        <div class="row no-gutters text-center" style="width: 100%;">
                                            <div class="col-4 bundles-right-mobile">
                                                <div class="form-check2">
                                                    <div class="form-check-label-wrapper">
                                                        <input class="form-check-input c1" type="radio" name="payment_type" id="bundle0101" value="paypal" >
                                                        <label class="form-check-label3 bundle0101"  for="bundle0101">
                                                            <div class="bundles-info">
                                                                <h6 class="bundles-info-p">Pay with Paypal</h6>
                                                                <img src="{{ asset('img/paypal.png') }}">
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 bundles-right-mobile">
                                                <div class="form-check2">
                                                    <div class="form-check-label-wrapper">
                                                        <input class="form-check-input c2" type="radio" name="payment_type" id="bundle0202" value="ccard" checked>
                                                        <label class="form-check-label3 bundle0202"  for="bundle0202">
                                                            <div class="bundles-info">
                                                                <h6 class="bundles-info-p">Pay with Credit Card</h6>
                                                                <img src="{{ asset('img/visa.png') }}">
                                                                <img src="{{ asset('img/mastercard.png') }}">
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 bundles-right-mobile">
                                                <div class="form-check2">
                                                    <div class="form-check-label-wrapper">
                                                        <input class="form-check-input c3" type="radio" name="payment_type" id="bundle0303" value="sepa" >
                                                        <label class="form-check-label3 bundle0303"  for="bundle0303">
                                                            <div class="bundles-info">
                                                                <h6 class="bundles-info-p">Pay with SEPA</h6>
                                                                <img src="{{ asset('img/spa.png') }}">
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @foreach ($products as $product)
                                        <div class="form-head-product-<?php echo $product->p_id ?> form-head-wrap02 <?php echo $plan == $product->p_id ? 'checked' : '' ?>">
                                            <div class="row no-gutters">
                                                <div class="col-5 col-sm-5 col-md-6">
                                                    <img class="img-wrap02" id="pg_td_img" src="{{asset('storage/'.$product->info01_image)}}" style="width: 130px;">
                                                    <h6 class="head01-wrap02" id="pg_hd_name">{{$product->info01}}</h6>
                                                    <h3 class="head02-wrap02 packageMonth">{{$product->info02}}</h3>
                                                </div>
                                                <div class="col-7 col-sm-5 col-md-6">

                                                    <img id="packageImage" class="img-wrap03" src="{{asset('storage/'.$product->image)}}" alt="Package">
                                                </div>
                                                <div class="col-12">
                                                    <div class="price-wrapper">
                                                        <div class="row no-gutters">
                                                            <div class="col-6">
                                                                <h6 class="head03-wrap02">Quantity:</h6>
                                                                <h6 class="head03-wrap02">Shipping:</h6>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="text-right">
                                                                    <h6 class="head04-wrap02 PackageQuantity">{{$product->info03}}</h6>
                                                                    <h6 class="head04-wrap02">€0<span class="sp2">,</span>00</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="price-total">
                                                        <h5 class="totalAmount">Total Amount:</h5>
                                                        <h5 class="totalPrice">€{{$product->price}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="col-12">
                                    <div class="btn-action text-center">
                                        <button type="submit" class="btn btn-custom pulsate">Complete Order</button>
                                    </div>
                                    <div class="btn-text-wrap">
                                        <h6 class="btn-text-btm">Your order is estimate All order transactions are transmitted securely & confidentially with 256-bit SSL encryption.</h6>
                                    </div>
                                    <div class="btn-action-icons-btm">
                                        <img class="icons-btm1" src="{{ asset('img/hackersafe.jpg') }}" alt="Hacker Safe">
                                        <img class="icons-btm2" src="{{ asset('img/norton.png') }}" alt="Norton">
                                        <img class="icons-btm3" src="{{ asset('img/mcafee.png') }}" alt="Mc afee">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="above-footer-wrapper">
                                    <div class="row no-gutters">
                                        <div class="col-md-12 col-lg-6 left-column">
                                            <div class="abv-head1">
                                                <img src="{{ asset('img/privacy.jpg') }}">
                                                <h5 class="abv-title">YOUR PRIVACY IS IMPORTANT</h5>
                                                <h6 class="abv-par">All information is encrypted and transmitted without risk using a Secure Sockets Layer (SSL) protocol.</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 right-column">
                                            <div class="abv-head1">
                                                <img src="{{ asset('img/secure.jpg') }}">
                                                <h5 class="abv-title">SHOP WITH CONFIDENCE</h5>
                                                <h6 class="abv-par">This website is safe and secure, guaranteed.</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>
    </form>
@endsection
