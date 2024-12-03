<?php
    $estados = [
        "AC" => "Acre",
        "AL" => "Alagoas",
        "AP" => "Amapá",
        "AM" => "Amazonas",
        "BA" => "Bahia",
        "CE" => "Ceará",
        "DF" => "Distrito Federal",
        "ES" => "Espírito Santo",
        "GO" => "Goiás",
        "MA" => "Maranhão",
        "MT" => "Mato Grosso",
        "MS" => "Mato Grosso do Sul",
        "MG" => "Minas Gerais",
        "PA" => "Pará",
        "PB" => "Paraíba",
        "PR" => "Paraná",
        "PE" => "Pernambuco",
        "PI" => "Piauí",
        "RJ" => "Rio de Janeiro",
        "RN" => "Rio Grande do Norte",
        "RS" => "Rio Grande do Sul",
        "RO" => "Rondônia",
        "RR" => "Roraima",
        "SC" => "Santa Catarina",
        "SP" => "São Paulo",
        "SE" => "Sergipe",
        "TO" => "Tocantins"
    ];
    
    $gerarSelectOptios = function($dados){
        $options = '';
        foreach($dados as $chave => $valor){
            $options .= "<option value=$chave" . ">$valor</option>";
        }
        return $options;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tabela.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
        
        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade">

        <label for="cidade">Idade:</label>
        <input type="number" name="idade">

        <label for="estado">
        <select name="estado">
            <?= $gerarSelectOptios($estados) ?>
        </select>

        <button type="submit">Filtrar</button>
    </form>
</body>
</html>