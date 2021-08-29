<!DOCTYPE html>
<html>


<head>
	
	<meta charset = "UTF-8">
	<title> Trondheim bilutleie</title>
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



	<div class = "meta">
	<div class = "bilflex">
		
			<?php
			
				include "tilkobling.php";
				
				$query="SELECT * FROM informasjon";
				$record = mysqli_query($conn,$query);
				while( $q = mysqli_fetch_array($record)){
				
				$r = "SELECT Fornavn, Etternavn FROM person WHERE PersonID = ".$q['PersonID'];
				$w = mysqli_fetch_array(mysqli_query($conn,$r));
				
				$bilfil = "bilder/";
				$bildepath = $bilfil .= $q['Bilmerke'] .= '.jpg';
				
				echo "<div class = 'boxflex'>";
				
				echo "<div class = 'bilde' ><img src = '".$bildepath."' height = '100' width = '130' ></div>";
				
				$q['Bilmerke'] = ucfirst(str_replace(".jpg", "", $q['Bilmerke']));
				
				echo "<div class = 'info'> Merke: ".$q['Bilmerke']."<br> Bilserie: ".$q['Bilserie']." <br> Bilfarge: ".$q['Bilfarge']."<br> Dato: ".$q['Utlagringsdato']." </div>";
				echo "<div class = 'personlig'> Fornavn: ".$w[0]." <br> Etternavn: ".$w[1]." Pris/dag: ".$q['Pris']."kr <br> Adresse: ".$q['Innsamlingsadresse']."</div>";
				
				$vk = "SELECT PersonID FROM personbil WHERE PostID = ".$q['PostID'];
				$res = mysqli_query($conn, $vk);
				$sp = mysqli_fetch_array($res, MYSQLI_ASSOC);
				
				echo "<div class = 'lenke'>";
				
				if(isset($_SESSION['PersonID']))
				{
					
					if(empty($sp))
					{
						echo "<a href = 'bestill.php?mes=1&postid=".$q['PostID']."'>Bestill</a>";
					}
					
					elseif(empty($sp) == false and $sp['PersonID'] == $_SESSION['PersonID'])
					{
						echo "<a href = 'bestill.php?mes=2&postid=".$q['PostID']."'>Levere<br>tilbake</a>";
					}
					
					elseif((empty($sp) == false) and ($sp['PersonID'] !== $_SESSION['PersonID']))
					{
						echo "Ikke<br>tilgjengelig";
					}
				
				}
				
				else
				{
					echo "Ikke<br>Pålogget";
				}
				
				echo "</div></div>";
				
				
				}
			?>
	
	
	</div>
	</div>

</div>

<a href = "index.html" style = "position: absolute; bottom: 0; right: 0;">Tilbake til hovedside</a>

</body>

</html>