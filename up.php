<?php
  // Create database connection
$msg = "";
$hostname = "localhost";
$username1 = "root";
$password1 = "";
$dbname = "ganesh";
//making the connection to mysql

$db = mysqli_connect($hostname, $username1, $password1 ,$dbname) OR die("could not connect to database,ERROR: ".mysqli_connect_error());


  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	
    $pet_type=$_POST['pet_type'];
$breed=$_POST['breed'];
$gender=$_POST['gender'];
$color=$_POST['color'];
$age=$_POST['age'];
$price=$_POST['price'];
$count1=$_POST['count1'];

  if(!empty($pet_type) && !empty($breed) && !empty($gender) && !empty($color) && !empty($age) && !empty($image) && !empty($price))
{
  	// image file directory
  	$target = "img_used/".basename($_FILES['image']['name']);
  	

  	$sql = "INSERT INTO pet_details(pet_type,breed,gender,pet_color,age,image,price,count1) VALUES('$pet_type','$breed','$gender','$color','$age','$image','$price','$count1')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg1 = "Image uploaded successfully";
  	}else{
  		$msg2 = "Failed to upload image";
  	}
    if($msg1){
    echo'<script>alert("pet details uploaded")</script>';
            header("refresh:0.4;url=upload.php");}
}else {
  echo '<script>alert("ERROR: please fill all values of pet details form")</script>';
   header("refresh:0.4;url=upload.php");
  }
}
  
?>

