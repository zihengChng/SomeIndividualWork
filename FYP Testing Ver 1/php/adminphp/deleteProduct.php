<?php 
require_once'../config.php';
$id = $_GET['q'];
$sql = "UPDATE product SET productAvaibility = 0 WHERE productID = '$id';";
if($conn->query($sql)){
	echo "<script>alert('Successfully Delete')</script>";
	echo "<script>window.location='../../admin/adminViewProduct.php'</script>";
}

 ?>