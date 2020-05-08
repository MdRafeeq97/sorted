<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
	<?php
		$json = file_get_contents("http://product_service");
		$obj = json_decode($json);
		$products = $obj->products;
		foreach ($products as $product) {
			echo "<li>$product</li>";
		}
	?>
</ul>s
</body>
</html>>