var SponsorsSlideshowWidget = new Object();

SponsorsSlideshowWidget.checkSource = function( source, link_category_id, post_category_id ) {
	if ( source == 'links' ) {
		document.getElementById(link_category_id).style.display = "block";
		document.getElementById(post_category_id).style.display = "none";
	} else if ( source == 'posts' ) {
		document.getElementById(link_category_id).style.display = "none";
		document.getElementById(post_category_id).style.display = "block";
	}
}
