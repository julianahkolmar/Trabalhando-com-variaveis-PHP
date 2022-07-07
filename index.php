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
        // put your code here
        echo "<h1>Trabalhando com variáveis</h1>";
        $num1 = 1;
        $num2 = 2;
        $result = $num1 + $num2;
        echo("Opção 1: O resultado da soma é:" . $num1 + $num2);
        echo "</br>";
        echo('Opção 2: O resultado da soma é: <span style="color:#8A2BE2">' .  $num1 + $num2 . '</span>');
        echo "</br>";
        echo ("Opção 3: O resultado da soma é:" . "<span style='color: #ff69b4'> $result </span>");
        
        echo "<hr/>";
        $nome="Juliana Kolmar";
        $idade = 19;
        
        if ($idade >= 18) {
            echo "$nome, você é maior de idade!";
        }else{
            echo "$nome, você é menor de idade!";
        }
        echo "<hr/>";
        $numero1 = 10;
        $numero2 = 8;
        $numero3 = 6;
        $media = ($numero1 + $numero2 +$numero3)/3;
        echo("A média calculada foi:" . "<span style='color: #00BFFF'> $media </span>");
        echo "<hr/>";


        $funcionario = "Agnes";
        $salario = 5500;
        $inss = 11;
        $inssdesconto =($salario / 100 * $inss);
        $salarioliquido = $salario - ($salario / 100 * $inss);
        $fgts = 5500 * 0.08;

        echo(" O salário bruto do funcionário " . $funcionario ." é: R$" . $salario);
        echo "</br>";
        echo(" O desconto todo mês de INSS do funcionário é: R$" . $inssdesconto);
        echo "</br>";
        echo(" O salário líquido do funcionário é: R$" . $salarioliquido);
        echo "</br>";
        echo(" O FGTS do funcionário é: R$" . $fgts);
        echo "<hr/>";
        ?>

        <form action="calcIMC.php" method="post">
         nome: <input type=text name=nome /></p>
         altura: <input type=text name=altura /></p>
         peso: <input type=text name=peso /></p>

         <input type="submit" />
         <input type="reset" />

        </form>

</body>

</html>