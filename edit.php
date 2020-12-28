<?php

$host="localhost";
$user="root";
$pass="";
$database="ganesh";

$pet_id = "";
$pet_type = "";
$breed = "";
$age ="";
$gender = "";
$pet_color = "";
$price = "";
$count1 = "";
$img = "";

$connect = mysqli_connect($host, $user, $pass, $database) OR die("could not connect to database,ERROR: ".mysqli_connect_error());

//Search

function getPosts()
{
	$posts = array();
	$posts[0] = $_POST['pet_id'];
	$posts[1] = $_POST['pet_type'];
	$posts[2] = $_POST['breed'];
	$posts[3] = $_POST['gender'];
	$posts[4] = $_POST['pet_color'];
	$posts[5] = $_POST['age'];
	$posts[6] = $_POST['price'];
	$posts[7] = $_POST['count1'];
	$posts[8] = $_POST['img'];
	return $posts;
}
if(isset($_POST['search']))
{
	$data = getPosts();

	$search_Query = "SELECT * FROM pet_details WHERE pet_id = $data[0]";
	$search_Result = mysqli_query($connect, $search_Query);
	if($search_Result)
	{
		if(mysqli_num_rows($search_Result))
		{
			while ($row = mysqli_fetch_array($search_Result))
			{
				
				$pet_id = $row['pet_id'];
				$pet_type = $row['pet_type'];
				$breed = $row['breed'];
				$gender = $row['gender'];
				$pet_color = $row['pet_color'];
				$age = $row['age'];
				$price = $row['price'];
				$count1 = $row['count1'];
				$img = $row['image'];
			}
		}else{
			//echo 'No data for this PET ID';
			echo "<script>alert('No data for this PET ID!')</script>";
		}
	}else{
		//echo 'Result Error';
		echo "<script>alert('Result Error!')</script>";
	}
}



	if(isset($_POST['delete']))
	{
		$data = getPosts();
		$delete_Query = "CALL delete_pet('$data[0]')";
		try{
			$delete_Result=mysqli_query($connect,$delete_Query);
			if($delete_Result)
			{
				if(mysqli_affected_rows($connect) > 0)
				{
					//echo 'Data Deleted';
					echo "<script>alert('Data Deleted!')</script>";
				}else{
					//echo 'Data not Deleted';
					echo "<script>alert('Data Not Deleted!')</script>";
				}
			}

		}catch (Exception $ex) {
			echo 'Error Delete'.$ex->getMessage();
		}
	}


	if(isset($_POST['update']))
	{
		$data = getPosts();
		$update_Query = "CALL update_pet('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[8]','$data[6]','$data[7]','$data[0]')";
		try{
			$update_Result=mysqli_query($connect,$update_Query);
			if($update_Result)
			{
				if(mysqli_affected_rows($connect) > 0)
				{
					//echo 'Data Updated';
					echo "<script>alert('Data Uploaded!')</script>";
				}else{
					//echo 'Data not Updated';
					echo "<script>alert('Data Not Uploaded!')</script>";
				}
			}

		}catch (Exception $ex) {
			echo 'Error Update'.$ex->getMessage();
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin: EDIT</title>
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
		<p style="color:#fee4b2;position: absolute;top:165px;left:20px;font-size: 18px;letter-spacing: 1px;text-shadow: 1px 0px 1px;">To Upload New Pets<p>
		<div class="button">

				<a href="upload.php" class="btn btn-one"> BACK</a>
			</div>

			<div id="content" >
		<form action="edit.php" method="post" id="signupform">
			<div><input type="number" name="pet_id" id="button" placeholder="Pet ID" value="<?php echo $pet_id;?>"></div>
			<div><input type="text" name="pet_type" id="button" placeholder="PetType" value="<?php echo $pet_type;?>"></div>
			<div><input type="text" name="breed" id="button" placeholder="Pet Breed" value="<?php echo $breed;?>"></div>
			<div><input type="text" name="gender" id="button" placeholder="Gender" value="<?php echo $gender;?>"></div>
			<div><input type="text" name="pet_color" id="button" placeholder="Pet Color" value="<?php echo $pet_color;?>"></div>
			<div><input type="number" name="age" id="button" placeholder="Age" value="<?php echo $age;?>"></div>
			<div><input type="text" name="price" id="button" placeholder="Pet Price" value="<?php echo $price;?>"></div>
			<div><input type="number" name="count1" id="button" placeholder="Pet Count" value="<?php echo $count1;?>"></div>
				<div>		<input type="text" name="img" id="button" placeholder="Pet Image" value="<?php echo $img;?>"></div>
				<!--<input type="file" name="img" style="font-size:17px;margin-left:40px;color:yellow;">-->
			<div class="tt">
				<input type="submit" style="font-size:18px;margin-left:-10px;background-color:#7cfc00a8;padding:8px 15px;text-shadow:1px 1px 0px;font-family:cursive;" name="update" value="Update">
				<input type="submit" style="font-size:18px;margin-left:15px;background-color:#fcac00db;padding:8px 15px;text-shadow:1px 1px 0px;font-family:cursive;" name="delete" value="Delete">
				<input type="submit" style="font-size:18px;margin-left:15px;background-color:#008bfca8;padding:8px 20px;text-shadow:1px 1px 0px;font-family:cursive;" name="search" value="Find">
			</div>
		</form></div>
	</header>
</body>
</html>

<style type="text/css">
*{
	margin:0px;
	padding:0px;
}
	header
{
	
	background-position:center;
	background-image:url(good.jpg);
	height: 100vh;
	/*height:100vh;*/
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
 #content{
   	width: 45vh;
   	margin: -55px 331px auto;
   	border: 1px solid #cbcbcb;
   	padding:30px 30px;
   }
   #content form{
   	width: 88.5%;
   	margin: -30px;
   }
   #content form div{
   	margin-top: 5px;
   	padding: 2px;
   	color: black;
   }

.button
{
    margin-top: 197px;
    margin-left: 22px;
    text-shadow: 0px 1px 2px;
}

.btn
{
    border: 1.1px solid #2a1e1e;
    padding: 8px 20px;
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
	padding: 16px 50px;
}
#button{
	width: 180px;
	padding: 10px 20px;
	border-radius: 5px;
	outline: 0px;
	margin-left: 38px;	
}	
</style>