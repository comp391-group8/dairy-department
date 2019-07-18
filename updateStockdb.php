<?php
require_once 'db.php';
/**
 * 
 */
class updatedb extends db
{
    
    function update()
    {   
        $product_name = $_POST['product_name'];
        $quantity = $_POST['quantity'];
        $price=$_POST['price'];
        
       
        $query = 'INSERT INTO dairydept.stock_list (`product_name`, `quantity`,`price`) VALUES (?, ?,?)';
        
         
        $pdo = $this->connect()->prepare($query);
        $pdo->execute(array($product_name, $quantity,$price));
        echo "<script>alert('Thank you. Your details have been Submitted Successfully')</script>";
         echo "<script>window.open('adminindex.php','_self')</script>";
     }
      // else{
           //  echo 'there are less product in the stock than the amount you ordered, please check the //stock list';
         //}
        
       
        
        	
        	 

       
       
        

     

 }   


$u = new updatedb();
if (isset($_POST['btn-submit'])) {
    $u->update();
}

?>