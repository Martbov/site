<!DOCTYPE html>
<html>

<head>
	<title>Webprogrammeren - Mart Busger op Vollenbroek</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css"/>
</head>

<body>
	Last Updated:
	<script>
		<!--//hide
		document.write(document.lastModified);
		//end hide-->
	</script>
	<script language='javaScript'>
      <!-- hide me

        function swapImage() {
          var my_array = new Array('Dice1','Dice2','Dice3','Dice4','Dice5','Dice6');
          var score = 0;
          var total = document.getElementById('total');

          for (var i = my_array.length - 1; i >= 0; i--) {
            var dice = my_array[i]; // 'Dice1','Dice2', etc.
            var number = Math.round(Math.random()*(my_array.length-1)+1);
            var src_pic = 'images/dice'+ number +'.png';
            document.getElementById(dice).setAttribute('src', src_pic);
            score += number;
          };
          total.innerHTML = 'Score: '+ score;
          document.getElementById('score').value = score;
        }

      // show me -->
    </script>
  <?php
  echo getcwd();
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $score = $_POST['score'];
    $score_file = fopen(getcwd()."/yahtzee_scores.txt", "a");
    $txt = $name." ".$score."\n";
    fwrite($score_file, $txt);
    fclose($score_file);
  } else {
    $name = "";
    $score = "";
  }
  ?>
	<h1>Webprogrammeren - Mart Busger op Vollenbroek</h1>
	<div class='nav'>
		<script language='javascript' src='scripts/menu.js'>
		</script>
	</div>
	<div class="sectie">
	<h2>Yahtzee scores</h2>
	<button onclick='swapImage()'>Gooi de dobbelstennen</button><br><br>

      <img src='images/dice1.png' name='Dice1' id='Dice1' border=0>
      <img src='images/dice2.png' name='Dice2' id='Dice2' border=0>
      <img src='images/dice3.png' name='Dice3' id='Dice3' border=0>
      <img src='images/dice4.png' name='Dice4' id='Dice4' border=0>
      <img src='images/dice5.png' name='Dice5' id='Dice5' border=0>
      <img src='images/dice6.png' name='Dice6' id='Dice6' border=0>

      <p id='total'>Score: ...</p>

      <p><a href='yahtzee_scores.txt'>Scores</a></p>
      <form action='yahtzee.php' method='post'>
        Naam: <input type='text' name='name' value="<?php echo $name;?>"> <br>
        Score: <input type='text' id='score' readonly='readonly' name='score' value="<?php echo $score;?>"><br>
        <input type='submit' value='Submit' name='submit'>
      </form>
	
	</div>
</body>
</html>
