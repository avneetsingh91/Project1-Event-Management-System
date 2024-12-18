<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
	Purplicious by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
    <style>
	.a:hover
	{
		color:#30C;
		text-decoration:none;
	}
	a
	{
		text-decoration:none;
	}
	.ii
	{
	margin:100px 200px 0px 0px;
	}
	</style>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Event Management</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		


	    <style type="text/css">
<!--
.style1 {color: #000000}
-->
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
						</ul>
				</div>
			</div>
			<div id="banner">
				<img src="images/Ricky & Priya's Wedding LR (Web) 46.jpg" width="1180" height="320" alt="" />
				
					<div id="logo">
						<h2><a href="#">Event management </a></h2>
					</div>				
			</div>
			<div id="main">
				<div id="content">
				
					<div id="box1"><h2 align="center">Event management</h2><img class="left" src="images/Reception-Lighting-Ideas.jpg" width="200" height="180" alt="" /><p style="font-size:16px;">Events like wedding,  birthday, anniversary etc are the special moments of life that makes life memorable.These  moments are recognized with traditional ceremonies.To make these auspicious events memorable our site provides you the highest quality services and  information.Whatever your event needs may be , our team is ready to offer personalised information to help makr your event day the most memorable day of your life.</p>
<p style="font-size:16px;">Event planning is required at every step for perfect arrangement of events, planning  a successful event requires lots of preparation and everybody wants it should go off without a glitch.</p>
						
					<!--<img class="left" src="images/pic04.jpg" width="200" height="180" alt="" />-->
					 <p class="style4" ><FONT color="#000000"> Event Management provides:-</font> </p>
    <p class="style4">&nbsp&nbsp&nbsp-- Catering and Bakery<br>
	<li>
	Fireworks<br>
	</li>
    <LI>Lightning </LI>
    <LI>Parlour <br></LI>
	<LI>Tent service<br></LI>
	<LI>Barat and Doli service<br></LI>
	<LI>Decoration services<br></LI>
	<LI>Bakery services<br></LI>
	<LI>card design services<br></LI>
	<LI>D.J/Sound services<br></LI>
	
	<LI>Transportation and other services<br></LI>
	
	</p>
						
				</div>
					
					<br class="clear" />
				</div><div style="height:5px;width:350px;padding:30px;50px;">
				<h2 align="center" style="color:#98ae5b;">Baraat</h2></div>
				<form name="f1" method="post" action="addcart.php">
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
							
						$result=mysql_query("select * from subservices where servicename='hall'");
						
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
				 <table width="500">
      <tr>
        <td height="244"><table width="300" height="255" border="0">
          <tr>
            <td width="294" height="249"><table width="296" height="194" border="0">
                <tr><td></td><td></td><td></td><td></td><td></td>
                  <td width="152" height="188"><IMG  src="images/services_subtype/ghori.jpg"  width=154 height=136></td>
                  <td width="-2"></td>
                  <td width="-2"></td>
                  <td width="130"><label>
                    <input type="checkbox" name="c1[]" value="ghori">
                    <span class="style1"><strong><font size="4"> Ac Hall</font></strong></span></label>
                    <p><span class="style1">price:-<?php echo $a[0] ?></span></p></td>
                </tr>
            </table></td></tr>
			
            <tr><td width="294"><table width="200" height="194" border="0">
                <tr><td></td><td></td><td>
			</td><td></td><td></td>
                  <td width="151" height="188"><IMG  src="images/services_subtype/baraatband.jpg"  width=154 height=136></td><td></td><td></td>
                  <td width="152"><label>
                    <span class="style1">
                    <input type="checkbox" name="c1[]" value="baratband">
                    <span class="style1"><strong><font size="4">Normal Hall</font></strong> </span></label>
                      <p><span class="style1">price:-<?php echo $a[1] ?></span></p></td>
                </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="67"><label>
          <div align="center" >
            <input type="submit" name="Submit" value="Add to cart">
          </div>
        </label></td>
      </tr>
    </table>
  </form>
            <br class="clear" />
			</div>
			
		</div>
		<div style="margin: 1em 0 3em 0; text-align: center;">
			
	</div>
</body>
</html>