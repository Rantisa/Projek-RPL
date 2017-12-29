<?php
$server = "localhost";
$user = "root";
$password="";
$database ="menwa";
$mysqli = mysqli_connect($server,$user,$password,$database);

if(mysqli_connect_errno($mysqli)){
	echo "Failed to connect to MySQL:"
	.mysqli_connect_errno();
	}/*
	else{
	echo "Koneksi Berhasil";
	}*/
?>
