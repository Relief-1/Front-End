     // PAGE LOADING TRANSITIONS
	 $(document).ready(function() {
				$(".being_survivor").addClass('active')
			});
    
    	// HIDE INPUT'S VALUE SCRIPT
        window.onload = function() {
              applyDefaultValue(document.getElementById('email','email2'), 'enter your email to receive updates');
            }
            function applyDefaultValue(elem, val) {
              elem.style.color = '#BBB';
              elem.value = val;
              elem.onfocus = function() {
                if(this.value == val) {
                  this.style.color = '';
                  this.value = '';
                }
              }
              elem.onblur = function() {
                if(this.value == '') {
                  this.style.color = '#BBB';
                  this.value = val;
                }
              }
            }
     
      	// SLIDING DIV SURVIVOR
		$(document).ready(function(){
		$('.being_survivor').click(function(){
			if ($(".slidingDiv_survivor").is(":hidden")) {

			  // Sliding div that contain "SURVIVOR"	
			  $(".slidingDiv_survivor").fadeIn("fast");
			  // hide the 2 other divs	
			  $(".slidingDiv_volunteer").hide();
			  $(".slidingDiv_organization").hide();
			  			  
			} else {
				
			}
		});
		});
		
        // SLIDING DIV VOLUNTEER 
		$(document).ready(function(){
		$('.being_volunteer').click(function(){
			if ($(".slidingDiv_volunteer").is(":hidden")) {

			  // Sliding div that contain "SURVIVOR"	
			  $(".slidingDiv_volunteer").fadeIn("fast");
			  // hide the 2 other divs	
			  $(".slidingDiv_survivor").hide();
			  $(".slidingDiv_organization").hide();
			  				  
			} else {
			}
		});
		});
		
        // SLIDING DIV ORGANIZATION 
		$(document).ready(function(){
		$('.being_organization').click(function(){
			if ($(".slidingDiv_organization").is(":hidden")) {

			  // Sliding div that contain "SURVIVOR"	
			  $(".slidingDiv_organization").fadeIn("fast");
			  // hide the 2 other divs	
			  $(".slidingDiv_survivor").hide();
			  $(".slidingDiv_volunteer").hide();
			  				  
			} else {
			}
		});
		});
		
        // BUTTONS PRESSED STATES
		$(document).ready(function() {
			var navItems = $('[class^=being_]');
			navItems.click(function(){
				 navItems.removeClass('active')
			 $(this).addClass('active')
			});
		})
    
        // BACK TO TO ANCHOR SCRIPT 
		$(document).ready(function() {
			$("a.anchorLink").anchorAnimate()
			//back to top anchor
			$("a.anchorLink1").anchorAnimate()
			$("a.anchorLink2").anchorAnimate()
			$("a.anchorLink3").anchorAnimate()
		});
		jQuery.fn.anchorAnimate = function(settings) {
		
			settings = jQuery.extend({
				speed : 800
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