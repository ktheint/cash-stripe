<?php 
 include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Product Price</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<style type="text/css" media="screen">
		.container { margin-top: 30px; }
		.card{ width:300px; margin-bottom: 45px;}
		.card:hover{
			-webkit-transform: scale(1.05);
			-moz-transform: scale(1.05);
			-ms-transform: scale(1.05);
			-o-transform: scale(1.05);
			transform: scale(1.05);
			-webkit-transition: all .4s ease-in-out;
			-o-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;
		}
		.list-group-item{
			border: 0px;
			padding: 5px;
		}
		.price {font-size: 32px;}
		.currency{
			position: relative;
			font-size: 15px;
			top: -15px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">

			<?php

				foreach ($products as $product => $key) {
					echo '<div class="col-md-4">
							<div class="card">
								<div class="card-header text-center">
									<h2 class="price"><span class="currency">$</span>'.$key['price'].'</h2>
								</div>
								<div class="card-body text-center">
									<div class="card-title">
										<h2>'.$key['title'].'</h2>
									</div>
									<ul class="list-group">';

			
								foreach($key['features'] as $feature){
									echo '<li class="list-group-item">'.$feature.'</li>';	
								}
					echo
							
										
									'</ul><br><br>

								 	<form action="stripeAPI.php?id='.$product.'" method="POST">
									  <script
									    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
									    data-key="'.$stripeDetail['publishableKey'].'"
									    data-amount="'.$key['price'].'"
									    data-name="'.$key['title'].'"
									    data-description="Widget"
									    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
									    data-locale="auto">
									  </script>
									</form>
								</div>
							</div>
						</div>';
				}
			?>
			
		</div>
	</div>
</body>
</html>