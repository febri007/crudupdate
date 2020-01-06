<?php

require_once 'koneksi.php';

$id_login=$_POST['id_login'];
$username=$_POST['username'];
$pass=$_POST['pass'];

if(!$Kd_login|| !$Nama_login){
    echo json_encode(array('message'=>'required is empty.'));
}else{
    $query=mysqli_query($con,"UPDATE login SET username='$username',pasword='$pass'
    WHERE id_login='$id_login'");
    
    if($query){
        echo json_encode(array('message'=>'login data successfull update.'));
    }else{
        echo json_encode(array('message'=>'login data failed update.'));
  
    }
}

?>