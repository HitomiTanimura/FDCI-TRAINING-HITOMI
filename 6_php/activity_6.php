 <?php 

 //////Part 1


 function rectangle($width,$height){
 		$area = $height * $width;
 		echo "A rectangle of length $height and width $width has an area $area";
   }

 	rectangle(2,4);

  	echo "<br>";

 //////Part 2
  
 function Palindrome($string){ 
	if (strrev($string) == $string){ 
		return 1; 
	} 
	else{ 
		return 0; 
	} 
	} 

	$original = "MADAM"; //word
	
	echo "word is $original"."<br>";

	 if(Palindrome($original)){ 
	  echo "$original is Palindrome"; 
	} 
	 else { 
	  echo "$original is Not Palindrome"; 
	} 

 ?>