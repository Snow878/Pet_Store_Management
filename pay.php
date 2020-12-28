<?php

//processing form

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$customer=$_POST['customer'];
$facility=$_POST['facility'];
$comment=$_POST['comment'];
$price=$_POST['price'];


	if(!empty($customer) && !empty($facility) && !empty($gender) && !empty($address) && !empty($email) && !empty($cust_ph) && !empty($username) && !empty($password) && !empty($password2)){

		include('new.php');
		if($password === $password2){
			mysqli_query($dbc, "INSERT INTO customer(f_name,l_name,gender,cust_address,cust_email,cust_phno) VALUES('$fname','$lname','$gender','$address','$email','$cust_ph')");

			mysqli_query($dbc, "INSERT INTO log_in(Username,Password) VALUES('$username','$password')");
			echo "username and password created"; 
		
		$registered = mysqli_affected_rows($dbc);
		echo $registered." row is affected, everything worked fine! Customers infomation recorded.";}

	}else{
		echo "<p style='color:red;'>ERROR: please fill all values of form</p>";
	}


}else{

	echo"NO form has been submitted. Please complete the form.";
}

?>