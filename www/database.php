<?php
$dbhost = "mariadb";
$dbname = "Muziekstore";
$dbuser = "root";
$dbpass = "password";

// $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);



// Check connection
if (!$conn) {
  // die("Connection failed: " . mysqli_connect_error());
}


 