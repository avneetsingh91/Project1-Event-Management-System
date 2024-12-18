<?php
class abc
{
var $a,$b,$c;
function get()
{
$this->a= $_POST['t1'];
$this->b= $_POST['t2'];
$this->c= $this->a+$this->b;
}
function show()
{
echo "sum =" .$this->c;
}
$b1= new abc();
$b1-> get("10,20");
$b1-> show();
}
?>