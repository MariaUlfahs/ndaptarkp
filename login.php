<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PENDAFTARAN KERJA PRAKTEK</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<?php
// Start Session
session_start();
// Database connection
require __DIR__ . '/includes/config.inc.php';
$db = DB();
// Application library ( with DemoLib class )
require __DIR__ . '/lib/library.php';
$app = new DemoLib();
$login_error_message = '';
$register_error_message = '';
// check Login request
if (!empty($_POST['btnLogin'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if ($username == "") {
        $login_error_message = 'Username field is required!';
    } else if ($password == "") {
        $login_error_message = 'Password field is required!';
    } else {
        $id = $app->Login($username, $password); // check user login
        if($id > 0)
        {
            $_SESSION['id'] = $id; // Set Session
            header("Location: home.php"); // Redirect user to the home.php
        }
        else
        {
            $login_error_message = 'Invalid login details!';
        }
    }
}
?>
<!---------------------------------------------------------------------------------------
tambahan ini untuk menampilkan login
------------------------------------------------------------------------------------------>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>
                Selamat Datang Di Aplikasi Pendaftaran Kerja Praktek 
            </h2>
        </div>
    </div>
 <br><br><br>   
 
        <div class="col-md-4"></div>
        <div class="col-md-4 well">
            <h4>Login</h4>
            <?php
            if ($login_error_message != "") {
                echo '<div class="alert alert-danger"><strong>Error: </strong> ' . $login_error_message . '</div>';
            }
            ?>
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="">Username/Email</label>
                    <input type="text" name="username" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control"/>
                </div>

                <div class="form-group">
                    <input type="submit" name="btnLogin" class="btn btn-primary" value="Login"/>
                </div>
                <!--<h6>Or</h6>-->
                
            </form>
         <!--   <div class="form-group">
                    <button onclick="location.href='register.php'" class="btn btn-primary"> Register </button>
                </div> -->
        </div>
</div>
<body bgcolor="black" background="phb.jpg" >
</body>
</html> 
<br><br><br><br><br><br>
<?php
include_once 'footer.blade.php';
?>