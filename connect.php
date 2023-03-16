<?php
//mysql://b77485626682e7:44f82f1b@us-cdbr-east-06.cleardb.net/heroku_6523dff62d5f345?reconnect=true
date_default_timezone_set('Europe/Lisbon');//or change to whatever timezone you want

$servername = "us-cdbr-east-06.cleardb.net";
$username = "b77485626682e7";
$password = "44f82f1b";
$dbname = "heroku_6523dff62d5f345";



$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Erro ao ligar DB" . mysqli_connect_error());
}


header('Access-Control-Allow-Methods: POST');


?>