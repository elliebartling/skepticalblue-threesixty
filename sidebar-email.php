<div id="sidebar-email-capture" class="widget-area">
    <?php
    genesis_before_sidebar_widget_area();
    ?>
    	<div id="email-capture">
			<h2>Get your daily dose of skepticism</h2>
			<p>Subscribe to TSL emails:</p>
	<?php
	dynamic_sidebar( 'Email Sidebar' );
	?>
		</div>
	<?php
    genesis_after_sidebar_widget_area();
    ?>   
</div>