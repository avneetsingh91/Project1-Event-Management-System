
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
	Purplicious by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->
<html>
	<head>
	
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Purplicious</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />



		


	    <style type="text/css">
<!--
.style2 {color: #98ae5b}
-->
        </style>
</head>
	<body>
		<div id="outer">
			<div id="header">
				<div id="nav">
					<ul>
						<li class="first active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">contact us	</a>
						</li>
						<li>
							<a href="#">About us</a>
						</li>
						
						<li class="last">
							<a href="#">Register</a>
						</li>
						<li class="last">
							<a href="#">Services</a>
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
		<p style="color:#98ae5b;">
		<?php
		$k=$_SESSION['username'];
		echo"welcome ".$k;
		?>
		</p>
		<table align="center" class="tab2" cellpadding="5" cellspacing="5";><tr>
	  <td></td><td></td><td>
          <th width="113" scope="col"><a href="welcome2.php"><img border="0" src="images/images7.jpg"  alt ="d" width="113" height="140"></a></th>
		  </td>
		  <br />
          <td width="50" scope="col"><a href="welcome2.php" >welcome page</a></td>
        <td></td><td></td><td></td>
	  <td></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td></td><td></td>
	 
	  <td></td><td></td><td></td><td></td><td><td></td><td></td><td><td></td><td></td><td><td></td><td></td><td>
          <th width="113" scope="col"><a href="pwd1.php" ><img border="0" src="images/pwd.jpg"  alt ="d" width="113" height="140"></a></th>
          <th width="106" scope="col"><a href="pwd1.php" >change password</a></th>
        </td>
		 <td></td><td></td><td></td><td></td><td><td></td><td></td><td><td></td><td></td><td><td></td><td></td><td>
          <th width="113" scope="col"><a href="viewuser.php" ><img border="0" src="images/edit.jpg"  alt ="d" width="113" height="140"></a></th>
          <th width="106" scope="col"><a href="viewuser.php" >Edit</a></th>
        </td></tr></table>
</div>
		</body>
		</html>