$(function(){
	$('.europe_map').mobilymap({
		position: 'center',
		popupClass: 'bubble',
		markerClass: 'pin',
		popup: true,
		cookies: true,
		caption: true,
		setCenter: true,
		navigation: false,
		navSpeed: 1000,
		navBtnClass: 'navBtn',
		outsideButtons: '.map_buttons a',
		onMarkerClick: function(){},
		onPopupClose: function(){},
		onMapLoad: function(){}
	});
});
