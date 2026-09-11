<?php
if (isset($_POST['compute']))
{
$a=$_POST['n1'];
$b=$_POST['n2'];
$sum=$a+$b;
print "The sume of $a and $b is $sum";
}
else
    header ("Location: page1.php");
?>