<?php 
require_once'../config.php';
	
	$id = $conn->escape_string($_POST['a_Id']);
	$l_id = $conn->escape_string($_POST['l_Id']);
	echo $l_id;
	$a_firstname = $conn->escape_string($_POST['a_firstname']);
	$a_lastname = $conn->escape_string($_POST['a_lastname']);
	$a_email = $conn->escape_string($_POST['a_email']);
	$phone_pre = $conn->escape_string($_POST['phone-prefix']);
	$a_phone = $conn->escape_string($_POST['a_phone']);
	$handphone_pre = $conn->escape_string($_POST['handphone-prefix']);
	$a_handphone = $conn->escape_string($_POST['a_handphone']);
	$a_address = $conn->escape_string($_POST['a_address']);
	$a_city = $conn->escape_string($_POST['a_city']);
	$a_postcode = $conn->escape_string($_POST['a_postcode']);

	$sql = "UPDATE login SET loginEmail = '$a_email' WHERE loginId = '$l_id';";
	$sql .= "UPDATE admin SET adm_firstName='$a_firstname',adm_lastName='$a_lastname',adm_email='$a_email',phone_prefix='$phone_pre',adm_phone='$a_phone',handphone_prefix='$handphone_pre',adm_handPhone='$a_handphone',adm_address='$a_address',adm_city='$a_city',adm_postcode='$a_postcode' WHERE adminID = '$id'";

	if ($conn->multi_query($sql)) {
		echo "Success";
		echo $sql;
		echo "<script>alert('Successfully Edited! Will direct you to Home page');window.location.href='../../admin/bossIndex.php'</script>";
	}else{
		echo $sql."<br>".$conn->error;
	}

?>