<?php

$nota1 = 0;
$nota2 = 0;
$nota3 = 0;

if((empty($_POST['nota1']))){
    echo 'Insira um valor para o campo nota 1!</br>';
}
else{
    $nota1 = $_POST['nota1'];
}

if((empty($_POST['nota2']))){
    echo 'Insira um valor para o campo nota 2!</br>';
}
else{
    $nota2 = $_POST['nota2'];
}

if((empty($_POST['nota3']))){
    echo 'Insira um valor para o campo nota3!</br>';
}
else{
    $nota3 = $_POST['nota3'];
}

if(((!empty($_POST['nota1']) || $nota1 == 0) && ((!empty($_POST['nota2']) || $nota2 == 0) && (!empty($_POST['nota3']) || $nota3 == 0)))){
    $media = ($nota1 + $nota2 + $nota3)/3;
    echo "N1 = $nota1; N2 = $nota2; N3 = $nota3; MG = $media</br>";
    if($media >= 6){
        echo "Aluno(a) aprovado(a)";
    }
    else{
        echo "Aluno(a) reprovado(a)";
    }
}