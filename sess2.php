<?php
session_start();

if(isset($_SESSION['username']))
{
print "WElcome " . $_SESSION['username'];
}
else
//print "Sorry you cannot view this page <a href=sess1.php>Login First</a>";
	header ("Location:sess1.php");
?>
