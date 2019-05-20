<?php
require_once 'db.php';
class User extends db{
	
	 public function register(){

	 	$username = $_POST['username'];
	 	$email = $_POST['email'];
	 	$password = $_POST['password'];
	 	$phone_no = $_POST['phone_no'];
	 	$category = $_POST['category'];

	 	$query = 'SELECT *FROM dairydept.users WHERE username = ?';
	 	$pdo = $this->connect()->prepare($query);
	 	$pdo->execute(array($username));

	 	if ($pdo->rowCount()>0) {
	 		header("location:signup.php");
	 	}
	 	if ($password ===$confirm_password) {
	 		header("location:signup.php");
	 	}

	 	
	 	
	 	$query = 'INSERT INTO dairydept.users (username, email,password, phone_no, category) VALUES (?, ?, ?, ?, ?)';
	 	$pdo = $this->connect()->prepare($query);
	 	$pdo->execute(array($username, $email, $password,$phone_no, $category));
	 	header("location:login.php");


	 }

	
	
					

				public function login($username,$password){

					// $query = $this->db->prepare 'SELECT * FROM dairydept.users (username, password) VALUES (?, ?)';
					$query="SELECT * FROM dairydept.users where username=? AND password=?";
				    $pdo = $this->connect()->prepare($query);

					$pdo->execute([$username,$password]);

                     echo $pdo->rowCount();

					if ($pdo->rowCount()>0) {

						if($user = $pdo->fetch(PDO::FETCH_ASSOC)){
							$category=$user['category'];

							if (strtolower($category)=="farmer") {
								header('location: farmer.php');
							}elseif ($category == "customer") {
							    header('location: farmer.php');
							}
						}
						

				}

			}

}

         $user=new user();

		if (isset($_POST['register'])) {
			$user->register();
            }

             //Call to log in
            if (isset($_POST['login'])) {
			    $user->login($_POST['username'],$_POST['password']);
            }


?>