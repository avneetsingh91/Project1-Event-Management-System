<?php
mysql_connect("localhost","root","");
mysql_select_db("project1");

$f=$_POST['name'];
$l=$_POST['email'];
$u=$_POST['query'];
$query= "insert into contact(name,email,query) values('$f','$l','$u')";
mysql_query($query)or die(mysql_error());
$to="admin@gmail.com";
$msg="hello admin,<br>".$u."<br>".$f."<br>".$l;
$subject="contactus";
$from=$l;
if(!mail($to,$subject,$msg,$from))
echo "error in email";
else
echo "email sent to admin sucessfully";

header("location:mail.php");


?>