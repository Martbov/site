<!DOCTYPE html>
<html>
<body>
 
 
<?php
$con = mysql_connect("mysql01.service.rug.nl","s2174634","ierah3tei3");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("s2174634", $con);
 
$sql="INSERT INTO congres_aanmeldingen (Voornaam, Achternaam, Adres, Huisnummer, Toevoeging, Woonplaats, Emailadres, Telefoonnummer, Accommodatie)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[adress]','$_POST[housenumber]','$_POST[addition]','$_POST[city]','$_POST[email]','$_POST[phoneno]','$_POST[housing]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
</body>
</html>