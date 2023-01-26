<?php
$hostname="localhost";
$username ="root";
$password="";
$dbname="tt";

$dbc=mysqli_connect($hostname,$username,$password,$dbname) or die("couldnot connect to dtabase".mysqli_connect_error());
mysqli_set_charset($dbc,"utf8");
include('index.php');

           
?>









