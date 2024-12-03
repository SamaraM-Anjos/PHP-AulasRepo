<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
</head>
<body>
    <?php
        $frutas = array('Maça', 'Banana', 'Laranja', 'Uva', 'Manga');
        echo 'Frutas iniciais: </br>';
        echo "<table>";
        foreach($frutas as $fruta){
            echo "<tr>";
                echo "<td>". $fruta . "</td>";
            echo "</tr>";
        }
        echo "</table></br>";
        array_push($frutas, 'Abacaxi');
        echo 'Frutas atualizadas: </br>';
        echo "<table>";
        foreach($frutas as $fruta){
            echo "<tr>";
                echo "<td>". $fruta . "</td>";
            echo "</tr>";
        }
        echo "</table>"
    ?>
</body>
</html>