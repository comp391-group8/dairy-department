<!DOCTYPE html>
<html>
<head>
	<title>farmer</title>
	<style>
		body{
			text-align: center;
			padding: 20px;
			display: block;
			padding: 10px;
			background-image: url('img/12.jpg');
			background-size: cover;

		}

		.container label{
		
		
			padding: 20px;
			padding-right: 10px;
			line-height: 30px;
			text-align: center;
			
			}
			.form label{
				width: 50px;
		}
		#wrapper{
	width:30%;
	margin: 50px auto;
	padding: 50px;
	background: #D7FBFF;
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
	<h2>Welcome Farmer</h2>
	<head>Please Confirm the Condition of the cows first</head>
	<h3>Please Fill this Form</h3>
	<div class="container">
		<form class="form" action="farmerdetails.php" method="post" name="vform">
		<div class="input-group" id="location_div">
			<label>Location
            <select name="location">
                <option>Njokerio</option>
                <option>Sumat</option>
                <option>Wright</option>
                <option>Midways</option>
                <option>Gate</option>
                </select>
            </label><br>
<!--
			<input type="text" name="location" class="textInput" style="height: 22px" id="location" onchange="locationVerify()"><br>
			<div id="location_error"></div>
-->
		</div>
			<div class="input-group" id="id_no_div">
			<label>ID No</label><br>
			<input type="text" name="national_id" style="height: 25px; width: 50%" id="national_id"><br>
			<div id="id_no_error"></div>
			</div>
						<label for="milk">Amount of milk<br>
					<select name="amount_of_milk" class="textInput" style="width: 50%">
						<option>20 litres</option> 
						<option>30 litres</option> 
						<option>40 litres</option> 
						<option>50 litres</option> 
						<option>More than 50 litres</option> 

					</select>
			</label><br>

			<label>Number of animals<br>
					<select name="no_of_animals" class="textInput" style="width: 50%">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				    <option>5</option>
					<option>More than 5</option>										

					</select><br>
			</label>
			
			<label>Type of Breed</label><br>
			<label>
				<div class="input-group" id="type_of_breed_div">
				<input type="checkbox" name="type_of_breed1" value="Fresian" id="fresian">Fresian
 				<input type="checkbox" name="type_of_breed2" value="Ayshire" id="ayshire">Ayshire<br>
 				<input type="checkbox" name="type_of_breed3" value="Guarnsey" id="guarnsey">Guarnsey                        
  				<input type="checkbox" name="type_of_breed4" value="Jersey" id="jersey">Jersey<br>
  				<input type="checkbox" name="type_of_breed5" value="Holstein" id="holstein">Holstein
 				<input type="checkbox" name="type_of_breed6" value="Others" id="Others">Others<br>
 				<div id="type_of_breed"></div>
 			</div>
 			</label>

 					<input type="submit" value="Submit" name="farmerdetails">
                    

		</form>
		
	</div>
</div>

</body>

</html>