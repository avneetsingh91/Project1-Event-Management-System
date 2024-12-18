	<?php
	session_start();
        $a=$_SESSION['a'];
        $con = mysqli_connect("localhost","root","","project1");
		$query="select * from vendor3  where vemail='$a'";
		$rid=mysqli_query($con,$query);
		$data=mysqli_fetch_array($rid);
		
	if($_SERVER['REQUEST_METHOD']=='POST')
		{
			
			$oldpass=$_POST['oldpwd'];
			$newpass=$_POST['pwd2'];
			if($oldpass==$data['vpassword'])
				{
					$query2=("update vendor3 set vpassword='$newpass' where vemail='$a'");
				
					mysqli_query($query2);
					header("location:vendorwelcome2.php");
				}
			else
				echo"<script> alert('Current password is wrong')</script>";
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
							<a href="vendorwelcome2.php">Home</a>
						</li>
            			<li>
							<a href="pwd2.php">Change Password</a>
						</li>
						<li class="last">
							<a href="edit.php">Edit Account</a>
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
			<div id="main" style="height:400px">
			<br />
			<br />
            
		<form name="frmpass" method="post" action="" onSubmit="return validate();" >
    	<table style="border:#000000 solid 2px" class="popo">
		<caption align="center" class="style2">CHANGE PASSWORD</caption>
			<tr><td><span class="style1">Old Password</span></td> <td> <input type="password" name="oldpwd" value="" style="padding:6px;" /></td></tr>
			<tr> <td><span class="style1">New Password</span></td>
			<td> <input type="password" name="pwd1" value="" style="padding:6px;"  /></td></tr>
			<tr><td><span class="style1">Confirm Password</span></td>
			<td><input type="password" name="pwd2" value="" style="padding:6px;"  /></td></tr>
			<tr><td align="center" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Save" name="save" style="padding:6px; width:100px;"  />&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" name="cancel" style="padding:6px; width:100px;"  /></td></tr>
		
		</table>
        </form>
		   </div>
  
 
<div style="margin: 1em 0 3em 0; text-align: center;">

</body>
</html>

