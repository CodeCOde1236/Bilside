<!doctype html>

<html>

<head>

	<title>Innlogging</title>
	
	<meta charset = "UTF-8">
	<link rel = "stylesheet" type = "text/css" href = "cssfiler/layout.css">
	
</head>

<body>

<div class = "tittel">
	<h1 style = "color: #FFF;">Trondheim bilutleie</h1>
</div>

<div class = "mega">

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


	<div class = "loginbox">
	<h3><strong>Registrer deg</strong></h3>

		<?php
		if(isset($_SESSION['PersonID']))
		{
			echo "Du er allerede en medlem<br><br>";
			echo "<form method = 'POST' action = 'utlogging.php?x=1'><input type = 'submit' value = 'Logg ut' name = 'utlog'></form>";
		}
		
		else{
			echo "<form method = 'POST' action = 'medlempro.php?'>";
				
				echo "<label for = 'fornavn'>Fornavn<br></label>";
				
				echo "<input type = 'text' name = 'fornavn' placeholder = 'Skriv her'><br><br>";
				
				echo "<label for = 'etternavn'>Etternavn<br></label>";
				
				echo "<input type = 'text' name = 'etternavn' placeholder = 'Skriv her'><br><br>";
				
				echo "<label for = 'brukernavn'>Brukernavn<br></label>";
				
				echo "<input type = 'text' name = 'brukernavn' placeholder = 'Skriv her'><br><br>";
				
				echo "<label for = 'passord'>Passord<br></label>";
				echo "<input type = 'password' name = 'passord' placeholder = 'Skriv her'><br><br>";
				
				echo "<label for = 'bekpass'>Bekreft passord<br></label>";
				echo "<input type = 'password' name = 'bekpass' placeholder = 'Skriv her'><br><br>";
				
				echo "<input type = 'submit' value = 'Bli medlem' name = 'submit'><br><br>";

				if(isset($_SESSION['fm']))
				{
					echo "Du har gjort en feil. Prøv igjen.";
				}
				
				
				if(isset($_SESSION['rm']))
				{
					echo "Du har blitt registrert i vår database.";
				}
		
			echo "</form>";
			}
			
		?>
	</div>
	
</div>

<a href = "index.html" style = "position: absolute; bottom: 0; right: 0;">Tilbake til hovedside</a>

</body>



</html>