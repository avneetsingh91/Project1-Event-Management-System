<?php
$con = mysqli_connect("localhost","root","","project1");

$f=$_POST['name'];
$l=$_POST['email'];
$u=$_POST['radio1'];
$c=$_POST['comment'];
$query= "insert into feedback(name,email,type,comments) values('$f','$l','$u','$c')";
mysqli_query($con,$query)or die(mysqli_error());

header("location:home.php");


?>
