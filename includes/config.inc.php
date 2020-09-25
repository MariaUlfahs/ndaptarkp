<?php
define('HOST', 'localhost'); 
define('USER', 'root'); 
define('PASSWORD', ''); 
define('DATABASE', 'pendaftaran_kp'); 	
	
	
function DB()
{
   	try {
		$query = null;
		$query = new PDO('mysql:host=localhost;dbname=pendaftaran_kp',"root","");
		$query->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		return $query;
	}
	catch(PDOException $e){
		print "koneksi gagal".$e->getMessage()."<br/>";
		die();
	}
}
?>
