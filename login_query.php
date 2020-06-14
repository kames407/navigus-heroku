<?php
	require_once 'admin/dbcon.php';
	
	if(isset($_POST['login'])){
		$idno=$_POST['idno'];
		$password=$_POST['password'];
	
		$result = $conn->query("SELECT * FROM users WHERE users_name = '$idno' && password = '$password' && `account` = 'active' && `status` = 'UnLogged'") or die(mysqli_errno());
		$row = $result->fetch_array();
		$logged = $conn->query("SELECT * FROM `users` WHERE users_name = '$idno' && password = '$password' && `status` = 'UnLogged'")->num_rows;
		$numberOfRows = $result->num_rows;				
		
		
		if ($numberOfRows > 0){
			session_start();
			$_SESSION['users_id'] = $row['users_id'];
			header('location:home.php');
		}
		
		if($logged == 1){
			echo " <br><center><font color= 'red' size='3'>You Can Only Login Once</center></font>";
		}else{
			echo " <br><center><font color= 'red' size='3'>LOGIN ERROR!</center></font>";
		}
	
	}
?>