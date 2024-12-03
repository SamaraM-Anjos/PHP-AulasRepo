<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01 - Aula 01 - Soma</title>
</head>
<body>
    <h1>Soma</h1>

    <?php
        $soma = function (int $a, int $b):int {
            return $a + $b;
        };
        // 📍 Versão reduzida -> alternativa 📍
        // $soma = fn(int $a, int $b):int => $a + $b;
        var_dump($soma(5,6));
    ?>
</body>
</html>