<?php
session_start();
if(isset($_SESSION['username'])){
$x=$_SESSION['username'];
$y="YES";
$n="NO";
$noth="NA";
$p="1000";
$hostname = "localhost";
$username1 = "root";
$password1 = "";
$dbname = "ganesh";
//making the connection to mysql

$db = mysqli_connect($hostname, $username1, $password1 ,$dbname) OR die("could not connect to database,ERROR: ".mysqli_connect_error());


echo '<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>my-Pet : Facilities</title>

</head>
<body>
	
	
		<div id="container">
		<ul>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="ll.php">Logout</a></li>
			<li><a href="contact.html">Contact Us</a></li>
			<li><a href="shop.php">Shop</a></li>
			<li><a href="pet_hom.html">Home</a></li>
		</ul>
		</div>
		
		<div class="logo">
		<img src="large.png">
		</div>

		<div style="color: white;font-family:monospace;position: absolute;top: 16px;
    left: 595px;height: 70px;font-size: 50px;text-shadow: -1px 2px 2px #000;">
			my-<div style="color: #f3ab06;position: absolute; top: 2px;left: 78px;">Pet</div>
		</div>

		<div class="red">
			<img src="red.png">
			
		</div>
		
		<div class="img1box">
			<img src="green.jpg">
		
		<a href="#signupform"> Pet Services</a>
		</div>
		<div class="img2box">
			<img src="orred.jpg">
			<a href="#sup"> Pet Supplies</a><br></div>
		<div class="img3box">
			<img src="blue.jpg">
		<a href="#fd"> Pet food</a></div>

		<div class="signup-form">
			<h2 style=" font-size: 33px;font-family:serif;text-transform: capitalize;margin-top:-120px;
    text-shadow: 0px 1px 1px;
    font-weight: 500;
    text-align: center;
    margin-top: -159px;">Our Pet Services</h2>
    <p style="text-align:center;font-size: 24px;color: #5c5151; font-weight: 100;">Welcome!</p>
			
			<form align="center" id="signupform" method="post" action="fact_buy.php?gro='.$y.'&&mem='.$x.'&&vet='.$n.'&&p='.$p.'&&sup='.$noth.'&&price='.$noth.'">';
				
	  			echo '<div class="parent" onclick="">
				<div class="child bg-one">
					<span></span>
				</div>
				</div>
				<h5>
					<input type="submit" id="butt" style="width:120px;" value="PET GROMMING" />
				</h5>
				<p style="text-align:">Best Friends Pet Care is the leader of the pack when it comes to the absolute best care for your cat or dog.</p>
				
				
			</form>
			
		</div>
		
		<div class="signup-form">
			<form align="" id="signupform2"  method="post" action="fact_buy.php?vet='.$y.'&&mem='.$x.'&&gro='.$n.'&&p='.$p.'&&sup='.$noth.'&&price='.$noth.'">';
				
	  			echo '<div class="parent" onclick="">
				<div class="child bg-two">
					<span></span>
				</div>
				</div>
				<h5 align="center">
					<a><input type="submit" id="butt" style="width:122px;" value="PET VETERINARY" /></a>
					
				</h5>
				<p style="text-align:">Our veterinarians and staff understand the importance of the special bond you share with your pet and are dedicated to providing the best that modern veterinary care has to offer</p>
				
			</form>
		</div>

		<div class="bb">
			<img src="q2.png">
			<h5 id="sup" style="text-align: center;text-shadow: 0px 1px 1px;color: black;margin-top:-197px;font-size: 28px">
		Pet Supplies available for your pets at our Pet store</h5>
		<p style="text-align: center;color: green;font-family: "yars",serif;margin-top:-29px;font-size: 22px">hope you enjoy shopping for your pet</p>
		</div>


		<!-- suplllluyyyyy-->
		<!--set one -->
		<div class="s-f">
			
			<form align="" id="sf" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Cat house".'&&price='."350".'&&gro='.$noth.'&&p='.$noth.'">';
	  			echo '<div class="parent" onclick="">
				<div class="child bg-three">
					<span></span>
				</div>
				</div>
				<h5><a>CAT HOUSE</a></h5>
				<p>Color: Black and Grey  <br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 350</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
		</div>

		<div class="s-f">
			
			<form align="" id="sf2" method="post"  action="fact_buy.php?vet='.$noth.'&&sup='."Square aquarium".'&&price='."700".'&&gro='.$noth.'&&p='.$noth.'">';
				
	  			echo '<div class="parent" onclick="">
				<div class="child bg-four">
					<span></span>
				</div>
				</div>
				<h5><a>SQUARE AQUARIUM</a></h5>
				<p>Color: Transparent with small toys inside<br>Size: Medium&nbsp;&nbsp;&nbsp; Price: RS 700</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
			
		</div>
		
		<div class="s-f">
			
			<form align="" id="sf3" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Flying disc frisbee".'&&price='."190".'&&gro='.$noth.'&&p='.$noth.'">';
				
	  			echo '<div class="parent" onclick="">
				<div class="child bg-five">
					<span></span>
				</div>
				</div>
				<h5><a>FLYING DISC FRISBEE</a></h5>
				<p>Color: Pink<br>Size: Small &nbsp;&nbsp;&nbsp; Price: RS 190</p>
				<a ><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
			
		</div>

		<!--set two-->
		<div class="s-f">
			
			<form  align="" id="sf" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Dog/cat play pen tent".'&&price='."390".'&&gro='.$noth.'&&p='.$noth.'">';
	  			echo '<div class="parent" onclick="">
				<div class="child bg-six">
					<span></span>
				</div>
				</div>
				<h5><a>DOG/CAT PLAY PEN TENT</a></h5>
				<p>Color: Pink and White <br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 390</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
			
		</div>

		<div class="s-f">
			
			<form align="" id="sf2" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Soft ball".'&&price='."200".'&&gro='.$noth.'&&p='.$noth.'">
				
	  			<div class="parent" onclick="">
				<div class="child bg-seven">
					<span></span>
				</div>
				</div>
				<h5><a>SOFT BALL</a></h5>
				<p>Color: Yellow with Black <br>Size: Small &nbsp;&nbsp;&nbsp; Price: RS 200</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
			
		</div>
		
		<div class="s-f">
		
			<form align="" id="sf3" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Dog bag pack".'&&price='."1912".'&&gro='.$noth.'&&p='.$noth.'">
				
	  			<div class="parent" onclick="">
				<div class="child bg-8">
					<span></span>
				</div>
				</div>
				<h5><a>DOG BAG PACK</a></h5>
				<p>Color: Red <br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 1912</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
		
		</div>

		<!--set three-->
		<div class="s-f">
		
			<form align="" id="sf" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Bird cage".'&&price='."290".'&&gro='.$noth.'&&p='.$noth.'">
	  			<div class="parent" onclick="">
				<div class="child bg-9">
					<span></span>
				</div>
				</div>
				<h5><a>BIRD CAGE</a></h5>
				<p>Color: Red<br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 290</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
		
		</div>

		<div class="s-f">
		
			<form align="" id="sf2" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Bird cage light holder".'&&price='."500".'&&gro='.$noth.'&&p='.$noth.'">
				
	  			<div class="parent" onclick="">
				<div class="child bg-10">
					<span></span>
				</div>
				</div>
				<h5><a>BIRD CAGE LIGHT HOLDER </a></h5>
				<p>Color: Black <br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 500</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
		
		</div>
		
		<div class="s-f">
			
			<form align="" id="sf3" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Bird house".'&&price='."1990".'&&gro='.$noth.'&&p='.$noth.'">
	  			<div class="parent" onclick="">
				<div class="child bg-11">
					<span></span>
				</div>
				</div>
				<h5><a>BIRD HOUSE</a></h5>
				<p>Color: Blue <br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 1990</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
		
		</div>
		<!--set four -->
		<div class="s-f">
		
			<form align="" id="sf" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Pet house".'&&price='."2940".'&&gro='.$noth.'&&p='.$noth.'">
	  			<div class="parent" onclick="">
				<div class="child bg-12">
					<span></span>
				</div>
				</div>
				<h5><a>PET HOUSE</a></h5>
				<p>Color: Blue <br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 2940</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
		
		</div>

		<div class="s-f">
			
			<form align="" id="sf2" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Wooden hamster house".'&&price='."290".'&&gro='.$noth.'&&p='.$noth.'">
				
	  			<div class="parent" onclick="">
				<div class="child bg-13">
					<span></span>
				</div>
				</div>
				<h5><a>WOODEN HAMSTER HOUSE</a></h5>
				<p>Color: Colorful  <br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 290</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
			
		</div>
		
		<div class="s-f">
			
			<form align="" id="sf3" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Christmas supplies".'&&price='."800".'&&gro='.$noth.'&&p='.$noth.'">
			
	  			<div class="parent" onclick="">
				<div class="child bg-14">
					<span></span>
				</div>
				</div>
				<h5><a>CHRISTMAS SUPPLIES</a></h5>
				<p>Color: Red and White <br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 800</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
		
		</div>

		<!-- set five-->
		<div class="s-f">
			
			<form align="" id="sf" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Pet bow tie".'&&price='."150".'&&gro='.$noth.'&&p='.$noth.'">
	  			<div class="parent" onclick="">
				<div class="child bg-15">
					<span></span>
				</div>
				</div>
				<h5><a>PET BOW TIE</a></h5>
				<p>Color: Pink  <br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 150</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
		
		</div>

		<div class="s-f">
			
			<form align="" id="sf2" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Pet safety seat belt".'&&price='."400".'&&gro='.$noth.'&&p='.$noth.'">
				
	  			<div class="parent" onclick="">
				<div class="child bg-16">
					<span></span>
				</div>
				</div>
				<h5><a>PET SAFETY SEAT BELT</a></h5>
				<p>Color: Variety <br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 400</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
			
		</div>
		
		<div class="s-f">
			
			<form align="" id="sf3" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Aquarium with toys IN".'&&price='."360".'&&gro='.$noth.'&&p='.$noth.'">
				
	  			<div class="parent" onclick="">
				<div class="child bg-17">
					<span></span>
				</div>
				</div>
				<h5><a>AQUARIUM WITH TOYS IN</a></h5>
				<p>Color: Blue <br>Size: Large &nbsp;&nbsp;&nbsp; Price: RS 360</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
		
		</div>
		<!--set six-->
		<div class="food">
			<img src="red.png">
			<h5 id="fd" style="text-align: center;text-shadow: 0px 1px 1px;color: black;margin-top:-100px;font-size: 28px">
		Pet Food available for your pets at our Pet store</h5>
		<p style="text-align: center;color: white;font-family: "yars",serif;margin-top:-29px;font-size: 22px">hope you enjoy shopping for your pet</p>
		</div>


		<!--row 1-->
		<div class="s-f">
		
			<form align="" id="sf" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Meow mix cat food".'&&price='."200".'&&gro='.$noth.'&&p='.$noth.'">
				
	  			<div class="parent" onclick="">
				<div class="child bg-18">
					<span></span>
				</div>
				</div>
				<h5><a>Meow MIX CAT FOOD</a></h5>
				<p>Color: Blue <br>Size: Large &nbsp;&nbsp;&nbsp; Price: RS 200</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
		
		</div>


		<div class="s-f">
			
			<form align="" id="sf2" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Chicken plate for cat".'&&price='."250".'&&gro='.$noth.'&&p='.$noth.'">
				
	  			<div class="parent" onclick="">
				<div class="child bg-19">
					<span></span>
				</div>
				</div>
				<h5><a>Chicken Plate FOR CAT</a></h5>
				<p>Color: Yellow Box <br>Size: Large &nbsp;&nbsp;&nbsp; Price: RS 250</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
			
		</div>

		<div class="s-f">
			
			<form align="" id="sf3" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Rabbit food".'&&price='."80".'&&gro='.$noth.'&&p='.$noth.'">
			
	  			<div class="parent" onclick="">
				<div class="child bg-20">
					<span></span>
				</div>
				</div>
				<h5><a>RABBIT FOOD</a></h5>
				<p>Color: Brown <br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 80</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
			
		</div>

		<!-- row 2-->
		<div class="s-f">
			
			<form align="" id="sf" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Bird food".'&&price='."60".'&&gro='.$noth.'&&p='.$noth.'">
				
	  			<div class="parent" onclick="">
				<div class="child bg-21">
					<span></span>
				</div>
				</div>
				<h5><a>BIRD FOOD</a></h5>
				<p>Color: mix <br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 60</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
			
		</div>

		<div class="s-f">
			
			<form align="" id="sf2" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Pedigree dog food".'&&price='."266".'&&gro='.$noth.'&&p='.$noth.'">
				
	  			<div class="parent" onclick="">
				<div class="child bg-22">
					<span></span>
				</div>
				</div>
				<h5><a>Pedigree DOG FOOD</a></h5>
				<p>Color: Brown <br>Size: Large &nbsp;&nbsp;&nbsp; Price: RS 266</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
		</div>

		<div class="s-f">
			
			<form align="" id="sf3" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Vitakraft hamster food".'&&price='."40".'&&gro='.$noth.'&&p='.$noth.'">
				
	  			<div class="parent" onclick="">
				<div class="child bg-23">
					<span></span>
				</div>
				</div>
				<h5><a>Vitakraft HAMSTER FOOD</a></h5>
				<p>Color: Green Packet <br>Size: Medium &nbsp;&nbsp;&nbsp; Price: RS 40</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
			
		</div>

		<!--row 3-->
		<div class="s-f">
			
			<form align="" id="sf" method="post" action="fact_buy.php?vet='.$noth.'&&sup='."Whiskas cat milk".'&&price='."60".'&&gro='.$noth.'&&p='.$noth.'">
			
	  			<div class="parent" onclick="">
				<div class="child bg-24">
					<span></span>
				</div>
				</div>
				<h5><a>Whiskas CAT MILK</a></h5>
				<p>Color: White <br>Size: Small and Medium &nbsp;&nbsp;&nbsp; Price: RS 60</p>
				<a><input type="submit" id="butt" value="BUY NOW"/></a>
			</form>
			
		</div>

</body>';
}
else{
  echo "<script>location.href='log_pg.html'</script>";

}
?>
<style type="text/css">

	body {margin: 0px;padding: 0px}
	
#container ul{
	list-style:none;
	padding:1px 1px;
	 margin-right: 0px;
	
}
#container ul li
{
	background-color:transparent;
	width:150px;
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
	color:black;
	font-family:cursive;
	font-size:21px;
	padding:5px 20px;
	border: 0.5px solid yellowgreen;
	border-radius:20px;
	transition: 0.6s ease;
}

#container ul li a:hover 
{
	background-color:#64cc58;
	color:#000;
}

#container ul li.active a
{
	background-color:white;
	color:#000;
}


.logo img{
	float:left;
	width:100px;
	position: absolute;
	top: 18px;
	left: 465px;
	margin-top:1px;
	margin-left:26px;
}

	.parent{
		width:100%;
		height: 273px;
		border: 3px solid gainsboro;
		overflow: hidden;
		position: relative;
		display: inline-block;
		cursor: pointer;
		margin-left: -3px;
		margin-top: -3px;

	}
	.child{
		height: 100%;
		width:100%;
		background-size: cover;
		background-repeat:no-repeat;
		transition: all .5s;
	}

	.bg-one{background-image: url(img-3.jpg);}
	.bg-two{background-image: url(pet_vet.jpg);}
	.bg-three{background-image: url(1.png);}
	.bg-four{background-image: url(water-fish.jpg);}
	.bg-five{background-image: url(disc.jpg);}
	.bg-six{background-image: url(15.png);}
	.bg-seven{background-image: url(dog_ball.jpg);}
	.bg-8{background-image: url(dog_bag_pack.jpg);}
	.bg-9{background-image: url(5.png);}
	.bg-10{background-image: url(7.png);}
	.bg-11{background-image: url(6.png);}
	.bg-12{background-image: url(8.png);}
	.bg-13{background-image: url(2.png);}
	.bg-14{background-image: url(cap.jpg);}
	.bg-15{background-image: url(bow.jpg);}
	.bg-16{background-image: url(belt.png);}
	.bg-17{background-image: url(aq.png);}
	.bg-18{background-image: url(9.png);}
	.bg-19{background-image: url(111.png);}
	.bg-20{background-image: url(10.png);}
	.bg-21{background-image: url(13.png);}
	.bg-22{background-image: url(11.png);}
	.bg-23{background-image: url(14.png);}
	.bg-24{background-image: url(16.png);}

	span{
		display: none;
		font-size:35px;
		color: #ffffff;
		font-family: sans-serif;
		text-align: center;
		marker:auto;
		position: absolute;
		top: 215px;
		left:0;
		bottom: 0;
		right: 0;
		height: 50px;
		cursor: pointer;
	}
	.parent:hover .child, .parent:focus .child{
		transform: scale3d(1.1,1.1,1);
	}
	.parent:hover .child:before, .parent:focus .child:before{
		display: block;
	}
	.parent:hover span, .parent:focus span{
		display:block;
	}
	.child:before{
		content: "";
		display: none;
		height: 100%;
		width: 100%;
		position: absolute;
		top: 0;
		left:0;
		background-color: rgba(52,73,94,0,75);

	}

div.signup-form{
	text-align: center;
	margin-top:181px;
	margin-left:102px;
	}	
#signupform{
	width:30%;
	height: 420px;
	margin-left: 124px;
	background-color: #e5eeee;
	opacity: 1.8;
	padding: 15px;
	
}
#signupform2{
	width:30%;
	height: 420px;
	margin-left: 795px;
	margin-top: -632px;
	background-color: #e5eeee;
	opacity: 1.8;
	padding: 15px;
	
}
#button{
	width: 150px;
	padding: 6px;
	border-radius: 5px;
	outline: 0px;
	
}	
	
#butt{
	width: 100px;
	padding: 12px;
	border-radius: 16px;
	background-color: #0c6996;
	/*border: 2px solid #01010c;*/
	color: aliceblue;
	font-size: 12px;
	margin-top: -8px;
}
input[type="submit"]:hover
{
	cursor: pointer;
}

#signupform h5{
	/*line-height:0.2;*/
	font-size: 24px;
	font-family: 'yars',serif;
	text-transform: capitalize;
	font-weight: 500;
	margin-top: 22px;
}
#signupform2 h5{
	/*line-height:0.2;*/
	font-size: 24px;
	font-family: 'yars',serif;
	text-transform: capitalize;
	font-weight: 500;
	margin-top: 22px;
}
#signupform:hover h5>a{
	color: #e53031;
	text-decoration: none;
	outline: none;

}
#signupform h5>a{
	text-decoration: none;
	outline: none;
	transition: all .3s ease-out;
	color: black;
	text-shadow: 0px 1px 1px;

}
#signupform2 h5>a{
	text-decoration: none;
	outline: none;
	transition: all .3s ease-out;
	color: black;
	text-shadow: 0px 1px 1px;
}
#signupform2:hover h5>a{
	color: #e53031;
	text-decoration: none;
	outline: none;

}
#signupform p{
	color: #5c5151;
	font-weight: 400;
	margin-top: -8px;
	font-size: 17px;
	text-align: center;
}
#signupform2 p{
	color: #5c5151;
	font-weight: 400;
	margin-top: -22px;
	font-size: 17px;
	text-align: center;
}
.bb img
{
	margin-top: 99px;
	margin-left:8px;
	width:1490px;

}
.red img
{
	    width: 705px;
    height: 3px;
    margin-top: 15px;
    margin-left: 791px;
	
}


/* supplyy 3 box*/
div.s-f{
	text-align: center;
	margin-top:181px;
	margin-left:100px;
	}	
#sf{
	width:25%;
	height: 420px;
	margin-left: 22px;
	background-color: #e5eeee;
	opacity: 1.8;
	padding: 15px;
	
}
#sf2{
	width:25%;
	height: 420px;
	margin-left: 462px;
	margin-top: -632px;
	background-color: #e5eeee;
	opacity: 1.8;
	padding: 15px;
	
}
#sf3
{
	width:25%;
	height: 420px;
	margin-left: 905px;
	margin-top: -632px;
	background-color: #e5eeee;
	opacity: 1.8;
	padding: 15px;
}	
#sf h5
{
	/*line-height:0.2;*/
	font-size: 24px;
	font-family: 'yars',serif;
	text-transform: capitalize;
	font-weight: 500;
	margin-top: 5px;
}
#sf2 h5
{
	/*line-height:0.2;*/
	font-size: 24px;
	font-family: 'yars',serif;
	text-transform: capitalize;
	font-weight: 500;
	margin-top: 5px;
}
#sf3 h5
{
	/*line-height:0.2;*/
	font-size: 24px;
	font-family: 'yars',serif;
	text-transform: capitalize;
	font-weight: 500;
	margin-top: 5px;
}
#sf:hover h5>a{
	color: #e53031;
	text-decoration: none;
	outline: none;

}
#sf h5>a{
	text-decoration: none;
	outline: none;
	transition: all .3s ease-out;
	color: black;
	text-shadow: 0px 1px 1px;

}
#sf2 h5>a{
	text-decoration: none;
	outline: none;
	transition: all .3s ease-out;
	color: black;
	text-shadow: 0px 1px 1px;
}
#sf2:hover h5>a{
	color: #e53031;
	text-decoration: none;
	outline: none;

}
#sf p{
	color: #0a0b0c;
	font-weight: 500;
	margin-top: -25px;
	letter-spacing: 0.3px;
	font-size: 18px;
	line-height: 23px;
	text-align: center;
}
#sf2 p{
	color: #0a0b0c;
	font-weight: 500;
	letter-spacing: 0.3px;
	margin-top: -25px;
	font-size: 18px;
	line-height: 23px;
	text-align: center;
}

#sf3:hover h5>a{
	color: #e53031;
	text-decoration: none;
	outline: none;

}
#sf3 h5>a{
	text-decoration: none;
	outline: none;
	transition: all .3s ease-out;
	color: black;
	text-shadow: 0px 1px 1px;
}
#sf3 p{
	color: #0a0b0c;
	font-weight: 500;
	margin-top: -25px;
	letter-spacing: 0.3px;
	font-size: 18px;
	line-height: 23px;
	text-align: center;
}

.food img
{
	margin-top: 100px;
	width:1554px;
	height: 120px;
	margin-left: -31px;

}
.img1box a
{
 	position: absolute;
 	top: 35px;
 	left: 50px;
 	text-decoration: none;
 	font-family: cursive;
 	font-size: 22px;
 	color:black;
}
.img2box a
{ position: absolute;
	top: 98px;
	left: 50px;
	text-decoration: none;
	font-family: cursive;
	font-size: 22px;
	color:black;

}
.img3box a
{
	position: absolute;
	top: 163px;
	left:50px;
	text-decoration: none;
	font-family: cursive;
	font-size: 22px;
	color:black;
}
.img1box img
{
 	position: absolute;
 	top: 21px;
 	left: -28px;
 	width:240px;
 	border-radius: 38px;
 	height: 57px;
 
}
.img2box img
{ position: absolute;
	top: 86px;
	left: -28px;
 	width:240px;
 	border-radius: 38px;
 	height: 57px;
	opacity: 0.8;

}
.img3box img
{
	position: absolute;
	top: 151px;
	left: -28px;
 	width:240px;
 	border-radius: 38px;
 	height: 57px;
	
}
.img1box a:hover
{
	position: absolute;
	top: 25px;

	background-color:#5ca30e;
	border-radius: 38px;
	padding: 9px 40px;
	transform: scale(1.2);
	transition: all .3s ease-in-out;
}
 


.img2box a:hover
{ 
	position: absolute;
	top: 90px;
	
	background-color:#e73600;
	border-radius: 38px;
	padding: 8.90px 40px;
	transform: scale(1.2);
	transition: all .3s ease-in-out;	

}
.img3box a:hover
{
	position: absolute;
	top: 155px;
	background-color:#4eb2fe;
	border-radius: 38px;
	padding: 9px 60px;
	transform: scale(1.2);
	transition: all .3s ease-in-out;

}

</style>


