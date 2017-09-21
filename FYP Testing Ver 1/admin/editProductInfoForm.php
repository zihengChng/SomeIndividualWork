<?php 
	session_start();
	include'bootstrap.php';
	include '../php/adminphp/adminSession.php';
 ?>
 <div class="container-fluid page-margin">
 	<div class="row">
 		<div class="col-md-offset-3 col-md-6">
 			<div class="card-form">
 				<header class="card-container"><h2>Insert New Product Information</h2></header>
 				<div class="card-container">
 					<form class="form-horizontal" name="insert-new-product-form" id="insert-new-product-form" method="POST" action="../php/adminphp/editProductInfo.php" enctype="multipart/form-data">
 						<?php 
							require_once '../php/config.php' ;
							$id = $_GET['q'];
							$sql = "SELECT * FROM product WHERE productID = '$id'";
							$result1 = $conn->query($sql);
							while($rows1 = $result1->fetch_assoc()){
						 ?>
						 <input type="hidden" name="p_id" value="<?php echo $rows1['productID'] ?>">
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="productName">Product Name:</label>
		 					<div class="col-sm-10">
		 						<input type="text" name="productName" id="productName" class="form-control" autocomplete="off" required value="<?php echo $rows1['productName'] ?>">
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="prodcutDetail">Product Detail:</label>
		 					<div class="col-sm-10">
		 						<textarea class="form-control textarea-style" name="prodcutDetail" id="prodcutDetail" autocomplete="off" rows="3"><?php echo $rows1['productDetail'] ?></textarea>
		 					</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="control-label col-sm-2" for="productPrice">Product Price:</label>
		 					<div class="col-sm-10">
		 						<input type="number" step="0.05" pattern="[0-9]+([.,][0-9]+)?" name="productPrice" id="productPrice" class="form-control" autocomplete="off" required value="<?php echo $rows1['productPrice'] ?>">
		 					</div>
		 				</div>
		 				<div class="form-group">
							<div class="col-sm-2">
								<label class="control-label" for="image">Image:</label>
							</div>
							<div class="col-sm-10">
								<input type="file" name="image" id="image" class="form-control">
							</div>
						</div>
						<?php 
							}
							$conn->close()
						 ?>
		 			</form>
 				</div>
 				<footer class="card-container card-section" style="text-align: right;">
					<button class="btn btn-primary" type="submit" form="insert-new-product-form">Submit</button>
					<button class="btn btn-danger" type="reset" form="insert-new-product-form">Clear</button>
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