<?php 
session_start();
	include 'bootstrap.php';
	include '../php/adminphp/adminSession.php';
 ?>
 <div class="container-fluid">
 	<div class="row">
 		<div class="col-md-2 col-sm-3">
 			<?php include 'adminsidenav.php'; ?>
 		</div>
 		<div class="col-md-10 col-sm-9">
 			<nav class="navbar navbar-default">
 				<div class="container-fluid">
 					<ul class="nav navbar-nav navbar-right">
 						<li class="dropdown">
 							<a href="#" class="dropdown-toggle" data-togglt="dropdown" role="button">Dropdown <span class="caret"></span></a>
 							<ul class="dropdown-menu">
 								<?php if($_SESSION['type']==2){ 

 								?>
 								<?php 
 									} 
 								?>
 								<li><a href="../php/adminphp/adminLogout.php">Log Out</a></li>
 							</ul>
 						</li>
 					</ul>
 				</div>
 			</nav>
 			<div style="margin-top: 4.5%">
	 			<div class="col-sm-offset-10 col-sm-2 col-xs-12">
			 		<button class="btn btn-primary btn-block" onclick="window.location.href='insertNewStaff.php'"><span class="fa fa-plus"></span>  New Staff</button>
		 		</div>
		 		<div class="col-sm-12 col-xs-12">
		 			<table id="staffTable" class="table table-responsive">
		 				<thead>
		 					<th></th>
		 					<th>ID</th>
		 					<th>Name</th>
		 					<th>Email</th>
		 					<th>Phone(Home)</th>
		 					<th><span class="glyphicon glyphicon-tasks"></span>Handphone</th>
		 					<th></th>
		 				</thead>
		 				<tbody>
		 					<?php 
		 						require_once'../php/config.php';
		 						$sql = "SELECT staffID,staffPrefix,staff_firstName,staff_lastName,staff_Email,staff_phone_prefix,staff_phone,staff_handphone_prefix,staff_handphone FROM staff";
		 						$result = $conn->query($sql);
		 						$No = 1;
		 						while ($row = $result->fetch_assoc()) {
		 					 ?>
		 					 <tr>
		 					 	<td><?php echo $No; ?></td>
		 					 	<td><?php echo $row['staffPrefix'].$row['staffID']; ?></td>
		 					 	<td><?php echo $row['staff_firstName'].$row['staff_lastName']; ?></td>
		 					 	<td><?php echo $row['staff_Email']; ?></td>
		 					 	<td><?php echo $row['staff_phone_prefix'].$row['staff_phone']; ?></td>
		 					 	<td><?php echo $row['staff_handphone_prefix'].$row['staff_handphone']; ?></td>
		 					 	<td></td>
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
 	</div>
 </div>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$('#staffTable').DataTable();
 			} );
 </script>
 <?php include'footer.php' ?>