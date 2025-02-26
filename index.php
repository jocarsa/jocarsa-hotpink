<?php

	include "jocarsa | hotpink.php";
	
	hotpink::deMySQL("localhost","oldlace","oldlace","oldlace","productos")->aCSV("salida.csv");
	hotpink::deMySQL("localhost","oldlace","oldlace","oldlace","productos")->aXML("salida.xml");
	hotpink::deMySQL("localhost","oldlace","oldlace","oldlace","productos")->aJSON("salida.json");
	hotpink::deMySQL("localhost","oldlace","oldlace","oldlace","productos")->aSQLite("salida.sqlite3");

?>
