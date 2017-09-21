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
	 		<div class="pull-right">
		 		<button class="btn btn-primary" onclick="window.location.href='insertNewIngredientForm.php'">Add A New Ingredient</button>
	 		</div>
	 		<table class="table table-responsive">
	 			<thead>
	 				<th>No</th>
	 				<th>Ingredient</th>
	 				<th>Quantity</th>
	 				<th>Price</th>
	 				<th>Action</th>
	 			</thead>
	 			<tbody>
	 			<?php 
	 				require_once'../php/config.php';
	 				$sql = "SELECT * FROM ingredients";
	 				$result = $conn->query($sql);
	 				$No = 1;
	 				while($row = $result->fetch_assoc()){
	 			?>
	 				<tr>
	 					<td><?php echo $No ?></td>
	 					<td><?php echo $row['ingredientName'] ?></td>
	 					<td><?php echo $row['ing_quantity'] ?></td>
	 					<td><?php echo $row['ing_price'] ?></td>
	 					<td><button class="btn btn-xs btn-primary" onclick="window.location.href='editIngreForm.php?q=<?php echo $row['ingredientsID']; ?>'"><i class="fa fa-pencil-square-o"></i></button><button class="btn btn-xs btn-primary" onclick="window.location.href='insertPurchaseForm.php?q=<?php echo $row['ingredientsID']; ?>'"><i class="fa fa-pencil-square-o">Purchase Order</i></button><button class="btn btn-xs btn-danger" onclick="var a = confirm('Are you sure want to delete this ingredient information?'); if(a){window.location='../php/adminphp/deleteIngred.php?q=<?php echo $row['ingredientsID']; ?>'}" ><i class="fa fa-trash-o"></i></button></td>
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
<?php 
	include'footer.php';
 ?>