<?php  
  if (isset($_POST["submit"])) {
      echo "Username: " .$_POST["name"] ."<br><br>";
      echo "Password: " .$_POST["pp"] ."<br><br>";
      echo "firstname: " .$_POST["firstname"] ."<br><br>";
      echo "lastname: " .$_POST["lastname"] ."<br><br>";
      echo "email: " .$_POST["email"] ."<br><br>";
      echo "Address: " .$_POST["paddress"] ."<br><br>";
      echo "Gender: " .$_POST["gender"] ."<br><br>";
      echo "birthday: " .$_POST["birthday"] ."<br><br>";

    }  
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP activity</title>
</head>
<body>
<h1>Personal Information</h1>
<form method="POST">
  Username:<input type="text" name="name"><br><br>
  Password:<input type="password" name="pp"><br><br>
  Firstname:<input type="text" name="firstname"><br><br>
  Lastname:<input type="text" name="lastname"><br><br>
  Email Address:<input type="email" name="email"><br><br>
  Birthdate:<input type="date" name="birthday"><br><br>
  Present Address:<input type="text" name="paddress"><br><br>
  Gender<br>
  Female: <input type="radio" name="gender" value="girl">
  Male: <input type="radio" name="gender" value="boy"><br><br>
  <input type="checkbox" required>
  Please make my information private<br><br>
  <input type="submit" name="submit" value="SUBMIT"><br><br>
</form>
</body>
</html>