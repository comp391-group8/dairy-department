<?php

require_once 'db.php';

	$db = new db();

		$sql = "SELECT * FROM dairydept.stock_list";
		$result = $db->connect()->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center" border="1px" style="width: 600px; line-height: 30px;color: green">
	<tr>
		<tr>
			<th colspan="4"><h2>Stock List</h2></th>
		</tr>
		<tr>
		<th>Product ID</th>
		<th>Product Name</th>
		<th>Quantity</th>
		<th>Price</th>
	</tr>
	</tr>
	<?php
		while ($rows = $result->fetch()) { ?>
			<tr>
				<td><?php echo $rows['product_id'];?></td>
				<td><?php echo $rows['product_name'];?></td>
				<td><?php echo $rows['quantity'];?></td>
				<td><?php echo $rows['price'];?></td>

			</tr>
			<?php
		}
	?>
</table>
</body>
</html>