<?php
session_start();
if(isset($_SESSION['username'])){
	echo '<html>
<head>
	<title>Pet Care</title>
</head>
	<div id="container">
		<ul>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="ll.php">Logout</a></li>
			<li><a href="contact.html">Contact Us</a></li>
			<li><a href="about.html">About Us</a>
			</li>
			<li class="active"><a href="#">Shop</a>
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
	<div class="w3-row w3-light-grey w3-padding-16">
			<div class="adopt">
			<div class="w3-col 16 w3-center" style="padding: 3% 5%;width: 100px;">
				<div class="w3-card-2 w3-white w3-padding" style="width:530px;height:235px;padding:5px;">
					<h2 class="w3-xxlarge">ADOPT</h2>
					<h4 class="w3-text-dark-grey">Adopt Option will let you adopt pets which you like to take responsibility of from the database of pets which are availabe in our pet store.<br>';
			echo "Pet adoption is the process of taking responsibility and care for a pet.</h4>
					<h3>Love them or don't get them</h3>";
			echo '<a href="dog_page.php" class="w3-button w3-dark-grey">CLICK HERE FOR ADOPTION</a>
				</div>
			</div>
			</div>
			<div class="sell">
			<div class="w3-col 16 w3-center" style="padding: 3% 5%;width: 100px;">
				<div class="w3-card-2 w3-white w3-padding" style="width:532px;height:230px;padding:5px;">
					<h2 class="w3-xxlarge">DONATE</h2>
					<h4 class="w3-text-dark-grey">DONATE Option will give you an option to sell/donate pets to Us.<br>We would love to take care of the pets which you give us.<br></h4>
						<h3>We will take responsibility of the pet and<br>give them our care. </h3>
					<a href="sell.php" class="w3-button w3-dark-grey">CLICK HERE TO DONATE PETS TO US</a>
				</div>
			</div>
			</div>
			<div class="fact">
			<div class="w3-col 16 w3-center" style="padding: 3% 5%;width: 100px;">
				<div class="w3-card-2 w3-white w3-padding" style="width:532px;height:230px;padding:5px;">
					<h2 class="w3-xxlarge">FACILITIES</h2>
					<h4 class="w3-text-dark-grey">Facilities Option will give you access to choose and buy pet accessories<br> for pets, we also provide pet grooming,vet and puppy program.</h4>
					<h3>We hope you enjoy our services.Thank you</h3><br>
					<a href="facilities.php" class="w3-button w3-dark-grey">CLICK HERE FOR PET FACILITIES</a>
				</div>
			</div>
			</div>
		</div></html>';
}
else{
	$username=$_POST['username'];
$password=$_POST['password'];
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
	}else
	{ $q=mysqli_query($conn,"select * from log_in where Username='$username' and Password='$password'");
		$row=mysqli_fetch_assoc($q);
		if($username==$row["Username"] && $password==$row['Password']){
			$_SESSION['username']=$row["Username"];
			$_SESSION['password']=$row["Password"];
			echo "<script>location.href='shop.php'</script>";
		}else
		{
			echo "<script>alert('username or password incorrect!')</script>";
			echo "<script>location.href='login.html'</script>";
		}
	}
}
?>	
<style type="text/css">
*
{
    margin: 0;
    padding: 0; /* fr complete website*/
}
header
{
	background-image:linear-gradient(rgba(195,134,81,0.27),rgba(184,142,104,0.09)),url(bird-15.jpg);
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
	line-height:66px;
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
.logo img{
	float:left;
	width:130px;
	margin-top:12px;
	margin-left:26px;
}
.adopt
{
	position:absolute;
	top:162px;
	left:113px;
}
.sell
{
	position:absolute;
	top:166px;
	left:825px;
}
.fact
{
	position:absolute;
	top:445px;
	left:460px;
}
.w3-light-grey, .w3-hover-light-grey:hover, .w3-light-gray, .w3-hover-light-gray:hover {
    color: black;
    background-color: #1d844e;
}
.w3-padding-16 {
	margin-top: -2px;
    padding-top: 130px;
    /*padding-bottom: 7px;*/
    box-shadow: :7px 5px 16px 2px;
}
.w3-center {
    text-align: center;
}

.w3-col, .w3-half, .w3-third, .w3-twothird, .w3-threequarter, .w3-quarter {
    float: left;
    width: 100%;
}
.w3-white, .w3-hover-white:hover {
    color: #000!important;
    background-color: #fff!important;
}
.w3-padding {
    padding: 8px 16px;
}
.w3-card, .w3-card-2 {
 	box-shadow: 10px 15px 35px 4px;
}
.w3-xxlarge {
    font-size: 36px!important;
}
h1, h2, h3, h4, h5, h6 {
    font-family: "Segoe UI",Arial,sans-serif;
    font-weight: 400;
    margin: 10px 0;
}
h2 {
    font-size: 30px;
}
h3{
	font-size: 20px;
	color: :navy;
}
.w3-text-dark-grey, .w3-hover-text-dark-grey:hover, .w3-text-dark-gray, .w3-hover-text-dark-gray:hover {
    color: #3a3a3a;
}
w3-col .w3-button {
    margin: 5px 5px 5px 0;
    font-size: 16px;
}
.w3-dark-grey, .w3-hover-dark-grey:hover, .w3-dark-gray, .w3-hover-dark-gray:hover {
    color: #fff!important;
    background-color: #616161!important;
}
.w3-btn, .w3-button {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.w3-btn, .w3-button {
    border: none;
    display: inline-block;
    padding: 8px 16px;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    background-color: inherit;
    text-align: center;
    cursor: pointer;
    white-space: nowrap;
}
a {
    color: inherit;
}
a {
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
</style>
