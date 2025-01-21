<?php
    $senhaPredefinida = "ProvaLegalDePHPXABLAU";
    $senhaPredefinidaCriptografada = sha1($senhaPredefinida);

    $senhaDigitadaPeloUsuario = sha1($_POST['senha']);

    if($senhaDigitadaPeloUsuario === $senhaPredefinidaCriptografada) {
        echo "Senha válida";
    }
    else{
        echo "Senha inválida";
    }
?>