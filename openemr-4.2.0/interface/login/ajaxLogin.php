<?php
include("db.php");
session_start();
if(isSet($_POST['username']) && isSet($_POST['password']))
{

$username='admin'; 
$password=base64_encode('admin'); 

$result=mysqli_query($db,"SELECT id FROM users WHERE username='$username' and password='$password'");
$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$row['id'];
$_SESSION['username']=$username;
echo $row['id'];
}
}
?>