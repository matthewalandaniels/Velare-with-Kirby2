if(window.location.pathname === "/"){
	$('#nav').attr("class", "nav_clear");
	$('#nav_links').attr("class", "nav_links_clear");
	var logo = document.querySelector('svg');
	logo.setAttribute('class', 'logo_clear');
}

$(window).scroll(function () {
	
	if ($(document).scrollTop() > 50) {
    $('#nav').addClass("nav_end");
    $('#nav_links').addClass("nav_links_reg");
    var logo = document.querySelector('#nav_logo');
    logo.setAttribute('class', 'logo_reg');
	}

	else if ($(document).scrollTop() < 50) {
		$('#nav').removeClass("nav_end");
		if (window.location.pathname === "/"){
			$('#nav_links').removeClass("nav_links_reg");
			var logo = document.querySelector('#nav_logo');
    	logo.setAttribute('class', 'logo_clear');
		}
	}
});
