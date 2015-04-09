
<!DOCTYPE html>
<html>
<?php 
	
	function readquestions() {
		$form = '';
		$i = 0;
		foreach (file("questions.txt") as $row) {
			$row = trim(preg_replace('/\s\s+/', ' ', $row)); //remove newlines
			$question = explode("\t", $row); 
			// formulier toevoegen
			$i ++;
			
			$form .= '<h3>'.$question[0].'</h3>
			<input type="radio" value="1" name="vraag'.$i.'"> '.$question[1].' <br>
			<input type="radio" value="2" name="vraag'.$i.'"> '.$question[2].' <br>
			<input type="radio" value="3" name="vraag'.$i.'"> '.$question[3].' <br>
			<input type="radio" value="4" name="vraag'.$i.'"> '.$question[4].' <br>
			<input type="hidden" name="answer'.$i.'" value="'.$question[5].'"/><br>';
		}
		return $form;
	}

	function postForm() {
		$score = 0;
		for($i=1;$i<=10;$i++) {
	 		if ($_POST['vraag'.$i] == $_POST['answer'.$i]) {
	 			$score++;
	 		}
		}
		return $score;
	}


	
?>
<head>
	<title>Webprogrammeren - Mart Busger op Vollenbroek</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css"/>
	<script language='javascript' src='scripts/quiz.js'></script>
</head>

<body>
	<h1>Webprogrammeren - Mart Busger op Vollenbroek</h1>
	<div class='nav'>
		<script language='javascript' src='scripts/menu.js'>
		</script>
	</div>
	<div class="sectie">
	<h2>Quiz</h2>
	<?php
	if (isset($_POST['submit'])) {
		$score = postForm(); 
		echo '<h1>Je score is: '.$score.'</h1>';
		echo '<a href="phpquiz.php">Nog een keer!</a>';
	} else {
		echo '<p>Hieronder is een korte quiz met 10 vragen te vinden</p>
			<form action="phpquiz.php" method="post">';
		
		echo readquestions();
		echo '<p> Klik op "Inleveren" om je antwoorden in te leveren en je resultaat te krijgen. </p>	
		<input type="submit" value="Submit" name="submit">';
	}
	?>

	


	</div>
</body>
</html>
