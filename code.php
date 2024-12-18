<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
$u= $_POST['username'];
$p= $_POST['password'];
$count=0;

$con = mysqli_connect("localhost","root","","project1");
$query= "select * from reg where uname='$u' and pwd='$p'";


$rid= mysqli_query($con,$query) or die(mysqli_error());

if($res= mysqli_fetch_array($rid))
{
$count=1;
}
if($count==1)
{
$_SESSION['username']=$u;
$_SESSION['password']=$p;
$_SESSION['newpassword']=$n;
echo $u;
				
header("location:icon.php");
}
else
{ 
header("location:home.php");
}
}
?>
