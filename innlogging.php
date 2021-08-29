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
		
		<?php

			include 'tilkobling.php';

			$sql = "SELECT PersonID FROM person WHERE brukernavn = '".$_POST["brukernavn"]."' AND passord = '".$_POST["passord"]."';";
			$result = mysqli_query($conn, $sql);

			$res = mysqli_fetch_array($result, MYSQLI_ASSOC);

			if(empty($res))
			{
				echo "Enten brukernavn eller passord finnes ikke i vår database<br>";
				echo "<a href = 'finnlogging.php'>Tilbake til innloggingssiden</a>";
			}

			else
			{
				session_start();
				echo $res['PersonID'];
				$_SESSION['PersonID'] = $res['PersonID'];
				header("Location: finnlogging.php");
			}


?>

		
	</div>
</div>

<a href = "index.html" style = "position: absolute; bottom: 0; right: 0;">Tilbake til hovedside</a>

</body>


</html>