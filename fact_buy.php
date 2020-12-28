<style type="text/css">
body {margin: 0px;padding: 0px;}

#container ul{
  list-style:none;
  padding:10px 1px;
   margin-right: 0px;
  
}

#container ul li
{
  background-color:transparent;
  width:151px;
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
  background-color: transparent;
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
  top: 12px;
  left:15px;
  margin-top:1px;
  margin-left:26px;
 }

 #popup{
border: 1px;
solid black;
width:50%;
height: 200px;}


  *{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
  }
  body{
   font-family: sans-serif;
  }
  
h1{
	color: black;
	margin-top: 30px;
	margin-left: 600px;
	font-size:2.0em;
	}
.x1{
	margin-left: 242px;
margin-top: -240px;
}
.x3{
	margin-left: 242px;
margin-top: -77px;
}
.x3 table{

}
table {
	border-collapse: collapse;
		margin-top: 100px;
		margin-left: 20px;
	}
 table th {
		text-align: left;
		background-color: #3a6070;
		color: #fff;
		padding: 4px 30px 4px 8px;
		}
 table td {
		border: 1px solid #e3e3e3;
		padding: 4px 8px;
		color: black;
		}
 table tr:nth-child(odd) td{
		background-color: #e7edf0;
		}
.x2{
	margin-top: -91px;
	margin-left: 712px;
}
.md
{
	    position: absolute;
    top: 373px;
    font-family: serif;
    left: 715px;
    

}
.br{
	    position: absolute;
    top: 253px;
    font-weight: bold;
    left:715px;
    font-family: serif;
    font-size: 19px;
    color:#090946;

}
.br1{
	position: absolute;
    top: 313px;
    font-weight: bold;
    left:715px;
    font-family: serif;
    font-size: 19px;
    color:#090946;

}
.red img
{
      width: 865px;
    height: 3px;
    margin-top: 15px;
    margin-left: 662px;
}
</style>

<?php
session_start();
if(isset($_SESSION['username'])){
$x=$_SESSION['username'];
  // Create database connection
$msg = "";
$hostname = "localhost";
$username1 = "root";
$password1 = "";
$dbname = "ganesh";
//making the connection to mysql
$noth="NA";
$db = mysqli_connect($hostname, $username1, $password1 ,$dbname) OR die("could not connect to database,ERROR: ".mysqli_connect_error());
//echo $x;
    $i = mysqli_query($db, "SELECT sno FROM log_in where Username='$x'");
  $row1 = mysqli_fetch_array($i);
  $sno = $row1['sno'];
  //echo $sno;
   $y = mysqli_query($db, "SELECT * FROM customer where customer_id='$sno'");
   $row2 = mysqli_fetch_array($y);
  $f = $row2['f_name'];
  $l=$row2['l_name'];
  $em=$row2['customer_id'];
    $ph=$row2['cust_phno'];
    $yes="yes";
    $no="no";

 $sup=$_GET['sup'];
 $pri=$_GET['price'];
echo '<html>
<head>
<title>my-Pet : Payment</title>
<link href="" rel="stylesheet" type="text/css"><!-- linking css file to html file-->

</head>
<body><header>
	
		<div id="container">
		<ul>
			<li><a href="faq.html">FAQ</a></li>
				<li><a href="ll.php">Logout</a></li>
			<li><a href="contact.html">Contact Us</a></li>
			<li><a href="about.html">About Us</a>
				
			</li>
			<li><a href="pet_hom.html">Shop</a>
			
			</li>
			<li><a href="pet_hom.html">Home</a></li>
		</ul>
		</div>
		
		<div class="logo">
		<img src="large.png">
		</div>
		
		 <div class="red">
      <img src="red.png">
      
    </div>
		
			<div style="color: white;font-family:monospace;position: absolute;top:0px;left:130px;width:300px;height: 70px;font-size: 50px;text-shadow: -1px 2px 2px #000;">
			my-<span style="color: #f3ab06;">Pet</span>
		</div>

			<form method="post" action="#" style="margin-top: 20px;">
				<h1>PAYMENT</h1>
		<div class="x2">
		<table cellpadding="25">
			<tr>
				<th>Customer DETAILS</th>
				<th></th>
			</tr>
			<tr>
				<td>Customer ID :</td>
				<td><input type="text" size="30" placeholder="customer_id" name="id" value="'; echo $em;  echo '"readonly></td>
			</tr>
			<tr>
				<td>Customer First Name:</td>
				<td><input type="text" size="30" placeholder="fname" "name="fname" value="';echo $f;echo '"readonly></td>
			</tr>
			<tr>
				<td>Customer Last Name:</td>
				<td><input type="text" size="30" placeholder="lname" "name="lname" value="';echo $l;echo '"readonly></td>
			</tr>
				</tr>
			<tr>
				<td>Phone number:</td>
				<td><input type="text" size="30" value="';echo $ph; echo '"name="pet_id"  readonly ></td>
			</tr>
			
		</table>
				</div>	

		<div class="x1">
		<table cellpadding="25">
			
			<tr>
				<th>FACILITY DETAILS</th>
				<th></th>
			</tr>
			
			<tr>
				<td>Your Choice :</td>
				
			</tr>
			<tr>
				<td>Gromming :</td>
				<td><input type="text" size="30" placeholder="- - - - - - - - - -" name="gromming" value="'; echo $_GET['gro'];echo '"readonly ></td>
			</tr>
			<tr>
				<td>Vet:</td>
				<td><input type="text" size="30" placeholder=" - - - - - - - - - -" name="vet" value="'; echo $_GET['vet']; echo '"readonly></td>
			</tr>
			<td>Price in Rupee :</td>
				<td><input type="text" size="30" placeholder=" - - - - -- - - - --" name="vet" value="'; echo $_GET['p']; echo '"readonly></td>
			</tr>
		</table>
	</div>
	
	<div class="x3">
		<table cellpadding="25">
			
			<tr>
				<th> SUPPLY DETAILS</th>
				<th> </th>
			</tr>
			
			<tr>
				<td>Your Choice :</td>
				
			</tr>
			<tr>
				<td>Supply Name : </td>
				<td><input type="text" size="30" style="font-size:15px;" placeholder="- - - - - - - - - - - - - - - - -" name="gromming" value="'; echo $sup; echo '"readonly ></td>
			</tr>
			<tr>
				<td>Price :    RS</td>
				<td><input type="text" size="30" placeholder="- - - - - - - - - - - - - - - " name="vet" style="font-family: serif;font-size:15px;font-weight: bold; color:#090946;"value=" '; echo $pri; echo '"readonly></td>
			</tr>
		</table>
	</div>


	<div class="br1">
	<table>
	<tr>
	<td style="font-weight: 600;
    font-size: 19px; color:#090946;">Date of Appointment :</td>
	<td><input type="date" name="date" ></td>
	</tr>
	</table>
	</div>
		

	<div class="br">
<table>
 <tr>
				<td style="font-weight: 600;
    font-size: 19px; color:#090946;"> Choose Branch</td>
				<td><select name="branch">
					<option name="branch">Select</option>
					<option name="branch">MARATHAHALLI</option>
					<option name="branch">HAL</option>
					<option name="branch">MAJESTIC</option>
					<option name="branch">SHIVAGINAGAR</option>
					<option name="branch">INDIRANAGAR</option>
				</select>
			</td>
		</tr></table></div>
	<div class="md">
<table>
 <tr >			<style>margin-top:2px;</style>
				<td style="font-weight: 600;
    font-size: 19px; color:#090946;"> Payment Mode</td>
				<td><select name="mode">
					<option name="mode">Select</option>
					<option name="mode">Credit-card</option>
					<option name="mode">Debit-card</option>
					<option name="mode">Cash</option>
				</select>
			</td>
		</tr></table></div>
		<h4 style="font-family: serif;font-weight: bold;font-size: 19px;color: #090946;position: absolute;top: 470px;left: 262px;">PAYMENT INFORMATION</h4>

		<table style="margin-left: 261px;margin-top:78px;">
		<tr>
			<td ><input type="text" size="30" placeholder="Name on CARD" name="pet_id"   ></td>
		</tr>
		<tr>
			<td><input type="number" size="30" placeholder="CARD NO." name="pet_id" ></td>
		</tr>
		<tr>
			<td><input type="date" size="30" placeholder="mm-yy" name="pet_id"   ></td>
		</tr>
		<tr>
			<td><input type="number" size="30" placeholder="CVC" name="pet_id"   ></td>
		</tr>
	</table>
		
		<a href="pay_done.php"><input type="submit" name="submit" value="CONFIRM PAYMENT"  id="butt" /></a>
		<style type="text/css">
			#butt{
	width: 180px;
	margin-top: 10px;
	margin-left: 400px;
	padding: 14px;
	border-radius: 40px;
	background-color: #0c6996;
	/*border: 2px solid #01010c;*/
	color: white;
	font-family: serif;
	letter-spacing: 1px;
	font-size: 15px;
}
		</style>
	
 </div>

</form>

 	</header>
</body></html>';
if(isset($_POST['submit']))
{
	$da=$_POST['date'];
	$c=$_POST['mode'];
	$d=$_POST['branch'];
	$a=$_GET['gro'];
	$b=$_GET['vet'];
	$pi=$_GET['p'];
	  
	 
	$s=mysqli_query($db,"SELECT * from pet_branch WHERE branch_name='$d'");
	  $row0 = mysqli_fetch_array($s);
	$br_id=$row0['branch_id'];
	$rnum=mysqli_num_rows($s);
	if($rnum==1){

	 if($a && $b){
	 	if($a===$noth || $b===$noth){

	 			$sel=mysqli_query($db,"SELECT * from supplies where supply_name='$sup' and price='$pri'");
	 				$row5=mysqli_fetch_assoc($sel);
	 				$fact_no=$row5['fact_no'];
	 				$price_db=$row5['price'];
	 				$count2=$row5['available_count'];
	 				
	 				if($count2 > 0){
	 					$ll = "INSERT INTO utilizes(customer_id,fact_no,price,payment_status,branch) values('$em','$fact_no','$pri','$c','$br_id')";
	 					mysqli_query($db, $ll);
	 					echo '<script>alert("Your Details Recorded.Visit Our store")</script>';
	 					echo '<script>window.location="http://localhost/test/facilities.php"</script>';
	
	
	 					}else{
	 						 echo '<script>alert("SORRY! SOLD OUT")</script>';
   							echo '<script>window.location="http://localhost/test/facilities.php"</script>';
	
	
	 					}
				
	 	}else{
	$sql = "INSERT INTO facility(gromming,vet,cost,customer_id,appointment_date) VALUES('$a','$b','$pi','$em','$da')";
	mysqli_query($db, $sql);
	echo '<script>alert("PAYMENT DONE SUCCESSFULLY     Collect from our pet facility store branch")</script>';
	echo '<script>window.location="http://localhost/test/facilities.php"</script>';
	
	
				}
			}
		}

	}


}
else{
	echo "<script>location.href='login.html'</script>";

}

?>
