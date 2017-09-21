<?php 
session_start();
	include 'bootstrap.php';
	include '../php/adminphp/adminSession.php';
 ?>
 <div class="container-fluid">
 	<div class="row">
	 	<div class="col-md-2 col-sm-3">
	 		<?php include'adminsidenav.php'; ?>
	 	</div>
	 	<div class="col-md-10 col-sm-9 page-margin">
	 		<div class="col-sm-offset-10 col-sm-2 col-xs-12">
		 		<button class="btn btn-primary btn-block" onclick="window.location.href='insertNewProductForm.php'"> Insert New Product</button>
	 		</div>

	 		<table id="productTable" class="table table-responsive">
	 			<thead>
	 				<th>No</th>
	 				<th>Product</th>
	 				<th>Quantity</th>
	 				<th>Price</th>
	 				<th>Picture</th>
	 				<th>Action</th>
	 			</thead>
	 			<tbody>
	 			<?php 
	 				require_once'../php/config.php';
	 				$sql = "SELECT * FROM product WHERE productAvaibility = 1";
	 				$result = $conn->query($sql);
	 				$No = 1;
	 				while($row = $result->fetch_assoc()){
	 			?>
	 				<tr>
	 					<td><?php echo $No ?></td>
	 					<td><?php echo $row['productName'] ?></td>
	 					<td><?php echo $row['productQuantity'] ?></td>
	 					<td>RM <?php echo $row['productPrice'] ?></td>
	 					<td><img src="../pic/product/<?php echo $row['productName']?>.jpg" height="150px" width="150px"></td>
	 					<td>
	 						<button class="btn btn-xs btn-primary" onclick="window.location.href='editProductInfoForm.php?q=<?php echo $row['productID']; ?>'"><i class="fa fa-pencil-square-o"> Edit Product Info</i></button>
	 						<button class="btn btn-xs btn-primary" onclick="window.location.href='insertDailyProduceForm.php?q=<?php echo $row['productID']; ?>'"><i class="fa fa-pencil-square-o"> Daily Produce</i></button>
	 						<button class="btn btn-xs btn-danger" onclick="var a = confirm('Are you sure want to delete this prodcut information?'); if(a){window.location='../php/adminphp/deleteProduct.php?q=<?php echo $row['productID']; ?>'}" ><i class="fa fa-trash-o"> Delet Product</i></button>
	 					</td>
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
 <script type="text/javascript">
 	$(document).ready(function(){
 		$('#productTable').DataTable();
 			} );
 </script>
<?php include 'footer.php'; ?>