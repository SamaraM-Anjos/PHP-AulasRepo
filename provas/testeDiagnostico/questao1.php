<?php
    if(!(empty($_POST["numero"]))){
        $numero = $_POST["numero"];
        if(($numero % 2) == 0){
            echo "O número $numero é par";
        }
        else{
            echo "O número $numero é ímpar";
        }
    }
    else{
        die("Preencha todos os dados");
    }
?>