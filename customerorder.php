<?php
require_once 'db.php';
/**
 * 
 */
class customer extends db
{
	
	function order()
	{
		$product_name = $_POST['product_name'];
	 	$amount = $_POST['amount'];
	 	$group_reserved = $_POST['group_reserved'];
	 	$subscription = $_POST['subscription'];
	 	

        session_start();
	 	$customer_id = $_SESSION['id'];
	 	$initial='SELECT * FROM dairydept.stock_list WHERE  product_name=?';

	 	$result = $this->connect()->prepare($initial);
	 	$result->execute(array($product_name));

	 	$new=$result->fetch();
	 	$curr =$new['quantity'];
	 	$curr -=$amount;
        if($curr<0){


        	echo "<script>alert('you have ordered more than the stock list')</script>";
        echo "<script>window.open('customerpage.php','_self')</script>";
        }
	 	$initial2='UPDATE  dairydept.stock_list SET quantity= ?  WHERE product_name =?';

	 	$result2 = $this->connect()->prepare($initial2);
	 	$result2->execute(array($curr,$product_name));


	 	$query = 'INSERT INTO dairydept.order_list(product_name, amount, group_reserved, subscription, customer_id) VALUES (?, ?, ?, ?, ?)';

	 	//$db = new db();

	 	$pdo = $this->connect()->prepare($query);
	 	$pdo->execute(array($product_name, $amount, $group_reserved, $subscription, $customer_id));
	 	echo "<script>alert('Thank you. Your details have been Submitted Successfully')</script>";
        echo "<script>window.open('customerpage.php','_self')</script>";
	 	

	 

	}
}
$customer = new customer();
if (isset($_POST['customerdetails'])) {
	$customer->order();
}


?>