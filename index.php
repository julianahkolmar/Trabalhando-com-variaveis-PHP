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

<body>
    <?php
        // put your code here
        echo "<h1>Trabalhando com variáveis</h1>";
        $num1 = 1;
        $num2 = 2;
        $result = $num1 + $num2;
        echo("Opção 1: O resultado da soma é:" . $result);
        echo "</br>";
        echo('Opção 2: O resultado da soma é: <span style="color:purple">' . $result . '</span>');
        echo "</br>";
        echo ("Opção 3: O resultado da soma é: <span style='color: pink'> $result </span>");
        
        ?>
</body>

</html>