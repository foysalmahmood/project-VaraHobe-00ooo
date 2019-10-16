<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vs_project";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
	//echo "Connection OK";
}
else
{
	die("Connection failed because ".mysqli_connect_error());
}
?>