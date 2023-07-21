
<?php

//if ( isset( $_POST['submit'] ) ){
//    $fullname = $_POST['fullname'];
//    $arr_name = explode(" ", $fullname);
//    $f_name = $arr_name[0];
//    $l_name = "";
//    $plan= $_POST['bundles'];
//    foreach($arr_name as $key => $value) {
//        if($key == 0) continue;
//        $l_name .= $value . " ";
//    }
//    $email = $_POST['email1'];
//}else{
//
//}
?>
<section class="offers">
    <div class="container">
        <div class="sec07-headings text-center">
            <h6 class="sec07-head01">Shop With Us Today And See The AlphaGel Difference!</h6>
            <h1 class="sec07-head02">The 100% No-Risk Promise</h1>
            <h6 class="sec07-head03">Order right now with confidence!</h6>
        </div>
        <form action="">
            <div class="row offers-desktop-view">
                <!-- bundle 1 -->
                <div class="col-lg-4 theBundles">
                    <div class="sec07-bundle-01 sec07-bundle-wrapper text-center">
                        <?php if($checkOut == 'Open'){ ?>
                        <div class="form-check-label-wrapper CK-form-wrapper bundle01CK" style="<?php if($plan == 'bundle03' ? 'checked' : '' ){?> opacity: 1<?php }else{?>opacity: 0.4<?php } ?>">
                            <input class="form-check-input bundles b1" type="radio" name="bundlesPACKAGES" id="bundle01CK" value="bundle01CK" <?php echo $plan == 'bundle03' ? 'checked' : '' ?>>
                            <label class="form-check-label bundle01CK"  for="bundle01CK">
                                <?php } ?>
                                <div class="sec07-head01-wrap">
                                    <h6 class="sec07-head1">Starter</h6>
                                </div>
                                <img class="sec07-head02-img w-100" src="images/img-header02.png">
                                <div class="sec07-head02-wrap">
                                    <h5 class="sec07-head2">2 Week Package</h5>
                                </div>
                                <div class="sec07-head03-wrap">
                                    <img class="sec07-head3 w-100" src="images/packagesBundlesMobile.png">
                                    <h6 class="sec07-head03-p">14 Sachets</h6>
                                </div>
                                <div class="sec07-head04-wrap">
                                    <h2 class="sec07-head04 left">99<span class="sp2">,</span>00<span class="sp1">€</span></h2>
                                </div>
                                <div class="sec07-head05-wrap">
                                    <div class="media">
                                        <img class="ml-2" src="images/icon-08.png">
                                        <div class="media-body">
                                            <h4 class="mt-0">FREE Shipping For Everything!</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <?php if($landingPage == 'Open'){ ?>
                                    <div class="btn-action text-center">
                                        <a class="btn btn-custom" href="checkout.php">Rush my order</a>
                                    </div>
                                    <?php } ?>
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="btn-icons text-center">
                                        <img src="images/groupCards.png">
                                    </div>
                                </div>
                                <?php if($checkOut == 'Open'){ ?>
                            </label>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- bundle 2 -->
                <div class="col-lg-4 theBundles">
                    <div class="sec07-bundle-02 sec07-bundle-wrapper text-center">
                        <?php if($checkOut == 'Open'){ ?>
                        <div class="form-check-label-wrapper CK-form-wrapper bundle02CK" style="<?php if($plan == 'bundle02' ? 'checked' : '' ){?> opacity: 1<?php }else{?>opacity: 0.4<?php } ?>">
                            <input class="form-check-input bundles b2" type="radio" name="bundlesPACKAGES" id="bundle02CK" value="bundle02CK" <?php echo $plan == 'bundle02' ? 'checked' : '' ?>>
                            <label class="form-check-label bundle02CK"  for="bundle02CK">
                                <?php } ?>
                                <div class="sec07-head01-wrap middle">
                                    <h6 class="sec07-head1 middle">MOST POPULAR</h6>
                                </div>
                                <img class="sec07-head02-img w-100" src="images/img-header02.png">
                                <div class="sec07-head02-wrap">
                                    <h5 class="sec07-head2">1 month Package</h5>
                                </div>
                                <div class="sec07-head03-wrap">
                                    <img class="sec07-head3 w-100" src="images/img-24-blue.png">
                                    <h6 class="sec07-head03-p">30 Sachets</h6>
                                </div>
                                <div class="sec07-head04-wrap">
                                    <h2 class="sec07-head04">150<span class="sp2">,</span>00<span class="sp1">€</span></h2>
                                </div>
                                <div class="sec07-head05-wrap">
                                    <div class="media">
                                        <img class="ml-2" src="images/icon-08.png">
                                        <div class="media-body">
                                            <h4 class="mt-0">FREE Shipping For Everything!</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <?php if($landingPage == 'Open'){ ?>
                                    <div class="btn-action text-center">
                                        <a class="btn btn-custom" href="checkout.php">Rush my order</a>
                                    </div>
                                    <?php } ?>
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="btn-icons text-center">
                                        <img src="images/groupCards.png">
                                    </div>
                                </div>
                                <?php if($checkOut == 'Open'){ ?>
                            </label>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- bundle 3 -->
                <div class="col-lg-4 theBundles">
                    <div class="sec07-bundle-03 sec07-bundle-wrapper text-center">
                        <?php if($checkOut == 'Open'){ ?>
                        <div class="form-check-label-wrapper CK-form-wrapper bundle03CK"  style="<?php if($plan == 'bundle01' ? 'checked' : '' ){?> opacity: 1<?php }else{?>opacity: 0.4<?php } ?>">
                            <input class="form-check-input bundles b3" type="radio" name="bundlesPACKAGES" id="bundle03CK" value="bundle03CK" <?php echo $plan == 'bundle01' ? 'checked' : '' ?>>
                            <label class="form-check-label bundle03CK" for="bundle03CK">
                                <?php } ?>
                                <div class="sec07-head01-wrap right">
                                    <h6 class="sec07-head1 right">Best Deal</h6>
                                </div>
                                <img class="sec07-head02-img w-100" src="images/img-header02.png">
                                <div class="sec07-head02-wrap">
                                    <h5 class="sec07-head2">3 month package</h5>
                                </div>
                                <div class="sec07-head03-wrap right">
                                    <img class="sec07-head3 w-100 " src="images/img-25-blue.png">
                                    <h6 class="sec07-head03-p">90 sachets</h6>
                                </div>
                                <div class="sec07-head04-wrap">
                                    <h2 class="sec07-head04 right">300<span class="sp2">,</span>00<span class="sp1">€</span></h2>
                                </div>
                                <div class="sec07-head05-wrap">
                                    <div class="media">
                                        <img class="ml-2" src="images/icon-08.png">
                                        <div class="media-body">
                                            <h4 class="mt-0">FREE Shipping For Everything!</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <?php if($landingPage == 'Open'){ ?>
                                    <div class="btn-action text-center">
                                        <a class="btn btn-custom" href="checkout.php">Rush my order</a>
                                    </div>
                                    <?php } ?>
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="btn-icons text-center">
                                        <img src="images/groupCards.png">
                                    </div>
                                </div>
                                <?php if($checkOut == 'Open'){ ?>
                            </label>
                        </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </form>







        <!-- mobile view -->
        <form action="">
            <div class="row offers-mobile-view">
                <div class="col-md-12">
                    <!-- bundle1 -->
                    <div class="sec07-bundle-01 sec07-bundle-wrapper text-center">

                        <?php if($checkOut == 'Open'){ ?>
                        <div class="form-check-label-wrapper">
                            <input class="MobileBundles" type="radio" name="bundlesMobile" id="bundleMobile1" value="bundleMobile1">
                            <label class="form-check-label bundleMobile1"  for="bundleMobile1" style="width: 100%;">
                                <?php } ?>



                                <div class="sec07-head02-wrapper">
                                    <div class="sec07-head02-wrap">
                                        <h5 class="sec07-head2">3 month package</h5>
                                        <div class="sec07-head05-wrap">
                                            <div class="media">
                                                <img class="ml-2" src="images/icon-08.png">
                                                <div class="media-body">
                                                    <h4 class="mt-0">FREE Shipping For Everything!</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 col-sm-5 col-md-6">
                                        <div class="info01-wrapper">
                                            <img src="images/yellow-bg.png">
                                            <h6 class="info01">BEST DEAL</h6>
                                        </div>
                                        <div class="sec07-head03-wrap">
                                            <h6 class="sec07-head03-p">90 Sachet</h6>
                                            <img class="sec07-head3 w-100" src="images/packagesBundlesMobile.png">
                                        </div>
                                    </div>
                                    <div class="col-7 col-sm-7 col-md-6">
                                        <div class="sec07-head04-wrap">
                                            <h2 class="sec07-head04 left">300<span class="sp2">,</span>00<span class="sp1">€</span></h2>
                                        </div>
                                        <div class="btn-wrapper">
                                            <?php if($landingPage == 'Open'){ ?>
                                            <div class="btn-action text-center">
                                                <a class="btn btn-custom" href="checkout.php">Order Now</a>
                                            </div>
                                            <?php } ?>
                                            <?php if($checkOut == 'Open'){ ?>
                                            <div class="ratings">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <?php } ?>
                                            <div class="btn-icons text-center">
                                                <img src="images/groupCards.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <?php if($checkOut == 'Open'){ ?>
                            </label>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- bundle2 -->

                    <div class="sec07-bundle-01 sec07-bundle-wrapper text-center">
                        <?php if($checkOut == 'Open'){ ?>
                        <div class="form-check-label-wrapper">
                            <input class="MobileBundles" type="radio" name="bundlesMobile" id="bundleMobile2" value="bundleMobile2" checked>
                            <label class="form-check-label bundleMobile2"  for="bundleMobile2" style="width: 100%;">
                                <?php } ?>



                                <div class="sec07-head02-wrapper">
                                    <div class="sec07-head02-wrap">
                                        <h5 class="sec07-head2">1 Month Package</h5>
                                        <div class="sec07-head05-wrap">
                                            <div class="media">
                                                <img class="ml-2" src="images/icon-08.png">
                                                <div class="media-body">
                                                    <h4 class="mt-0">FREE Shipping For Everything!</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 col-sm-5 col-md-6">
                                        <div class="info01-wrapper">
                                            <img src="images/red-bg.png">
                                            <h6 class="info01">MOST POPULAR</h6>
                                        </div>
                                        <div class="sec07-head03-wrap">
                                            <h6 class="sec07-head03-p">30 Sachet</h6>
                                            <img class="sec07-head3 w-100" src="images/packagesBundlesMobile.png">
                                        </div>
                                    </div>
                                    <div class="col-7 col-sm-7 col-md-6">
                                        <div class="sec07-head04-wrap">
                                            <h2 class="sec07-head04 left">150<span class="sp2">,</span>00<span class="sp1">€</span></h2>
                                        </div>
                                        <div class="btn-wrapper">
                                            <?php if($landingPage == 'Open'){ ?>
                                            <div class="btn-action text-center">
                                                <a class="btn btn-custom" href="checkout.php">Order Now</a>
                                            </div>
                                            <?php } ?>
                                            <?php if($checkOut == 'Open'){ ?>
                                            <div class="ratings">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <?php } ?>
                                            <div class="btn-icons text-center">
                                                <img src="images/groupCards.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <?php if($checkOut == 'Open'){ ?>
                            </label>
                        </div>
                        <?php } ?>
                    </div>


                    <!-- bundle3 -->

                    <div class="sec07-bundle-01 sec07-bundle-wrapper text-center">
                        <?php if($checkOut == 'Open'){ ?>
                        <div class="form-check-label-wrapper">
                            <input class="MobileBundles" type="radio" name="bundlesMobile" id="bundleMobile3" value="bundleMobile3">
                            <label class="form-check-label bundleMobile3"  for="bundleMobile3" style="width: 100%;">
                                <?php } ?>
                                <div class="sec07-head02-wrapper">
                                    <div class="sec07-head02-wrap">
                                        <h5 class="sec07-head2">2 Week Package</h5>
                                        <div class="sec07-head05-wrap">
                                            <div class="media">
                                                <img class="ml-2" src="images/icon-08.png">
                                                <div class="media-body">
                                                    <h4 class="mt-0">FREE Shipping For Everything!</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-5 col-sm-5 col-md-6">
                                        <div class="info01-wrapper">
                                            <img src="images/gray-bg.png">
                                            <h6 class="info01">STARTER</h6>
                                        </div>
                                        <div class="sec07-head03-wrap">
                                            <h6 class="sec07-head03-p">14 Sachet</h6>
                                            <img class="sec07-head3 w-100" src="images/packagesBundlesMobile.png">
                                        </div>
                                    </div>
                                    <div class="col-7 col-sm-7 col-md-6">
                                        <div class="sec07-head04-wrap">
                                            <h2 class="sec07-head04 left">99<span class="sp2">,</span>00<span class="sp1">€</span></h2>
                                        </div>
                                        <div class="btn-wrapper">
                                            <?php if($landingPage == 'Open'){ ?>
                                            <div class="btn-action text-center">
                                                <a class="btn btn-custom" href="checkout.php">Order Now</a>
                                            </div>
                                            <?php } ?>
                                            <?php if($checkOut == 'Open'){ ?>
                                            <div class="ratings">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <?php } ?>
                                            <div class="btn-icons text-center">
                                                <img src="images/groupCards.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <?php if($checkOut == 'Open'){ ?>
                            </label>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    </div>
    </form>
</section>