<?php 

	$array = ["sinigang", "tomato", "mango","banana"];
	print_r($array);

	echo "<br>";

	echo $array[0];

	echo "<br>";

	//////////////////////////

	echo $array[count($array) - 1];

	array_pop($array);

	array_push($array,"pasta"); 

	echo "<br>";

	print_r($array);

	//////////////////////////

	echo "<br>";

	$country = [
		"japan" => "tokyo",
		"korea" => "seoul",
		"china" => "beijing"
	];

	print_r($country);
	echo "<br>";

	echo end($country); 
	echo "<br>";

	echo count($country);
	echo "<br>";

	$country["malaysia"] = "kuala lumpur"; // [] is for key, = value

   //array_push($country, array("Japan" => "Tokyo"));
	
	print_r($country);


?>