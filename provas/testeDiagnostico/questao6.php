<?php
    if( ( (isset($_POST["nome"])) && !(empty($_POST["nome"])) ) && ( (isset($_POST["idade"]) && !(empty($_POST["idade"]) ) ) ) ){
        echo 'Formulário preenchido com sucesso';
    }
    else{
        if(!(isset($_POST["nome"])) || empty($_POST["nome"])){
            echo 'Erro. Preencha o campo nome para continuar.';
        }
        if(!(isset($_POST["idade"])) || empty($_POST["idade"])){
            echo 'Erro. Preencha o campo idade para continuar.';
        }
    }
?>