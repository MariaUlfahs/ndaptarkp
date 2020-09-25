<?php
/*include "includes/config.inc.php";
$config = new Config();
$db = $config->getConnection();*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pendaftaran KP</title>

    <!-- Bootstrap -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="home.php">Pendaftaran KP</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
		  <li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
		<!--    <li class="dropdown">
		      <a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-book"></span> Menu 1<span class="caret"></span></a>
		        <ul class="dropdown-menu">
				  <li><a href="#"><span class="glyphicon glyphicon-book"></span> Sub Menu 1</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Sub Menu 2</a></li>
				</ul>
		  	</li> 
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Menu 2</a></li>
			<li class="dropdown">
		      <a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-book"></span> Data KP<span class="caret"></span></a>
		        <ul class="dropdown-menu">
				  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Anggota kelompok</a></li>
				  <li><a href="form_kp.php"><span class="glyphicon glyphicon-pencil"></span> Form KP</a></li>
				</ul>
		  	</li> -->
			<li><a href="data_kp.php"><span class="glyphicon glyphicon-book"></span> Data KP</a></li>
			<li><a href="mhs.php"><span class="glyphicon glyphicon-book"></span> Data Mahasiswa</a></li> 
			
			<li><a href="login.php"><span class="glyphicon glyphicon-user" ></span> logout</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
  
    <div class="container">