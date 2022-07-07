<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Aula 08</title>
</head>

<body style="font-family: Heebo,sans-serif;">
<?php

    echo "O seu nome é: " . $_POST["nome"];
    echo "<br>A sua altura é: " . $_POST["altura"];
    echo "<br>O seu peso é: " . $_POST["peso"];

        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        function imc($altura, $peso){
        $altura = str_replace(',', '.', $altura);
        $resultado = $peso / ($altura * $altura);
        return $resultado;
        }
         echo "<hr/>";
        echo"Seu imc é: " .imc($altura , $peso);
        ?>

    
</body>

</html>