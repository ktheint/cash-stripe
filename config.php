<?php
	include "stripe-php-master/init.php";
	include "product.php";

	$stripeDetail = [
		'secretKey' => 'sk_test_q2c2PKgRO2oCGZgOxa68WyWk',
		'publishableKey' => 'pk_test_s5NBFoFMcFTEPeBhVU7Ik6f6'
	];
	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetail['secretKey']);
?>