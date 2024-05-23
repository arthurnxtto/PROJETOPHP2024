<?php 

$valores = array(4, 8, -7, 9, -6, 3, 5, -1, 2, 10);
$positivo = 0;
$negativo = 0;
$impar = 0;
$par = 0;

for ($i=0; $i < 10; $i++) { 
	if ($valores[$i] < 0) {
		$negativo++;
	} elseif ($valores[$i] > 0) {
		$positivo++;
	} 
}


for ($c=0; $c < 10; $c++) { 
	if ($valores[$c] % 2  == 0) {
		$par++;
	}elseif ($valores[$c] % 2  != 0) {
		$impar++;
	}
}

echo "$negativo números são negativos </br>";
echo "$positivo números são positivos</br>";
echo "$par números são pares </br>";
echo "$impar números são impares";


 ?>