<?php 
$fat = $_REQUEST["numero"];
$resul = 1;
	for($i = $fat; $i > 1; $i--){
		$resul *= $fat; 
		$fat--;
	}
 
echo "<h1>Resultado</h1><br><br><h1>".$resul."</h1><br><br><br>";
 