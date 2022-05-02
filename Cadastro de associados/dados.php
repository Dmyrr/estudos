<?php
    $nome = "nome";
    $sexo = "sexo";
    $email = "email";
    $esporte = "esporte";
    $esporteOutro = "esporteoutro";
    $comentario = "comentario";

    if($sexo == 'f'){
        $sexo = "Feminino";
    } else {
        $sexo = "Masculino";
    }

    echo "<strong>".$nome."</strong><br>Do sexo ".$sexo.", cujo o email é ".$email.", tem como o(s) esporte(s) favoritos: ".$esporte.".<br>Seu comentario sobre seus esportes favoritos foi: ".$comentario;
?>