<nav class="navbar navbar-default navbar-fixed-side " style="border-right: 1px solid #e7e7e7;">
	<div class="container menu">
		<div class="navbar-header">
			<button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
				<i class="fa fa-bars"></i>
			</button>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="dashboard.php"><span class="fa fa-dashboard"></span>  Dashboard</a></li>
				<?php 
					if($_SESSION['type']==1){
				 ?>
				<li><a href="adminViewStaff.php"><span class="fa fa-black-tie"></span>  Staff</a></li>
				 <?php 
				 	}
				  ?>
				<!--li class="text-center"><a href="adminindex.php">Home</a></li-->
				<li><a href="adminViewProduct.php">Products</a></li>
				<li><a href="adminViewIngre.php">Ingredients</a></li>
				<li><a href="adminViewChangeLog.php">
					<?php 
						if($_SESSION['type']==1){
					?>
							View All ChangeLog
					<?php	
						}elseif ($_SESSION['type'==2]) {
					?>
							Adjestment has been made
					<?php
						} 
					?></a></li>
				<li><a href="../php/adminphp/adminLogout.php">Log Out</a></li>
			</ul>
		</div>
	</div>
</nav>