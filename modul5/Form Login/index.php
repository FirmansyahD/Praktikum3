<?php
session_start();
if(isset($_SESSION["user"]))
{
    header("location:beranda.php");
}
include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <?php
    if(isset($_GET["error"]))
    {
        if($_GET["error"]== "wrong"){
                    echo'<h3>username dan password salah</h3>';
        }
    }
        if(isset($_GET["notif"])){
            if($_GET["notif"]){
                echo"<h3> Berhasil Logout";            
            }
        }
        if(isset($_POST["submit"])){
            echo do_login($_POST["username"],$_POST["password"]);
        }
     ?>
        <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <span class="login100-form-title">
					 Login Admin
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "password harus diisi">
                    <input class="input100"  type="text" name="username"placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
	
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "password harus diisi">
                    <input class="input100" type="password"name="password"placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						
						</span>
					</div>
         
         <div class="container-login100-form-btn">
        <input class="login100-form-btn" type="submit" name="submit" value="Sign in">
        </div>
        
        </form>
       
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

        </body>
</html>