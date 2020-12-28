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
    // Get price
    $price = $_POST['price'];
    $pet_type=$_POST['pet_type'];
$breed=$_POST['breed'];
$gender=$_POST['gender'];
$color=$_POST['color'];
$age=$_POST['age'];
$count=$_POST['count'];
$username=$_POST['username'];
$password=$_POST['password'];
$row=0;

    $target = "img_used/".basename($_FILES['image']['name']);
    

    if(!empty($username) && !empty($password) && !empty($pet_type) && !empty($breed) && !empty($gender) && !empty($color) && !empty($age) && !empty($price) && !empty($count)){

      $q=mysqli_query($db,"select * from log_in where Username='$username' and Password='$password'");
    $rnum=mysqli_num_rows($q);
    if($rnum==1){
      while($row==mysqli_fetch_assoc($q)){
        $_SESSION["Username"]=$row["Username"];
        $_SESSION["Password"]=$row["Password"];
      }
      
      mysqli_query($db, "INSERT INTO pet_details(pet_type,breed,gender,pet_color,age,image,price,count1) VALUES('$pet_type','$breed','$gender','$color','$age','$image','$price','$count')");

      $registered = mysqli_affected_rows($db);
    
    echo'<script>alert("pet details uploaded")</script>';
            header("refresh:1;url=sell.php");
        }
        
      }
      else{
        echo'<script>alert("Invalid Username and Password!")</script>';
            header("refresh:1;url=sell.php");
      }



    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  
?>