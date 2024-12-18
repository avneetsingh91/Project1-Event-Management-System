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
		
		<title>Purplicious</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />

	
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
							<a href="home.php">Home</a>
						</li>
						<li>
							<a href="#">contact us	</a>
						</li>
						<li>
							<a href="#">About us</a>
						</li>
						
						<li class="last">
							<a href="home1.php">Register</a>
						</li>
						<li class="last">
							<a href="services.php">Services</a>
						</li>
					</ul>
					<br class="clear" />
				</div>
			</div>
			<div id="banner">
				<img src="images/Fotolia_6902476_Subscription_L.jpg" width="1180" height="320" alt="" />
				
					<div id="logo">
						<h2><a href="#">Event management </a></h2>
					</div>				
			</div>
			<div id="main">
				<div id="content">
				
					<div id="box1"><h2 align="center">Event management</h2><img class="left" src="images/services_subtype/l2.jpg" width="200" height="180" alt="" /><p style="font-size:16px;">Nothing sets the mood like lighting. Soft, dimmed lights fill a room with romance and intimacy. Colorful combinations produce hues of artistry and wonder. Candles glow with a flickering luminescence that carries us back to simpler times. The choice of wedding-light decorations will greatly influence the mood and atmosphere of the ceremony and reception.
Wedding receptions require careful light planning. Some people hire special lighting coordinators who will ensure that couples have as much stunning and cutting-edge lighting (or as subtle a glow) as possible. Light coordinators will also work with your photographers to ensure optimal picture possibilities and special-effect planning.</p>
<p style="font-size:16px;">Once a reception gets into full swing, it's fun to provide exciting lighting effects. As more and more dancers fill the floor and the music heightens, special and surprising lighting will thrill your guests. The use of a fogger with specialty lights produces a mystique all its own</p>.
						
					<!--<img class="left" src="images/pic04.jpg" width="200" height="180" alt="" />-->
					 
						
				</div>
					
					<br class="clear" />
				</div>
				<div style="height:5px; width:400px;padding:30px;50px;">
				<h2 align="center" style="color:#98ae5b;">lighting Service</h2>
				<form name="f1" method="post" action="addcart1.php">
  <?php 
  						$a=array();
						$i=0;
					  $con=mysql_connect("localhost","root","");
					  if (!$con)
					  	{
						die("error is".mysql_error());
						}
						else
						{
						if(mysql_select_db("project1",$con))
						{
							
						$result=mysql_query("select * from subservices where servicename='lighting'");
						
						while($row=mysql_fetch_array($result))
						{
							$a[$i]=$row['ss_price'];
								$i++;
						}
						
						}	
						
						else
						{
							die(mysql_error());
						}	
						}
						?>
				</div>
				<div id="slider" style="margin-left:40px; position:absolute;">

	<ul>				
	<li>
            
                <img style="height:200px; width:400px; border:solid" src="images/LED-Strip-lights-LSL1532.jpg" alt="Css Template Preview" /></li>
	<li>
            
                <img style="height:200px; width:400px; border:solid" src="images/lighting.jpg" alt="Css Template Preview" /></li>
	<li>
            
                <img style="height:200px; width:400px;border:solid" src="images/lighting2.jpg" alt="Css Template Preview" /></li>
	<li>
            
                <img style="height:200px; width:400px; border:solid" src="images/lighting-18.jpg" alt="Css Template Preview"/></li>
	</ul>
</div>
				
				<div id="lol">
				<form>
				<input type="checkbox" name="c1[]" value="lighting" />&nbsp;&nbsp;&nbsp;<label>Lightening Service</label>
				
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price:-<?php echo $a[0] ?></p>
				<input type="submit" name="Submit" value="Add to cart">
    
				</form>
				
				</div>
				
            <br class="clear" />
			</div>
			
		
		<div style="margin: 1em 0 3em 0; text-align: center;">
			 <a href="home.html" class="a">HOME </a>|<a href="" class="a">CONTACT US </a>|<a href="" class="a">ABOUT US </a>|<a href="" class="a">SERVICES</a>|<br />
		</div>
</body>
</html>