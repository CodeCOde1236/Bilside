<?php

session_start();

include 'tilkobling.php';

$mes = $_GET['mes'];

$PostID = $_GET['postid'];


$inndato = false;

$utdato = false;


if ($mes == 1)
{
	$sql = "INSERT INTO personbil VALUES (".$_SESSION['PersonID'].", ".$PostID.");";
	If ($conn->query($sql)){
		$inndato = true;
		
		$query="SELECT * FROM historie";
		$record = mysqli_query($conn,$query);
		$x = mysqli_num_rows($record);
		
		$sql2 = "INSERT INTO historie (PersonID, PostID, bestilldato, histid) VALUES (".$_SESSION['PersonID'].", ".$PostID.", CURDATE(), ".++$x.");";
		if($inndato)
		{
			if ($conn->query($sql2)){header('Location: bil.php');}
			
		}
	}
	else
	{echo "Noe gikk galt";}

$sql5 = "SELECT FROM historie WHERE bes innleveringsdato = NULL";


}







elseif ($mes == 2)
{

$sql = "DELETE FROM personbil WHERE PostID = ".$PostID.";";
$sql2 ="UPDATE historie SET innleverdato = CURDATE() WHERE PostID = ".$PostID." AND PersonID = ".$_SESSION['PersonID']." AND innleverdato = '';";


If ($conn->query($sql)){
	
	$utdato = true;
	if($utdato)
	{
		if ($conn->query($sql2)){
			header('Location: bil.php');
			}
		
	}

}
else
{echo "Noe gikk galt";}


}
?>