<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <table>
    <tr>
    <td>NIS</td>
    <td><input type="text"name="nis" size=40></td>    
    </tr>
    <tr>
    <td>Nama</td>
    <td><input type="text"name="nama"></td>
    </tr>
    <tr>
    <td>alamat</td>
    <td><input type="text"name="alamat"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" value="Simpan"></td>
    </tr>
    
    </table>
    </form>
</body>
</html>
<?php
require_once "./connect.php";
if(isset($_POST['nis']) && isset($_POST['nama'])){
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $sql="INSERT INTO tb_siswa VALUES ('".$nis."','".$nama."','".$alamat."')";
    $resul=mysqli_query($connect,$sql);
    if($result){
        echo'Data Berhasil Ditambahkan';
    }
        else{
            echo'Gagal menambahkan Data';
            echo mysqli_error($connect);
        
    }
}
echo'<hr />';
require_once "./record.php";
?>