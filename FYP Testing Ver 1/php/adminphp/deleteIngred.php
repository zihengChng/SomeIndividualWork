<?php 
require_once'../config.php';
$id = $_GET['q'];
$sql = "DELETE FROM ingredients WHERE ingredientsID = '$id';";
if($conn->query($sql)){
	echo "<script>alert('Successfully Delete')</script>";
	echo "<script>window.location='../../admin/adminViewIngre.php'</script>";
}

 ?>