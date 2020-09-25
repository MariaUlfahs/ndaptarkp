<?php
include_once 'includes/kp.inc.php';
include_once 'includes/config.inc.php';
$db = DB();
$pro = new kp($db);

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$pro->id = $id;

	
if($pro->delete_kp()){
	echo "<script>location.href='data_kp.php';</script>";
} else{
	echo "<script>alert('Gagal Hapus Data');location.href='data_kp.php';</script>";
		
}
?>
