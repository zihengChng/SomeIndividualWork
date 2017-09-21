<?php 
	require_once'../php/config.php';
	if(isset($_SESSION['type'])){
		$type_check = $_SESSION['type'];
		if($type_check!=1 && $type_check!=2){
			echo "<script>alert('".$type_check."')</script>";
			echo "<script>alert('Please Login As Authorized Party')</script>";
			echo "<script>window.location='../admin/index.php'</script>";
		}
	}else{
		echo "<script>alert('The website you request isn\'t for you.')</script>";
		echo "<script>window.location='../admin/index.php'</script>";
	}
 ?>