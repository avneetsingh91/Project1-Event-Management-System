<?php
mysql_connect("localhost","root","");
mysql_select_db("project1");
$i=$_REQUEST['id'];
$query1="delete from reg where regid='$i'";
mysql_query($query1) or die(mysql_error());
header("location:viewuser.php");

?>