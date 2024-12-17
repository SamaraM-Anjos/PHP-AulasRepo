<html>
<head>
    <title>Aula 6</title>
    <script src="scripts.js" defer></script>
</head>
<body>
    <h1>Aula do dia 17/12</h1>
    <fieldset>
        <legend>Filtro</legend>
        <form action="./tabela.php" method="POST" id="filtro">
            <label for="classe">Classe:</label>

            <select name="classe" id="classe">
                <?php
                    $classeAnimais = [
                        "" => "",
                        "MAM" => "Mamíferos",
                        "AVES" => "Aves",
                        "BAC" => "Bactérias"
                    ];

                    foreach($classeAnimais as $chave => $valor) {
                        if ($_POST['classe'] == $chave) {
                            echo "<option value=". $chave ."  selected> $valor </option>";
                        }
                        else{
                            echo "<option value=". $chave ."> $valor </option>";
                        }
                    }
                ?>
            </select>

            <label for="nomeAnimal">Nome do animal:</label>
            <select name="nomeAnimal" id="nomeAnimal">
                
            </select>

            <button type="submit" id="Filtrar" name="Filtrar">Filtrar</button>
        </form>
    </fieldset>
</body>
</html>