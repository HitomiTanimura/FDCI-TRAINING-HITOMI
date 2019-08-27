<?php  
	  $name = "";
	if (isset($_POST["name"])) {
      $name = $_POST["name"];
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>week5_part1</title>
</head>
<body>
<h1>Please input your name:</h1>
<form action="week5_part1.php" method="post">
  <input type="text" name="name">
  <input type="submit" value="Submit Name">
</form>
 <div>
 	<h3><?php echo "Hello! " .$name ?></h3>
 </div>
</body>
</html>