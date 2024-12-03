<?php
    $idade = 0;
    $nacionalidade = '';

    // Verificar a existência de algum dado nos imputs
    if(!(empty($_POST["idade"]))){
        $idade = $_POST["idade"];
    }
    else{
        die('Preencha o campo da idade</br>');
    }
    if(!(empty($_POST["nacionalidade"]))){
        $nacionalidade = $_POST["nacionalidade"];
    }
    else{
        die('Preencha o campo da nacionalidade');
    }

    // Exibição da mensagem de acordo com os dados
    if(( $idade >=18 && $idade <=70 ) && $nacionalidade == 'brasileira'){
        echo 'Você está apto a votar!';
    }
    else{
        if(( ($idade >= 16 && $idade <= 17) || $idade > 70 ) && $nacionalidade == 'brasileira'){
            echo 'Você tem o voto facultativo!';
        }
        else{
            echo 'Você não está apto para votar!';
        }
    }
?>