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
						</ul>				</div>
			</div>
			<div id="banner">
				<img src="images/outdoor-wedding-reception-tips.jpg" width="1180" height="320" alt="" />
				
					<div id="logo">
						<h2><a href="#">Event management </a></h2>
					</div>				
			</div>
			<div id="main">
				<div id="content">
				
					<div id="box1"><h2 align="center">Event management</h2><img class="left" src="images/orlando-wedding-caterers.jpg" width="200" height="180" alt="" /><p style="font-size:16px;">Events like wedding,  birthday, anniversary etc are the special moments of life that makes life memorable.These  moments are recognized with traditional ceremonies.To make these auspicious events memorable our site provides you the highest quality services and  information.Whatever your event needs may be , our team is ready to offer personalised information to help makr your event day the most memorable day of your life.</p>
<p style="font-size:16px;">Event planning is required at every step for perfect arrangement of events, planning  a successful event requires lots of preparation and everybody wants it should go off without a glitch.</p>
						
					<!--<img class="left" src="images/pic04.jpg" width="200" height="180" alt="" />-->
					 <p class="style4" ><FONT color="#000000">Event management provides:-</font> </p>
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
				<h2 align="center" style="color:#98ae5b;">Tent Service</h2></div>
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
							
						$result=mysql_query("select * from subservices where servicename='tentservice'");
						
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
        <td width="300" height="201"><table width="200" height="198" border="0">
          <tr>
            <td width="329"><table width="310" height="55" border="0">
              <tr><td></td><td></td><td></td>
                <td width="118"><IMG  src="images/enterance.jpg"  width=118 height=136></td>
                <td width="176"><label>
                  <div align="center">
                     <span class="style1">
                    <input type="checkbox" name="c1[]" value="entrencetent">
                    Entrance Tent <br>
                    price:-<?php echo $a[0] ?></span></div>
                </label></td>
              </tr>
            </table></td><tr>
            <td width="332"><table width="310" height="55" border="0">
              <tr><td></td><td></td><td></td>
                <td width="118"><IMG  src="images/mandap.jpg"  width=118 height=136></td>
                <td width="176"><label>
                  <div align="center" class="style1">
                    <input type="checkbox" name="c1[]" value="mandap">
                    Mandap                  </div>
                  <span class="style1">
                  </label>
                  </span>
                  <p align="center" class="style1">price:-<?php echo $a[1] ?></p></td>
              </tr>
            </table></td>
          
          <tr>
            <td><table width="310" height="55" border="0">
              <tr><td></td><td></td><td></td>
                <td width="118"><IMG  src="images/diningtent.jpg"  width=118 height=136></td>
                <td width="176"><label>
                    <div align="center">
                      <input type="checkbox" name="c1[]" value="diningtent">
                      <label><span class="style1">Dining Tent </span></label>
                    </div>
                    <span class="style1">
                    </label>
                    </span>
                    <p align="center" class="style1">price:-<?php echo $a[2] ?></p></td>
              </tr>
            </table></td><tr>
            <td><table width="310" height="55" border="0">
              <tr><td></td><td></td><td></td>
                <td width="118"><IMG  src="images/tent.jpg"  width=118 height=136></td>
                <td width="176"><label>
                    <div align="center">
                      <input type="checkbox" name="c1[]" value="maintent">
                      <span class="style1">Main Tent                      </span></div>
                    <span class="style1">
                    </label>
                    </span>
                    <p align="center" class="style1">price:-<?php echo $a[1] ?></p></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><label>
          <div align="center">
            <input type="submit" name="Submit" value="Add To Cart">
          </div>
        </label></td>
      </tr>
    </table>
  </form>
    </p></td>
		
            <br class="clear" />
			</div>
			
		</div>
		<div style="margin: 1em 0 3em 0; text-align: center;">
			 
  </div>
</body>
</html>