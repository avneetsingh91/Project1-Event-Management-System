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
    <title>Event Management</title>
    <link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>
        .a:hover {
            color: #30C;
            text-decoration: none;
        }
        a {
            text-decoration: none;
        }
        .ii {
            margin: 100px 200px 0px 0px;
        }
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
                        <a href="icon.php">Home</a>
                    </li>
                </ul>
                <br class="clear" />
            </div>
        </div>
        <div id="banner">
            <img src="images/tumblr_liu4336bhD1qg9aem.gif" width="1180" height="320" alt="" />
            <div id="logo">
                <h2><a href="#">Event management</a></h2>
            </div>
        </div>
        <div id="main">
            <div id="content">
                <div id="box1">
                    <h2 align="center">Event management</h2>
                    <img class="left" src="images/cupcake-wedding-cake.jpg" width="200" height="180" alt="" />
                    <p style="font-size:16px;">
                        Events like wedding, birthday, anniversary, etc., are the special moments of life that make life memorable. These moments are recognized with traditional ceremonies. To make these auspicious events memorable, our site provides you the highest quality services and information. Whatever your event needs may be, our team is ready to offer personalized information to help make your event day the most memorable day of your life.
                    </p>
                    <p style="font-size:16px;">
                        Event planning is required at every step for perfect arrangement of events. Planning a successful event requires lots of preparation and everybody wants it should go off without a glitch.
                    </p>
                    <p class="style4"><FONT color="#000000">Event Management provides:-</font> </p>
                    <p class="style4">
                        &nbsp&nbsp&nbsp-- Catering and Bakery<br>
                        <ul>
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
                <div style="height:5px;width:350px;padding:30px 50px;">
                    <h2 align="center" style="color:#98ae5b;">bakery Service</h2>
                </div>
                <form name="f1" method="post" action="addcart1.php">
                    <?php
                        $a = array();
                        $i = 0;
                        $con = mysqli_connect("localhost", "root", "", "project1");
                        if (!$con) {
                            die("Error: " . mysqli_connect_error());
                        } else {
                            $db_selected = mysqli_select_db($con, "project1");
                            if (!$db_selected) {
                                die("Error: " . mysqli_error($con));
                            } else {
                                $result = mysqli_query($con, "SELECT * FROM subservices WHERE servicename='bakery'");
                                if (!$result) {
                                    die("Error in query: " . mysqli_error($con));
                                } else {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $a[$i] = $row['ss_price'];
                                        $i++;
                                    }
                                }
                            }
                            mysqli_close($con); // Close the connection after use
                        }
                    ?>
                    <table width="500">
                        <tr>
                            <td width="300" height="201">
                                <table width="200" height="198" border="0">
                                    <tr>
                                        <td width="329">
                                            <table width="310" height="55" border="0">
                                                <tr>
                                                    <td width="118"><img src="images/services_subtype/BAKERY/cake.jpg" width="118" height="136"></td>
                                                    <td width="176">
                                                        <label>
                                                            <div align="center">
                                                                <span class="style1">
                                                                    <input type="checkbox" name="c1[]" value="bakery1">
                                                                    cake <br>
                                                                    price: - <?php echo $a[0] ?>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="332">
                                            <table width="310" height="55" border="0">
                                                <tr>
                                                    <td width="118"><img src="images/services_subtype/BAKERY/candles.jpg" width="118" height="136"></td>
                                                    <td width="176">
                                                        <label>
                                                            <div align="center" class="style1">
                                                                <input type="checkbox" name="c1[]" value="bakery2">
                                                                candles
                                                            </div>
                                                            <span class="style1">price: - <?php echo $a[1] ?></span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="310" height="55" border="0">
                                                <tr>
                                                    <td width="118"><img src="images/services_subtype/BAKERY/pastry.jpg" width="118" height="136"></td>
                                                    <td width="176">
                                                        <label>
                                                            <div align="center">
                                                                <input type="checkbox" name="c1[]" value="bakery3">
                                                                <label><span class="style1">pastries</span></label>
                                                            </div>
                                                            <span class="style1">price: - <?php echo $a[2] ?></span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="310" height="55" border="0">
                                                <tr>
                                                    <td width="118"><img src="images/services_subtype/BAKERY/patties.jpg" width="118" height="136"></td>
                                                    <td width="176">
                                                        <label>
                                                            <div align="center">
                                                                <input type="checkbox" name="c1[]" value="bakery4">
                                                                <span class="style1">paties</span>
                                                            </div>
                                                            <span class="style1">price: - <?php echo $a[3] ?></span>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <div align="center">
                                        <input type="submit" name="Submit" value="Add To Cart">
                                    </div>
                                </label>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <br class="clear" />
        </div>
    </div>
</body>
</html>
