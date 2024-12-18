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
		<title>Event Managment</title>
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
						</ul>					<br class="clear" />
				</div>
			</div>
			<div id="banner">
				<img src="images/016_DJ_indian-wedding-room-900x600.jpg" width="1180" height="320" alt="" />
				
					<div id="logo">
						<h2><a href="#">Event management </a></h2>
					</div>				
			</div>
			<div id="main">
				<div id="content">
				
					<div id="box1"><h2 align="center">Event management</h2><img class="left" src="images/Reception-Lighting-Ideas.jpg" width="200" height="180" alt="" /><p>We are manufacturer and exporter of dolis. These dolis are used for decoration purpose mainly in wedding mandaps and also for functions like fashion shows, stage performances and other stage functions. We offer wedding dolis that are used throughout India to carry the bride with ceremony and pomp. We offer these dolis at reasonable prices. </p>
          <ul type="square">
            <p><u><b>Our Wedding Dolis has the following features :-</b></u></p>
            <li type='disc'>Rigid Construction</li>
            <li type='disc'>Easy to Carry</li>
            <li type='disc'>Provides full view of the Bride sitting</li>
            <li type='disc'>Wooden Frame and hand carved design</li>
            <li type='disc'>Removable Handles, for ease in transportation</li>
            <li type='disc'>Different Color Options</li>
          </ul>
						
				</div>
					
					<br class="clear" />
				</div><div style="height:5px;width:350px;padding:30px;50px;">
				<h2 align="center" style="color:#98ae5b;">Doli Service</h2></div>
				<br />
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
							
						$result=mysql_query("select * from subservices where servicename='doli'");
						
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
              <tr><td></td><td></td><td></td><td></td><td></td><td></td>
                <td width="118"><IMG  src="images/services_subtype/doli.jpg"  width=118 height=136></td>
                <td width="176"><label>
                  <div align="center">
                     <span class="style1">
                    <input type="checkbox" name="c1[]" value="doli1">
                    TYPE1 <br>
                    price:-<?php echo $a[0] ?></span></div>
                </label></td>
              </tr>
            </table></td><tr>
            <td width="332"><table width="310" height="55" border="0">
              <tr><td></td><td></td><td></td>
                <td width="118"><IMG  src="images/doli.jpg"  width=118 height=136></td>
                <td width="176"><label>
                  <div align="center" class="style1">
                    <input type="checkbox" name="c1[]" value="doli2">
                    TYPE2          </div>
                  <span class="style1">
                  </label>
                  </span>
                  <p align="center" class="style1">price:-<?php echo $a[1] ?></p></td>
              </tr>
            </table></td>
          
          <tr>
            <td><table width="310" height="55" border="0">
              <tr><td></td><td></td><td></td>
                <td width="118"><IMG  src="images/services_subtype/images (1).jpg"  width=118 height=136></td>
                <td width="176"><label>
                    <div align="center">
                      <input type="checkbox" name="c1[]" value="doli3">
                      <label><span class="style1">TYPE3</span></label>
                    </div>
                    <span class="style1">
                    </label>
                    </span>
                    <p align="center" class="style1">price:-<?php echo $a[2] ?></p></td>
              </tr>
            </table></td>
                    
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