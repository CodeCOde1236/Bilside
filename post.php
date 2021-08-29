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

<div class = "sentertekst" style = "width: 25vw; left: 37.5vw; position: absolute;">

<?php
	
if(!isset($_SESSION['PersonID']))
{
	echo "Du må være pålogget for å poste bil. Vennligs logg inn eller lag en ny bruker.";
}
	



else{
	
	echo "<form method = 'post' action = 'postsql.php'>";

echo "<div>";	
	echo "<label for = 'bil'>Velg bilmerke<br><br></label>";
	echo "<select id = 'bil' name = 'bil'>";
	
		echo "<option value='acura'>Acura</option>";
		echo "<option value='audi'>Audi</option>";
		echo "<option value='bentley'>Bentley</option>";
		echo "<option value='bmw'>BMW</option>";
		echo "<option value='cadillac'>Cadillac</option>";
		echo "<option value='chevrolet'>Chevrolet</option>";
		echo "<option value='citroen'>Citroen</option>";
		echo "<option value='dodge'>Dodge</option>";
		echo "<option value='ferrari'>Ferrari</option>";
		echo "<option value='fiat'>Fiat</option>";
		echo "<option value='ford'>Ford</option>";
		echo "<option value='honda'>Honda</option>";
		echo "<option value='hyundai'>Hyundai</option>";
		echo "<option value='infiniti'>Infiniti</option>";
		echo "<option value='jaguar'>Jaguar</option>";
		echo "<option value='kia'>Kia</option>";
		echo "<option value='landrover'>Landrover</option>";
		echo "<option value='lexus'>Lexus</option>";
		echo "<option value='maserati'>Maserati</option>";
		echo "<option value='mercedes'>Mercedes</option>";
		echo "<option value='mini'>Mini</option>";
		echo "<option value='mitsubishi'>Mitsubishi</option>";
		echo "<option value='nissan'>Nissan</option>";
		echo "<option value='peugeot'>Peugeot</option>";
		echo "<option value='porsche'>Porsche</option>";
		echo "<option value='renault'>Renault</option>";
		echo "<option value='rollsroyce'>Rollsroyce</option>";
		echo "<option value='tesla'>Tesla</option>";
		echo "<option value='toyota'>Toyota</option>";
		echo "<option value='volkswagen'>Volkswagen</option>";
		echo "<option value='volvo'>Volvo</option>";

echo "</div>";


echo "<div>";

	echo "<br><br><input type = 'text' size = 1>";
	echo "<br><br><input type = 'text' name = 'bilserie' placeholder = 'Bilserie' id = 'bilserie'>";
	echo "<br><br><input type = 'text' name = 'pris' placeholder = 'Pris' id = 'pris'>";
	echo "<br><br><input type = 'text' name = 'adresse' placeholder = 'Adresse' id = 'adresse'>";
echo "</div>";

echo "<div>";

	echo "<br><br><select id = 'bilfarge' name = 'bilfarge'>";
		echo "<option value='Blå'>Blå</option>";
		echo "<option value='Grønn'>Grønn</option>";
		echo "<option value='Rød'>Rød</option>";
		echo "<option value='Sølv'>Sølv</option>";
		echo "<option value='Svart'>Svart</option>";
		echo "<option value='Hvit'>Hvit</option>";
		echo "<option value='Gul'>Gul</option>";
		echo "<option value='Gull'>Gull</option>";
		echo "<option value='Turquoise'>Turquoise</option>";
echo "</div>";

echo "<div>";
	echo "<br><br><input type = 'submit' value = 'Sendinn' style = 'margin-left: 10px;'>";
echo "</div>";
	
	echo "</form>";
}
		
?>
	
	
	
<h4>





</h4>

</div>

<a href = "\hovedside/index.html" style = "position: absolute; bottom: 0; right: 0;">Tilbake til hovedside</a>

<style>



</style>

</body>


</html>
