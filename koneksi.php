<?php

$host		="localhost";
$user		="root";
$password	="";
$database	="skripsi";

$kon=mysqli_connect($host,$user,$password,$database);
if (mysqli_connect_errno()) {
	echo "eror".mysqli_connect_error();
}
 ?>
