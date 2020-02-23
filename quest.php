<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='index.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Questões</h1><br>
    <?php $nome = $_POST["nome"]; 
    echo "<h2>Bem-vindo(a) $nome vamos começar!</h2>"; ?>
    <form action="" method="post">
    <?php
        $json = file_get_contents('questoes.json');
        $quest = json_decode($json);
        $ct = 1;
        $ctalt=1;

        foreach ($quest as $q)
        {
            echo "<br>";
            echo "<img src='$ct.jpg' >";
            echo "<br>";
            echo "<p>";
            echo $ct++.")$q->enunciado";
            echo " (Correta:$q->correct)";
            echo "</p>";
            echo "<br>";
            
            foreach ($q->alternativas as $alt){
                echo "<div class='alter'>";
                echo "<input type='radio' name='alternativas$ct'id='alt".$ctalt++."'>";
                echo "$alt";
                echo "<br>";
                echo "</div>";
            }
            echo "<p></p>";
            echo "<br>";
            
        }
    ?>
    <input type="submit" class="btn" value="Terminar">
    </form>

</body>
</html>
