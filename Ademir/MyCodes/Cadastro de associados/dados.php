<?php
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $email = $_POST["email"];
    $esporte = $_POST["esporte"];
    $esporteOutro = $_POST["esporteoutro"];
    $comentario = $_POST["comentario"];


    echo "<strong>".$nome."</strong><br>Do sexo ".$sexo.", cujo o email é ".$email.".<br>";
    
    if (isset($esporte)) {
        echo "Tem como esportes favoritos:"

        foreach ($esporte as $key => $value) {
            $result = " ".$value.",";
            echo $result;
        }
    } else {
        $result = "Não tem esporte favorito...";
    }
    
    if(isset($esporteOutro)) {
        echo " e ".$esporteOutro.".";
    }

    if (isset($comentario)) {
        echo ".<br>Seu comentario sobre seus esportes favoritos foi:<br><b>".$comentario."<b>.";
    }
?>