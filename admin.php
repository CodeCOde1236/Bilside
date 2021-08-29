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

<h4>
<div class = "sentertekst" style = "width: 25vw; left: 37.5vw; position: absolute;">

Velkommen til administrator siden. Her får du full oversikt over 
medlemmer, bilpost og bestillingshistorie. Denne siden er nyttig for å sjekke hvem som har bestilt hva for betaling samt legge til medlemmer og bilpost.</div>
</h4>

<a href = "index.html" style = "position: absolute; bottom: 0; right: 0;">Tilbake til hovedside</a>

</body>


</html>