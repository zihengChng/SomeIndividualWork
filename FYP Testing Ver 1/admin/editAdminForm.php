<?php 
	session_start();
	include 'bootstrap.php';
	include '../php/adminphp/bossSession.php';
 ?>
 <div class="container-fluid page-margin">
 	<div class="row">
 		<div class="col-md-offset-3 col-md-6">
 			<div class="card-form">
 				<header class="card-container"><h2>Edit Admin Information</h2></header>
 				<div class="card-container">
 					<form class="form-horizontal" name="edit-admin-form" id="edit-admin-form" method="POST" action="../php/adminphp/editAdmin.php">
	 					<?php 
							require_once '../php/config.php' ;
							$id = $_GET['q'];
							$sql = "SELECT * FROM admin WHERE adminID = '$id'";
							$result1 = $conn->query($sql);
							while($rows1 = $result1->fetch_assoc()){
						 ?>
						<input type="hidden" name="a_Id" value="<?php echo $id; ?>">
						<input type="hidden" name="l_Id" value="<?php echo $rows1['loginID']; ?>">
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="a_firstname">Firstname:</label>
		 					<div class="col-sm-10">
		 						<input type="text" name="a_firstname" id="a_firstname" class="form-control" placeholder="Firstname" autocomplete="off" value="<?php echo $rows1['adm_firstName'] ; ?>" required>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="a_lastname">Lastname:</label>
		 					<div class="col-sm-10">
		 						<input type="text" name="a_lastname" id="a_lastname" class="form-control" placeholder="Lastname" autocomplete="off" value="<?php echo $rows1['adm_lastName'] ; ?>" required>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="a_email">Email:</label>
		 					<div class="col-sm-10">
		 						<input type="email" name="a_email" id="a_email" class="form-control" placeholder="Email" autocomplete="off" required value="<?php echo $rows1['adm_email']; ?>">
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="a_phone">Phone:</label>
		 					<div class="col-sm-10">
		 						<div class="col-sm-3 col-xs-3">
		 						<select name="phone-prefix" id="phone-prefix" class="form-control" required>
		 							<option>------</option>
		 							<option value="03" <?php if(strcmp($rows1['phone_prefix'],'03')==0){echo 'selected = "selected"';} ?>>03</option>
		 							<option value="04" <?php if(strcmp($rows1['phone_prefix'],'04')==0){echo 'selected = "selected"';} ?>>04</option>
		 							<option value="05" <?php if(strcmp($rows1['phone_prefix'],'05')==0){echo 'selected = "selected"';} ?>>05</option>
		 							<option value="06" <?php if(strcmp($rows1['phone_prefix'],'06')==0){echo 'selected = "selected"';} ?>>06</option>
		 							<option value="07" <?php if(strcmp($rows1['phone_prefix'],'07')==0){echo 'selected = "selected"';} ?>>07</option>
		 							<option value="09" <?php if(strcmp($rows1['phone_prefix'],'09')==0){echo 'selected = "selected"';} ?>>09</option>
		 							<option value="082" <?php if(strcmp($rows1['phone_prefix'],'082')==0){echo 'selected = "selected"';} ?>>082</option>
									<option value="084" <?php if(strcmp($rows1['phone_prefix'],'084')==0){echo 'selected = "selected"';} ?>>084</option>
									<option value="085" <?php if(strcmp($rows1['phone_prefix'],'085')==0){echo 'selected = "selected"';} ?>>085</option>
									<option value="086" <?php if(strcmp($rows1['phone_prefix'],'086')==0){echo 'selected = "selected"';} ?>>086</option>
		 							<option value="088" <?php if(strcmp($rows1['phone_prefix'],'088')==0){echo 'selected = "selected"';} ?>>088</option>
		 							<option value="089" <?php if(strcmp($rows1['phone_prefix'],'089')==0){echo 'selected = "selected"';} ?>>089</option>
		 						</select>
			 					</div>
			 					<div class="col-sm-1 col-xs-1">
			 						<p>-</p>
			 					</div>
			 					<div class="col-sm-8 col-xs-7">
			 						<input type="text" name="a_phone" id="a_phone" class="form-control" pattern="\d{7}" placeholder="Phone" autocomplete="off" required title="Please Enter 7-digit Number" value="<?php echo $rows1['adm_phone'] ?>">	
			 					</div>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="a_handphone">Handphone:</label>
		 					<div class="col-sm-10">
		 						<div class="col-sm-3 col-xs-3">
		 						<select name="handphone-prefix" id="handphone-prefix" class="form-control" required>
		 							<option>------</option>
		 							<option value="010" <?php if(strcmp($rows1['handphone_prefix'],'010')==0){echo 'selected = "selected"';} ?>>010</option>
		 							<option value="011" <?php if(strcmp($rows1['handphone_prefix'],'011')==0){echo 'selected = "selected"';} ?>>011</option>
		 							<option value="012" <?php if(strcmp($rows1['handphone_prefix'],'012')==0){echo 'selected = "selected"';} ?>>012</option>
		 							<option value="013" <?php if(strcmp($rows1['handphone_prefix'],'013')==0){echo 'selected = "selected"';} ?>>013</option>
		 							<option value="014" <?php if(strcmp($rows1['handphone_prefix'],'014')==0){echo 'selected = "selected"';} ?>>014</option>
		 							<option value="015" <?php if(strcmp($rows1['handphone_prefix'],'015')==0){echo 'selected = "selected"';} ?>>015</option>
		 							<option value="016" <?php if(strcmp($rows1['handphone_prefix'],'016')==0){echo 'selected = "selected"';} ?>>016</option>
									<option value="017" <?php if(strcmp($rows1['handphone_prefix'],'017')==0){echo 'selected = "selected"';} ?>>017</option>
									<option value="018" <?php if(strcmp($rows1['handphone_prefix'],'018')==0){echo 'selected = "selected"';} ?>>018</option>
									<option value="019" <?php if(strcmp($rows1['handphone_prefix'],'019')==0){echo 'selected = "selected"';} ?>>019</option>
		 						</select>
			 					</div>
			 					<div class="col-sm-1 col-xs-1">
			 						<p>-</p>
			 					</div>
			 					<div class="col-sm-8 col-xs-7">
			 						<input type="text" name="a_handphone" id="a_handphone" class="form-control" pattern="\d{7}" placeholder="Handphone" autocomplete="off" required title="Please Enter 7-digit Number" value="<?php echo $rows1['adm_handPhone'] ?>">	
			 					</div>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label for="a_address" class="control-label col-sm-2">Address</label>
		 					<div class="col-sm-10">
								<textarea class="form-control" name="a_address" id="a_address" placeholder="Address" rows="4" required><?php echo $rows1['adm_address'] ?></textarea>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label for="a_city" class="control-label col-sm-2 col-xs-2">State:</label>
		 					<div class="col-sm-4 col-xs-10">
		 						<select class="form-control" name="a_city" id="a_city" required>
		 							<option>---------------</option>
		 							<?php 
		 								$sql = "SELECT * FROM cities ORDER BY cityId";
		 								$result = $conn->query($sql);
		 								while ($row = $result->fetch_assoc()) {
		 							 ?>	
		 							 <option value="<?php echo $row['cityId']; ?>" <?php if($rows1['adm_city']==$row['cityId']){echo 'selected = "selected"';} ?>><?php echo $row['cityName']; ?></option>
		 							 <?php 
		 								}
		 							  ?>
		 						</select>
		 					</div>
		 					<br class="visible-xs">
		 					<br class="visible-xs">
		 					<br class="visible-xs">
		 					<label for="a_postcode" class="control-label col-sm-2 col-xs-3">Postcode:</label>
		 					<div class="col-sm-4 col-xs-9">
		 						<input type="text" name="a_postcode" id="a_postcode" pattern="\d{5}" class="form-control" placeholder="Postcode" required autocomplete="off" value="<?php echo $rows1['adm_postcode']; ?>" >
		 					</div>
		 				</div>
		 				 <?php	
							}
							$conn->close();
						?>
		 			</form>
 				</div>
 				<footer class="card-container card-section" style="text-align: right;">
					<button class="btn btn-primary" type="submit" form="edit-admin-form">Submit</button>
					<button class="btn btn-danger" type="reset" form="edit-admin-form">Clear</button>
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