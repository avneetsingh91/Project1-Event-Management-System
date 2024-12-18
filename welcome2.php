<?php
session_start();
if(!(isset($_SESSION['username'])))
{
	header("location:home.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
	Purplicious by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->
<html>
	<head>
	
	<script language="javascript">
	
		function validate()
	{
		var c=true;
		var x1=document.form1.select1.value;
		var x2=document.form1.select2.value;
		var x3=document.form1.select3.value;
		var x4=document.form1.select4.value;
		var x5=document.form1.select.value;
		var x6=document.form1.txtgath.value;
		
		if(x5==""||x6=="")
		{
			alert("enter the empty fields");
			c=false;
		}
		return c ;
	}
	
		
	
	
	</script>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Event Management</title>
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
							<a href="icon.php">Home</a>
						</li>
						
					</ul>
					<br class="clear" />
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
				
					<div id="box1">
						<h2 align="center">Event management</h2>
						<img class="left" src="images/Reception-Lighting-Ideas.jpg" width="200" height="180" alt="" />
					 <p class="style4" ><FONT color="#000000">Event Management provides:-</font> </p>
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
				</div>
				<div id="sidebar1" style="width:440px; height:647px;">
					<h3><span class="style2">
				    <Marquee>
				    <b>WELCOME TO THE SERVICE PLANNER</b>
				    </marquee>
					</span> </h3>
					<div>
					<form name="form1" method="post" action="services1.php"   onSubmit="return validate()">
	<h3> <div align="center"> <font color="#CC0066"> Welcome &nbsp;</font> </div> 
	</h3>
	    
	      <label>
	      <div align="left"> <font size="+2"> Event name </font>
	        <select name="select1">
	           <option value="Marriage">Marriage</option>
            <option value="Birthday">Birthday</option>
            <option value="Anniversary">Anniversary</option>
            <option value="Engagement">Engagement</option>
            <option value="Enaugration">Enaugration</option>
	        <option value="meeting">Meeting</option
	          ></select>
	        </div>
	      </label>
		  <label> 
		  <div align="left"><font size="+2"> Date of Event </font>
		    <label></label>
		    <label>
		    <select name="select2">
			<?PHP
			for($i=1;$i<=31;$i++)
			{
				echo "<option value=$i>$i</option>";
			}
			?>
	        </select>
		    </label>
		    <label>
		    <select name="select3">
			<option value="01">January</option>
			<option value="02">Feburary</option>
			<option value="03">March</option>
			<option value="04">april</option>
			<option value="05">may</option>
			<option value="06">June</option>
			<option value="07">July</option>
			<option value="08">august</option>
			<option value="09">september</option>
			<option value="10">october</option>
			<option value="11">november</option>
			<option value="12">december</option>
	        </select>
		    </label>
		    <label>
		    <select name="select4">
		      <option>2011</option>
		      <option>2012</option>
		      <option>2013</option>
		      <option>2014</option>
		      <option>2015</option>
		      <option>2016</option>
		      <option>2017</option>
		      <option>2018</option>
		      <option>2019</option>
		      <option>2020</option>
	        </select>
		    </label>
		  </div>
		  </label>
		   
		  
	      <label>
	      <div align="left"><font size="+2">Event location</font><font size="+2"> </font>
            <select name="select">
             <option value="Chandigarh">Chandigarh</option>
            <option value="Delhi">Delhi</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Calcutta">kolkata</option>
            <option value="Pune">Pune</option>
            <option value="Amritsar">Amritsar</option>
            <option value="Faridabad">Faridabad</option>
	         
            </select>
	      </div>
	      </label>
	      <label>
	      <div align="left"><font size="+2"> Event Gathering</font>
	        <input type="text" name="txtgath" id="gathering">
	        <br><br>
	        <input type="submit" style="padding:6px; width:150px;" name="Submit" value="Book Order">
	      </div></label>
	    </form>
  </div>
  </div>
  </div>
  <br class="clear" />
			</div>
			
		</div>
		<div style="margin: 1em 0 3em 0; text-align: center;">
			 
 <!--<div id="copyright" style="text-align:center;">
		
			 <a href="home.html">HOME</a>&nbsp&nbsp;<a href="">CONTACT US</a>&nbsp&nbsp;<a href="">&nbsp&nbsp;ABOUT US</a>&nbsp&nbsp;<a href=""></div>
             <div style="margin: 1em 0 3em 0; text-align: center;">-->
		</body>
		</html>