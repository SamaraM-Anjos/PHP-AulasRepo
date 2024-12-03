<?php
    $estados = [
        '' => '',
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

    
    $gerarSelectOptions = function($dados){
        $options = '';
        foreach($dados as $chave => $valor){
            if ($_POST['estado'] == $chave) {
                $options .= "<option value=$chave" . " selected>$valor</option>";
            }
            else{
                $options .= "<option value=$chave" . ">$valor</option>";
            }
        }
        return $options;
    };
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método filtrado diferenciado - v0.2.0</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js" defer></script>
</head>
<body>
    <form action="tabela.php" method="post" id="form">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?= isset($_POST['nome']) ? $_POST['nome'] : ''; ?>">

        <label for="idade">Idade:</label>
        <input type="number" name="idade" value="<?= isset($_POST['idade']) ? $_POST['idade'] : ''; ?>">

        <label for="estado">Estado:</label>
        <select name="estado" onchange="carregaCidades(this)">
            <?= $gerarSelectOptions($estados) ?>
        </select>

        <label for="cidade">Cidade:</label>
        <select name="cidade" id="cidade">
            <?= $gerarSelectCidades ($cidadesEstados, $_POST['estado']) ?>
        </select>

        <button type="submit">Filtrar</button>
    </form>
</body>
</html>