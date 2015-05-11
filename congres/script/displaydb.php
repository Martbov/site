<!--Originele script van http://stackoverflow.com/questions/15251095/display-data-from-sql-database-into-php-html-table-->

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
$connection = mysql_connect('mysql01.service.rug.nl', 's2174634', 'ierah3tei3'); 
mysql_select_db('s2174634');

$query = "SELECT Voornaam, Achternaam, Emailadres, Spreker FROM congres_aanmeldingen ORDER BY Achternaam ASC";
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML
echo "<tr><td>" . "<b>Achternaam</b>" . "</td><td>" . "<b>Voornaam</b>" . "</td><td>" . "<b>Emailadres</b>" . "</td><td>" . "<b>Spreker</b>" . "</td></tr>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['Achternaam'] . "</td><td>" . $row['Voornaam'] . "</td><td>" . $row['Emailadres'] . "</td><td>" . $row['Spreker'] . "</td></tr>";  
}

echo "</table>"; //Close the table in HTML



mysql_close(); //Make sure to close out the database connection
?>
<a href="../signin.html">Terug

</div>
<div class="footer">
	<script language='javascript' src='../script/footer.js'>
	</script>
</div>
</body>
</html>