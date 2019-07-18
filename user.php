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
	 		header("location:signup.php?username_error=true");	 	}

	 	else{
	 		$query = 'INSERT INTO dairydept.users (username, email, password, phone_no, category) VALUES (?, ?, ?, ?, ?)';
	 		$pdo = $this->connect()->prepare($query);
	 		$pdo->execute(array($username, $email, password_hash($password, PASSWORD_DEFAULT), $phone_no, $category));
	 		header("location:login.php");
	 	}
	 	
	 	


	 }

	
	
					

				public function login($username,$password){
					

					// $query = $this->db->prepare 'SELECT * FROM dairydept.users (username, password) VALUES (?, ?)';
					$query="SELECT * FROM dairydept.users where username=?";
				    $pdo = $this->connect()->prepare($query);
					$pdo->execute([$username]);
					

                     //echo $pdo->rowCount();

         			if ($username == 'admin' && $password == 'admin') {
         				header("location:adminindex.php");

         			}else{
         					if ($pdo->rowCount()>0) {

						if($user = $pdo->fetch(PDO::FETCH_ASSOC)){
							$category=$user["category"];

							if (password_verify($password, $user['password'])) {
                                session_start();
                                $_SESSION['id']=$user['user_id'];
								
							if (strtolower($category)=="farmer") {
								header("location: farmerpage.php");
							}elseif(strtolower($category) == "customer") {
							    header("location: customerpage.php");
							}
						}else{
							header('location:login.php?password_error=true');
						}


					}
					

				}else{
					header('location:login.php?user_error=true');

				}

         	}

				

	}
	function logout(){
		header('location:login.php');
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

            if (isset($_POST['logout'])) {
			    $user->logout();
            }

?>