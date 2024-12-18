<?php
session_start();
$a1=$_SESSION['a'];	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
	Purplicious by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->

<head>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Event Management</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		

<style type="text/css">
.tab2
{
margin-left:200px;
}
.a:hover
	{
		color:#30C;
		text-decoration:none;
	}
	a
	{
		text-decoration:none;
	}
</style>
  
<body>
	<div id="outer">
		<div id="header">
			<div id="nav">
			<ul>
							<li class="first active">
							<a href="venderwelcome2.php">Home</a>
						</li>
                	<li class="first active">
							<a href="pwd2.php">Change Password</a>
						</li>
                        <li>
							<a href="edit.php">Edit Account</a>
						</li>
						<li class="last">
							<a href="logout.php">Logout</a>
						</li>
	</ul>
				
		    </div>
		</div>
		<div id="banner">
			<img src="images/016_DJ_indian-wedding-room-900x600.jpg" width="1180" height="320" alt="" />
				
				<div id="logo">
					<h2><a href="#">Event management </a></h2>
				</div>				
		</div>
		<div id="main" style="height:500px;">
		<br />
		
    </p>
    <p style="color:#98ae5b;">Vendor Name:-  
<?php
$con=mysqli_connect("localhost","root","","project1");
  if(!$con)
  {
  	die("error is" .mysqli_error());
	}
	else
	{
	$result=mysqli_query($con,"select * from vendor3 where vemail='$a1'");
	if($row=mysqli_fetch_array($result))
	{
         echo $row['vname'];
		 $_SESSION['vendorname']=$a1;
	}
	
	}
?>

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor Category:-
	
	<?php
 
	
$con=mysqli_connect("localhost","root","","project1");
  if(!$con)
  {
  	die("error is" .mysqli_error());
	}
	else
	{

	$result=mysqli_query($con,"select * from vendor3 where vemail='$a1'");
	if($row=mysqli_fetch_array($result))
	{
        $v_category= $row['vcategory'];
		echo $v_category;
	}
	
	}
?>
	 </p>
    <p>&nbsp;</p>
    <p>                          
	 <?php
	
	echo "<center><table width='700' height='94' border='1'>
                <tr><th>Order Id</th>
				
					<th>services</th>
					<th>deliverydate</th>
					<th>Status</th>
                	</tr>";
					
  if(!$con)
  {
  	die("error is" .mysqli_error());
	}
	else
	{
	$result=mysqli_query($con,"select * from order_master,order_detail where sername='$v_category' and pending='pending' and order_master.orderid=order_detail.orderid");
	
	?>
	</p>
	<form method="post" action="vendororders.php">
	<?php
	while($row=mysqli_fetch_array($result))
	{
		$a=$row['orderid'].",".$row['servicename'];
		echo "<tr><td>".$row['orderid']."</td><td>".$row['servicename']."</td><td>".$row['eventdate']."</td><td><input type=checkbox name=c1[] value=".$a."></td></tr>";
	}
	}
	

	?>
	<tr>
	<td colspan="4" align="center"><input type="submit"></td>
	</tr>
	<?php
	
	
	
     echo "</table></center>";
	 echo "</form>";
	?>
	

</form>
</p>
</div>
</div>

			
			
		
		<div style="margin: 1em 0 3em 0; text-align: center;">
			<br />
		</div>
</body>
</html>
		