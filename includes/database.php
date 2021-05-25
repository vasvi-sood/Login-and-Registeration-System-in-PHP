<?php

$dbHost ="localhost";
$dbUser ="root";
$dbPassword="";
$dbName= "Project";

//establishing a connection
$conn= mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName);
if($conn)
{
// echo "connection established";
}
else
die("failed to establish connection");


?>