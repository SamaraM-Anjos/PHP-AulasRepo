<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>
    <?php
        function funcaoPorValor ($valor){
            return ($valor += 5);
        }

        function funcaoPorReferencia (&$valor){
            return ($valor += 10);
        }

        $valor = 10;

        echo "Antes de chamar a função por valor: $valor </br>";
        funcaoPorValor($valor);
        echo "Depois de chamar a função por valor: $valor </br>";

        echo "Antes de chamar a função por referêcia: $valor </br>";
        funcaoPorReferencia($valor);
        echo "Depois de chamar a função por referência: $valor";
    ?>
</body>
</html>