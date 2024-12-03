<?php

$n1 = 0;
$n2 = 0;

if((!isset($_POST['n1']))){
    echo 'Preencha o campo número 1';
}
else{
    $n1 = $_POST['n1'];
    if((!isset($_POST['n2']))){
        echo 'Preencha o campo número 2';
    }
    else{
        $n2 = $_POST['n2'];
        if(!isset($_POST['operacao'])){
            echo 'Preencha o campo da operação!';
        }
        else{
            $operacao = $_POST['operacao'];
            switch($operacao){
                case 'soma':
                    echo ($n1 + $n2);
                    break;
                case 'subtracao':
                    echo ($n1 - $n2);
                    break;
                case 'multiplicacao':
                    echo ($n1 * $n2);
                    break;
                case 'divisao':
                    if($n2 != 0){
                        echo ($n1 / $n2);
                        break;
                    }
                    else{
                        echo 'Digite um número que seja diferente de 0!';
                    }
                    
            }
        }
    }
}

