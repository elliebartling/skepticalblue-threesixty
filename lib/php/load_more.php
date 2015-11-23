// "Load More" content buttons

function load_more() {
	if(is_author()){
			$author = get_the_author_meta('ID');
			echo do_shortcode('[ajax_load_more author="'.$author.'" post_type="post" scroll="false" images_loaded="true" button_label="More" css_classes="post one-half teaser content grid"]');
	}
	if(is_category()){
			$cur_cat_id = get_cat_id( single_cat_title("",false) ); 
			$category = get_cat_slug($cur_cat_id);	?>
	    <h1><span>Category:</span> <?php echo single_cat_title('', false );?> </h1>
	    <?php
			echo do_shortcode('[ajax_load_more category="'.$category.'"post_type="post" scroll="false" images_loaded="true" button_label="More" css_classes="post one-half teaser"]');
	}
	if(is_tag()){ ?>
	    <h1><span>Tag:</span> <?php echo single_cat_title('', false );?></h1>
	    <?php
			$tag = get_query_var('tag'); 
			echo do_shortcode('[ajax_load_more tag="'.$tag.'"post_type="post" scroll="false" images_loaded="true" button_label="More" css_classes="post one-half teaser"]');
	}
}

add_action('genesis_after_content','load_more');