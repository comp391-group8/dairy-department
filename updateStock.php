
<!DOCTYPE html>
<?php
if (isset($_POST['name']) && isset($_POST['product_id'])) {
	echo "submitted";
}
?>
<html>

<head>
	<title>update stock</title>
	<style>
		body{
			display: block;
		}
		.form-group label{
			width: 20%;
		}
		.form{
			border: 2px solid green;
			width: 30%;
			margin-left: 30%;
		}
		label{
			display: block;
			width: 30%;
			margin-left: 10px;

		}
		.form-group{
			height: 100px;
			margin: 1rem 0;
		}
		.form-group input, button{
			margin-left: 10px;
		}
	</style>
</head>
<body>
	<div class="form">
	<h2>Update Stock</h2>
	<div>
		<form action="updateStockdb.php" method="POST">
			<div class="form-group">
				<label for="name">Product Name</label>
				<input type="text" name="product_name" id="name" class="form-control"><br><br>
			</div>
			<div class="form-group">
				<label for="name">Quantity</label>
				<input type="text" name="quantity" id="name" class="form-control"><br><br>
			</div>	
			<div class="form-group">
				<label for="name">Price</label>
				<input type="text" name="price" id="name" class="form-control"><br><br>
			</div>	
			<div class="form-group">
				<button type="submit" name="btn-submit" class="btn-info">Add Product</button>
			</div>	

		</form>
	</div>
</div>
</body>
</html>