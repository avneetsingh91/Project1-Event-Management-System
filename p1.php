<?php

$a=$_POST['select1'];
$b=$_POST['select2'];
$c=$_POST['select3'];
$d=$_POST['select4'];
$e=$_POST['select'];
$f=$_POST['txtgath'];
mysql_connect("localhost","root","");
mysql_select_db("project1");
$query1="insert into welcome(ename,doevent,elocation,egathering)values('$a','$e','$f','$g')";
mysql_query($query1) or die(mysql_error());


?>