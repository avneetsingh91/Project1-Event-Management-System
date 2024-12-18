<?php
session_start();	
$con  = mysqli_connect("localhost","root","","project1");
$k=$_SESSION['a'];
$a=$_POST['t1'];
$b=$_POST['t4'];
$c=$_POST['t6'];
$query1="update vendor3 set vname='$a',vaddress='$b',vphoneno='$c' where vemail='$k'";
mysqli_query($con,$query1) or die(mysql_error());
header("location:vendorwelcome2.php");
?>