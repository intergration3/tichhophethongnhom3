<?php
include("db.php");
session_start();
if(isSet($_POST['username']) && isSet($_POST['password']))
{

$username='admin2'; 
$password=md5('admin'); 

$result=mysqli_query($db,"SELECT id_profile FROM user_tbl WHERE login='$username' and pwd='$password'");
$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$row['id_profile'];
$_SESSION['login']=$username;
echo $row['id_profile'];
}

}
?>