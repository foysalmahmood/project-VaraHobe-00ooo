<!DOCTYPE html>
<html>

<head>
	<title>Tolet/Rent,Plot,Land List | VaraHobe.com</title>
	<link rel="icon" href="photos/title_icon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/Login.css">
	<link rel="stylesheet" type="text/css" href="css/create_account.css">
	<!-- Bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/show_post_grid_view.css">
</head>

<body>
	<header>
		<div class="topmargin"></div>

		<div class="logo">
			<img src="photos/logo.jpeg" height="50" width="50">
		</div>

		<div class="Navigation">
			<ul>
				<li style="background: #1abc9c;"><a href="index.html">Home</a></li>
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
				<li><a href="sub.php">Submit Post</a></li>
				<li><a href="advertising_plot.php">Advertising of Plot</a></li>
				<li><a href="rend_land.php">Rending of Land</a></li>
				<li><a href="wanted_post.php">Wanted Post</a></li>
			</ul>
		</div>

		<div class="login"> 
			<a href="login.html" class="boxed">Login</a>
		</div>
	</header>

	<div class="box">
		<img src="user.png" class="user">
		<h1>Login Here</h1>
		<form method="POST">
			<input type="text" name="useremail" placeholder="Enter Username">
			<input type="password" name="userpass" placeholder="Enter password">
			<input type="submit" name="submit" value="Login">

			<a href="create_account.php">Create Acccount</a>
		</form>


<?php

if (isset($_POST['submit'])) {

	echo "Failed";
	//get value passes from login.php file
	$email = $_POST['useremail'];
	$password = $_POST['userpass'];

	//to prevent mysql injection
	$email = stripcslashes($email);
	$password = stripcslashes($password);
	$demo=mysqli_connect("localhost","root","","vs_project");
	// Query the database for user
	$result = mysqli_query($demo,"select * from registration where email = '$email' and password = '$password'") 
						or die("Failed to Query database".mysql_error());
	$numrows=mysqli_num_rows($result);
	            if($numrows!= 0){
	            	while ($row=mysqli_fetch_assoc($result)) {
	            		
	            		$email=$row['email'];
	            		$name = $row['name'];
	            		$password=$row['password'];
	            	}
	            	if($email==$email&&$password==$password){
	            		session_start();
	            		$_SESSION['name'] = $name;
	            		$_SESSION['email']=$email;
	            		
	            		header("Location: index.php");
	            	}
	            	else{
	            		echo "Invalid Email or Password";
	            	}
	            }
	    	}



	?>



	</div>
</body>

</html>