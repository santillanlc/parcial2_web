<?php
	echo "Mi primeswtweer programa en PHP";
	echo "<br><br>";

	echo "dfgdf";
	echo "<h1 style='color:blue;'>Lista de numeros</h1>";
	
	for($i = 0; $i<10; $i++){
		echo $i+1 . "<br>";
	}

	for ($i=0; $i < 10; $i++) { 
		if($i % 2 == 0){
			echo "<div style='border: 1px solid black; padding:30px; width:30px; display:inline-flex; background-color:green;'>";
		} else {
			echo "<div style='border: 1px solid black; padding:30px; width:30px; display:inline-flex; background-color:blue;'>";
		}
		
		echo $i+1;
		echo "</div>";
	}

	echo "<h1>Nombre: Luis Santillan</h1>";
?>