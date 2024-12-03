<?php
    // 📍 Array com os produtos

    $produtos = array(
        array('nome' => 'Bombril', 'preco' => 50, 'fabricante' => 'Nova Friburgo'),
        array('nome' => 'Marileide', 'preco' => 55, 'fabricante' => 'Nova Friburgo'),
        array('nome' => 'Robesvaldo', 'preco' => 63, 'fabricante' => 'Rio de Janeiro')
    );

    // 📍 Função para gerar uma tabela com os dados de um array
    
    $gerarTabela = function ($dados){
        $tabela = '<table>';
        $tabela .= '<tr>
                        <thead>
                            <td>Nome:</td>
                            <td>Preco:</td>
                            <td>Fabricante:</td>
                        </thead>
                    </tr>';
        $tData = '';
        foreach($dados as $dado){
            $nome = $dado['nome'];
            $preco = $dado['preco'];
            $fabricante = $dado['fabricante'];
            $tData .= "<tr>
                            <tbody>
                                <td>$nome</td>
                                <td>$preco</td>
                                <td>$fabricante</td>
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
    <title>Atividade 03 - Aula 01 - Tabela Produtos</title>
</head>
<body>
    <h1>Tabela Produtos</h1>

    <?= $gerarTabela($produtos) ?>
</body>
</html>