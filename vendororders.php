<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Event Management</title>
    <link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="style.css" />

    <style type="text/css">
        .tab2 {
            margin-left: 200px;
        }
        .a:hover {
            color: #30C;
            text-decoration: none;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div id="outer">
        <div id="header">
            <div id="nav">
                <ul>
                    <li class="first active">
                        <a href="venderwelcome2.php">Home</a>
                    </li>
                    <li class="first active">
                        <a href="pwd2.php">Change Password</a>
                    </li>
                    <li>
                        <a href="edit.php">Edit Account</a>
                    </li>
                    <li class="last">
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="banner">
            <img src="images/016_DJ_indian-wedding-room-900x600.jpg" width="1180" height="320" alt="" />
            <div id="logo">
                <h2><a href="#">Event management </a></h2>
            </div>
        </div>
        <div id="main" style="height:400px">
            <?php
            $name = $_SESSION['vendorname'] ?? ''; // Using null coalescing operator to avoid notice if vendorname is not set
            $a = $_POST['c1'] ?? array(); // Using null coalescing operator to avoid notice if c1 is not set

            $orderid = ''; // Initializing $orderid
            $servicename = ''; // Initializing $servicename

            foreach ($a as $x) {
                $b = explode(",", $x);
                $orderid = $b[0] ?? ''; // Using null coalescing operator to avoid notice if index is not set
                $servicename = $b[1] ?? ''; // Using null coalescing operator to avoid notice if index is not set
            }

            $con = mysqli_connect("localhost", "root", "", "project1");

            // Checking connection
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                $query = "UPDATE order_master SET pending='booked', vemail='$name' WHERE orderid='$orderid' AND servicename='$servicename'";

                if (mysqli_query($con, $query)) {
                    echo "<h3 style='color:red'>Your services are successfully booked</h3>";
                } else {
                    echo "Error updating record: " . mysqli_error($con);
                }
                mysqli_close($con); // Closing the database connection
            }
            ?>
        </div>
    </div>
    <div style="margin: 1em 0 3em 0; text-align: center;">
    </div>
</body>
</html>
