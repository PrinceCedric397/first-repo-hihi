<?php
session_start();
$_SESSION['username']="Dennis";
$_SESSION['age']=12;
print "Hello " . $_SESSION['username'];

?>
