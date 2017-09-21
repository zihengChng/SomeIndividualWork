<?php 
	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['type']);
	if(isset($_SESSION['user'])){
		
	}else{
		echo "Success Logout";
		header('Location:../index.php');
	}
 ?>