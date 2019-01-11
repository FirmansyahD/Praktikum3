<?php
function do_login($username,$password){
    if($username!= "admin "|| $_POST["password"]!="admin"){
        header ("location:index.php?error=wrong");
    }

    if($username== "admin" && $_POST["password"]=="admin"){
        $_SESSION["user"]=$username;
        $_SESSION["password"]=$password;
        header ("location:beranda.php");
    }
}function check_login(){
    if(!isset($_SESSION["user"])){
        header("location:index.php");
    }
}
?>