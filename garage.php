<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
}
else{ 
?> 

<?php
include("connection.php");
error_reporting(0);
$query = " SELECT * FROM sub4 WHERE offer_type = 'Rent' && property_type = 'Garage' ";
$data =  mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tolet/Rent,Plot,Land List | VaraHobe.com</title>
	<link rel="icon" href="photos/title_icon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
				<li><a href="index.php">Home</a></li>
				<li style="background: #1abc9c;"><a href="#">For Rent</a>
					<ul>
						<li><a href="family_house.php">Family House</a></li>
						<li><a href="bacholor_mess.php">Bachelor Mess</a></li>
						<li><a href="sublet.php">Sublet</a></li>
						<li style="background: #1abc9c;"><a href="garage.php">Garage</a></li>
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

        <div class="login" session_start();>
            
            <a class="boxed" href="logout.php">
                        <?=$_SESSION['name'];?>
            </a>
        </div>
	</header>

	<!--Garage Heading -->

	<div>
		<div class="adverting_text" >
			<h1 class="text-center"class="boxed">Rent Garage</h1>
		</div>
	</div>
	
	<!--For View Rental Post -->
	
	<div class="container">
		<div class="row">

<?php 

if($total != 0)
{

	while ($result = mysqli_fetch_assoc($data))
	{		
?>
			<!--Product -->
			<div class="col-md-4 product-grid">
				<div class="image">
					<a href="#">

						<?php
							echo "<img src ='".$result['image']."' height = '300' width = '350'</a>";
						?>
						
						<div class="overlay">
							<div class="details">View Details</div>
						</div>
					</a>
				</div>

				<h2>
				<?php
					echo($result['ad_title'])
				?>
			</h2>

			<h6>
				<?php
					echo($result['property_type'])
				?>
			</h6>

			<h5>
				<?php
					echo($result['area'])
				?>,
				<?php
					echo($result['district'])
				?>
			</h5>

			<h5 style="color: #bdc3c7">
				<?php
					echo($result['date'])
				?>	
			</h5>

			<h5 class="price">
				<?php
					echo($result['amount'])
				?>
			</h5>

			<h5>Contact with Property Holder</h5>
				<a href="#" class="btn rent">Details</a>
			</div>
			<!--Product -->
<?php

	}
}
else
{
	echo "No Record Found";
}

?>

		</div>
	</div>


	<!--End of Post View -->

</body>
</html>

<?php
    }
?>