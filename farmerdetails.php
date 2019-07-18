<?php
require_once 'db.php';
class farmerdetails extends db{

	public function supply(){
		//$review_id = $_POST['review_id'];
		$location = $_POST['location'];
	 	$national_id = $_POST['national_id'];


	 	$type_of_breed ="";

	 	if (isset($_POST['type_of_breed1'])) {
	 		$type_of_breed = $type_of_breed.$_POST['type_of_breed1'].",";
	 	}

	 	if (isset($_POST['type_of_breed2'])) {
	 		$type_of_breed = $type_of_breed.$_POST['type_of_breed2'].",";
	 	}

	 	if (isset($_POST['type_of_breed3'])) {
	 		$type_of_breed = $type_of_breed.$_POST['type_of_breed3'].",";
	 	}

	 	if (isset($_POST['type_of_breed4'])) {
	 		$type_of_breed = $type_of_breed.$_POST['type_of_breed4'].",";	 

	 			}
	 	if (isset($_POST['type_of_breed5'])) {
	 		$type_of_breed = $type_of_breed.$_POST['type_of_breed5'].",";
	 	}

	 	if (isset($_POST['type_of_breed6'])) {
	 		$type_of_breed = $type_of_breed.$_POST['type_of_breed6'].",";
	 	}


	 	
	 	$amount_of_milk = $_POST['amount_of_milk'];
	 	$no_of_animals = $_POST['no_of_animals'];
	 	//$payment = $_POST['payment'];
	 	//$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
		//$stmt->bind_param("sss", $firstname, $lastname, $email);

	 	$query = 'INSERT INTO dairydept.farmer_details (`location`, `national_id`, `type_of_breed`, `no_of_animals`, `amount_of_milk`) VALUES (?, ?, ?, ?, ?)';

	 	$db = new db();
	 	//$pdo = $db->connect();



	 	$pdo = $this->connect()->prepare($query);
	 	$pdo->execute(array($location, $national_id, $type_of_breed, $no_of_animals, $amount_of_milk));
	 	echo "<script>alert('Thank you. Your details have been Submitted Successfully.')</script>";
	 	echo "<script>window.open('farmerpage.php','_self')</script>";
	 	

	 	//echo "yes";

	}



}


$farmer = new farmerdetails();

if (isset($_POST['farmerdetails'])) {
	
	$farmer->supply();	
}

?>