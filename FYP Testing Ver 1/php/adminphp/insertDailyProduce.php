<?php 
	session_start();
	require_once'../config.php';
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$p_id = $conn->escape_string($_POST['productId']);
        if($p_id === '-----------------------------------------------'){
            echo "<script>alert('No Such Product In our Product List!');history.back();'</script>";
        }
	$p_quantity = $conn->escape_string($_POST['produceQuantity']);
	$a_id = $conn->escape_string($_POST['a_id']);
	$date = date("Y-m-d h:i:s");

	$sql1 = "SELECT productQuantity FROM product WHERE productID = '$p_id' ";
	$result1 = $conn->query($sql1);
	while ($row1 = $result1->fetch_assoc()) {
		$oldQuantity = $row1['productQuantity'];
	}
	$quantity = $oldQuantity + $p_quantity;
	$sql = "INSERT INTO dailyproduceproduct (adminID,productID,addedProductQuantity,addedDate) VALUES ('$a_id','$p_id','$p_quantity','$date');";
	$sql .= "UPDATE product SET productQuantity = '$quantity' WHERE productID = '$p_id' ";

	if($conn->multi_query($sql)){
		echo "<script>alert('Success added daily produce product.will redirect to view page');window.location.href='../../admin/adminViewProduct.php'</script>";
	}else{
		echo "Error";
	}
 ?>	