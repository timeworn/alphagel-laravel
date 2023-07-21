$(document).ready(function(){

	$('.aboveTheFold input.form-check-input').click(function() {
		if($('input.b1').is(':checked')) {
			var btnRadio = $('input.b1').val();
			$('.aboveTheFold label.form-check-label').css("background-color", "#fff");
			$('.aboveTheFold label.form-check-label.'+btnRadio).css("background-color", "#fff6d1");
		}
		if($('input.b2').is(':checked')) {
			var btnRadio = $('input.b2').val();
			$('.aboveTheFold label.form-check-label').css("background-color", "#fff");
			$('.aboveTheFold label.form-check-label.'+btnRadio).css("background-color", "#fff6d1");
		}
		if($('input.b3').is(':checked')) {
			var btnRadio = $('input.b3').val();
			$('.aboveTheFold label.form-check-label').css("background-color", "#fff");
			$('.aboveTheFold label.form-check-label.'+btnRadio).css("background-color", "#fff6d1");
		}
	});

});

$(document).ready(function(){

		// if($('input.b1').is(':checked')) {
		// 	var image_hd_tg = "images/gray-bg.png";
		// 	$('#pg_td_img').attr('src', image_hd_tg);
		// 	$('#pg_hd_name').html('STARTER');
		// 	var btnRadio = $('input.b1').val();
		// 	$('.CK-form-wrapper').css("opacity", "0.4");
		// 	$('.CK-form-wrapper.'+btnRadio).css("opacity", "1");
		//
		// 	var image_name = "images/img-packages3.png";
		// 	$('#packageImage').attr('src', image_name);
		//
		// 	$('.totalPrice').html('€99<span class="sp2">,</span>00');
		// 	$('.packageMonth').html('2 Week');
		// 	$('.PackageQuantity').html('14 Sachets');
		//
		// 	$('input#bundleMobile1').attr('checked', false);
		// 	$('input#bundleMobile2').attr('checked', false);
		// 	$('input#bundleMobile3').attr('checked', 'checked');
		//
		// 	$('input#bundleMobile3').prop('checked', true);
		// 	$('input.b1').prop('checked', true);
		//
		// 	$('input.b1').attr('checked', 'checked');
		// 	$('input.b2').attr('checked', false);
		// 	$('input.b3').attr('checked', false);
		//
		// }
		// if($('input.b2').is(':checked')) {
		// 	var btnRadio = $('input.b2').val();
		// 	var image_hd_tg ="images/red-bg.png";
		// 	$('#pg_td_img').attr('src', image_hd_tg);
		// 	$('#pg_hd_name').html('MOST POPULAR');
		// 	$('.CK-form-wrapper').css("opacity", "0.4");
		// 	$('.CK-form-wrapper.'+btnRadio).css("opacity", "1");
		//
		// 	var image_name = "images/img-packages2.png";
		// 	$('#packageImage').attr('src', image_name);
		//
		// 	$('.totalPrice').html('€150<span class="sp2">,</span>00');
		// 	$('.packageMonth').html('1 Month');
		// 	$('.PackageQuantity').html('30 Sachets');
		//
		// 	$('input#bundleMobile1').attr('checked', false);
		// 	$('input#bundleMobile2').attr('checked', 'checked');
		// 	$('input#bundleMobile3').attr('checked', false);
		//
		// 	$('input#bundleMobile2').prop('checked', true);
		// 	$('input.b2').prop('checked', true);
		//
		// 	$('input.b1').attr('checked', false);
		// 	$('input.b2').attr('checked', 'checked');
		// 	$('input.b3').attr('checked', false);
		// }
		// if($('input.b3').is(':checked')) {
		//
		// 	var btnRadio = $('input.b3').val();
		// 	var image_hd_tg ="images/yellow-bg.png";
		// 	$('#pg_td_img').attr('src', image_hd_tg);
		// 	$('#pg_hd_name').html('BEST DEAL');
		// 	$('.CK-form-wrapper').css("opacity", "0.4");
		// 	$('.CK-form-wrapper.'+btnRadio).css("opacity", "1");
		//
		// 	var image_name = "images/img-packages.png";
		// 	$('#packageImage').attr('src', image_name);
		//
		// 	$('.totalPrice').html('€300<span class="sp2">,</span>00');
		// 	$('.packageMonth').html('3 Month');
		// 	$('.PackageQuantity').html('90 Sachets');
		//
		// 	$('input#bundleMobile1').attr('checked', 'checked');
		// 	$('input#bundleMobile2').attr('checked', false);
		// 	$('input#bundleMobile3').attr('checked', false);
		//
		// 	$('input#bundleMobile1').prop('checked', true);
		// 	$('input.b3').prop('checked', true);
		//
		// 	$('input.b1').attr('checked', false);
		// 	$('input.b2').attr('checked', false);
		// 	$('input.b3').attr('checked', 'checked');
		//
		// }
		// $('input.bundles').click(function() {
		// 	if($('input.b1').is(':checked')) {
		// 		var image_hd_tg = "images/gray-bg.png";
		// 		$('#pg_td_img').attr('src', image_hd_tg);
		// 		$('#pg_hd_name').html('STARTER');
		// 		var btnRadio = $('input.b1').val();
		// 		$('.CK-form-wrapper').css("opacity", "0.4");
		// 		$('.CK-form-wrapper.'+btnRadio).css("opacity", "1");
		//
		// 		var image_name = "images/img-packages3.png";
		// 		$('#packageImage').attr('src', image_name);
		//
		// 		$('.totalPrice').html('€99<span class="sp2">,</span>00');
		// 		$('.packageMonth').html('2 Week');
		// 		$('.PackageQuantity').html('14 Sachets');
		//
		// 		$('input#bundleMobile1').attr('checked', false);
		// 		$('input#bundleMobile2').attr('checked', false);
		// 		$('input#bundleMobile3').attr('checked', 'checked');
		//
		// 		$('input#bundleMobile3').prop('checked', true);
		// 		$('input.b1').prop('checked', true);
		//
		// 		$('input.b1').attr('checked', 'checked');
		// 		$('input.b2').attr('checked', false);
		// 		$('input.b3').attr('checked', false);
		//
		// 	}
		// 	if($('input.b2').is(':checked')) {
		// 		var btnRadio = $('input.b2').val();
		// 		var image_hd_tg ="images/red-bg.png";
		// 		$('#pg_td_img').attr('src', image_hd_tg);
		// 		$('#pg_hd_name').html('MOST POPULAR');
		// 		$('.CK-form-wrapper').css("opacity", "0.4");
		// 		$('.CK-form-wrapper.'+btnRadio).css("opacity", "1");
		//
		// 		var image_name = "images/img-packages2.png";
		// 		$('#packageImage').attr('src', image_name);
		//
		// 		$('.totalPrice').html('€150<span class="sp2">,</span>00');
		// 		$('.packageMonth').html('1 Month');
		// 		$('.PackageQuantity').html('30 Sachets');
		//
		// 		$('input#bundleMobile1').attr('checked', false);
		// 		$('input#bundleMobile2').attr('checked', 'checked');
		// 		$('input#bundleMobile3').attr('checked', false);
		//
		// 		$('input#bundleMobile2').prop('checked', true);
		// 		$('input.b2').prop('checked', true);
		//
		// 		$('input.b1').attr('checked', false);
		// 		$('input.b2').attr('checked', 'checked');
		// 		$('input.b3').attr('checked', false);
		// 	}
		// 	if($('input.b3').is(':checked')) {
		//
		// 		var btnRadio = $('input.b3').val();
		// 		var image_hd_tg ="images/yellow-bg.png";
		// 		$('#pg_td_img').attr('src', image_hd_tg);
		// 		$('#pg_hd_name').html('BEST DEAL');
		// 		$('.CK-form-wrapper').css("opacity", "0.4");
		// 		$('.CK-form-wrapper.'+btnRadio).css("opacity", "1");
		//
		// 		var image_name = "images/img-packages.png";
		// 		$('#packageImage').attr('src', image_name);
		//
		// 		$('.totalPrice').html('€300<span class="sp2">,</span>00');
		// 		$('.packageMonth').html('3 Month');
		// 		$('.PackageQuantity').html('90 Sachets');
		//
		// 		$('input#bundleMobile1').attr('checked', 'checked');
		// 		$('input#bundleMobile2').attr('checked', false);
		// 		$('input#bundleMobile3').attr('checked', false);
		//
		// 		$('input#bundleMobile1').prop('checked', true);
		// 		$('input.b3').prop('checked', true);
		//
		// 		$('input.b1').attr('checked', false);
		// 		$('input.b2').attr('checked', false);
		// 		$('input.b3').attr('checked', 'checked');
		//
		// 	}
		// });
});

$(document).ready(function(){

	// $('input.MobileBundles').click(function() {
	// 	if($('input#bundleMobile1').is(':checked')) {
	// 		$('input.b3').prop('checked', true);
	// 		var btnRadio = $('input.b3').val();
	// 		var image_hd_tg ="images/yellow-bg.png";
	// 		$('#pg_td_img').attr('src', image_hd_tg);
	// 		$('#pg_hd_name').html('BEST DEAL');
	// 		$('.CK-form-wrapper').css("opacity", "0.4");
	// 		$('.CK-form-wrapper.'+btnRadio).css("opacity", "1");
	//
	// 		var image_name = "images/img-packages.png";
	// 		$('#packageImage').attr('src', image_name);
	//
	// 		$('.totalPrice').html('€300<span class="sp2">,</span>00');
	// 		$('.packageMonth').html('3 Month');
	// 		$('.PackageQuantity').html('90 Sachets');
	//
	// 		$('input#bundleMobile1').attr('checked', 'checked');
	// 		$('input#bundleMobile2').attr('checked', false);
	// 		$('input#bundleMobile3').attr('checked', false);
	//
	// 		$('input#bundleMobile1').prop('checked', true);
	// 		$('input.b3').prop('checked', true);
	//
	// 		$('input.b1').attr('checked', false);
	// 		$('input.b2').attr('checked', false);
	// 		$('input.b3').attr('checked', 'checked');
	//
	//
	// 	}
	// 	if($('input#bundleMobile2').is(':checked')) {
	// 		$('input.b2').prop('checked', true);
	// 		var btnRadio = $('input.b2').val();
	// 		var image_hd_tg ="images/red-bg.png";
	// 		$('#pg_td_img').attr('src', image_hd_tg);
	// 		$('#pg_hd_name').html('MOST POPULAR');
	// 		$('.CK-form-wrapper').css("opacity", "0.4");
	// 		$('.CK-form-wrapper.'+btnRadio).css("opacity", "1");
	//
	// 		var image_name = "images/img-packages2.png";
	// 		$('#packageImage').attr('src', image_name);
	//
	// 		$('.totalPrice').html('€150<span class="sp2">,</span>00');
	// 		$('.packageMonth').html('1 Month');
	// 		$('.PackageQuantity').html('30 Sachets');
	//
	// 		$('input#bundleMobile1').attr('checked', false);
	// 		$('input#bundleMobile2').attr('checked', 'checked');
	// 		$('input#bundleMobile3').attr('checked', false);
	//
	// 		$('input#bundleMobile2').prop('checked', true);
	// 		$('input.b2').prop('checked', true);
	//
	// 		$('input.b1').attr('checked', false);
	// 		$('input.b2').attr('checked', 'checked');
	// 		$('input.b3').attr('checked', false);
	//
	// 	}
	// 	if($('input#bundleMobile3').is(':checked')) {
	// 		$('input.b1').prop('checked', true);
	// 		var btnRadio = $('input.b1').val();
	// 		var image_hd_tg = "images/gray-bg.png";
	// 		$('#pg_td_img').attr('src', image_hd_tg);
	// 		$('#pg_hd_name').html('STARTER');
	// 		$('.CK-form-wrapper').css("opacity", "0.4");
	// 		$('.CK-form-wrapper.'+btnRadio).css("opacity", "1");
	//
	// 		var image_name = "images/img-packages3.png";
	// 		$('#packageImage').attr('src', image_name);
	//
	// 		$('.totalPrice').html('€99<span class="sp2">,</span>00');
	// 		$('.packageMonth').html('2 Week');
	// 		$('.PackageQuantity').html('14 Sachets');
	//
	// 		$('input#bundleMobile1').attr('checked', false);
	// 		$('input#bundleMobile2').attr('checked', false);
	// 		$('input#bundleMobile3').attr('checked', 'checked');
	//
	// 		$('input#bundleMobile3').prop('checked', true);
	// 		$('input.b1').prop('checked', true);
	//
	// 		$('input.b1').attr('checked', 'checked');
	// 		$('input.b2').attr('checked', false);
	// 		$('input.b3').attr('checked', false);
	// 	}
	// 	$('input.MobileBundles').click(function() {
	// 		if($('input#bundleMobile1').is(':checked')) {
	// 			$('input.b3').prop('checked', true);
	// 			var btnRadio = $('input.b3').val();
	// 			var image_hd_tg ="images/yellow-bg.png";
	// 			$('#pg_td_img').attr('src', image_hd_tg);
	// 			$('#pg_hd_name').html('BEST DEAL');
	// 			$('.CK-form-wrapper').css("opacity", "0.4");
	// 			$('.CK-form-wrapper.'+btnRadio).css("opacity", "1");
	//
	// 			var image_name = "images/img-packages.png";
	// 			$('#packageImage').attr('src', image_name);
	//
	// 			$('.totalPrice').html('€300<span class="sp2">,</span>00');
	// 			$('.packageMonth').html('3 Month');
	// 			$('.PackageQuantity').html('90 Sachets');
	//
	// 			$('input#bundleMobile1').attr('checked', 'checked');
	// 			$('input#bundleMobile2').attr('checked', false);
	// 			$('input#bundleMobile3').attr('checked', false);
	//
	// 			$('input#bundleMobile1').prop('checked', true);
	// 			$('input.b3').prop('checked', true);
	//
	// 			$('input.b1').attr('checked', false);
	// 			$('input.b2').attr('checked', false);
	// 			$('input.b3').attr('checked', 'checked');
	//
	//
	// 		}
	// 		if($('input#bundleMobile2').is(':checked')) {
	// 			$('input.b2').prop('checked', true);
	// 			var btnRadio = $('input.b2').val();
	// 			var image_hd_tg ="images/red-bg.png";
	// 			$('#pg_td_img').attr('src', image_hd_tg);
	// 			$('#pg_hd_name').html('MOST POPULAR');
	// 			$('.CK-form-wrapper').css("opacity", "0.4");
	// 			$('.CK-form-wrapper.'+btnRadio).css("opacity", "1");
	//
	// 			var image_name = "images/img-packages2.png";
	// 			$('#packageImage').attr('src', image_name);
	//
	// 			$('.totalPrice').html('€150<span class="sp2">,</span>00');
	// 			$('.packageMonth').html('1 Month');
	// 			$('.PackageQuantity').html('30 Sachets');
	//
	// 			$('input#bundleMobile1').attr('checked', false);
	// 			$('input#bundleMobile2').attr('checked', 'checked');
	// 			$('input#bundleMobile3').attr('checked', false);
	//
	// 			$('input#bundleMobile2').prop('checked', true);
	// 			$('input.b2').prop('checked', true);
	//
	// 			$('input.b1').attr('checked', false);
	// 			$('input.b2').attr('checked', 'checked');
	// 			$('input.b3').attr('checked', false);
	//
	// 		}
	// 		if($('input#bundleMobile3').is(':checked')) {
	// 			$('input.b1').prop('checked', true);
	// 			var btnRadio = $('input.b1').val();
	// 			var image_hd_tg = "images/gray-bg.png";
	// 			$('#pg_td_img').attr('src', image_hd_tg);
	// 			$('#pg_hd_name').html('STARTER');
	// 			$('.CK-form-wrapper').css("opacity", "0.4");
	// 			$('.CK-form-wrapper.'+btnRadio).css("opacity", "1");
	//
	// 			var image_name = "images/img-packages3.png";
	// 			$('#packageImage').attr('src', image_name);
	//
	// 			$('.totalPrice').html('€99<span class="sp2">,</span>00');
	// 			$('.packageMonth').html('2 Week');
	// 			$('.PackageQuantity').html('14 Sachets');
	//
	// 			$('input#bundleMobile1').attr('checked', false);
	// 			$('input#bundleMobile2').attr('checked', false);
	// 			$('input#bundleMobile3').attr('checked', 'checked');
	//
	// 			$('input#bundleMobile3').prop('checked', true);
	// 			$('input.b1').prop('checked', true);
	//
	// 			$('input.b1').attr('checked', 'checked');
	// 			$('input.b2').attr('checked', false);
	// 			$('input.b3').attr('checked', false);
	// 		}
	// 	});
});

$(document).ready(function(){
		$('input.form-check-input').click(function(e) {

			if($('.form-head-wrap02').hasClass('checked')) {
				$('.form-head-wrap02').removeClass('checked')
			}
			$('.form-head-product-' + e.target.value).addClass('checked');
		});
// 	$('input.form-check-input').click(function() {
// 		if($('input.c1').is(':checked')) {
// 			var btnRadio = $('input.c1').val();
// 			$('.form-check-label3').css("background-color", "#fff");
// 			$('.form-check-label3.'+btnRadio).css("background-color", "#0074ff");
// 		}
// 		if($('input.c2').is(':checked')) {
// 			var btnRadio = $('input.c2').val();
// 			$('.form-check-label3').css("background-color", "#fff");
// 			$('.form-check-label3.'+btnRadio).css("background-color", "#0074ff");
// 		}
// 		if($('input.c3').is(':checked')) {
// 			var btnRadio = $('input.c3').val();
// 			$('.form-check-label3').css("background-color", "#fff");
// 			$('.form-check-label3.'+btnRadio).css("background-color", "#0074ff");
// 		}
// 	});
});

$(document).ready(function(){
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
    	$(this).prev(".btn-link").find(".fas").addClass("fa-chevron-down").removeClass("fa-chevron-right");
    	$(this).prev(".btn-link").addClass("show");
    });
    
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
    	$(this).prev(".btn-link").find(".fas").removeClass("fa-chevron-right").addClass("fa-chevron-down");
    	$(this).prev(".btn-link").addClass("show");

    }).on('hide.bs.collapse', function(){
    	$(this).prev(".btn-link").find(".fas").removeClass("fa-chevron-down").addClass("fa-chevron-right");
    	$(this).prev(".btn-link").removeClass("show");
    });
});

$(".dropdown-menu a li").click(function () {
    var selText = $(this).text();
    var imgSource = $(this).find('img').attr('src');
    var img = '<img src="' + imgSource + '"/>';    
    $(this).parents('.btn-group').find('.dropdown-toggle').html(img + ' ' + selText + ' <span class="caret"></span>');
});
