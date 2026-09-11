<?php
session_start();

if(isset($_SESSION['username']))
{
print "Goodbye " . $_SESSION['username'];
session_destroy();
}
else
{
	print "Sorry";
	exit();
}
?>

<B>hello world