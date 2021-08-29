<!DOCTYPE html>

<html>

<head>
		
		<title>Trondheim Bilutleie</title>
		<meta charset = "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "cssfiler/layout.css">
		
</head>

<body>


<div class = "tittel">
	<h1 style = "color: #FFF;">Trondheim bilutleie</h1>
</div>


<div class = "venstre">

	<div class = "meny">
		
		<a href = "bilhoved.php"><div>Meny</div></a>
		<a href = "bil.php"><div>Biler</div></a>
		<a href = "medlem.php"><div>Bli medlem</div></a>
		<a href = "finnlogging.php"><div>Logg inn</div></a>
		<a href = "post.php"><div>Post bil</div></a>

<?php
	
	session_start();
	
	if(isset($_SESSION['PersonID']) and $_SESSION['PersonID'] == 3)
	{
		echo "<a href = 'admin.php'><div>Administrator</div></a>";
	}
	
?>

</div>


<div class = "tekst">
<h3>
	<div class = "adminmeny">
		
		<div><a href = "hist.php">Historie</a></div>
		<div><a href = "medlemvis.php">Medlemmer</a></div>
		<div><a href = "bilpostene.php">Bilposter</a></div>
	</div>
</h3>
</div>

<div class = "sentertekst" style = "left: 30vw; position: absolute;">

<h4>
<?php
include "tilkobling.php";

if ($conn->connect_error) {
die("Noe gikk galt: Prøv igjen " . $conn->connect_error);
}
else{
$query1="SELECT * FROM informasjon";
$record1 = mysqli_query($conn,$query1);



echo "<table>";
echo "<tr><th>"."Fornavn"."</th><th>"."Etternavn"."</th><th>"."Bilmerke"."</th><th>"."Bilserie"."</th><th>"."Bilfarge"."</th><th>"."Innsamlingsadresse"."</th><th>"."Utlagringsdato"."</th><th>"."Pris"."</th><th>"."Fjern post"."</th></tr>";




while($q = mysqli_fetch_array($record1)){

$query2="SELECT Fornavn, Etternavn FROM person WHERE PersonID = ".$q['PersonID'];
$record2 = mysqli_query($conn,$query2);

$w = mysqli_fetch_array($record2);

echo "<tr><td>".$w[0]."</td><td>".$w[1]."</td><td>".ucfirst($q['Bilmerke'])."</td><td>".$q['Bilserie']."</td><td>".$q['Bilfarge']."</td><td>".$q['Innsamlingsadresse']."</td><td>".$q['Utlagringsdato']."</td><td>".$q['Pris']."</td><td><a href = 'fjerning.php?post=".$q['PostID']."'>"."Fjern post"."</a></td></tr>";

}


}
echo "</table>";

?>




</h4>

</div>

<a href = "index.html" style = "position: absolute; bottom: 0; right: 0;">Tilbake til hovedside</a>

<style>

table, td, th
{
	border: 1px solid black;
}


</style>

</body>


</html>
