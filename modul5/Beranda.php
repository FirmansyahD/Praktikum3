<?php
session_start();
include("function.php");
echo check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>praktek login session</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <h3><a href="profil.php">Profil</a></h3>
    <?php
if(isset($_POST['logout'])) {
  //Unset cookies and other things you want to
  session_destroy();
  header('Location: index.php'); //Dont forget to redirect
  exit;
}
?>
<form method="POST">
  <input type="submit" name="logout" />
</form>
</body> 
</html>