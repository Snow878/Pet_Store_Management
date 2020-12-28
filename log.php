<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if(!empty($username)|| !empty($password))
{
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname="ganesh";
	//create connection
	$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

	//check connection
	if(mysqli_connect_error()) 
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{

		$q=mysqli_query($conn,"select * from log_in where Username='$username' and Password='$password'");
		$rnum=mysqli_num_rows($q);
		if($rnum==1){
			while($row==mysqli_fetch_assoc($q)){
				$_SESSION["Username"]=$row["Username"];
				$_SESSION["Password"]=$row["Password"];

			}
			
			
			header("location:shop.php");

		}
			else{
				echo'<script>alert("Invalid Username and Password!")</script>';
						header("refresh:1;url=login.html");
			}
	}
} else{
	echo "all feilds are required";
	die();
}

?>		