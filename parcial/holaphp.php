<?php
//echo "<h1>hola PHP</h1>";
date_default_timezone_set('Europe/Paris');
echo date("Y-m-d h:i:s");
for ($n=1; $n<=6 ; $n++) { 
	echo "<h$n style='color:#$n$n$n;'> Cabecera Nivel $n</h$n>";
	# code...
}
?>
