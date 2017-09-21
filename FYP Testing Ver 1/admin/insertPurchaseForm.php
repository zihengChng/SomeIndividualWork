<?php 
	session_start();
	include'bootstrap.php';
	include '../php/adminphp/adminSession.php';
 ?>
 <div class="container-fluid page-margin">
 	<div class="row">
 		<div class="col-md-offset-3 col-md-6">
 			<div class="card-form">
 				<header class="card-container"><h2>Insert New Purchase Order</h2></header>
 				<div class="card-container">
 					<form class="form-horizontal" name="insert-new-po-form" id="insert-new-po-form" method="POST" action="../php/adminphp/insertNewPurchaseOrder.php">
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="ingredientName">Ingredient:</label>
		 					<div class="col-sm-10">
		 						<?php 
		 							require_once'../php/config.php';
		 							$id = $_GET['q'];
		 							$sql = "SELECT * FROM ingredients WHERE ingredientsID='$id' ";
		 							$result = $conn->query($sql);
		 							$row = $result->fetch_assoc();
		 						 ?>
		 						<input type="text" name="ingredientName" id="ingredientName" class="form-control" value="<?php echo $row['ingredientName'] ?>" disabled>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="ingredientQuantity">Purchase Quantity:</label>
		 					<div class="col-sm-10">
		 						<input type="number" min="1" pattern="[0-9]+([.,][0-9]+)?" name="ingredientQuantity" id="ingredientQuantity" class="form-control" autocomplete="off" required>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="ingredientPrice">Total Price:</label>
		 					<div class="col-sm-10">
		 						<input type="number" min="1" step="0.05" pattern="[0-9]+([.,][0-9]+)?" name="ingredientPrice" id="ingredientPrice" class="form-control" autocomplete="off" required>
		 					</div>
		 				</div>
		 				<!--admin in charge with this form-->
		 				<input type="hidden" name="a_id" value="<?php echo $_SESSION['adminID']; ?>">
		 				<input type="hidden" name="ingredientsID" value="<?php echo $id; ?>">
		 				<input type="hidden" name="oldQuantity" value="<?php echo $row['ing_quantity']; ?>">
		 			</form>
 				</div>
 				<footer class="card-container card-section" style="text-align: right;">
					<button class="btn btn-primary" type="submit" form="insert-new-po-form">Submit</button>
					<button class="btn btn-danger" type="reset" form="insert-new-po-form">Clear</button>
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