<?php 
	session_start();
	require_once'../config.php';

	$productName = $conn->escape_string($_POST['productName']);
	$prodcutDetail = $conn->escape_string($_POST['prodcutDetail']);
	$productPrice = $conn->escape_string($_POST['productPrice']);
        $productQuantity = 0;
	$target_dir = '../../pic/product/';
	$target_file = $target_dir.basename($_FILES['image']['name']);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	//echo "<script>alert('".$imageFileType."');</script>";
	$tmp_name = $_FILES['image']['tmp_name'];
	echo $tmp_name;
	if($tmp_name==null){
		$check = false;
	}else{
		$check = true;
	}
	if($_FILES['image']['name']!=''){
		if($check!=false){
			if($imageFileType != 'jpg'){
				echo "<script>alert('Sorry, only JPG is allowed');</script>";
				$uploadOk = 0;
			}else{
				$uploadOk = 1;
			}
		}else{
			echo "<script>alert('File is not an image.');</script>";
			$uploadOk = 0;
		}
	}else{
		$uploadOk=1;
	}
	$imagetype= $_FILES["image"]["type"];
	$sql = "INSERT INTO product (productName,productDetail,productQuantity,productPrice) VALUES ('$productName','$prodcutDetail','$productQuantity ','$productPrice')";
	if($uploadOk == 1){
		if($conn->query($sql)){
			if($uploadOk==0){
				echo "<script>alert('Sorry your file was not uploaded.');</script>";
			}else{
				if (move_uploaded_file($tmp_name, $target_dir.$productName.".".$imageFileType)){
					echo "<script>alert('New Products Added');window.location.href='../../admin/adminViewProduct.php';</script>";
					move_uploaded_file($tmp_name, $target_file);
				}else{
					echo "<script>alert('No Products Added');window.location.href='../../admin/adminViewProduct.php';</script>";
				}
			}
		}else{
                        echo "<script>alert('No Products Added');window.location.href='../../admin/adminViewProduct.php';</script>";
			//echo "Error: ".$sql. "<br>" .$conn->error;
		}
	}else{
		echo "<script>alert('Sorry your file was not uploaded.');window.location.href='../../admin/adminViewProduct.php';</script>";	
	}
 ?>			