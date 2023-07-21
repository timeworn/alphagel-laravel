@extends('layouts.app_main')

@section('content')
	<?php
	$checkOut = 'Open';
	?>
	<section class="checkout">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-12 checkout-headings">
					<div class="head-wrapper">
						<div class="row no-gutters">
							<div class="col-6 col-sm-6 col-md-6 col-lg-3 order-1 order-sm-1 order-md-1 order-lg-1">
								<div class="logo-wrapper">
									<img class="content-logo" src="{{ asset('img/logo-1.png') }}">
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
								<h3 class="ckOfferHead01"><img class="ckOfferIcon" src="{{ asset('img/icon-09.png') }}">Generic SEPA Payment</h3>
							</div>
						</div>
						<div class="col-12">
							<div class="ckOffer-heading-03 text-center">
							<!-- <h5>Current Availability : <img class="ck-battery" src="{{ asset('img/battery.png') }}"> <span class="ck1">LOW STOCK. </span>Sell out Risk : <span class="ck2">HIGH</span></h5> -->
							</div>
							<div class="ckOffer-heading-04 text-center">
								<h3 class="ck04-head02">Bank Detail</h3>
								<h6 class="ck04-head01">Thank you customer, pay now via bank transfer.</h6>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="ckOffer-heading-02 text-center">
										<table class="table table-striped">
											<thead>
											<tr>
												<th>Bestellnummer</th>
												<th>101792</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>bestellet produkte</td>
												<td>1 Original Testpakete 139. EUR</td>
											</tr>
											<tr>
												<td>Versendungstart</td>
												<td>Experss Versand(4-7 Werktage)19.99 EUR</td>
											</tr>
											<tr>
												<td>Versicherung</td>
												<td>3.95 EUR</td>
											</tr>
											<tr>
												<td>Gesamtbertrag</td>
												<td>163.44EUR</td>
											</tr>
											<tr>
												<td>Name</td>
												<td>Ali</td>
											</tr>
											<tr>
												<td>E-Mail</td>
												<td>Aphagel@gmail.com</td>
											</tr>
											<tr>
												<td>telefonnummer</td>
												<td>7571132512</td>
											</tr>
											<tr>
												<td>Land</td>
												<td>Deutshland</td>
											</tr>
											<tr>
												<td>Ort</td>
												<td>adddkdkedi</td>
											</tr>
											<tr>
												<td>Address</td>
												<td>woked iet street, qotlrld</td>
											</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-md-6">
									<div class="ckOffer-heading-02 text-center">
										<table class="table table-striped">
											<thead>
											<tr>
												<th>Bankverbindung</th>
												<th></th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>Empfanger</td>
												<td>Dinezia</td>
											</tr>
											<tr>
												<td>BIN</td>
												<td>PL34 1.20 4900 000 8152 1615 1561</td>
											</tr>
											<tr>
												<td>BIC</td>
												<td>BPKOPLPW</td>
											</tr>
											<tr>
												<td>Verwendungszweck</td>
												<td>Bestellnummer 101792</td>
											</tr>
											<tr>
												<td>Betrag</td>
												<td>163.44EUR</td>
											</tr>
											</tbody>
										</table>
										<h6>Ale Zahlugen via Bankuberweisung gehen bei uns am nachsten Tag nach der Bezahung ein.</h6>
										<h6>Nach dem Zahlungseingang werden wir Ihre Bestellung innerhalb von 24 stunden versenden.</h6>
										<h6>Solten sie Fragen zu Ihrer Bestellung,m Lieferung oder Rechnung haben, Aogern site bitte nicht unseren Kundersevice per E-Mail uder...</h6>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="checkOutFormWrapper">
						<div class="row">
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
@endsection
