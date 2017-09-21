<?php 
	session_start();
	require_once'../config.php';

	$name = $conn->escape_string($_POST['ingredientName']);
	$quantity = $conn->escape_string($_POST['ingredientQuantity']);
	$price = $conn->escape_string($_POST['ingredientPrice']);

	$sql = "INSERT INTO ingredients (ingredientName,ing_quantity,ing_price) VALUES ('$name','$quantity','$price')";
	if($conn->query($sql)){
		echo "Success";
		echo "<script>alert('Successfully Entered! Will direct you to view page');window.location.href='../../admin/adminViewIngre.php'</script>";
	}else{
		echo $sql."<br>".$conn->error;
	}

?>