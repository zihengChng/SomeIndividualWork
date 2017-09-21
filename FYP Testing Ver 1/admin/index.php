<?php 
	include 'bootstrap.php';
 ?>
<div class="container">
	<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" style="margin-top: 100px;">
		<div class="login-card">
			<header class="card-container"><h2>Login</h2></header>
			<div class="card-container">
				<form class="form-horizontal" method="POST" id="admin-login-form" name="admin-login-form" action="../php/adminphp/adminLogin.php">
					<div class="form-group">
						<label for="adminLoginName" class="col-sm-2 control-label">Username:</label>
						<div class="col-sm-10">
							<input type="text" name="adminLoginName" placeholder="Username" class="form-control" id="adminLoginName" autocomplete="off">
						</div>
					</div>
					<div class="form-group">
						<label for="adminloginPass" class="col-sm-2 control-label">Password:</label>
						<div class="col-sm-10">
							<input type="password" name="adminloginPass" placeholder="Password" class="form-control" id="adminloginPass" autocomplete="off">
						</div>
					</div>
				</form>
				
			</div>
			<footer class="card-container card-section" style="text-align: right;">
				<button class="btn btn-info" type="submit" form="admin-login-form">Login</button>
			</footer>
		</div>
	</div>
</div>
<?php 
	include'footer.php';
 ?>