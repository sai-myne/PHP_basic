<?php 

	
	// conditional statemenst

	// $price = 20;

	// if ($price < 10){
	// 	echo 'the condition is met';
	// } elseif($price < 30){
	// 	echo 'elseif condition met';
	// }else {
	// 	echo 'the conditon is not met';
	// }

	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];

	foreach($products as $product){

		if($product['name'] === 'lightning bolt'){
			break;
		}
		if($product['price'] > 15){
			continue;
		}

		echo $product['name'] . '<br />';

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>


	

</body>
</html>