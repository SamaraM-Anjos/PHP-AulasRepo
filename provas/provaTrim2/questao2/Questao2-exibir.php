<?php

$nome = '';
$idade = 0;
$estado = '';
$cidade = '';
$sexo = '';

if((empty($_POST['nome']))){
    echo 'Insira um valor para o campo nome!</br>';
}
else{
    $nome = $_POST['nome'];
}

if((empty($_POST['idade']))){
    echo 'Insira um valor para as idade!</br>';
}
else{
    $idade = $_POST['idade'];
}

if((empty($_POST['estado']))){
    echo ('Insira um valor para estado!</br>');
}
else{
    $estado = $_POST['estado'];
}

if((empty($_POST['cidade']))){
    echo ('Insira um valor para cidade!</br>');
}
else{
    $cidade = $_POST['cidade'];
}

if((empty($_POST['sexo']))){
    echo ('Insira um valor para sexo!</br>');
}
else{
    $sexo = $_POST['sexo'];
}

if((!empty($nome) && (!empty($cidade) && (!empty($sexo) && (!empty($idade) && (!empty($estado))))))){
    echo "Nome: $nome </br>";
    echo "Idade: $idade </br>";
    echo "Cidade: $cidade </br>";
    echo "Estado: $estado </br>";
    echo "Sexo: $sexo </br>";
}