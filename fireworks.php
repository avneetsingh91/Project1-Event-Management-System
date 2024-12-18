<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
	Purplicious by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<head>
		
		<title>Event Management</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
<script language="javascript">
function val()
{
	flag=true;
	if(document.getElementById('a1').checked==false)
	{
		alert("select Atleast one checkbox");
		flag=false;
	}
	return flag;
}
</script>
	
		<script type="text/javascript" src="JQUERY/easySlider1.5/easyslider1.5/js/jquery.js">
        </script>
	<script type="text/javascript" src="JQUERY/easySlider1.5/easyslider1.5/js/easySlider1.5.js">
        </script>
	<script type="text/javascript">
		$(window).ready(function(){	
			$("#slider").easySlider({
			 auto: true,
			 prevText: '',
			 nextText: '',		
			 firstShow: false,
			 lastShow: false,
			 horizontal: false, 
			 continuous: true 		
		});
	});	
       </script>
    
        <style type="text/css">
		#lol
		{
		margin-top:320px;
		margin-left:150px;
		color:#000000;
		}
		
		
 	#slider ul{
		margin-left:0px;
	    margin-top:38px;
      	
		list-style:none;
		}
	#slider li{ 
		width:450px; 
		height:305px;
		overflow:hidden; 
		}
	
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
						</ul>				</div>
			</div>
			<div id="banner">
				<img src="images/016_DJ_indian-wedding-room-900x600.jpg" width="1180" height="320" alt="" />
				
					<div id="logo">
						<h2><a href="#">Event management </a></h2>
					</div>				
			</div>
			<div id="main">
				<div id="content">
				
					<div id="box1"><h2 align="center">Event management</h2><img class="left" src="images/images (3).jpg" width="200" height="180" alt="" /><p style="font-size:16px;">Firework displays as part of wedding parties, birthday parties, corporate events, or other celebrations can add a special pazazz. Guests of these events will be entertained and delighted by this added attraction, and the firework displays will be something that can be remembered for many years to come - especially when they are caught on photos, DVD or video. For weddings, some of the wedding pictures could include fireworks displays in the background, making for remarkable photos. This could also be done with birthday parties or family reunions, where skilled photos are often taken</p>
<p style="font-size:16px;">Welcome To The World Of Fireworks! This is one stop shop for all your Firework needs and requirements. Perfect for your wedding reception as a wedding favor or just to hand out for celebrating, a birthday party, anniversary celebration, graduation, open house, family reunion, university or high school reunion, outside theatre production or neighbourhood pot luck! Add sparkle and excitement to all your special events.</p>
						
					<!--<img class="left" src="images/pic04.jpg" width="200" height="180" alt="" />-->
					 
						
				</div>
					
					<br class="clear" />
				</div>
				<div style="height:5px; width:400px;padding:30px;50px;">
				<h2 align="center" style="color:#98ae5b;">firework Service</h2>
				<form name="f1" method="post" action="addcart1.php" onsubmit="return val()">
  <?php 
$a = array();
$i = 0;
$con = mysqli_connect("localhost", "root", "", "project1");
if (!$con) {
    die("Error: " . mysqli_connect_error());
} else {
    if (mysqli_select_db($con, "project1")) {
        $result = mysqli_query($con, "SELECT * FROM subservices WHERE servicename='firework'");
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $a[$i] = $row['ss_price'];
                $i++;
            }
        } else {
            die("Error: " . mysqli_error($con));
        }
    } else {
        die("Error selecting database: " . mysqli_error($con));
    }
    mysqli_close($con);
}
?>

				</div>
				<div id="slider" style="margin-left:40px; position:absolute;">

	<ul>				
	<li>
            
                <img style="height:200px; width:400px; border:solid" src="images/images.jpg" alt="Css Template Preview" /></li>
	<li>
            
                <img style="height:200px; width:400px; border:solid" src="images/fr.jpg" alt="Css Template Preview" /></li>
	<li>
            
                <img style="height:200px; width:400px;border:solid" src="images/images (4).jpg" alt="Css Template Preview" /></li>
	<li>
            
                <img style="height:200px; width:400px; border:solid" src="images/images (5).jpg" alt="Css Template Preview"/></li>
				<li>
            
                <img style="height:200px; width:400px; border:solid" src="images/images (7).jpg" alt="Css Template Preview"/></li>
				<li>
            
                <img style="height:200px; width:400px; border:solid" src="images/images (2).jpg" alt="Css Template Preview"/></li>
				
	</ul>
</div>
				
				<div id="lol">
				<form>
				<input type="checkbox" name="c1[]" id="a1" value="firework" />&nbsp;&nbsp;&nbsp;<label>Firework Service</label>
				
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price:-<?php echo $a[0] ?></p>
				<input type="submit" name="Submit" value="Add to cart">
    
				</form>
				
				</div>
				
            <br class="clear" />
			</div>
			
		
		<div style="margin: 1em 0 3em 0; text-align: center;">
		
	</div>
</body>
</html>