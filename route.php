<?php 

if($_GET['unit']=="dashboard"){
	require_once("unit/dashboard.php");
}

if($_GET['unit']=="profil"){
	require_once("unit/profil.php");
}

if($_GET['unit']=="visimisi"){
	require_once("unit/visimisi.php");
}

if($_GET['unit']=="sejarah"){
	require_once("unit/sejarah.php");
}

if($_GET['unit']=="anggota"){
	require_once("unit/anggota.php");
}

if($_GET['unit']=="balon"){
	require_once("unit/balon.php");
}


if($_GET['unit']=="kontak"){
	require_once("unit/kontak.php");
}

if($_GET['unit']=="giat"){
	require_once("unit/giat.php");
}


if($_GET['unit']=="user"){
	require_once("unit/user.php");
}

?>