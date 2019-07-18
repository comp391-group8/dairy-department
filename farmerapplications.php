<?php

require_once 'db.php';

	$db = new db();

		$sql = "SELECT * FROM dairydept.farmer_details WHERE status = 'approved'";
		$result = $db->connect()->query($sql);
        $sql2 = "SELECT * FROM dairydept.farmer_details WHERE status = 'declined'";
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
		<th>Review ID</th>
		<th>Location</th>
		<th>National ID</th>
		<th>Type of Breed</th>
		<th>Number of Animals</th>
		<th>Amount of Milk</th>
	</tr>
	

	<?php
		while ($rows = $result->fetch()) { ?>
			<tr>
			<td><?php echo $rows['review_id'];?></td>
				<td><?php echo $rows['location'];?></td>
				<td><?php echo $rows['national_id'];?></td>				
				<td><?php echo $rows['type_of_breed'];?></td>
				<td><?php echo $rows['no_of_animals'];?></td>
				<td><?php echo $rows['amount_of_milk'];?></td>

				
                </td>

				

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
		<th>Review ID</th>
		<th>Location</th>
		<th>National ID</th>
		<th>Type of Breed</th>
		<th>Number of Animals</th>
		<th>Amount of Milk</th>
	</tr>
    <?php
    
		while ($rows = $result2->fetch()) { ?>
			<tr>
			<td><?php echo $rows['review_id'];?></td>
				<td><?php echo $rows['location'];?></td>
				<td><?php echo $rows['national_id'];?></td>				
				<td><?php echo $rows['type_of_breed'];?></td>
				<td><?php echo $rows['no_of_animals'];?></td>
				<td><?php echo $rows['amount_of_milk'];?></td>

				

			</tr>
			<?php
		}
	?>
    
</table>
</body>
</html>