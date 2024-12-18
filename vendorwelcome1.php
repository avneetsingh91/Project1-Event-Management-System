   
    <?php
        $a=$_POST['txtvid'];
$b=$_POST['txtvpass'];
$val=0;
$con=mysqli_connect("localhost","root","","project1");
  if(!$con)
  {
      die("error is" .mysqli_error());
    }
    else
    {
    $result=mysqli_query($con,"select * from vendor3 where vemail='$a' and vpassword='$b'");
    
    if($row=mysqli_fetch_array($result))
    {
    $val=1;
    }
    if($val!=1)
    {
    
    include ("home.php");
    die("");
    }
    else
    {
        $_session['vemail']=$a;
        include("venderwelcome.php");
    }
    }
    mysqli_close($con);
    
    ?>
    