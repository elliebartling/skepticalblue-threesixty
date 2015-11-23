<div id="sidebar-email-capture" class="widget-area">
    <?php
    genesis_before_sidebar_widget_area();
    ?>
    	<div id="email-capture">
			<h2>Get your daily dose of skepticism</h2>
			<p>Subscribe to TSL emails:</p>
<section id="blog_subscription-3" class="widget jetpack_subscription_widget"><div class="widget-wrap">			<form action="#" method="post" accept-charset="utf-8" id="subscribe-blog-blog_subscription-3">
				<div id="subscribe-text"></div>					<p id="subscribe-email">
						<label id="jetpack-subscribe-label" for="subscribe-field-blog_subscription-3; ?>" style="clip: rect(1px 1px 1px 1px); position: absolute; height: 1px; width: 1px; overflow: hidden;">
							Email Address						</label>
						<input type="email" name="email" required="required" class="required" value="" id="subscribe-field-blog_subscription-3" placeholder="Email Address">
					</p>

					<p id="subscribe-submit">
						<input type="hidden" name="action" value="subscribe">
						<input type="hidden" name="source" value="http://blog.skepticallibertarian.com/2014/09/16/by-the-numbers-did-more-people-die-from-the-swine-flu-vaccine-than-from-swine-flu/">
						<input type="hidden" name="sub-type" value="widget">
						<input type="hidden" name="redirect_fragment" value="blog_subscription-3">
						<input type="hidden" id="_wpnonce" name="_wpnonce" value="b87c24d325">						<input type="submit" value="Subscribe" name="jetpack_subscriptions_widget">
					</p>
							</form>

			<script>
			/*
			Custom functionality for safari and IE
			 */
			(function( d ) {
				// Creates placeholders for IE
				if ( ( 'placeholder' in d.createElement( 'input' ) ) ) {
					var label = d.getElementById( 'jetpack-subscribe-label' );
						label.style.clip 	 = 'rect(1px, 1px, 1px, 1px)';
						label.style.position = 'absolute';
						label.style.height   = '1px';
						label.style.width    = '1px';
						label.style.overflow = 'hidden';
				}

				// Make sure the email value is filled in before allowing submit
				var form = d.getElementById('subscribe-blog-blog_subscription-3'),
					input = d.getElementById('subscribe-field-blog_subscription-3'),
					handler = function( event ) {
						if ( '' === input.value ) {
							input.focus();

							if ( event.preventDefault ){
								event.preventDefault();
							}

							return false;
						}
					};

				if ( window.addEventListener ) {
					form.addEventListener( 'submit', handler, false );
				} else {
					form.attachEvent( 'onsubmit', handler );
				}
			})( document );
			</script>
				
</div></section>
		</div>
	<?php
    genesis_after_sidebar_widget_area();
    ?>   
</div>