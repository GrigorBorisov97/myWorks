<?php
$litri = $_POST["litri"];
$km = $_POST["km"];
$comb = $litri / ($km * 0.01);
$fuel = $_POST["gorivo"];
$price = ($litri * $fuel)."лв";
$price1 = $comb * $fuel;
$date = date("Y/m/d   h:i");

if($comb < 5 or $comb > 30){
	echo "Невалидни стойности";
} 
else {
	$txt =$date.'!'.$litri.'!'.$km.'!'.$comb.'!'.$price1.'!'.$fuel.'!'.$price."\r\n";
	
	$file=fopen("fuel.txt", "a");
	fwrite($file, $txt);

echo "Записано в таблицата";
} ?>
<a href="index.php"><input type="submit" value="Върни се"/></a>

