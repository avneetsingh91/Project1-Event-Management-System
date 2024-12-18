<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Event Management</title>
    <link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="style.css" />

    <script type="text/javascript">
        function check() {
            if (!document.getElementById('gen1').checked && !document.getElementById('gen2').checked) {
                alert("Please select at least one gender");
                return false;
            }
            if (document.reg.fnm.value === '') {
                alert("Please enter first name");
                return false;
            }
            if (document.reg.usnm.value === '') {
                alert("Please enter Email-id");
                return false;
            }
            if (document.reg.lnm.value === '') {
                alert("Please enter last name");
                return false;
            }
            if (document.reg.pwd.value === '') {
                alert("Please enter password");
                return false;
            }
            if (document.reg.cnfrmpwd.value === '') {
                alert("Please enter Confirm Password");
                return false;
            }
            if (document.reg.add.value === '') {
                alert("Please enter Address");
                return false;
            }
            if (document.reg.pin.value === '') {
                alert("Please enter Pincode");
                return false;
            }
            if (document.reg.phn.value === '') {
                alert("Please enter Phone No");
                return false;
            }
            if (document.reg.pwd.value.length < 6) {
                alert("Please enter password minimum 6 characters");
                return false;
            }
            if (document.reg.phn.value.length !== 10) {
                alert("Please enter exactly 10 characters for phone number");
                return false;
            }
            if (document.reg.pin.value.length !== 6) {
                alert("Please enter exactly 6 characters for pincode");
                return false;
            }
            if (document.reg.cnfrmpwd.value !== document.reg.pwd.value) {
                alert("Please confirm your password, it's incorrect");
                return false;
            }
        }
    </script>

    <style type="text/css">
        .style1 {
            color: #000000;
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
                        <a href="mail.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="feedback.php">Feedback</a>
                    </li>
                    <li>
                        <a href="adminservices2.php">Services</a>
                    </li>
                    <li class="last">
                        <a href="admin.php">Admin Login</a>
                    </li>
                </ul>
                <br class="clear" />
            </div>
        </div>
        <div id="banner">
            <img src="images/vidhiabhayweddingphotography (14).jpg" width="1180" height="320" alt="" />
            <div id="logo">
                <h2><a href="#">Event management </a></h2>
            </div>
        </div>
        <div id="main">
            <div id="content" style="height:550px;">

                <div id="box1">
                    <h2 align="center">Event Management</h2>
                    <img class="left" src="images/Reception-Lighting-Ideas.jpg" style="float:right;" width="200" height="160" alt="" />
                    <p class="style4">
                        <font type="verdana" color="black" size=3 style="margin-top:20px;">
                            <b><marquee>USER REGISTRATION FORM</marquee>
                            </b>
                        </font>
                    </p>
                    <p class="style4">
                        <span class="style1">EVENT PLANNER'S provides:-</span>
                        <ul>
                            <li>Catering and Bakery</li>
                            <li>Fireworks</li>
                            <li>Lightning</li>
                            <li>Parlour</li>
                            <li>Tent service</li>
                            <li>Barat and Doli service</li>
                            <li>Decoration services</li>
                            <li>Bakery services</li>
                            <li>Card design services</li>
                            <li>D.J/Sound services</li>
                            <li>Transportation and other services</li>
                        </ul>
                    </p>
                </div>

                <br class="clear" />
            </div>
            <div style="height:700px; width:500px; float:left; background:#98ae5b;">
                <form name="reg" method="post" action="p.php" onSubmit="return check();">
                    <table align="center" style='border:solid 2px #000000; margin:20px;' height="500" width="400">
                        <caption>
                            <font type="verdana" color="black" size=3 style="margin-top:20px;"><b><marquee> USER REGISTRATION FORM</marquee></b>
                            </font>
                        </caption>
                        <tr>
                            <th><span class="style1">First name</span></th>
                            <td><input type="text" name="fnm"></td>
                        </tr>
                        <tr>
                            <th><span class="style1">Last name</span></th>
                            <td><input type="text" name="lnm"></td>
                        </tr>
                        <tr>
                            <th><span class="style1">Email-Id</span></th>
                            <td><input type="email" name="usnm"></td>
                        </tr>
                        <tr>
                            <th><span class="style1">Password</span></th>
                            <td><input type="password" name="pwd"></td>
                        </tr>
                        <tr>
                            <th><span class="style1">Confirm Password</span></th>
                            <td><input type="password" name="cnfrmpwd"></td>
                        </tr>
                        <tr>
                            <th><span class="style1">Gender</span></th>
                            <td>
                                <span class="style1">Male
                                    <input type="radio" name="gender" value="male" id='gen1'> Female
                                    <input type="radio" name="gender" value="female" id='gen2'>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th><span class="style1">Address</span></th>
                            <td><textarea name="add" rows='4' cols='20'></textarea></td>
                        </tr>
                        <tr>
                            <th><span class="style1">Pincode</span></th>
                            <td><input type="text" name="pin"></td>
                        </tr>
                        <tr>
                            <th><span class="style1">Phone no</span></th>
                            <td><input type="text" name="phn"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit" style="padding:6px; width:120px; background:#666;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" style="padding:6px; width:120px; background:#666;"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <br class="clear" />
        </div>
    </div>
    <div style="margin: 1em 0 3em 0;  text-align: center; background:#000;">
        <a href="home.php">Home</a> ||
        <a href="mail.php">Contact Us</a> ||
        <a href="feedback.php">Feedback</a> ||
        <a href="home1.php">Register</a> ||
        <a href="admin.php">Admin Login</a>
        <br />
        <a href="home.php">Design By @ Event Management</a>
    </div>
</body>
</html>
