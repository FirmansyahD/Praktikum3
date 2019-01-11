<?php
require_once "./connect.php";
$sql='SELECT * FROM tb_siswa';
$result=mysqli_query($connect,$sql);
if($result){
    if(mysqli_num_rows($result)){
        ?><table>
        <tr>
        <td>#</td>
        </tr>
        </table>
    }
}