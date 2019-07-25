<?php

/////////////////1

$name = [
"iroha" => 8,
"hitomi" => 27,
"jinky" => 25
];

print_r($name);

echo "<br><br>";

foreach ($name as $key => $value) {
	echo "$key is $value year's old!<br>";

};

echo "<br><br>";

/////////////////2

$num = 20;

if($num < 15){
	$new = $num * 2;
} elseif ($num >= 15 && $num < 20) {
	$new = $num * 10;
} else {
	$new = $num / 2;
}

echo "number is $num<br>";
echo "new number is $new";

?>