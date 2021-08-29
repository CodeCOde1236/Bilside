<?php

include 'tilkobling.php';


if(isset($_GET['person'])){
$person = $_GET['person'];

$sql = "DELETE FROM person WHERE PersonID = ".$person;


if ($conn->query($sql)){header('Location: medlemvis.php');}
}

if(isset($_GET['post']))
{
	$post = $_GET['post'];
	
	$sql = "DELETE FROM informasjon WHERE PostID = ".$post;


	if ($conn->query($sql)){header('Location: bilpostene.php');}

}




?>