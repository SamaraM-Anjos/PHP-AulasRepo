<?php
    $qtdLinhas = 0;
    $qtdColunas = 0;
    if((empty($_POST['linhas']))){
        echo ('Insira um valor para as linhas!');
    }
    else{
        $qtdLinhas = $_POST['linhas'];

    }

    if((empty($_POST['colunas']))){
        echo ('Insira um valor para as colunas!');
    }
    else{
        $qtdColunas = $_POST['colunas'];
    }

    function gerarTabela ($qtdLinhas, $qtdColunas){
        $i = 0;
        $tabela = '';
        $tabela = '<table>';
        $qtdLinhas;

        while($i < $qtdLinhas){
            $j = 0;
            if($i == 0){
                $tabela .= '<tr>';
                $cabecalho = 1;
                for($k = 0; $k < $qtdColunas; $k++){
                    $tabela .= "<th>Cabeçalho $cabecalho</th>";
                    $cabecalho++;
                }
                $tabela .= '</tr>';
            }
            $tabela .= '<tr>';
            while($j < $qtdColunas){
                $coluna = $j + 1;
                $linha = $i + 1;
                $tabela .= "<td>Linha $linha, Coluna $coluna</td>";
                $j++;
            }
            $tabela .= '</tr>';
            $i++;
        }
        $tabela .= '</table>';

        return $tabela;
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Questao 1</title>
        <link rel="stylesheet" href="questao1.css">
    </head>
    <body>
        <?php
        if($qtdLinhas != 0 && $qtdColunas != 0){
            echo gerarTabela($qtdLinhas, $qtdColunas);
        }
        ?>
</body>
</html>