<?php 
	session_start();
	include'bootstrap.php';
	include '../php/adminphp/adminSession.php';
 ?>
 <div class="container-fluid page-margin">
 	<div class="row">
 		<div class="col-md-offset-3 col-md-6">
 			<div class="card-form">
 				<header class="card-container"><h2>Insert New Ingredient Information</h2></header>
 				<div class="card-container">
 					<form class="form-horizontal" name="insert-new-ingredient-form" id="insert-new-ingredient-form" method="POST" action="../php/adminphp/insertNewIngred.php">
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="ingredientName">Ingredient Name:</label>
		 					<div class="col-sm-10">
		 						<input type="text" name="ingredientName" id="ingredientName" class="form-control" autocomplete="off" required>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="ingredientQuantity">Ingredient Quantity:</label>
		 					<div class="col-sm-10">
		 						<input type="number" min="1" pattern="[0-9]+([.,][0-9]+)?" name="ingredientQuantity" id="ingredientQuantity" class="form-control" autocomplete="off" required>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="ingredientPrice">Ingredient Price:</label>
		 					<div class="col-sm-10">
		 						<input type="number" min="1" step="0.05" pattern="[0-9]+([.,][0-9]+)?" name="ingredientPrice" id="ingredientPrice" class="form-control" autocomplete="off" required>
		 					</div>
		 				</div>
		 			</form>
 				</div>
 				<footer class="card-container card-section" style="text-align: right;">
					<button class="btn btn-primary" type="submit" form="insert-new-ingredient-form">Submit</button>
					<button class="btn btn-danger" type="reset" form="insert-new-ingredient-form">Clear</button>
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