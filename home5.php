<html>
<head>
<title>Real Estate</title>
<style>

#footer {
	background: #101010;
	margin: 0px 7px 0px 2px;
	width:1000px;
	margin-left:200px;
	padding: 18px 15px 15px 15px;
}

a:hover
{
	color:#C9C;
}
.a
{
	margin-left:-20px;
}
</style>
<link href="../../k/current/newtstng/style.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="header"></div>
<div id="navigation">
<ul>
<li><a href="../../k/current/newtstng/home.php" style="text-decoration:blink";>HOME</a></li>
<li  style="text-decoration:blink";><a href="#">PROPERTIES</a></li>
<li  style="text-decoration:blink";><a href="#">ABOUT US</a></li>
<li  style="text-decoration:blink";><a href="#">CONTACT US</a></li>
</ul>
</div>

<div id="content">
<table width="928" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    	<div id="find" align="center">
    	<h2>Find Your House</h2>
   
    	<h5 ><ul >
				 <li>
				   <div align="right"><a href="../../k/current/newtstng/register.php" class="style2"><font color="#003333" size="+1" style="text-align:center">Register</font></a></div>
				 </li>
	    
				 <li>
				   <div align="right"><a href="../../k/current/newtstng/login.php" class="style2"><font color="#003333" size="+1" style="text-align:center">Login</font></a></div>
				 </li>
				
				 <li>
				   <div align="right"><a href="#" class="style2"><font color="#003333" size="+1" style="text-align:center">Properties</font></a></div>
				 </li>
        </ul></h5>
				 
      </div>
      <div style="border:5px #39F dotted">
            <?php
	  $con=mysql_connect("localhost","root","");
	  mysql_select_db("realestate",$con);
	  $r=mysql_query("select * from images ");
	  
	 echo" <marquee direction=up height=500><table width=260 height=600 class=a>";
	 while($s=mysql_fetch_array($r))
	 {
		 $k="UPLOAD/".$s['image'];
		 
	
				echo"<tr><td><a href=image.php><img src=$k height=200  width=265 /></a></td></tr>";
				}
				echo"</table></marquee>";
			
			?>
            </div>	
      </td>
	
    <td valign="top">
    <div id="main_content">
    <h1>House Sale </h1>
    <h3>New Houses for Sales</h3><br>
    <p>This is <span class="orange">Free House Sale </span> for your website design which is under Real Estate . </p>
    <div id="house_sales">
	
          <table width="275" style="float:left;" class="aa">
        <tr>
          <td align="center"><img src="../../k/current/newtstng/images/image_01.jpg" alt="house_01" width="250" height="150"></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td align="center"><img src="../../k/current/newtstng/images/image_02.jpg" alt="house_02" width="250" height="150"></td>
      
      <tr>
          <td align="center"><div  class="house_sales">Buy Home - $650.000</div></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        
          <td align="center"><div  class="house_sales">Buy Home - $650.000</div></td>
        </tr>
        <tr>
          <td align="center"><a href="#"><img src="../../k/current/newtstng/images/read_more.jpg" alt="read more" width="84" height="21"></a></td>

          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td align="center"><a href="#"><img src="../../k/current/newtstng/images/read_more.jpg" alt="read more" width="84" height="21"></a></td>
        </tr>
                <tr>
          <td align="center"><img src="../../k/current/newtstng/images/image_01.jpg" alt="house_01" width="250" height="150"></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td align="center"><img src="../../k/current/newtstng/images/image_02.jpg" alt="house_02" width="250" height="150"></td>
      
      <tr>
          <td align="center"><div  class="house_sales">Buy Home - $650.000</div></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        
          <td align="center"><div  class="house_sales">Buy Home - $650.000</div></td>
        </tr>
        <tr>
          <td align="center"><a href="#"><img src="../../k/current/newtstng/images/read_more.jpg" alt="read more" width="84" height="21"></a></td>

          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td align="center"><a href="#"><img src="../../k/current/newtstng/images/read_more.jpg" alt="read more" width="84" height="21"></a></td>
        </tr></table>

   
	 </div>
    </div>
    </div>
   </td>
  </tr>
  </table>
 
</div>

<table width="526" border="1" bordercolor="#333333"align="right">
<th width="291"  bgcolor="#999999" >Help us to improve our Website</th>
<th width="186" bgcolor="#999999" ><a href="">Send us your Feedback</a></th>
</table>
<br/>
<br/>
<div id="footer" align="center"><p>Copyright &copy; 2009 cfm.</p></div>
<br><br>
</body>
</html>
