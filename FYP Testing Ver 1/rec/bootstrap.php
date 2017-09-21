<!DOCTYPE html>
<html>
<head>
	<?php 
		session_start();
		//the _SERVER['REQUEST_URI'] will get the whole URL down.
		//the basename() function let it left the blablabl.php or blablabla.html
		$_SESSION['filename'] = basename($_SERVER['REQUEST_URI']);
		//echo "<script>alert(\"".$_SESSION['filename']."\")</script>";
		function checkURL(){
			if ($_SESSION['filename'] == 'index.php' || $_SESSION['filename'] == 'projectOne') {
				echo "";
			}else{
				echo "../";
			}
		}
		function checkURL2(){
			if($_SESSION['filename'] =='index.php' || $_SESSION['filename'] == 'projectOne'){
				echo "rec/";
			}else{
				echo '';
			}
		}
	 ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!--fontawesome 4.7 version-->
	<link href="<?php checkURL(); ?>css/font-awesome.css" rel="stylesheet">
	<!--link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"-->
	<!-- Bootstrap -->
	<link href="<?php checkURL(); ?>css/bootstrap.css" rel="stylesheet">
	<!--the css of responsive sidenavbar-->
	<link href="<?php checkURL(); ?>css/navbar-fixed-side.css" rel="stylesheet">
	<!--self styling css-->
	<link href="<?php checkURL(); ?>css/customStyle.css" rel="stylesheet">
	<title>Eng Kueh - Home-Made Kueh Selling Website</title>
</head>
<body>