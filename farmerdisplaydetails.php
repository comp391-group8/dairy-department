<?php

require_once 'db.php';

function getFarmerDetails(){
        $sql = "SELECT * FROM dairydept.farmer_details";
            $db = new db();
    		$result = $db->connect()->query($sql);
    
        while ($rows = $result->fetch()) {
			echo "<tr>
				<td>".$rows['review_id']."</td>
				<td>".$rows['location']."</td>
				<td>".$rows['national_id']."</td>
				<td>".$rows['type_of_breed']."</td>
				<td>".$rows['no_of_animals']."</td>
				<td>".$rows['amount_of_milk']."</td>
				<td>
                <form action = 'adminsummary.php' method = 'POST' id = >
                <input type = 'hidden' value = '".$rows['review_id']."' name = 'review_id'>
                <input type = 'submit' value = 'Approve' name = 'farmer_approve'>
                <input type = 'submit' value = 'Decline' name = 'farmer_decline'>
                
                
                </form>
                </td>

			</tr>";
        
        }

}


$db = new db();

if(isset($_POST['farmer_approve'])){
    $id = $_POST['review_id'];
    $sql = "UPDATE dairydept.farmer_details set status = 'approved' WHERE review_id = $id";
    $result = $db->connect()->query($sql);
    header("Location: adminindex.php");
    
}
if(isset($_POST['farmer_decline'])){
    $id = $_POST['review_id'];
    $sql = "UPDATE dairydept.farmer_details set status = 'declined' WHERE review_id = $id";
    $result = $db->connect()->query($sql);
    header("Location: adminindex.php");
}
		
		
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<table align="center" border="1px" style="width: 600px; line-height: 30px;color: green">
		<tr>
			<th colspan="4"><h2>Farmer Details</h2></th>
		</tr>
		<tr>
		<th>Review ID</th>
		<th>Location</th>
		<th>National ID</th>
		<th>Type of Breed</th>
		<th>Number of Animals</th>
		<th>Amount of Milk</th>
		<th>Action</th>
	</tr>
	
	<?php
		getFarmerDetails();
    ?>
</table><br><br>
</body>
</html>








