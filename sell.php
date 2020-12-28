<?php
session_start();
if(isset($_SESSION['username'])){
echo '<html>
<head>
<title>my-Pet : Donate us</title>


</head>
<body>
	<header>
		<div id="container">
		<ul>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="ll.php">Logout</a></li>
			<li><a href="contact.html">Contact Us</a></li>
			<li><a href="about.html">About Us</a>
				
			</li>
			<li><a href="shop.php">Shop</a>
				<ul>
					
				</ul>
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
		
		<div class="signup-form">
			
			<form method="post" action="sell2.php" enctype="multipart/form-data" align="center" id="signupform" style="height: 490px;">
				<input type="hidden" name="size" value="1000000">
				<h1> Pet Donate System </h1>
	  
				<b><p style="font-size: 20px;
	line-height: 3;
}">~Customer Name~</p></b>
				<input type="text" name="username" id="button" placeholder="Username" />
				<input type="password" name="password" id="button" placeholder="Password" /><br>
				
				<b><p style="font-size: 20px;
	line-height: 3;
}">~Pet Details~</p></b>
				<input type="text" name="pet_type" id="button" placeholder="Pet Type"/><br>
				<input type="text" name="breed" id="button" placeholder="Breed"/><br>
				<input type="text" name="gender" id="button" placeholder="Gender"/><br>
				<input type="text" name="color" id="button" placeholder="Color"/><br>
				<input type="text" name="age" id="button" placeholder="Age"/><br>
				<div>
				<input type="text" name="price" id="button" placeholder="Price"/><br>
				<input type="number" name="count" id="button" placeholder="Count"/><br>
				</div>

				<div>
					<input type="file" name="image">
				</div>

				<b><p style="font-size: 20px;
	line-height: 3;
}">~Almost Done~</p></b>
	
			<div>
					<input type="submit" name="upload" id="butt" value="Upload Image">
				</div>
				</form>
			
		</div>


		</header>
</body>
</html>';
}
else{
	echo "<script>location.href='login.html'</script>";

}
?>
<style type="text/css">
*{
margin:0;
padding:0;
}

header
{
	background-image:linear-gradient(rgba(195,134,81,0.27),rgba(184,142,104,0.09)),url(Wide-Best.jpg);
	background-position:center;
	height:100vh;
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
	color:lawngreen;
	font-family:cursive;
	font-size:21px;
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

/*
ul li
{
	display: inline-block;
	width:151px;
	height:40px;
	margin-right:-5px;
	background-color:transparent;
	line-height:35px;
	text-align:center;
	font-size:20px;
}
*/

.logo img{
	float:left;
	width:150px;
	/*height:auto;*/
	
	margin-top:26px;
	margin-left:26px;
}


div.signup-form{
	text-align: center;
	margin-top:105px;
	margin-left:60px;
	}	
#signupform{
	width:30%;
	margin-top: 160px;
	height: 490px;
	margin-left: 440px;
	background-color: #f9f2e766;
	box-shadow:8px 0px 15px;
	opacity: 0.8;
	padding: 30px 0px;
}
#signup-form h1
{
	color:black;
}

#button{
	width: 150px;
	padding: 6px;
	border-radius: 5px;
	outline: 0px;
	
}	
#rd{
	margin-right: 10px;
}
#but{
	font-size: 16px;
}	
#butt{
	width: 100px;
	padding: 12px;
	border-radius: 16px;
	background-color: #0c6996;
	/*border: 2px solid #01010c;*/
	color: aliceblue;
	font-size: 12px;
}
input[type="submit"]:hover
{
	cursor: pointer;
}

</style>
