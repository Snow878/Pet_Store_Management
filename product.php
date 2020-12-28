<?php
session_start();
if(isset($_SESSION['username'])){
	echo "<h2>WELcome to product page</h2>";
	echo "<br><a href='x.php'><input type=button name=back value=back></a>";
	echo "<br><a href='ll.php'><input type=button value=logout name=logout></a>";


}
else{
	echo "<script>location.href='login.html'</script>";

}
?>