
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>	

	<style>
	.a
	{
		background:#999;
		margin-left:200px;
		width:1000px;
		height:50px;
		text-align:center;
	}
    </style>

    <style>
	a:hover
	{
		color:#093;
		text-decoration:none;
	}
	</style>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Event Management</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		

	</head>
	<body>
		<div id="outer">
			<div id="header">
				<div id="nav">
					<ul>
						<li class="first active">
							<a href="home.php">Home</a>
						</li>
						<li>
							<a href="mail.php">contact us	</a>
						</li>
						<li><a href="feedback.php">feedback</a>
						</li>
						<li class="last">
							<a href="home1.php">Register</a>
</li>
                        <li class="last">
                            <a href="adminservices2.php">Services</a>
                        
						</li>
						<li class="last">
							<a href="admin.php">Admin Login</a>
						</li>
					</ul>
					<br class="clear" />
				</div>
			</div>
			<div id="banner" style="background:#333;">
						<div id="SliderName_2" class="SliderName_2" style="background:#033;">
					<img src="img/1.jpg" width="1180" height="320" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
					<img src="img/2.jpg" width="1180" height="320" alt="Demo2 second" title="Demo2 second" />
					<img src="img/3.jpg" width="1180" height="320" alt="Demo2 third" title="Demo2 third" />
					<img src="img/4.jpg" width="1180" height="320" alt="Demo2 fourth" title="Demo2 fourth" />
					<img src="img/5.jpg" width="1180" height="320" alt="Demo2 second" title="Demo2 second" />
					<img src="img/7.jpg" width="1180" height="320" alt="Demo2 fourth" title="Demo2 fourth" />					
					
				</div>
				<div id="SliderNameNavigation_2" style="position:absolute;" style="background:#999;"></div>
					</div>					


				<script type="text/javascript">
					effectsDemo2 = 'rain,stairs,fade';
					var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 1180, height: 320, effects: effectsDemo2,
						display: {
							autoplay: 3000,
							loading: {background: '#000000', opacity: 0.5, image: 'img/loading.gif'},
							buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
							description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
							navigation: {container: 'SliderNameNavigation_2', label: '<img src="img/clear.gif" />'}
						}
					});
				</script>
	
					<div id="logo">
						<h2><a href="#">Event management </a></h2>
					</div>				
			</div>
			<div id="main" style="padding-left:40px;">
				<div id="content">
				
					<div id="box1"><h2 align="center">Event Management</h2><img class="left" src="images/Reception-Lighting-Ideas.jpg" width="200" height="180" alt="" /><p style="font-size:16px;">Events like wedding,  birthday, anniversary etc are the special moments of life that makes life memorable.These  moments are recognized with traditional ceremonies.To make these auspicious events memorable our site provides you the highest quality services and  information.Whatever your event needs may be , our team is ready to offer personalised information to help makr your event day the most memorable day of your life.</p>
<p style="font-size:16px;">Event planning is required at every step for perfect arrangement of events, planning  a successful event requires lots of preparation and everybody wants it should go off without a glitch.</p>
						
					<!--<img class="left" src="images/pic04.jpg" width="200" height="180" alt="" />-->
					<FONT color="#FF9999">USER FEEDBACK'S</font> <HR style="width:200px;">	
   
	<marquee direction="up" height="400" onmouseout="start()" onmouseover="stop()" scrollamount="3">
    <table border="0" width="500" style="color:#000" bgcolor="#CCCCCC">
			<tr>
			<?php
			$a=0;
		  $con=	mysqli_connect("localhost","root","","project1");
           // mysql_select_db("");
           $query= mysqli_query($con,"select * from feedback");
		   while($r=mysqli_fetch_array($query))
		   {
			   if($a=="1")
			   {
				   echo"</tr><tr>";
				   $a=0;
			   }
			   echo"<td><table border=0 width=500>
			   <tr>
			   <td colspan=2>Feedback:- ".$r['comments']."<hr/></td></tr>
			   <tr>
			   <th>Name:-".$r['name']."</th>
			   <th>Email-id :- ".$r['email']."</th>
			   </tr></table><hr/></td>";
			   $a++;
		   }
		   ?>
</tr></table></marquee>
						
				</div>
					
					<br class="clear" />
				</div>
				<div id="sidebar1">
					<h3>LOGIN FORM</h3>
					<div class="form">
						<form name="f1" method="post" action="code.php">
						<p>
							<input type="email" name="username" id="username" placeholder="USER EMAIL" style="color:#000;" class="inputBox"/>
						</p>
						<p>
							<input type="password" name="password" id="password" placeholder="PASSWORD" style="color:#000;" class="inputBox" />
						</p>
						
						<p> <input type="submit" name="login" value="Login" class="inputButton" />
						</p>
						</form><p>
							<span><input type="checkbox" name="remember" /> &nbsp;Remember Me</span> </p>
					
						<p ><b>If not registered then click here to : <br /> <a href="home1.php">Sign Up</a><!--<input type="button" name="register" value="register"  class="inputButton1"/>--></b></p><br />
						
						
						
						
						
						 
						
					</div>
					
				</div>
				<div id="sidebar1">
					<h3>VENDOR LOGIN FORM</h3>
					<div class="form">
						<form  name="login" action="vendorwelcome.php" method="post" id="login">
					  
						<p>
							<input type="email" name="txtvid"  placeholder="VENDOR E_MAIL ID" class="inputBox" />
						</p>
						<p>
							<input type="password" name="txtvpass"  placeholder="PASSWORD" class="inputBox" />
						</p>
						<p>
							<span><input type="checkbox" name="remember" /> &nbsp;Remember Me</span> <input type="submit" name="login" value="Login" class="inputButton" />
						</p></form>
						<p ><b>If not registered then click here to : <br /> <a href="vendor reg.php">Sign Up</a><!--<input type="button" name="register" value="register"  class="inputButton1"/>--></b></p><br />
						
					</div>
					
				</div>
				
				<br class="clear" />
			</div>
			
		</div>

<div style="margin: 1em 0 3em 0;  text-align: center; background:#000;">
							<a href="home.php">Home</a> ||
							<a href="mail.php">contact us	</a> ||
	<a href="feedback.php">feedback</a> ||
	
							<a href="home1.php">Register</a> ||
							<a href="admin.php">Admin Login</a>
                            <br/>
                            <a href="home.php">Design By @ Event Management</a>
		
	</div>
    </body>
</html>