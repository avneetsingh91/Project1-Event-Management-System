<?php
$con = mysqli_connect("localhost", "root", "", "project1");
$f = $_POST['fnm'];
$l = $_POST['lnm'];
$u = $_POST['usnm'];
$p = $_POST['pwd'];
$g = $_POST['gender'];
$a = $_POST['add'];
$pc = $_POST['pin'];
$pn = $_POST['phn'];
$rid = mysqli_query($con, "select * from reg where uname='$u'");
if ($sid = mysqli_fetch_array($rid)) {
    echo "<script>alert ('This Email-id is Already Registered')</script>";
    include("home1.php");
} else {
    $query = "insert into reg values('', '$f', '$l', '$u', '$p', '$g', '$a', '$pc', '$pn')";
    mysqli_query($con, $query) or die(mysqli_error($con)); // Pass the connection object and the query
    echo "<script>alert ('This User is Registered')</script>";
    include("home.php");
}
?>
