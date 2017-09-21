<?php 
	require_once'config.php';
	session_start();
	$loginEmail = $conn->real_escape_string($_POST['']);
	$password = $conn->real_escape_string($_POST['']);


	$sql = "SELECT * FROM login WHERE loginEmail='$loginEmail' AND password='$password'";
	$result = $conn->query($sql);
	$count = $result->num_rows;
	if($count==1){
		$row = $result->fetch_assoc();
		$_SESSION['member'] = $row['loginEmail'];
		$_SESSION['type'] = $row['type'];
		if($row['type']==1){
			header('location:../rec/memberIndex.php');
		}else{
			"<script>alert('Login Unsuccess!');</script>"
		}
	}else{
		"<script>alert('Login Unsuccess!');</script>";
		header('location:../rec/loginInterface.php');
	}

 ?>