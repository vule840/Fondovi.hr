console.log("dsfsdgjhghfsd");

jQuery(document).ready(function($) {
	$(".tablica_edu").each(function(index) {
		$(this)
			.find("tbody:nth-child(odd)")
			.addClass("tablica_sivo");
	});

	$(".single-item").slick({
		dots: true,
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
		slidesToShow: 4,
		slidesToScroll: 4,
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
