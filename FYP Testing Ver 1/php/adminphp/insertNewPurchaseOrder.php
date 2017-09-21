<?php 

	require_once'../config.php';
	$id=$conn->escape_string($_POST['ingredientsID']);
	//if($id==='------------------------------------'){
	//	echo "<script>alert('No Such Ingredient!');history.back();</script>";
	//}
	$quantity = $conn->escape_string($_POST['ingredientQuantity']);
	$price = $conn->escape_string($_POST['ingredientPrice']);
	$a_id = $conn->escape_string($_POST['a_id']);
	$oldQuantitys = $conn->escape_string($_POST['oldQuantity']);
	//echo $oldQuantitys;
	$totalQuantity = $oldQuantitys+$quantity;
	//echo $totalQuantity;
	$sql1 = "INSERT INTO purchaseOrder (ingredientID, purc_quantity,purc_total,adminIncharge) VALUES ('$id','$quantity','$price','$a_id');";
	$sql1.= "UPDATE ingredients set ing_quantity='$totalQuantity' WHERE ingredientsID='$id'";

	if($conn->multi_query($sql1)){
		echo "<script>alert('Success added purchase order for this ingredient.will redirect to view page');window.location.href='../../admin/adminViewIngre.php'</script>";
	}else{
		echo $sql1."<br>".$conn->error;;
		//echo "<script>alert('Error accur.will redirect to view page');window.location.href='../../admin/adminViewIngre.php'</script>";
	}
	
 ?>