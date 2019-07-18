<?php

require_once 'db.php';

	$db = new db();

		$sql = "SELECT * FROM dairydept.order_list WHERE status = 'approved'";
		$result = $db->connect()->query($sql);
        $sql2 = "SELECT * FROM dairydept.order_list WHERE status = 'declined'";
		$result2 = $db->connect()->query($sql2);

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
			<th colspan="4" style="display: "><h2>Accepted</h2></th>
		</tr>
		</tr>
		<tr>
		
		<th>Product Name</th>
		<th>Quantity</th>
		<th>Group Reserved</th>
		<th>Subscription</th>     

	
	</tr>

	<?php
		while ($rows = $result->fetch()) { ?>
			<tr>
			
				<td><?php echo $rows['product_name'];?></td>
				<td><?php echo $rows['amount'];?></td>				
				<td><?php echo $rows['group_reserved'];?></td>
				<td><?php echo $rows['subscription'];?></td>
				

			</tr>
			<?php
		}
	?>
    </table><br><br>
    <table align="center" border="1px" style="width: 600px; line-height: 30px;color: green">
        <tr>
		<tr>
			<th colspan="4" style="display: danger"><h2>Declined</h2></th>
	<tr>
		
		<th>Product Name</th>
		<th>Quantity</th>
		<th>Group Reserved</th>
		<th>Subscription</th>
		
            

	
	</tr>
    <?php
    
		while ($rows = $result2->fetch()) { ?>
			<tr>
			
				<td><?php echo $rows['product_name'];?></td>
				<td><?php echo $rows['amount'];?></td>				
				<td><?php echo $rows['group_reserved'];?></td>
				<td><?php echo $rows['subscription'];?></td>
				
				

			</tr>
			<?php
		}
	?>
    
</table>
</body>
</html>