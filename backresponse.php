<?php
$a=$_POST['txt'];
$b=$_POST['txt1'];
$to=$a;
$subject="reply";
$message="Hello Sir/madam"."<br>".$b."<br>"."thanks for visiting our site.";
$from="admin@gmail.com";
$rr=mail($to,$subject,$message,$from);
if(!rr)
{
echo "error in sending mail";
}
else
{
echo "mail sent ...woopie";
}

?>
