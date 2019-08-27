<?php  
  if (isset($_POST["submit"])) {
      echo "EMPLOYEENAME: " .$_POST["employeename"] ."<br><br>";
      echo "RATING: " .$_POST["rating"] ."<br><br>";
      echo "MESSAGE: " .$_POST["textarea"] ."<br><br>";
    }  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Week 5 part3</title>
</head>
<body>
	<h1>Company Dinner Feedback Survey</h1>
	<form method="POST">
    <p>Employee name</p>
		<input type="text" name="employeename" required><br>
    <p>How would you rate your overall experience during dinner?</p>
		<select name="rating" required>
			<option></option>
			<option>Excellent</option>
			<option>Very good</option>
			<option>Good</option><br>
			<option>Fair</option>
			<option>Poor</option>
		</select>
		<p> Do you have any other suggestions or comments to help us improve our future events?</p>
		<textarea name="textarea" rows="4" cols="50" placeholder="comments here...."></textarea><br>
		<input type="submit" name="submit">

	</form>
</body>
</html>