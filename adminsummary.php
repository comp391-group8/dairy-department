<?php

require_once 'db.php';

	
  function getStocklist(){
      $sql = "SELECT * FROM dairydept.stock_list";
        $db = new db();  
      $result = $db->connect()->query($sql);
      
      while ($rows = $result->fetch()) {
			echo "<tr>
				<td>".$rows['product_id']."</td>
				<td>".$rows['product_name']."</td>
				<td>".$rows['quantity']."</td>
				<td>".$rows['price']."</td>
            

			 </tr>";
		}
  }
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
function getOrderList(){
    		$sql = "SELECT * FROM dairydept.order_list";
                    $db = new db();
            		$result = $db->connect()->query($sql);

         while ($rows = $result->fetch()) {
			echo "<tr>
				<td>".$rows['product_id']."</td>
				<td>".$rows['product_name']."</td>
				<td>".$rows['amount']."</td>				
				<td>".$rows['customer_id']."</td>
                <td>".$rows['status']."</td>

                <td>
                <form action = 'adminsummary.php' method = 'POST' id = >
                <input type = 'hidden' value = '".$rows['customer_id']."' name = 'customer_id'>
                <input type = 'submit' value = 'Approve' name = 'customer_approve'>
                <input type = 'submit' value = 'Decline' name = 'customer_decline'>
                
                
                </form>
                </td>
                
			</tr>";
    

    
    }
}
function getUsers(){
    		$sql = "SELECT * FROM dairydept.users";
                    $db = new db();
                    $result = $db->connect()->query($sql);
    
    while ($rows = $result->fetch()) {
        
		echo  "<tr>
				<td>".$rows['user_id']."</td>
				<td>".$rows['username']."</td>
				<td>".$rows['email']."</td>
				<td>".$rows['phone_no']."</td>
				<td>".$rows['category']."</td>

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

if(isset($_POST['customer_approve'])){
    $id = $_POST['customer_id'];
    $sql = "UPDATE dairydept.order_list set status = 'approved' WHERE review_id = $id";
    $result = $db->connect()->query($sql);
    header("Location: adminindex.php");
    
}
if(isset($_POST['customer_decline'])){
    $id = $_POST['customer_id'];
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
<table align="center" border="1px" style="width: 600px; line-height: 30px;color: green" margin = "10px">
		<tr>
			<th colspan="4"><h2>Stock List</h2></th>
		</tr>
		<tr>
		<th>Product ID</th>
		<th>Product Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Action</th>
	</tr>
	
	<?php
		getStocklist();
	?>
</table><br><br>

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
		
	</tr>
	
	<?php
		getFarmerDetails();
    ?>
</table><br><br>

<table align="center" border="1px" style="width: 600px; line-height: 30px;color: green">
		<tr>
			<th colspan="4"><h2>Order Details</h2></th>
		</tr>
		<tr>
		<th>Product ID</th>
		<th>Product Name</th>
		<th>Quantity</th>
		<th>Group Reserved</th>
		<th>Subscription</th>
		<th>Action</th>
		
            

	
	</tr>
	<?php
		
        getOrderList()
	?>
</table><br><br>

<table align="center" border="1px" style="width: 600px; line-height: 30px;color: green">
		<tr>
			<th colspan="4"><h2>Users</h2></th>
		</tr>
		<tr>
		<th>User ID</th>
		<th>Username</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>Category</th>
		
	
	</tr>
	<?php
		
        getUsers();
	?>
</table>
</body>
</html>








