<!DOCTYPE html>
<html>
<head>
	<title>Smartwatch Congres Groningen</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../stylesheets/congres.css"/>
<body>
<h1>Smartwatch Congres Deelnemers</h1>
<div class="sectie">
<?php
#test of alles wel werkt
 
error_reporting(E_ALL); 
ini_set('display_errors','1');
 
#na het submit beginnen
if (isset($_POST['submit'])){
 
#directory voor bestanden
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
$pdfDirectory = "uploads/";
$filename = basename( $_FILES['fileToUpload']['name'], ".pdf");
 
# zet bestand neer en laat zien
	if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $pdfDirectory.$filename)) {
	$pdfWithPath = $pdfDirectory.$filename;
	echo "File has been uploaded";
	echo "<p><a href=\"$pdfWithPath\">$filename</a></p>";
	}
}
 

if (file_exists($filename)) {
	echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
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