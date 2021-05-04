<?php
include "config.php";

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];
$email = $_POST['stripeEmail'];
$p = $_GET['id'];

if(!isset($products[$p])){
	var_dump('hi');
	header("Location: index.php");
	exit();
}

$charge = \Stripe\Charge::create([
    'amount' => 999,
    'currency' => 'usd',
    'description' => 'Example charge',
    'source' => $token,
]);
?>