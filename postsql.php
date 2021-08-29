<?php

include 'tilkobling.php';

session_start();

$bil = $_POST['bil'];
$bilserie = $_POST['bilserie'];
$bilfarge = $_POST['bilfarge'];
$pris = $_POST['pris'];
$biladdresse = $_POST['adresse'];

$query="SELECT MAX(PostID) FROM informasjon";
$record = mysqli_query($conn,$query);
$x = mysqli_fetch_array($record);

$x[0]++;

$sql = "INSERT INTO informasjon (Bilmerke, Bilserie, Bilfarge, Innsamlingsadresse, PersonID, Utlagringsdato, PostID, Pris) VALUES ('".$bil."', '".$bilserie."', '".$bilfarge."', '".$biladdresse."', ".$_SESSION['PersonID'].", CURDATE(), ".$x[0].", ".$pris.");";


If ($conn->query($sql)){
header("location: post.php");
}
Else {
echo "Noe gikk galt.....";
}





?>