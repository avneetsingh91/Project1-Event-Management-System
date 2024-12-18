<?php
mysql_connect("localhost","root","");
mysql_select_db("project1");
$i=$_REQUEST['id'];
$query1="delete from order_detail where orderid='$i'";
$query2="delete from order_master where orderid='$i'";
mysql_query($query1) or die(mysql_error());
mysql_query($query2) or die(mysql_error());
header("location:vieworders.php");

?>
