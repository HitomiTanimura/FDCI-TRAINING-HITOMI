<?php  

$x = 0;    
	$y = 1; 

for($i=0;$i<=11;$i++)    
	{    
    	$z = $x + $y;    
    	echo $i.":  ".$z."<br>"; 

	    $x=$y;       
	    $y=$z;     
	}   





?>