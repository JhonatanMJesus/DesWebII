<link rel="stylesheet" type="text/css" href="css/style.css" />

<h1>Exercício 1 de PHP - Processamento POST na mesma página PHP</h1>

<form action="#" method="post">
    <input type="text" name="num1" placeholder="Número 1" />
    <input type="text" name="num2" placeholder="Número 1" />
    <input type="submit" name="enviar" value="Enviar" />
    <input type="reset" name="reset" value="Limpar" />
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];
        $soma = $n1 + $n2;
        echo "<h1>Resultado do exercício 1</h1>";
        echo "<p>A soma de $n1 + $n2 é igual a $soma</p>";
        echo "<a href='ex01.php' class='button'>Index</a>";
    }

?>

<a href="./ex01.php" class="button">Index</a>