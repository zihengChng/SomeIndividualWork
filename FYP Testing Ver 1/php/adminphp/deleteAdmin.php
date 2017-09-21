<?php 
require_once'../config.php';
$id = $_GET['q'];
$l_id = $_GET['r'];
$sql = "DELETE FROM admin WHERE adminId = '$id';";
$sql .= "DELETE FROM login WHERE loginID = '$l_id'";
if($conn->multi_query($sql)){
	echo "<script>alert('Successfully Delete')</script>";
	echo "<script>window.location='../../admin/bossIndex.php'</script>";
}

 ?>