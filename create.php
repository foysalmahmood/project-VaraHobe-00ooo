<?php

echo('Hello')
	    if(isset($_POST['submit']))
	    {

echo('hello');		

	        if(!empty($_POST['name'])&&!empty($_POST['address'])&&!empty($_POST['email'])&&!empty($_POST['pnumber'])&&!empty($_POST['password']){
	        	$name=$_POST['name'];
		        $address=$_POST['address'];
		        $email=$_POST['email'];
		        $phone=$_POST['pnumber'];
		        $pass=$_POST['password'];
		        $conn=new mysqli('localhost','root','')or die(mysqli_error());
		        $db=mysqli_select_db($conn,'web') or die("DB error");
		        $query=mysqli_query($conn, "SELECT * FROM userinfo WHERE email='$email'");
		        $numrows=mysqli_num_rows($query);
		        if($numrows==0){
		        	$sql="insert into userinfo(name,address,email,phone,pass) values ('$name',$address,'$email','$phone','$pass')";
		        	$result=mysqli_query($conn, $sql);
		        	if($result){
		        		header('Location: Login.php?loginsuccess');
		        	}
		        	else{
		        		echo "Failed";
		        	}
		        }
		        else{
		        	echo "Email already Used";
		        }
	        }
	        else{
	        	echo "Required All fields";
	        }
	    }
	?>