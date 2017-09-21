<?php 
	session_start();
	include'bootstrap.php';
	include '../php/adminphp/adminSession.php';
 ?>
 <div class="container-fluid page-margin">
 	<div class="row">
 		<div class="col-md-offset-3 col-md-6">
 			<div class="card-form">
 				<header class="card-container"><h2>Daily Prodcut Product</h2></header>
 				<div class="card-container">
 					<form class="form-horizontal" method="POST" action="../php/adminphp/insertDailyProduce.php" name="daily-produce-form" id="daily-produce-form">
 						<div class="form-group">
 							<label class="control-label col-sm-3" for="productName">Product:</label>
 							<div class="col-sm-9">
 								<?php 
		 							require_once'../php/config.php';
		 							$id = $_GET['q'];
		 							$sql = "SELECT * FROM product WHERE productID='$id' ";
		 							$result = $conn->query($sql);
		 							$row = $result->fetch_assoc();
		 						 ?>
		 						<input type="text" name="productName" id="productName" class="form-control" value="<?php echo $row['productName'] ?>" disabled>
 							</div>
 						</div>
 						<div class="form-group">
 							<label class="control-label col-sm-3" for="produceQuantity">Produce Quantity:</label>
 							<div class="col-sm-9">
 								<input type="number" class="form-control" min="1" pattern="[0-9]+([.,][0-9]+)?" name="produceQuantity" id="produceQuantity" placeholder="Quantity" required>
 							</div>
 						</div>
 						<div class="form-group">
 							<label class="control-label col-sm-3">Choose Type:</label>
 							<div class="col-sm-9 btn-group" data-toggle="buttons">
 								<label class="btn btn-success" style="width: 50%">
 									<input required type="radio" name="">Increase
 								</label>
 								<label class="btn btn-danger" style="width: 50%">
 									<input required type="radio" name="">Decrease
 								</label>
 							</div>
 						</div>
 						<input type="hidden" name="a_id" value="<?php echo $_SESSION['adminID']; ?>">
 						<input type="hidden" name="productId" value="<?php echo $id; ?>">
 					</form>
 				</div>
 				<footer class="card-container card-section" style="text-align: right;">
					<button class="btn btn-primary" type="submit" form="daily-produce-form">Submit</button>
					<button class="btn btn-danger" type="reset" form="daily-produce-form">Clear</button>
				</footer>
 			</div>
 		</div>
 		<div class= "col-md-offset-6 col-md-2" style="text-align: right;margin-top: 20px;">
		 	<button class="btn btn-primary btn-block" onclick="history.back();">Back</button>
	 	</div>
 	</div>
 </div>
 <?php 
 	include 'footer.php';
  ?>