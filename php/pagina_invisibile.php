<?php

	session_start();
	
	$_SESSION["valueRosso"] = $_POST["hRosso"];
	$_SESSION["valueVerde"] = $_POST["hVerde"];
	$_SESSION["valueBlu"] = $_POST["hBlu"];
	$_SESSION["valueViola"] = $_POST["hViola"];
	$_SESSION["valueGiallo"] = $_POST["hGiallo"];
	//echo "rosso ".$_POST["hRosso"];
     echo "dati inviati correttamente";
   
    file_put_contents("../dati.txt", json_encode($_SESSION));


?>
