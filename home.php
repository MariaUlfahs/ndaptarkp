<?php
include_once 'header.blade.php';
include_once 'includes/mhs.inc.php';
include_once 'includes/config.inc.php';
$db = DB();
$pro = new Mhs($db);
$stmt = $pro->readAll();
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<html><body bgcolor="black" background="phb.jpg" ></html>		
<?php
include_once 'footer.blade.php';
?>