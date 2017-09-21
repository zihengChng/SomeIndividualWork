<?php 
	require_once'../config.php';
	session_start();
	$loginName = $conn->real_escape_string($_POST['adminLoginName']);
	$passwordS = $conn->real_escape_string($_POST['adminloginPass']);
	$password = md5($passwordS);

	$sql = "SELECT * FROM login WHERE loginName='$loginName' AND loginPass='$password'";
	$result = $conn->query($sql);
	$count = $result->num_rows;
	if($count==1){
		$row = $result->fetch_assoc();
		$_SESSION['user'] = $row['loginName'];
		$_SESSION['type'] = $row['type'];
		//echo $_SESSION['user'];
		//echo $_SESSION['type'];
		if($row['type']==2){
			$sql1 = "SELECT * FROM staff WHERE staff_loginName = '$loginName' ";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			$_SESSION['adminID'] = $row1['adminID'];
			header('location:../../admin/adminViewProduct.php');
		}elseif($row['type']==1){
			/*$_SESSION['adminID'] = 'admin';*/
			header('location:../../admin/adminViewProduct.php');
		}/*else{
			echo "<script>alert('You Are Not Authorized!Please Login With Authorized Account!');window.location='../../admin/index.php';</script>";
		}*/
	}else{
		echo "<script>alert('You Are Not Authorized!Please Login With Authorized Account!');window.location='../../admin/index.php';</script>";
	}

 ?>