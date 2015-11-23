<?php

function paypal_button() {
	echo '<button type="button" class="donation-button" id="paypal">donate with<img src="http://localhost:5757/wordpress-TSL/wp-content/themes/skepticalblue/img/paypal-logo.png"></button>';
}

add_shortcode('paypal_button', 'paypal_button');

function coinbase_button() {
	echo '<button type="button" class="donation-button" id="coinbase">donate with<img src="http://localhost:5757/wordpress-TSL/wp-content/themes/skepticalblue/img/coinbase-logo.png"></button>';
}

add_shortcode('coinbase_button', 'coinbase_button');

function swag_button() {
	echo '<button href="http://www.zazzle.com/skepticliberty" target="_blank" type="button" class="donation-button" id="swag-store">TSL Swag Store</button>';
}
add_shortcode('swag_button', 'swag_button');

function amazon_button() {
	echo '<button href="http://localhost:5757/wordpress-TSL/donate/www.amazon.com/?&tag=theskeptliber-20&camp=216797&creative=394565&linkCode=ur1&adid=0WDDJAP7G0BZXE8HK8N9&&ref-refURL=http%3A%2F%2Frcm.amazon.com%2Fe%2Fcm%3Ft%3Dtheskeptliber-20%26o%3D1%26p%3D12%26l%3Dur1%26category%3Damazonhomepage%26f%3Difr" target="_blank" type="button" class="donation-button" id="amazon">Shop with Amazon<img src="http://localhost:5757/wordpress-TSL/wp-content/themes/skepticalblue/img/amazon-logo.png"></button>';
}
add_shortcode('amazon_button', 'amazon_button');