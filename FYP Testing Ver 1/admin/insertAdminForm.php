<?php 
	session_start();
	include 'bootstrap.php';
	include '../php/adminphp/bossSession.php';
 ?>
 <div class="container-fluid page-margin">
 	<div class="row">
 		<div class="col-md-offset-3 col-md-6">
 			<div class="card-form">
 				<header class="card-container"><h2>Insert New Admin Information</h2></header>
 				<div class="card-container">
 					<form class="form-horizontal" name="insert-admin-form" id="insert-admin-form" method="POST" action="../php/adminphp/insertAdmin.php">
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="a_firstname">Firstname:</label>
		 					<div class="col-sm-10">
		 						<input type="text" name="a_firstname" id="a_firstname" class="form-control" placeholder="Firstname" autocomplete="off" required>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="a_lastname">Lastname:</label>
		 					<div class="col-sm-10">
		 						<input type="text" name="a_lastname" id="a_lastname" class="form-control" placeholder="Lastname" autocomplete="off" required>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="a_password">Password:</label>
		 					<div class="col-sm-10">
		 						<input type="password" name="a_password" id="a_password" class="form-control" placeholder="Password" autocomplete="off" required>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="a_email">Email:</label>
		 					<div class="col-sm-10">
		 						<input type="email" name="a_email" id="a_email" class="form-control" placeholder="Email" autocomplete="off" required>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="a_phone">Phone:</label>
		 					<div class="col-sm-10">
		 						<div class="col-sm-3 col-xs-3">
		 						<select name="phone-prefix" id="phone-prefix" class="form-control" required>
		 							<option>------</option>
		 							<option value="03">03</option>
		 							<option value="04">04</option>
		 							<option value="05">05</option>
		 							<option value="06">06</option>
		 							<option value="07">07</option>
		 							<option value="09">09</option>
		 							<option value="082">082</option>
									<option value="084">084</option>
									<option value="085">085</option>
									<option value="086">086</option>
		 							<option value="088">088</option>
		 							<option value="089">089</option>
		 						</select>
			 					</div>
			 					<div class="col-sm-1 col-xs-1">
			 						<p>-</p>
			 					</div>
			 					<div class="col-sm-8 col-xs-7">
			 						<input type="text" name="a_phone" id="a_phone" class="form-control" pattern="\d{7}" placeholder="Phone" autocomplete="off" required title="Please Enter 7-digit Number">	
			 					</div>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="a_handphone">Handphone:</label>
		 					<div class="col-sm-10">
		 						<div class="col-sm-3 col-xs-3">
		 						<select name="handphone-prefix" id="handphone-prefix" class="form-control" required>
		 							<option>------</option>
		 							<option value="010">010</option>
		 							<option value="011">011</option>
		 							<option value="012">012</option>
		 							<option value="013">013</option>
		 							<option value="014">014</option>
		 							<option value="015">015</option>
		 							<option value="016">016</option>
									<option value="017">017</option>
									<option value="018">018</option>
									<option value="019">019</option>
		 						</select>
			 					</div>
			 					<div class="col-sm-1 col-xs-1">
			 						<p>-</p>
			 					</div>
			 					<div class="col-sm-8 col-xs-7">
			 						<input type="text" name="a_handphone" id="a_handphone" class="form-control" pattern="\d{7}" placeholder="Handphone" autocomplete="off" required title="Please Enter 7-digit Number">	
			 					</div>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label for="a_address" class="control-label col-sm-2">Address</label>
		 					<div class="col-sm-10">
								<textarea class="form-control" name="a_address" id="a_address" placeholder="Address" rows="4" required></textarea>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label for="a_city" class="control-label col-sm-2 col-xs-2">State:</label>
		 					<div class="col-sm-4 col-xs-10">
		 						<select class="form-control" name="a_city" id="a_city" required>
		 							<option>---------------</option>
		 							<?php 
		 								require_once'../php/config.php';
		 								$sql = "SELECT * FROM cities ORDER BY cityId";
		 								$result = $conn->query($sql);
		 								while ($row = $result->fetch_assoc()) {
		 							 ?>	
		 							 <option value="<?php echo $row['cityId']; ?>"><?php echo $row['cityName']; ?></option>
		 							 <?php	
		 								}
		 								$conn->close();
		 							 ?>
		 						</select>
		 					</div>
		 					<br class="visible-xs">
		 					<br class="visible-xs">
		 					<br class="visible-xs">
		 					<label for="a_postcode" class="control-label col-sm-2 col-xs-3">Postcode:</label>
		 					<div class="col-sm-4 col-xs-9">
		 						<input type="text" name="a_postcode" id="a_postcode" pattern="\d{5}" class="form-control" placeholder="Postcode" required autocomplete="off">
		 					</div>
		 				</div>
		 			</form>
 				</div>
 				<footer class="card-container card-section" style="text-align: right;">
					<button class="btn btn-primary" type="submit" form="insert-admin-form">Submit</button>
					<button class="btn btn-danger" type="reset" form="insert-admin-form">Clear</button>
				</footer>
 			</div>
 		</div>
 		<div class= "col-md-offset-6 col-md-2" style="text-align: right;margin-top: 20px;">
		 	<button class="btn btn-primary btn-block" onclick="history.back();">Back</button>
	 	</div>
 	</div>
 </div>
<?php 
	include'footer.php';
 ?>