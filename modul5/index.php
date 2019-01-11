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
    <title>Document</title>
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
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        username: <input type="text" name="username"><br>
        Password: <input type="password"name="password"><br>
        <input type="submit" name="submit" value="Sign in">
        </form>
        </body>
</html>