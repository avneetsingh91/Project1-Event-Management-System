<?php

		session_start();
			 mysql_connect("localhost","root","");
  		 mysql_select_db("project1");
	
		 $k=$_SESSION['username'];
		 
   		$query="select * from reg  where uname='$k'";
		$rid=mysql_query($query);
		if($data=mysql_fetch_array($rid))
		{
			$fname=$data['fname'];
			$lname=$data['lname'];
			$uname=$data['uname'];
			$ads=$data['address'];
			$pin=$data['pcode'];
			$pno=$data['pno'];
			
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
<html>
<head>
<title>Change Password</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function validate()
		{
			if(document.frmpass.oldpwd.value=='')
				{
					alert('Please enter current password');
					document.frmpass.oldpwd.focus();
					return false;
				}
			if(document.frmpass.pwd1.value=='')
				{
					alert('Please enter new password');
					document.frmpass.pwd1.focus();
					return false;
				}
			l=password();  
			if(l<6)
			{
				alert('Please enter atleast 6 characeter password');
				document.frmpass.pwd1.value=''
				document.frmpass.pwd1.focus();
				return false;
			} 
			if(document.frmpass.pwd2.value=='')
				{
					alert('Please enter confirm password');
					document.frmpass.pwd2.focus();
					return false;
				}
			if(document.frmpass.pwd1.value!=document.frmpass.pwd2.value)
				{
					alert("Password does not match");
					document.frmpass.pwd2.focus();
					return false;
				}
			function password()
	 			{
					var a= document.frmpass.pwd1.value ;
					var l=a.length ;
					return l;
	  			}
		}
</script>
<style type="text/css">
.popo
{
margin-left:400px;
margin-top:10px;
}
.style1 {color: #000000}
.style2 {color: #98ae5b}
</style>
</head>
<body>
<div id="outer">
			<div id="header">
				<div id="nav">
			
					<ul>
						<li class="first active">
							<a href="icon.php">Home</a>
						</li>
						</ul>		<br class="clear" />
				</div>
			</div>
			<div id="banner">
				<img src="images/016_DJ_indian-wedding-room-900x600.jpg" width="1180" height="320" alt="" />
				
					<div id="logo">
						<h2><a href="#">Event management </a></h2>
					</div>				
			</div>
			<div id="main" style="height:450px">

		<form name="frmpass" method="post" action="changeuser.php" onSubmit="return validate();" >
    	<table border="10" class="popo" width="400"> 
		<caption align="center" class="style2">CHANGE USER DETAIL</caption>
			<tr><td><span class="style1">First Name</span></td> <td> <input type="text" name="t1" value="<?php echo $fname ; ?> " style="padding:6px;" /></td></tr>
		
        	<tr><td><span class="style1">Last Name</span></td> <td> <input type="text" name="t2" value="<?php echo $lname ; ?> " style="padding:6px;" /></td></tr>
		
        	<tr><td><span class="style1">Email-id</span></td> <td> <input type="text" name="t3" value="<?php echo $uname ; ?> " disabled="disabled" style="padding:6px;" /><input type="hidden" name="t3" value="<?php echo $uname ; ?> "  style="padding:6px;" /></td></tr>
		
        	<tr><td><span class="style1">Address</span></td> <td> <textarea name="t4"><?php echo $ads ; ?> </textarea></td></tr>
		
        	<tr><td><span class="style1">Pincode</span></td> <td> <input type="text" name="t5" value="<?php echo $pin ; ?> " style="padding:6px;" /></td></tr>
		
        	<tr><td><span class="style1">Phone No</span></td> <td> <input type="text" name="t6" value="<?php echo $pno ; ?> " style="padding:6px;" /></td></tr>
sss        	<tr><td align="center" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Update" name="save" style="padding:6px; width:100px;"  />&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" name="cancel" style="padding:6px; width:100px;"  /></td></tr>
		
		</table>
        </form>
   </div>
  
 
<div style="margin: 1em 0 3em 0; text-align: center;">
			 	
</div>

</body>
</html>

