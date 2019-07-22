<?php 

///////////part1

$food = ["apple","orange","tomato","stroberry","lemon"];

print_r($food);

echo "<br>";

for ($i=0; $i < count($food); $i++) { 
	echo $food[$i] ."<br>";
}

///////////part2

$num = [1,2,3,4];

print_r($num);

echo "<br>";

for ($i=0; $i < count($num); $i++) { 
	$number = $num[$i] * 3;
	echo $number . "<br>";
}

///////////part3
	
$number2 = [1,2,3,4,5];

print_r($number2);

echo "<br>";

for ($i=4; $i < count($number2) && $i >= 0; $i--) {
	$result = $number2[$i];
	echo $result. "<br>";

}


?>