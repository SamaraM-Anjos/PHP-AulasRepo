<?php

function calculaIdade(string $dataNascimento): int {
    // separando dd, mm, aa
    list($ano, $mes, $dia) = explode('-', $dataNascimento);

    // data atual
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    // Descobre a unix timestamp da data de nascimento do fulano
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

    // cálculo
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    return $idade;
}

$gerarTabela = function ($dados){
    $tabela = '<table>';
    $tabela .= '<tr>
                    <thead>
                        <th>Nome Completo:</th>
                        <th>Data de nascimento:</th>
                        <th>Cidade - Estado:</th>
                    </thead>
                </tr>';
    $tData = '';
    foreach($dados as $dado){
        $nomeCompleto = $dado['Nome Completo'];
        $idade = $dado['Idade'];
        $cidadeEstado = $dado['Cidade - Estado'];
        $tData .= "<tr>
                        <tbody>
                            <td>$nomeCompleto</td>
                            <td>$idade</td>
                            <td>$cidadeEstado</td>
                        </tbody>
                    </tr>";
    }
    $tabela .= $tData;
    $tabela .= '</table>';
    return $tabela;
    
};

$arrayATransformar = array(
    array(
    "Nome" => "João",
    "Sobrenome" => "Silva",
    "Nascimento" => "1990-01-01",
    "Cidade" => "São Paulo",
    "Estado" => "SP"
    ),
    array(
    "Nome" => "Maria",
    "Sobrenome" => "Oliveira",
    "Nascimento" => "1985-05-10",
    "Cidade" => "Rio de Janeiro",
    "Estado" => "RJ"
    ),
    array(
    "Nome" => "Carlos",
    "Sobrenome" => "Santos",
    "Nascimento" => "1995-07-21",
    "Cidade" => "Belo Horizonte",
    "Estado" => "MG"
    )
);

$arrayTransformado = array_map(function ($dado) {
    return array (
        "Nome Completo" => $dado['Nome'] . ' ' .$dado['Sobrenome'],
        "Idade" => calculaIdade($dado['Nascimento']),
        "Cidade - Estado" => $dado['Cidade'] . ' - ' . $dado['Estado']
    );
}, $arrayATransformar);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Questão 1 - Prova 3º trimestre</title>
        <style>
            table, table tr td, table tr th {
                border: solid .5px #ff75ff;
                text-align: center;
                padding: 5px;
            }

            table tr th{
                background-color: lightblue;
            }
            table tr td {
                background-color: lightgrey;
            }
        </style>
</head>
<body>
    <?= $gerarTabela($arrayTransformado); ?>        
</body>
</html>