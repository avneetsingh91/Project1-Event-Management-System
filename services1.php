<?php
session_start();
if(!(isset($_SESSION['username'])))
{
	header("location:home.php");
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$da=date("d");
$ma=date("m");
$ya=date("Y");

$a=$_POST['select1'];
$b=$_POST['select2'];
$c=$_POST['select3'];
$d=$_POST['select4'];
$e=$b.'/'.$c.'/'.$d;
$f=$_POST['select'];
$g=$_POST['txtgath'];
if($d<=$ya)
{
	if($c<=$ma)
	{
		if($b<=$da)
		{
			echo"<script>alert('your given date is wrong')</script>";
			header("location:welcome2.php");
		}
	}
}
	
	
/*echo"$a";
echo"$e";
echo"$f";
echo"$g";*/
mysql_connect("localhost","root","");
mysql_select_db("project1");
$query1="insert into welcome(ename,doevent,elocation,egathering)values('$a','$e','$f','$g')";
mysql_query($query1) or die(mysql_error());

$_SESSION['eventname']=$a;
$_SESSION['eventdate']=$e;
$_SESSION['eventlocation']=$f;
$_SESSION['eventgathering']=$g;
include("services.php");
?>

</body>
</html>

