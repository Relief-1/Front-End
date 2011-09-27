// PINS REMAIN BLUE ONCE SELECTED 
$(document).ready(function() {
	var navItems = $('[class^=pin]');
		navItems.click(function(){
			 navItems.removeClass('pinactive')
		 $(this).addClass('pinactive')
		});
})