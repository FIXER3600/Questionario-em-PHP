<?php
$json = file_get_contents('questoes.json');
$quest = json_decode($json);
$ct = 1;

    echo "<link rel= 'stylesheet' href='index.css'>";
foreach ($quest as $q)
{
    echo "<br>";
   
	 echo "<img src='$ct.jpg ' >";	   

    echo  $ct++. ")$q->enunciado";
	echo "<br>";

    echo " (Correta:$q->correct)";
    echo "<br>";
    
    foreach ($q->alternativas as $alt){
        echo "<input type='radio' name='alternativas$ct'>";
		echo "$alt";
        
        echo "<br>";
    }
    echo "<p></p>";
    echo "<br>";
}

?>