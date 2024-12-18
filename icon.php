<?php
session_start();
if(!(isset($_SESSION['username'])))
{
	header("location:home.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
margin-left:150px;
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
				
		    </div>
		</div>
		<div id="banner">
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
		<div id="main" style="height:400px">
		<?php
		$k=$_SESSION['username'];
				mysql_connect("localhost","root","");
            mysql_select_db("project1");
           $query= mysql_query("select * from reg where uname='$k'");
		   if($r=mysql_fetch_array($query))
	{
		$fname=$r['fname'];
		$lname=$r['lname'];
	}
	
		
		$user=$_SESSION['username'];
				mysql_connect("localhost","root","");
            mysql_select_db("project1");
			$da=mysql_query("select * from visited where email='$user'")or die(mysql_error());
			if($ds=mysql_fetch_array($da))
			{
				$cou=$ds['vi'];
				$cou1=$cou+1;
				mysql_connect("localhost","root","");
            mysql_select_db("project1");
			mysql_query("update visited set vi='$cou1' where email='$user'");
			}
			echo"<h3 style=color:red;>Your Are Visited My Site ".$cou1." Times....</h3>";
			echo"<center><font size=+3 color=#000000>Welcome :- ".$fname."&nbsp;".$lname ."</font><hr/></center>";
		?>
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
          <th width="106" scope="col"><a href="pwd1.php" >Change password</a></th>
        </td>
		 <td></td><td></td><td></td><td></td><td><td></td><td></td><td><td></td><td></td><td><td></td><td></td><td>
          <th width="113" scope="col"><a href="edituser.php" ><img border="0" src="images/edit.jpg"  alt ="d" width="113" height="140"></a></th>
          <th width="106" scope="col"><a href="edituser.php" >Edit</a></th>
        </td></tr></table>
</div>
<div style="margin: 1em 0 3em 0; text-align: center;">
             </div>

</body>
</html>		
		

		