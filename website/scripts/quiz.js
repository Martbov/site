<!--Script geleend van Robert Veenhoven-->
// JavaScript Document
 var the_score = 0;
            function getScore ()
            {
                if (document.getElementById('1').checked)
                {
                    the_score = the_score + 1
                }
                if (document.getElementById('2').checked)
                {
                    the_score = the_score + 1
                }
                if (document.getElementById('3').checked)
                {
                    the_score = the_score + 1
                }
                if (document.getElementById('4').checked)
				{
                    the_score = the_score + 1
				}				
				if (document.getElementById('5').checked)
                {
                    the_score = the_score + 1
				}
				if (document.getElementById('6').checked)
                {
                    the_score = the_score + 1
				}
				if (document.getElementById('7').checked)
                {
                    the_score = the_score + 1
				}
				if (document.getElementById('8').checked)
                {
                    the_score = the_score + 1
				}
				if (document.getElementById('9').checked)
                {
                    the_score = the_score + 1
				}
				if (document.getElementById('10').checked)
                {
                    the_score = the_score + 1
				}
												
           window.alert("U heeft " + the_score + " van de 10 vragen juist beantwoord.");
		   }