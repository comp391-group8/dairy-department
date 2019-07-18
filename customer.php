<!DOCTYPE html>
<html>
<head>
	<title>customer</title>
	<style>
		body{
			text-align: center;
			padding: 20px;
			display: block;
			padding: 10px;
			background-image: url('img/16.jpg');




		}
		.container label{
		
			width: 1300px;
			padding: 20px;
			padding-right: 10px;
			line-height: 30px;
			text-align: center;


			
			}
				#wrapper{
	width:30%;
	margin: 50px auto;
	padding: 50px;
	background: #D7FBFF;
}
		
		form{
			margin: 30px auto;
		}	
		.textInput{
	border:none;
	height: 30px;
	margin: 2px;
	border: 1px solid #6B7363;
	font-size: 0.8em;
	padding: 5px;
	width: 50%;	

				

</style>
</head>
<body>
	<div id="wrapper">
	<h2>Welcome Customer</h2>
	<h3>Please Fill this Form</h3>
	<div class="container">
		<form class="form" action="customerorder.php" method="post">

			<label>Place Order<br>
				<select name="product_name" class="textInput">
					<option>Milk</option>
					<option>Yorgut</option>
					<option>Cheese</option>
					<option>Butter</option>
				</select>
			</label><br>
			<label>Enter Amount<br>
				<textarea name="amount"></textarea>
					
			</label><br>
			<label>Event or Group<br>
					<select name="group_reserved" class="textInput">
					<option>Sports</option>
					<option>Students Visit</option>
					<option>Other Events</option>
					<option>None</option>												

					</select><br>
			</label>
			

			<label>Subscription<br>
					<select name="subscription" class="textInput">
					<option>None</option>
					<option>Weekly Subscription</option>
					<option>Monthly Subscription</option>
				</select>
			</label><br><br>		
						

		<input type="submit" value="Submit" name="customerdetails">
		
		</form>
		
		
	</div>
</div>
</body>
</html>