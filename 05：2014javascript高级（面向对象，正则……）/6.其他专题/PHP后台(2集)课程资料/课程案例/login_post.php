<?php
$user=$_GET['user'];
$pass=$_GET['pass'];

if($user=='blue' && $pass=='123456')
{
	echo '1';
}
else
{
	echo '0';
}
?>