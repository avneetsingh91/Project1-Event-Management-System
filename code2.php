<?php
session_start();
$con = mysqli_connect("localhost","root","","project1");
$a=$_POST['username'];
$b=$_POST['password'];
$query="select * from admin where username='$a' and password='$b'";
$rid=mysqli_query($con,$query) or die(mysqli_error());
$res=mysqli_fetch_array($rid);
$count=mysqli_num_rows($rid);
if($count==1)
{
session_start();
$_SESSION['id']=$res['adminid'];
$_SESSION['nm']=$res['username'];
header("location:welcomeadmin.php");
}
else
{
echo "<script type='text/javascript'>";
echo "alert('please check your username and password')";
echo "</script>";
include("admin.php");
}
?>