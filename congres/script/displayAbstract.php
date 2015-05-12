<!DOCTYPE html>
<html>
<head>
	<title>Smartwatch Congres Groningen</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../stylesheets/congres.css"/>
</head>
<body>
<h1>Smartwatch Congres Deelnemers</h1>
<div class="sectie">

<?php
$dir = "../uploads/";

// Open a directory, and read its contents
echo '<b>Bestandenlijst</b><br>';
if (is_dir($dir)){
	if ($dh = opendir($dir)){
		while (($file = readdir($dh)) !== false){
			if ($file != "." && $file != "..") {
				echo '<li>Bestand: <a href="../uploads/' . $file . '">' .$file. '</a></li>';
			}
		}
	closedir($dh);
	}
}
?>

<a href="../fileupload.html">Terug

</div>
<div class="footer">
	<script language='javascript' src='../script/footer.js'>
	</script>
</div>
</body>
</html>