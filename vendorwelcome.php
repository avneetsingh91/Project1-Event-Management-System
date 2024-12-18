<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event Management</title>
</head>

<body>
<?php
		$a=$_POST['txtvid'];
        $b=$_POST['txtvpass'];
$val=0;
$con=mysqli_connect("localhost","root","","project1");
  if(!$con)
  {
  	die("error is" .mysqli_error());
	}
	else
	{
	$result=mysqli_query($con,"select * from vendor3 where vemail='$a' and vpassword='$b'");
	
	if($row=mysqli_fetch_array($result))
	{
	$val=1;
	}
	if($val!=1)
	{

	header("location:home.php");
	die("");
	}
	else
	{
		header("location:vendorwelcome2.php");
		$_SESSION['a']=$a;
	
	}
	}
	mysqli_close($con);
	
	?>
</body>
</html>