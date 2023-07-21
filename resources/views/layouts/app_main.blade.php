<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <meta name="description" content="{{ $head_description }}"/>
        <meta property="og:title" content="{{ $head_title }}" />
        <meta property="og:description" content="{{ $head_description }}" />
        <meta property="og:url" content="{{urldecode(url()->current())}}" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="{{isset($product->image) ? asset('storage/'.$product->image) : asset('storage/ExtractiLogo.png')}}" />
        <title>{{ $head_title }}</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
        <!-- bootstrap -->
        <link href="{{ asset('css/main/bootstrap.min.css') }}" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/main/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main/custom2.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main/responsive.css')}}">
    </head>
    <body>
        <header class="header-wrapper">
            <section class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-content-wrapper text-center py-2">
                            <h6>Due to the high demand from the current media reports, we can no longer guarantee the supply security of the offer. From <strong>Saturday, 21 April, 2018,</strong> we have a product in stock and deliver within 24 hours of purchase.</h6>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        @yield('content')
        <footer>
            <section class="Footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="headings-wrapper text-center">
                                <a href="#">Customer Support</a> <p class="d-inline">|</p>
                                <a href="#">Shipping & Returns</a> <p class="d-inline">|</p>
                                <a href="#">Testimonials</a> <p class="d-inline">|</p>
                                <a href="#">FAQs</a> <p class="d-inline">|</p>
                                <a href="#">Privacy Policy</a> <p class="d-inline">|</p>
                                <a href="#">Terms & Conditions</a>
                            </div>
                            <div class="footer-wrapper-country-select">
                                <div class="btn-group">
                                    <!-- CURRENCY, BOOTSTRAP DROPDOWN -->
                                    <!--<a class="btn btn-primary" href="javascript:void(0);">Currency</a>-->
                                    <a class="btn btn-default dropdown-toggle btn-flags" data-toggle="dropdown" href="#">
                                        <img class="flagImage mr-1" src="{{asset('img/flag.jpg')}}" style="float:left;"> <h6 class="flagName" style="float:left;">USA</h6> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <a href="javascript:void(0);">
                                            <li style="display: inline-flex;">
                                                <img class="mr-1" src="{{asset('img/flag.jpg')}}" /> <h6 class="flagName">USA</h6>
                                            </li>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <li  style="display: inline-flex;">
                                                <img class="mr-1" src="{{asset('img/flag.jpg')}}" /> <h6 class="flagName">USA</h6>
                                            </li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            <div class="copyRight-wrapper text-center">
                                <h6 class="copyRight">© Copyright <script>document.write(new Date().getFullYear());</script> <a href="#">AlphaGel</a> - All rights reserved.</h6>
                            </div>
                            <div class="footer-lastHeading text-center">
                                <p>This product has not been evaluated by the FDA. This product is not intended to diagnose, treat, cure or prevent any disease. Results in description and testimonials may not be typical results and individual results may vary. This product intended to be used in conjunction with a healthy diet and regular exercise. Consult your physician before starting any diet, exercise program, and taking any diet pill to avoid any health issues. Images above are dramatizations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <!-- jquery -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
{{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/84a56d02e1.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{asset('js/main/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/main/jquery.matchHeight-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/main/customjs.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/main/jquery.validate.js')}}"></script>
{{--        <script src="{{asset('js/main/jquery.js')}}"></script>--}}
    </body>
</html>
