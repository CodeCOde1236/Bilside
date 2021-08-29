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
		<h4>
			Hei og velkommen til Trondheims side for bil utleie.<br><br>
			I dagens verden har biler blitt til en essensiell del av dagliglivet
			og vi fatter ofte ikke hvor viktig de er for oss.<br><br>
			Transportmetoder har bestandig utviklet seg
			siden mennesker begynte å ri på dyr.<br><br>De er så viktige at vi ikke kan tenke oss et liv uten dem. <br><br>
			Transport en stabil industri med stor potensiell. Derfor finnes det mange stålende muligheter å tjene penger fra denne industrien.<br><br>
			Denne nettsiden ble utviklet og opprettet av Ahmet Emre Guzey, Trondheim Katedralskole på 15/05/2020 i en krisesituasjon<br>
			for å skape en måte å tjene penger på for hvert enkelt-menneske.<br><br>
			Det er ofte ikke så lett å fatte hvor svak samfunnets infrastruktur faktisk er, og vi må bruke denne tida å reflektere over<br>
			hva som faktisk holder den sammen. Og det er nemlig transportasjon.<br><br>
			Lange leve transportasjon!<br><br>- Ahmet Emre Guzey <br>- Nettsidens grunnlegger
			
		</h4>
	</div>
</div>

<a href = "index.html" style = "position: absolute; bottom: 0; right: 0;">Tilbake til hovedside</a>

</body>


</html>