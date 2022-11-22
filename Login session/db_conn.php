<?php


$unmae= "root";
$password = "root";



$conn =  new PDO('mysql:host=localhost;dbname=login',$unmae, $password );

if (!$conn) {
	echo "Connection failed!";
}


// <?php

// $dsn = 'mysql:host=localhost;dbname=gestionproduit_v2';
// $username = 'root';
// $password = 'root';

// try {
// $connection = new PDO($dsn, $username, $password);