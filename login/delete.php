<?php

require_once 'koneksi.php';

$id_login=$_POST['id_login'];


if(!$Kd_login|| !$Nama_login){
    echo json_encode(array('message'=>'required is empty.'));
}else{
    $query=mysqli_query($con,"DELETE FROM login
    WHERE id_login='$id_login'");
    
    if($query){
        echo json_encode(array('message'=>'login data successfull delete.'));
    }else{
        echo json_encode(array('message'=>'login data failed delete.'));
  
    }
}

?>