		
		// BACK TO TO ANCHOR SCRIPT -->
		$(document).ready(function() {
			$("a.anchorLink").anchorAnimate()
			//back to top anchor
			$("a.anchorLink1").anchorAnimate()
			$("a.anchorLink2").anchorAnimate()
			$("a.anchorLink3").anchorAnimate()
			$("a.anchorLink4").anchorAnimate()
		});
		jQuery.fn.anchorAnimate = function(settings) {
		
			settings = jQuery.extend({
				speed : 600
			}, settings);	
			
			return this.each(function(){
				var caller = this
				$(caller).click(function (event) {	
					event.preventDefault()
					var locationHref = window.location.href
					var elementClick = $(caller).attr("href")
					
					var destination = $(elementClick).offset().top;
					$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
						window.location.hash = elementClick
					});
					return false;
				})
			})
		}
