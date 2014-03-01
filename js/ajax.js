
jQuery(document).ready( function($) {

		var loading = false;
		var loaded = 0;
		function banote_load_next() {
				if (loading || loaded >= 5) {
						return;
				}
				
				loaded ++;
				loading = true;
				if ($("#nav-below .nav-previous a").length == 0) {
						return;
				}
				url = $("#nav-below .nav-previous a").attr('href');
				
				jqxhr = $.ajax({url: url + "?ajax=1",
						        dataType: "json"})
					.done(function(data) {
							$.each(data.posts, function(idx, item) {
									$(item).insertBefore('#nav-below');
							});
							if (typeof(data.next) != 'undefined') {
									$("#nav-below .nav-previous").html(data.next);
							}
							loading = false;
					})
					.fail(function() {alert("error");});

		}

		jQuery(window).scroll(function() {
				if (jQuery(window).scrollTop() + 100  >= jQuery(document).height() - jQuery(window).height()) {
						banote_load_next();
				}
		});
});
