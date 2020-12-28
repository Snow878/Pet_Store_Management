<?php

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
		$q=mysqli_query($conn,"CALL admin_details('$username','$password')");
		$row=mysqli_fetch_array($q);
		if($username==$row['user_name'] && $password==$row['pass_word']){
			
				$_SESSION['username']=$row["user_name"];
				$_SESSION['password']=$row["pass_word"];
			
			header("location:upload.php");}
			else{
				echo'<script>alert("Invalid Username and Password!")</script>';
						header("refresh:1;url=admin.html");
			}
	}
}else{
	echo'<script>alert("All feilds required!")</script>';
						header("refresh:1;url=admin.html");
	die();
}

?>		