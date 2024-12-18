<?php

		session_start();
			 $con = mysqli_connect("localhost","root","","project1");
	
		 $k=$_SESSION['a'];
		 
   		$query="select * from vendor3  where vemail='$k'";
		$rid=mysqli_query($con,$query);
		if($data=mysqli_fetch_array($rid))
		{
			$fname=$data['vname'];
			$ads=$data['vaddress'];
			$pno=$data['vphoneno'];
			
		}
			
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
	Purplicious by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Purplicious</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<style type="text/css">
.popo
{
margin-left:400px;
margin-top:10px;
}.style1 {color: #000000}
        </style>
<html>
<body>

		<div id="outer">
			<div id="header">
				<div id="nav">
									<ul>
	<li class="first active">
							<a href="vendorwelcome2.php">Home</a>
						</li>
            			<li>
							<a href="pwd2.php">Change Password</a>
						</li>
						<li class="last">
							<a href="viewvender.php">Edit Account</a>
						</li>
                       <li class="last">
							<a href="logout.php">Logout</a>
						</li>
                         </ul>
	<br class="clear" />
				</div>
			</div>
			<div id="banner">
				<img src="images/pic02.jpg" width="1180" height="320" alt="" />
				
					<div id="logo">
						<h2><a href="#">Event management </a></h2>
					</div>				
			</div>
			<div id="main" style="height:600px">
			<br>
			

		<form name="frmpass" method="post" action="changevendor.php" onSubmit="return validate();" >
    	<table border="10" class="popo" width="400"> 
		<caption align="center" class="style2">CHANGE VENDOR DETAIL</caption><br/>
			<tr><td><span class="style1">First Name</span></td> <td> <input type="text" name="t1" value="<?php echo $fname ; ?> " style="padding:6px;" /></td></tr>
		
        	<tr><td><span class="style1">Address</span></td> <td> <textarea name="t4"><?php echo $ads ; ?> </textarea></td></tr>
		
        	<tr><td><span class="style1">Phone No</span></td> <td> <input type="text" name="t6" value="<?php echo $pno ; ?> " style="padding:6px;" /></td></tr>
		
        	<tr><td align="center" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Update" name="save" style="padding:6px; width:100px;"  />&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" name="cancel" style="padding:6px; width:100px;"  /></td></tr>
		
		</table>
        </form></div>
<div style="margin: 1em 0 3em 0; text-align: center;">
			
</body>
</html>