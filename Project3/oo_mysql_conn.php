<?php
$host ="localhost";
$user = "root";
$password ="";
$dbname ="firstdb";

$mysqli = new mysqli($host,$user,$password) or die ("Could not Connect..");

//select database
$mysqli->select_db($dbname)or die ("Could not Connect Database..");

?>