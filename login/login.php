<?php
include_once "koneksi.php";

	 class usr{}
	
	 $username = $_POST["username"];
	 $password = $_POST["password"];
	
	
	 if ((empty($username)) || (empty($password))) { 
	
	 	$response->success = 0;
	 	$response->message = "Kolom tidak boleh kosong"; 
	 	die(json_encode($response));
	 }
	
	 $query = mysqli_query($con, "SELECT  username='$username',password='$password' FROM login ");
	
	 $row = mysqli_fetch_array($query);
	
	 if (!empty($row)){
		 if($row=='admin'){
			
			
			$response->role = $row['role'];
			die(json_encode($response));
		}else{
			$response->role = $row['role'];
			die(json_encode($response));
		}
	 	
		
	 } else { 
	 	
	 	$response->message = "Username atau password salah";
	 	die(json_encode($response));
	 }
	

    ?>