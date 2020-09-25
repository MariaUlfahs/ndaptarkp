<?php
include_once 'includes/mhs.inc.php';
include_once 'includes/config.inc.php';
$db = DB();
$pro = new Mhs($db);
//$stmt = $pro->readAll();
/*
include_once "includes/config.inc.php";
$database = new Config();
$db = $database->getConnection(); */

//include_once 'includes/mhs.inc.php';
//$pro = new Mhs($db);
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$pro->id = $id;
	
if($pro->delete()){
	echo "<script>location.href='mhs.php';</script>";
} else{
	echo "<script>alert('Gagal Hapus Data');location.href='index.php';</script>";
		
}
?>
