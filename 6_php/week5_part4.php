<?php  
	if ($_POST) {
		$word = $_POST["word"];
		$reverse = strrev($word); 
	}

	if ($word == $reverse) {
		echo "$word is palindrome";
	} else {
		echo "$word is not palindrome";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>week5_part4</title>
</head>
<body>
<h1>Is palindrome?</h1>
<form method="POST">
	Word to check:
	<input type="text" name="word">
	<input type="submit" name="submit" value="CHECK">

</form>
</body>
</html>