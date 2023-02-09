<?php
	$servidor="localhost";
	$banco="dbGlossario";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		
?>