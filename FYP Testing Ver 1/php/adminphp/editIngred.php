<?php 
require_once'../config.php';
	
	$id = $conn->escape_string($_POST['i_id']);
	$name = $conn->escape_string($_POST['ingredientName']);
	$quantiy = $conn->escape_string($_POST['ingredientQuantity']);
	$price = $conn->escape_string($_POST['ingredientPrice']);
	
	$sql = "UPDATE ingredients SET ingredientName = '$name', ing_quantity ='$quantiy', ing_price = '$price' WHERE ingredientsID = '$id'";

	if ($conn->query($sql)) {
		echo "Success";
		echo "<script>alert('Successfully Edited! Will direct you to view page');window.location.href='../../admin/adminViewIngre.php'</script>";
	}else{
		echo $sql."<br>".$conn->error;
	}

?>