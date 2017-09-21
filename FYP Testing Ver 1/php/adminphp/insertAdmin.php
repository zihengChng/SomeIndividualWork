<?php 
	session_start();
	require_once'../config.php';

	$a_firstname = $conn->escape_string($_POST['a_firstname']);
	$a_lastname = $conn->escape_string($_POST['a_lastname']);
	$passwords = $conn->escape_string($_POST['a_password']);
	$password = md5($passwords);
	$a_email = $conn->escape_string($_POST['a_email']);
	$phone_pre = $conn->escape_string($_POST['phone-prefix']);
	$a_phone = $conn->escape_string($_POST['a_phone']);
	$handphone_pre = $conn->escape_string($_POST['handphone-prefix']);
	$a_handphone = $conn->escape_string($_POST['a_handphone']);
	$a_address = $conn->escape_string($_POST['a_address']);
	$a_city = $conn->escape_string($_POST['a_city']);
	$a_postcode = $conn->escape_string($_POST['a_postcode']);

	$sql1 = "INSERT INTO login(loginEmail,password,type) VALUES('$a_email','$password','0');";

	if ($conn->query($sql1)) {
		echo "Success";
	}
	$l_id = $conn->insert_id;
	$sql = "INSERT INTO admin(loginID,adm_firstName,adm_lastName,adm_email,phone_prefix,adm_phone,handphone_prefix,adm_handPhone,adm_address,adm_city,adm_postcode) VALUES('$l_id','$a_firstname','$a_lastname','$a_email','$phone_pre','$a_phone','$handphone_pre','$a_handphone','$a_address','$a_city','$a_postcode')";

	if($conn->query($sql)){
		echo "Success";
		echo "<script>alert('Successfully Entered! Will direct you to home page');window.location.href='../../admin/bossIndex.php'</script>";
	}else{
		echo $sql."<br>".$conn->error;
	}

 ?>