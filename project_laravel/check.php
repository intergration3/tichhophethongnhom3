<?php 
session_start();
if(isset($_SESSION["userid"])){
	echo "đã đăng nhập";
	header("location:login.php");
}
else{
	echo "Ban phai dang nhap";
}
?>