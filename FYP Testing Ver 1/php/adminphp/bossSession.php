<?php 
	require_once'../php/config.php';
       if(isset($_SESSION['type'])){
		$type_check = $_SESSION['type'];
		if($type_check!=2){
			echo "<script>alert('Please Login As Admin')</script>";
			echo "<script>window.location='../admin/index.php'</script>";
		}
	}else{
		echo "<script>alert('The website you request isn\'t for you.')</script>";
		echo "<script>window.location='../admin/index.php'</script>";
	}
	//$type_check = $_SESSION['type'];
	//echo "<script>alert('".$_SESSION['type']."')</script>";;
	//if($type_check!=2){
		//echo "<script>alert('The website you request isn\'t for you.')</script>";
		//echo "<script>window.location='../admin/index.php'</script>";
	//}
 ?>