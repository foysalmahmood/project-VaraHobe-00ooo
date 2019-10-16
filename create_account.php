<!DOCTYPE html>
<html>

<head>
	<title>Tolet/Rent,Plot,Land List | VaraHobe.com</title>
	<link rel="icon" href="photos/title_icon.png">	
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Bootstrap css 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/show_post_grid_view.css">
	<link rel="stylesheet" type="text/css" href="css/create_account.css">
</head>

<body>
	<header>
		<div class="topmargin"></div>

		<div class="logo">
			<img src="photos/logo.jpeg" height="50" width="50">
		</div>

		<div class="Navigation">
			<ul>
				<li  style="background: #1abc9c;"><a href="index.php">Home</a></li>
				<li><a href="#">For Rent</a>
					<ul>
						<li><a href="family_house.php">Family House</a></li>
						<li><a href="bacholor_mess.php">Bachelor Mess</a></li>
						<li><a href="sublet.php">Sublet</a></li>
						<li><a href="garage.php">Garage</a></li>
						<li><a href="factory.php">Factory</a></li>
						<li><a href="office.php">Office</a></li>
					</ul>
				</li>
				<li><a href="submit.php">Submit Post</a></li>
				<li><a href="advertising_plot.php">Advertising of Plot</a></li> 
				<li><a href="rend_land.php">Rending of Land</a></li>
				<li><a href="wanted_post.php">Wanted Post</a></li>
			</ul>
		</div>

		<div class="login">
			<a href="login.php" class="boxed">Login</a>
		</div>
	</header>

	<div class="box">
		<img src="reg_img.png" class="reg_img">
		<h1>Registation Here</h1>
		<form method="POST">
			<input type="text" name="full_name" placeholder="Enter Full Name" required>
			<input type="text" name="address" placeholder="Enter Full Address" required>
			<input type="email" name="email" placeholder="Enter Email" required>
			<input type="number" name="pnumber" placeholder="Enter Number" required>
			<input type="password" name="password" placeholder="Enter password" required>
			<input type="submit" name="submit" value="Registation">
		</form>
		<?php

			if (isset($_POST['submit'])) {

			 	# code...
			 	if(!empty($_POST['full_name']) && !empty($_POST['address']) && !empty($_POST['email']) && !empty($_POST['pnumber']) && !empty($_POST['password'])){

			 		$name = $_POST['full_name'];
			 		$address = $_POST['address'];
			 		$email = $_POST['email'];
			 		$contact = $_POST['pnumber'];
			 		$password = $_POST['password'];


			 		$conn = new mysqli('localhost','root','')or die(mysql_error());
			 		$db_select = mysqli_select_db($conn,'vs_project') or die('Db error');
			 		$quary = mysqli_query($conn,'SELECT * FROM registation WHERE email = "$email"');
			 		#$numrows = mysqli_num_rows($quary);

			 		$sql = "INSERT INTO registration(name,address,email,contact,password) VALUES ('$name','$address','$email','$contact','$password')";
			 		$result = mysqli_query($conn,$sql);
			 		if ($result) {
			 				# code...
			 				header('Location:login.php ? loginsuccess');
			 		}
			 		else{
			 				echo "Failed";
			 		}

			 		/*if ($numrows!=0) {
			 			# code...
			 			$sql = 'INSERT INTO registation(name,address,email,contact,password) VALUES ("$fname","$address","$email","$phone","$pass")';
			 			$result = mysqli_query($conn,$sql);

			 			if ($result) {
			 				# code...
			 				header('Location:login.html ? loginsuccess');
			 			}
			 			else{
			 				echo "Failed";
			 			}
			 		}
			 		else{
			 			echo "Failed";
			 		}*/
			 	}
			 	else{
			 		echo "required all fields";
			 	}
			 } 
		 ?>




	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>
</body>

</html>