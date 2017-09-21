<?php 
	session_start();
	include 'bootstrap.php';
	include '../php/adminphp/bossSession.php';
 ?>
 <div class="container-fluid">
 	<div class="row">
	 	<div class="col-md-2 col-sm-2">
	 		<?php include'bosssidenav.php'; ?>
	 	</div>
	 	<div class="col-md-10 col-sm-10 page-margin">
	 		<div class="pull-right">
		 		<button class="btn btn-primary" onclick="window.location.href='insertAdminForm.php';">New Staff</button>
	 		</div>
	 		<table class="table table-responsive">
	 			<thead>
	 				<th>No</th>
	 				<th>Id</th>
	 				<th>First Name</th>
	 				<th>Last Name</th>
	 				<th>Email</th>
	 				<th>Phone</th>
	 				<th>Hand Phone</th>
	 				<th>Address</th>
	 				<th>City</th>
	 				<th>Post Code</th>
	 				<th>Action</th>
	 			</thead>
	 			<tbody>
	 			<?php 
	 				require_once'../php/config.php';
	 				$sql = "SELECT a.adminID,a.loginID,a.adm_firstName,a.adm_lastName,a.adm_email,a.phone_prefix,a.adm_phone,a.handphone_prefix,a.adm_handphone,a.adm_address,b.cityName,a.adm_postcode FROM admin a INNER JOIN cities b WHERE a.adm_city = b.cityId";
	 				$result = $conn->query($sql);
	 				$No = 1;
	 				while($row = $result->fetch_assoc()){
	 			?>
	 				<tr>
	 					<td><?php echo $No; ?></td>
	 					<td><?php echo $row['adminID'] ?></td>
	 					<td><?php echo $row['adm_firstName'] ?></td>
	 					<td><?php echo $row['adm_lastName'] ?></td>
	 					<td><?php echo $row['adm_email'] ?></td>
	 					<td><?php echo $row['phone_prefix'].$row['adm_phone'] ?></td>
	 					<td><?php echo $row['handphone_prefix'].$row['adm_handphone'] ?></td>
	 					<td><?php echo $row['adm_address'] ?></td>
	 					<td><?php echo $row['cityName'] ?></td>
	 					<td><?php echo $row['adm_postcode'] ?></td>
	 					<td><button class="btn btn-xs btn-primary" onclick="window.location.href='editAdminForm.php?q=<?php echo $row['adminID']; ?>'"><i class="fa fa-pencil-square-o"></i></button><button class="btn btn-xs btn-danger" onclick="var a = confirm('Are you sure want to delete this admin information?'); if(a){window.location='../php/adminphp/deleteAdmin.php?q=<?php echo $row['adminID']; ?>&r=<?php echo $row['loginID'] ?>'}" ><i class="fa fa-trash-o"></i></button></td>
	 				</tr>
	 			<?php 
	 					$No++;
	 				} 
	 			?>
	 			</tbody>
	 		</table>
	 	</div>
	</div>
 </div>
<?php 
	include'footer.php';
 ?>