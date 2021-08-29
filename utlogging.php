<?php

session_start();

if (isset($_POST['utlog']))
{
	session_destroy();
	header("Location: finnlogging.php");
}




?>