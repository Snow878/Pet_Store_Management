<?php
session_start();
if(isset($_SESSION['username'])){
	session_destroy();
	echo "<script>location.href='admin.html'</script>";
}else{
	echo "<script>location.href='pet_hom.html'</script>";//first it was login.html//
}
?>