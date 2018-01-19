<?php


$xmlDoc = new DOMDocument();
$xmlDoc->load("order.xml");

print $xmlDoc->saveXML();



/* function table(){
	


for( $i=1; $i<=8; $i++){
			//echo "x<br>";
			echo "<br>";
			echo "<tr>";
			for( $j=1; $j<=5; $j++){
				echo "<td>","x&nbsp","</td>";
			}
			echo "</tr>";
		}




	
	
	
	
} */



?>