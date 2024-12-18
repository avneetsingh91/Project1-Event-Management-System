<?php
mysql_connect("localhost","root","");
mysql_select_db("project1");

$f=$_POST['txtvname'];
$l=$_POST['select'];
$u=$_POST['add'];
$p=$_POST['phn'];
$cp=$_POST['vemail'];
$g=$_POST['password'];


$query= "insert into vendor3(vname,vcategory,vaddress,vphoneno,vemail,vpassword) values('$f','$l','$u','$p','$cp','$g')";
mysql_query($query)or die(mysql_error());

header("location:home.php");
?>
