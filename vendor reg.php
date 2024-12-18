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
		<title>Event management</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<html>

<script type="text/javascript">
/*function validate2()
	{
		
		var x1=document.reg.txtvname.value;
		var x2=document.reg.select.value;
		var x3=document.reg.password.value;
		var x4=document.reg.cnfrmpwd.value;
		var x5=document.reg.add.value;
		var x6=document.reg.vemail.value;
		var x7=document.reg.phn.value;
		var x8=document.reg.do.value;
		var v=true;
	
		

		if(x1==""||x2==""||x3==""||x4==""||x5==""||x6==""||x7==""||x8=="")
		{
		alert("enter the empty fields");
			v=false;
		}
		
			
		return v ;
		
		
	}*/

	


function check()
{
if(document.reg.txtvname.value=='')
{
alert("please enter vendor name");
return false;
}
if(document.reg.select.value=='')
{
alert("please select any service");
return false;
}
if(document.reg.password.value.length<6)
{
alert("please enter minimum 6 characters");
return false;
}
if((document.reg.cnfrmpwd.value)!=(document.reg.password.value))
{
alert("Please confirm your password ,its incorrect");
return false;
}


if(document.reg.vemail.value=='')
{
alert("Please enter email id");
return false;
}
if(document.reg.phn.value.length<10)
{
alert("Please enter minimum 10 characrters for phone number");
return false;
}
if(document.getElementById('do').checked==false)
{
alert("please select the option for submittion of form");
return false;
}
}
</script>





	<style type="text/css">
<!--
.style1 {color: #000000}
-->
    </style></head>
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
				<img src="images/016_DJ_indian-wedding-room-900x600.jpg" width="1180" height="320" alt="" />
				
					<div id="logo">
						<h2><a href="#">Event management </a></h2>
					</div>				
			</div>
			<div id="main">
				<div id="content">
				
					<div id="box1">
						<h2 align="center">Event management........</h2>
						<img class="left" src="images/Reception-Lighting-Ideas.jpg" style="float:right;" width="200" height="180" alt="" />
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
				<div style="height:712px; width:500px; float:left;">
<form name="reg" method="post" action="p2.php" onSubmit="return check();">
<table align="center" style='border:solid 2px #000000; margin:20px; '>

<caption><font type="verdana" color="#000000" size=3 style="margin-top:20px;"><b><marquee> VENDOR REGISTRATION FORM</marquee></b></font></caption>
<tr>
  <th><span class="style1">vendor name </span></th>
  <td><input type="text" name="txtvname"></td></tr>
  <tr>
              <th><span class="style1">Vendor Category</span></th>
			  <td> <select name="select">
                   <option value="transport">Transportation </option>
				    <option value="baraat">Baraat</option>
                   <option value="decoration">Decoration</option>
                   <option value="tentservice">Tent Service</option>
                   <option value="dj/sound">Sound</option>
                   <option value="lighting">Lighting</option>
                   <option value="firework">Fireworks</option>
                   <option value="catering">Catering</option>
				   <option value="parlour">Parlour</option>
				   <option value="card">Card services</option>
				   <option value="bakery">Bakery</option>
				   <option value="doli">Doli service</option>
                 </select></td>
	    </tr><tr>
  <th><span class="style1">password</span></th>
  <td><input type="password" name="password"></td></tr>
<tr><th><span class="style1">confirm password</span></th>
<td><input type="password" name="cnfrmpwd"></td></tr>
<tr>
  <th>&nbsp;</th>
<td>&nbsp;</td>
</tr>
<tr><th><span class="style1">Address</span></th>
<td><textarea name="add" rows='4' cols='20'></textarea></td></tr>  
<tr>
  <th><span class="style1">Email-id</span></th><td><input type="text" name="vemail"></td></tr>
<tr><th><span class="style1">Phone no</span></th><td><input type="text" name="phn"></td></tr>

<tr><th><span class="style1">
  <input type="checkbox" name="do" id="do">
  &nbsp;&nbsp;Do you agree with terms and conditions</span></th></tr>
<tr><td></td><td><input type="submit" name="submit" value="Submit"><input type="reset" value="Reset"></td></tr>
</table>
</form>



				<br class="clear" />
			</div>
			
		</div>
		<div id="copyright" style="text-align:center;margin: 1em 0 3em 0;">
		
			 <a href="home.html">HOME</a>&nbsp&nbsp;<a href="">CONTACT US</a>&nbsp&nbsp;<a href="">SERVICES</a><br /></div>
			 <div style="margin: 1em 0 3em 0; text-align: center;">
		
</div>
</body>
</html>