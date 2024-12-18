<?php
mysql_connect("localhost","root","");
mysql_select_db("project1");

$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];


mysql_query("update reg set fname='$a',lname='$b',address='$d',pcode='$e',pno='$f' where uname='$c'")or die(mysql_error());

header("location:icon.php");
?>
