jQuery(document).ready( function sb_embedly_add_class() {
	jQuery("div.entry-content a").last().addClass("embedly-card");
	jQuery("div.entry-content a").last().attr("data-card-align","left");
	jQuery("div.entry-content a").last().attr("data-card-controls","0");
	jQuery("div.entry-content a").last().attr("data-card-chrome","1");
});