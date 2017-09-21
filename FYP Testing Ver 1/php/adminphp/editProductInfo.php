<?php 
require_once'../config.php';
	
	$id = $conn->escape_string($_POST['p_id']);
	$name = $conn->escape_string($_POST['productName']);
	$detail = $conn->escape_string($_POST['prodcutDetail']);
	$price = $conn->escape_string($_POST['productPrice']);
	$target_dir = '../../pic/product/';
	$target_file = $target_dir.basename($_FILES['image']['name']);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	//echo "<script>alert('".$imageFileType."');</script>";
	$tmp_name = $_FILES['image']['tmp_name'];
	//echo "<script>alert('".$tmp_name."');</script>";
	if($tmp_name==null){
		$check = false;
	}else{
		$check = true;
	}
	if($_FILES['image']['name']!=''){
		if($check!=false){
			if($imageFileType != 'jpg'){
				echo "<script>alert('Sorry, only JPG or PNG is allowed.You will redirect to View Pages');window.location.href='../../admin/adminViewProduct.php';</script>";
				$uploadOk = 0;
			}else{
				$uploadOk = 1;
			}
		}else{
			echo "<script>alert('File is not an image.You will redirect to View Pages');window.location.href='../../admin/adminViewProduct.php';</script>";
			$uploadOk = 0;
		}
	}else{
		$uploadOk=1;
	}
	$imagetype= $_FILES["image"]["type"];
	if($check != false){
		if($uploadOk==0){
		}else{
			if (move_uploaded_file($tmp_name, $target_dir.$name.".".$imageFileType)){
				move_uploaded_file($tmp_name, $target_file);
			}
		}
	}
	$sql = "UPDATE product SET productName = '$name',productDetail = '$detail',productPrice = '$price' WHERE productID = '$id' ";
	if($conn->query($sql)){
		echo "<script>alert('Success Edit The Product Info.Will redirect to view Page');window.location.href='../../admin/adminViewProduct.php';</script>";
	}else{
		echo "Error: ".$sql. "<br>" .$conn->error;
		echo "<script>alert('The Product Infor is not edited.Now will redirect to view page');window.location.href='../../admin/adminViewProduct.php';</script>";
	}

 ?>