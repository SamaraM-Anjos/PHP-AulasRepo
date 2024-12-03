<?php
    // 📍 Array com os funcionários

    $funcionarios = array(
        array('nome' => 'Rose', 'idade' => 50, 'cidade' => 'Nova Friburgo'),
        array('nome' => 'Marileide', 'idade' => 55, 'cidade' => 'Nova Friburgo'),
        array('nome' => 'Robesvaldo', 'idade' => 63, 'cidade' => 'Rio de Janeiro')
    );

    // 📍 Função para gerar uma tabela com os dados de um array
    
    $gerarTabela = function ($dados){
        $tabela = '<table>';
        $tabela .= '<tr>
                        <thead>
                            <td>Nome:</td>
                            <td>Idade:</td>
                            <td>Cidade:</td>
                        </thead>
                    </tr>';
        $tData = '';
        foreach($dados as $dado){
            $nome = $dado['nome'];
            $idade = $dado['idade'];
            $cidade = $dado['cidade'];
            $tData .= "<tr>
                            <tbody>
                                <td>$nome</td>
                                <td>$idade</td>
                                <td>$cidade</td>
                            </tbody>
                        </tr>";
        }
        $tabela .= $tData;
        $tabela .= '</table>';
        return $tabela;
    };
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02 - Aula 01 - Tabela Funcionários</title>
</head>
<body>
    <h1>Tabela Funcionários</h1>

    <?= $gerarTabela($funcionarios) ?>
</body>
</html>