console.log("dsfsdgjhghfsd");

jQuery(document).ready(function($) {
	/*
	$("select").click(function() {
		var open = $(this).data("isopen");
		if (open) {
			window.location.href = $(this).val();
		}
		//set isopen to opposite so next time when use clicked select box
		//it wont trigger this event
		$(this).data("isopen", !open);
	});*/

	$(".tablica_edu:nth-child(odd)").each(function(index) {
		$(this).addClass("tablica_sivo");
	});
	$(".tablica_leksikon:nth-child(odd)").each(function(index) {
		$(this).addClass("tablica_sivo");
	});
	$(".single-drustva article h2").each(function(index) {
		$(this).addClass("bg-primary trake text-uppercase");
	});
	$(".single-fondovi article h2").each(function(index) {
		$(this).addClass("bg-primary trake text-uppercase");
	});

	$("#drustva_fondovi tbody:nth-child(odd)").each(function(index) {
		$(this).addClass("tablica_sivo");
	});

	//$(".post-categories li a").insertAfter(".kvadrat_kategorije");

	$(".single-item").slick({
		dots: false,
		autoplay: true,
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		centerPadding: "50px",
		arrows: true,
		centerPadding: "60px",
		responsive: [
			{
				breakpoint: 1024,
				settings: "unslick"
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});

	$(".multiple-items").slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		arrows: true,
		centerPadding: "60px",
		responsive: [
			{
				breakpoint: 1024,
				settings: "unslick"
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});
});
