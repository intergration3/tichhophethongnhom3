
<!-- <form action='login.php' method='post'>
Username: <input class="form-control" type='text' name='username' size='25' /><br />
Password: <input class="form-control" type='password' name='password' size='25' /><br />
<input type='submit' name='ok' value='Dang Nhap' />
</form>
 --><!DOCTYPE html>
<html lang="en">
<head>

  <style>
  body{background: url(img/nen2.jpg) no-repeat top center fixed;}
  </style>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ url('public/admin/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('public/admin/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('public/admin/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
  <fieldset><h1 align="center">Đăng nhập</h1>
  <form action='login.php' method='post' align="center">
Username: <input align="center" class="form-control" type='text' name='username' size='25' width='1000px'/><br /><br/>
Password: <input align="center" class="form-control" type='password' name='password' size='25' /><br /><br/>
<input type='submit' name='ok' value='Đăng Nhập' />

</form></fieldset>

    <!-- jQuery -->
    <script src="{{ url('public/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ url('public/admin/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ url('public/admin/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>
<?php
if(isset($_POST['ok']))
{
$u=$p="";
 if($_POST['username'] == NULL)
 {
  echo "Please enter your username<br />";
 }
 else
 {
  $u=$_POST['username'];
 }
 if($_POST['password'] == NULL)
 {
  echo "Please enter your password<br />";
 }
 else
 {
  $p=base64_encode($_POST['password']);
 }
 if($u && $p)
 {
  $conn=mysql_connect("localhost","root","root") or die("can't connect this database");
  mysql_select_db("project_laravel",$conn);
  $sql="select * from ck_usersusers where username='".$u."' and password='".$p."'";
  $query=mysql_query($sql);
  if(mysql_num_rows($query) == 0)
  {
   echo "Username or password is not correct, please try again";
  }
  else
  {
    //echo "Dang nhap thanh cong";
   $row=mysql_fetch_array($query);
   session_start();
   $_SESSION['userid'] = $u;
   $_SESSION['level'] = $p;
   echo $_SESSION['userid'];
   //header("location:http://localhost/project_laravel/home");
    die();
  }
 }
}
?>