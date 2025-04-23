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
		Ime prvega igralca: <input type="text" name="tek1"><br>
		Ime drugega igralca: <input type="text" name="tek2"><br>
		Ime tretjega igralca: <input type="text" name="tek3"><br>
		<input type="submit">
		</form>
	</div>
</body>
</html>

<?php
$_SESSION["tek1"] = $_POST['tek1'];
$_SESSION["tek2"] = $_POST['tek2'];
$_SESSION["tek3"] = $_POST['tek3'];

echo $_SESSION["ime1"];
?>
