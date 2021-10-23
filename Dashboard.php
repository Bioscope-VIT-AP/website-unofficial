<?php
session_start();
if(isset($_SESSION['user']))
	echo "welcome ". $_SESSION['user'];
else 
{
	echo "you must login first";
}
?>