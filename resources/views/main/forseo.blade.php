@extends('layouts.app_main')
@section('content')
	<section class="terms">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="row no-gutters">
						<div class="col-6 col-sm-6 col-md-6 col-lg-6">
							<div class="head-wrapper">
								<div class="logo-wrapper">
									<img class="content-logo " src="{{ asset('img/logo-1.png') }}">
								</div>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-6 col-lg-6 text-right">
							<div class="logo-wrapper-center">
								<img class="logo-center-01" src="{{ asset('img/logo-2.png') }}">
								<img class="logo-center-02" src="{{ asset('img/logo-3.png') }}">
								<img class="logo-center-03" src="{{ asset('img/logo-4.png') }}">
							</div>
						</div>
					</div>
					<div class="terms-wrapper1">
						<div class="terms-wrapper2">
							<div class="row no-gutters">
								<div class="col-4 col-sm-3 col-md-4 col-lg-2">
									<img class="termsPack" src="{{ asset('img/termsPackage.png') }}">
								</div>
								<div class="col-8 col-sm-9 col-md-8 col-lg-6 text-center">
									<div class="Fold-head-wrap01">
										<h3 class="Fold-head01">Medical Strength Testosterone</h3>
										<h1 class="Fold-head02">Get Maximum</h1>
										<h2 class="Fold-head03">Muscle Benefits</h2>
									</div>
								</div>
								<div class="offset-4 offset-sm-4 offset-md-4 offset-lg-0 col-8 col-sm-8 col-md-8 col-lg-4 termsBtn">
									<div class="btn-wrapper">
										<div class="btn-action text-center">
											<a class="btn btn-custom pulsate" href="checkout.php">Order Now</a>
										</div>
										<div class="btn-icons text-center">
											<img src="{{ asset('img/paypal.png') }}">
											<img src="{{ asset('img/visa.png') }}">
											<img src="{{ asset('img/mastercard.png') }}">
											<img src="{{ asset('img/spa.png') }}">
										</div>
									</div>
								</div>
							</div>
						</div>
						@if(isset($seo_content->content))
							{!! $seo_content->content !!}
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
