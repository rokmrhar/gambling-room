<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gambling room </title>
		<link rel="stylesheet" href="style.css">
	</head>
<body>
	<div class="naslov">
		<h1>gambling room </h1>
	</div>	
	<div class="vnos">
		<form action="igraj.php" method="post">
		Ime prvega igralca: <input type="text" name="ime1"><br>
		Ime drugega igralca: <input type="text" name="ime2"><br>
		Ime tretjega igralca: <input type="text" name="ime3"><br>
		<input type="submit">
		</form>
	</div>
</body>
</html>

<?php
$_SESSION["ime3"] = "ime3";
$_SESSION["favanimal"] = "cat";
?>
