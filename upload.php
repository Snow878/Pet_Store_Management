<style type="text/css">
	*{
	margin:0px;
	padding:0px;
}
	header
{
	
	background-position:center;
	background-image:linear-gradient(rgba(195,134,81,0.27),rgba(184,142,104,0.09)),url(222.jpg);
	height: 100vh;
	background-size:cover;
	background-repeat:no-repeat;
}

#container ul{
	list-style:none;
	padding:1px 1px;
	 margin-right: 0px;
	
}
#container ul li
{
	background-color:transparent;
	width:153px;
	display:inline-block;
	border: 1px solid transparent;
	border-radius:50px;
	height:45px;
	line-height:53px;
	text-align:center;
	float:right;
	
	font-size:20px;
	position:relative;
	
}

#container ul ul
{
	display:none;
}
	
#container ul li:hover >ul{
	color:#000;
	background-color:white;
display:block;}



#container ul ul ul{
	margin-left:150px;
	top:0px;
	position:absolute;
}

#container ul li a{
	text-decoration: none;
	color:#309209;
	font-family:cursive;
	font-size:22px;
	padding:5px 20px;
	border: 1px solid transparent;
	border-radius:20px;
	transition: 0.6s ease;
}

#container ul li a:hover 
{
	background-color:white;
	color:#000;
}

#container ul li.active a
{
	background-color:white;
	color:#000;
}


.logo img{
	float:left;
	width:140px;
	/*height:auto;*/
	
	margin-top:26px;
	margin-left:26px;
}
h1{
	position: absolute;
	top:141px;
	left:355px;
}


   #content{
   	width: 40vh;
   	margin: 190px 264px auto;
   	border: 1px solid #cbcbcb;
   	padding:30px 30px;
   }
   #content form{
   	width: 87%;
   	margin: -30px;
   }
   #content form div{
   	margin-top: 5px;
   	padding: 2px;
   	color: black;
   }

.button
{
    margin-top: -74px;
    margin-left: 700px;
    text-shadow: 0px 1px 2px;
}

.btn
{
    border: 1.1px solid #2a1e1e;
    padding: 10px 30px;
    color: black;
    text-decoration: none;
    margin-right: -227px;
    font-size: 17px;
    text-transform: uppercase;
}


.btn-one
{
    font-family: "Roboto", sans-serif;
     background-color: darkorange;
    transition: all 0.4s ease-in;
}


.btn-one:hover
{
    background-color: #c3d328;
    transition: all 0.4s ease-in;
}
div.signup-form{
	text-align: center;
	margin-top:180px;
	margin-left:35px;
	}	
#signupform{
	
	background-color: #3d87ab42;
	opacity: 0.8;
	box-shadow: 0px 2px 7px 1px;
	padding: 40px 50px;
}
#button{
	width: 180px;
	padding: 10px 40px;
	border-radius: 5px;
	outline: 0px;
	margin-left: 40px;	
}	


</style>

<?php
session_start();


if(isset($_SESSION['username'])){
echo '<!DOCTYPE html>
<html>
<head>
<title>my-Pet : Admin</title>
<link href="" rel="stylesheet" type="text/css"><!-- linking css file to html file-->

</head>
<body>
	<header>
		<div id="container">
		<ul>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="ll_admin.php">Logout</a></li>
			<li class="active"><a href="#">Admin</a></li>
			<li><a href="about.html">About Us</a>
				
			</li>
			<li><a href="shop.php">Shop</a>
				
			</li>
			<li><a href="pet_hom.html">Home</a></li>
		</ul>
		</div>
		
		<div class="logo">
		<img src="large.png">
		</div>
		<div style="color: white;font-family:monospace;position: absolute;top:-2px;left:110px;width:300px;height: 70px;font-size: 50px;text-shadow: -1px 2px 2px #000;">
			my-<span style="color: #f3ab06;">Pet</span>
		</div>

		<h1>Upload Pets </h1>
		<div id="content" >
			<form method="post" action="up.php" enctype="multipart/form-data" id="signupform">
				<input type="hidden" name="size" value="1000000">
				<div>
					<input type="text" name="pet_type" id="button" placeholder="Pet Type"/><br>
				</div>

				<div>
				<input type="text" name="breed" id="button" placeholder="Breed"/><br>
				</div>
				
				<div>
				<input type="text" name="gender" id="button" placeholder="Gender"/><br>
				</div>
				
				<div>
				<input type="text" name="color" id="button" placeholder="Color"/><br>
				</div>
				
				<div>
				<input type="text" name="age" id="button" placeholder="Age"/><br>
				</div>

				<div>
				<input type="text" name="price" id="button" placeholder="Price"/><br>
				</div>
				<div>
				<input type="number" name="count1" id="button" placeholder="Count"/><br>
				</div>
				<div>
					 <input type="file" name="image" style="font-size:17px;margin-left:40px;color:yellow;">
				</div>
				<br>
				<div>
					<a href="#"><input type="submit" style="font-size:18px;margin-left:38px;background-color:#7cfc00a8;padding:8px 15px;text-shadow:1px 1px 0px;font-family:cursive;" name="upload" value="Upload Pet Details"></a>
				</div>

			</form>
		</div>

		
				<div class="button">
				<a href="edit.php" class="btn btn-one"> EDIT DETAILS </a>
			</div>
		
	</header>
</body>
</html>';
}
else{

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
	echo "all feilds are required";
	die();
}
	
}
?>
