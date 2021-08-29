<?php

include 'tilkobling.php';

session_start();


$fnavn = $_POST['fornavn'];
$enavn = $_POST['etternavn'];
$brukernavn = $_POST['brukernavn'];
$passord = $_POST['passord'];
$pass = $_POST['bekpass'];

if($pass !== $passord)
{
	$_SESSION['fm'] = 'true';
	header("location: medlem.php?");
}

else{

$_SESSION['rm'] = 'true';

$query="SELECT MAX(PersonID) FROM person";
$record = mysqli_query($conn,$query);
$x = mysqli_fetch_array($record);

$x[0]++;

echo $x[0]." ".$fnavn." , ".$enavn.", CURDATE(), 0, ".$brukernavn.", ".$passord.")";


$sql = "INSERT INTO person (PersonID, Fornavn, Etternavn, Medlemsdato, Antall_posts, brukernavn, passord) VALUES ( ".$x[0].", '".$fnavn."', '".$enavn."', CURDATE(), 0, '".$brukernavn."', '".$passord."');";


If ($conn->query($sql)){
header("location: medlem.php");
}
Else {
echo "Noe gikk galt.....";
}
}
?>