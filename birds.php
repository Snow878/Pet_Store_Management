<?php
  // Create database connection
session_start();
if(isset($_SESSION['username'])){
$x=$_SESSION['username'];
$msg = "";
$hostname = "localhost";
$username1 = "root";
$password1 = "";
$dbname = "ganesh";
//making the connection to mysql

$db = mysqli_connect($hostname, $username1, $password1 ,$dbname) OR die("could not connect to database,ERROR: ".mysqli_connect_error());

  
  $result = mysqli_query($db, "SELECT * FROM pet_details");

echo '<meta charset="utf-8">
<title>my-Pet: Birds</title>

		<div id="container">
		<ul>
			<li><a href="faq.html">FAQ</a></li>
			<li><a href="ll.php">Logout</a></li>
			<li><a href="contact.html">Contact Us</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="shop.php">Shop</a></li>
			<li><a href="pet_hom.html">Home</a></li>
		</ul>
		</div>
		
				<div class="logo">
		<img src="large.png">
		</div>
		<div class="cc">
			my-<div style="color: #d19200;position: absolute;top: 0px;left: 82px;">Pet</div>
		</div>

		

		<div class="red">
			<img src="red.png">
			
		</div>
		
		<div class="img1box">
			<img src="green.jpg">
		<a href="facilities.php"> Pet Facilities </a>
		</div>
		<div class="img2box">
			<img src="orred.jpg">
			<a href="facilities.php"> Pet Supplies</a><br>
		</div>
		<div class="img3box">
			<img src="blue.jpg">
		<a href="facilities.php"> Pet food</a>
		</div>



		<div id="opt">
		<ul>
			<li><a href="dog_page.php">Dogs</a></li>
			<li><a href="cat.php">Cats</a></li>
			<li><a href="rabbit.php">Rabbits</a></li>
			<li class="active"><a href="#">Birds</a></li>
			<li><a href="aquatic.php">Aquatic Pets</a></li>
			<li><a href="ham.php">Hamster</a></li>
		</ul>
		</div>';

				echo "<div id='al'>";
			   while ($row = mysqli_fetch_array($result)) {
			   	if($row['pet_type']=="Bird"){
			   		echo '<form method="post" action="aish.php?id='.$row['pet_id'].'&&count1='.$row['count1'].'&&price='.$row['price'].'&&breed='.$row['breed'].'&&gender='.$row['gender'].'&&mem='.$x.'">';
      echo "<div id='img_div'>";
      echo "<div class='parent' onclick=''>
				<div class='child'><img src='img_used/".$row['image']."'>
					<span></span>
				</div>
				</div>";

      	//echo "<img src='img_used/".$row['image']."' >";
      	  
        echo "<p>Pet ID : ".$row['pet_id']."</p>";
      	echo "<p>Breed : ".$row['breed']."</p>";
      	echo "<p>Gender : ".$row['gender']."</p>";
      	echo "<p>Pet Color : ".$row['pet_color']."</p>";
      	echo "<p>Age : ".$row['age']." years</p>";
      	echo "<p>Price : Rs ".$row['price']."</p>";
      	echo "<div id='button'>";
      			echo '<a><input type="submit" id="butt" value="BUY NOW" /></a>';
				
			echo "</div>";
 echo "</div>";
    echo "</form>";
  }
    }
    echo "</div>";
 }
else{
  echo "<script>location.href='login.html'</script>";

}
?>

<style type="text/css">
    body {margin: 0px;padding: 0px;}
  
#container ul{
  list-style:none;
  padding:7px 1px;
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

  width:130px;
  height: 122px;
  position: absolute;
  top: 10px;
  left:203px;
  margin-top:1px;
  margin-left:26px;
 }
 .cc
 {
  color: white;
  position: absolute;
  top:-2px;
  left:317px;
  width:300px;
  height: 70px;
  font-size: 50px;
  text-shadow: -1px 2px 2px #000;
  font-family: monospace;
 }


   #content{
    width: 50%;
    margin: 152px 75px auto;
    border: 1px solid #cbcbcb;
   }
   #content form{
    width: 50%;
    margin: 20px auto;
   }
   #content form div{
    margin-top: 5px;
   }
   #img_div{
    width: 45%;
    padding: 33px 70px;
    margin: 16px 52px 52px auto;
    background-color: #e5eeee;
    border: 1px solid #cbcbcb;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
  #al img{
    float:;
    margin: -21px -4px 7px -46px;
    width: 520px;
    border:3px solid gainsboro;
    height: 332px;
   }
   #al{
    position:absolute;
    top:76px;
    left:250px;
    width:970px;
}
.red img
{
   width:929px;
  height: 3px;
  margin-top: 10px;
  margin-left: 590px;
}
.img1box a
{
  position: absolute;
  top: 126px;
  left: 54px;
  text-decoration: none;
  font-family: cursive;
  font-size: 27px;
  color:black;
}

.img1box img
{
  position: absolute;
  top: 113px;
  left: -28px;
  width:296px;
  border-radius: 38px;
  height: 65px;
 
}
.img1box a:hover
{
    
    transition: all 0.4s ease-in-out;
    
    transform: scale(1.2);
    font-size: 25px;

}
.img2box a
{
  position: absolute;
  top: 203px;
  left: 64px;
  text-decoration: none;
  font-family: cursive;
  font-size: 27px;
  color:black;
}

.img2box img
{
  position: absolute;
  top: 191px;
  left: -28px;
  width:296px;
  border-radius: 38px;
  height: 65px;
 
}
.img2box a:hover
{
    
    transition: all 0.4s ease-in-out;
    
    transform: scale(1.2);
    font-size: 25px;

}
.img3box a
{
  position: absolute;
  top: 282px;
  left: 104px;
  text-decoration: none;
  font-family: cursive;
  font-size: 27px;
  color:black;
}

.img3box img
{
  position: absolute;
  top: 271px;
  left: -28px;
  width:296px;
  border-radius: 38px;
  height: 65px;
 
}
.img3box a:hover
{
    
    transition: all 0.4s ease-in-out;
    
    transform: scale(1.2);
    font-size: 25px;

}

p{
  text-align: center;
  color: #0a0b0c;
  font-weight: 500;
  margin-top: 10px;
  letter-spacing: 0.3px;
  font-size: 20px;
  line-height: 12px;
  text-shadow: 0px -1px 1px;
  font-family: serif;

}

#button{
  width: 158px;
  padding: 0px;
  margin-top: 32px;
  margin-left: 163px;
  border-radius: 5px;
  outline: 0px;
  
} 
  
#butt{
  width: 115px;
  padding: 13px;
  border-radius: 30px;
  background-color: #0c6996;
  border: 2px solid #c6c6e9eb;
  color: aliceblue;
  text-decoration: none;
  font-size: 17px;
}

.parent{
    width:108%;
    height: 300px;
    border: 3px solid gainsboro;
    overflow: hidden;
    position: relative;
    display: inline-block;
    cursor: pointer;
    margin-left: -23px;
    margin-top: -3px;

  }
  .child{
    height: 100%;
    width:100%;
    background-size: cover;
    background-repeat:no-repeat;
    transition: all .5s;
  }
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

#opt{
  margin-top: 270px;
}
  
#opt ul li:hover >ul{
  color:#000;
  background-color:white;
display:block;}



#opt ul ul ul{
  margin-left:50px;
  top:0px;
  position:absolute;
}

#opt ul li a{
  text-decoration: none;
  color:black;
  font-family:cursive;
  font-size:28px;
  padding:8px 80px;
  margin-left: 45px;
  border: 1.5px solid yellowgreen;
  border-radius:40px;
  transition: 0.6s ease;
  line-height: 94px;
  
}

#opt ul li a:hover 
{
  background-color:#64cc58;
  color:#000;
}

#opt ul li.active a
{
  background-color:white;
  color:#000;
}


#opt ul{
  list-style:none;
  padding:1px 1px;
  
}
#opt ul li.active a
{
  background-color:#c0b925;
  color:#000;
}
</style>

