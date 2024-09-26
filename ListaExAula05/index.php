<?php
    function soma() {
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $soma = $n1 + $n2;
            return $soma;
    }

    function quadrado() {
        $n1 = $_POST["n3"];
        $quadrado = $n1 * $n1;
        return $quadrado;
    }

    function par() {
        $n1 = $_POST["n4"];
        $par = $n1 % 2;
        if($par === 0) {
            return "O número " . $n1 . " é par." ;
        } else {
            return "O número " . $n1 . " é impar.";
        }

    }

    function tamanho() {
        $p1 = $_POST["p1"];
        $tamanho = strlen($p1);
        return $tamanho;
    }

    function palindromo() {
        $p2 = $_POST['p2'];
        // Remove espaços e converte para minúsculas
        $palavraLimpa = strtolower(str_replace(' ', '', $p2));

        $palavraLimpa2 = strrev($palavraLimpa);

        if ($palavraLimpa2 === $palavraLimpa) {
            $palindromo = "é um palíndromo.";
        } else {
            $palindromo = "Não é um palíndromo.";
        }
    
    }

    if (isset($_POST['acao'])) {
        $acao = $_POST['acao'];
    
        if ($acao == 'Somar') {
            $resultado = soma();
        } 
        if ($acao == 'quadrado') {
            $quad = quadrado();
        }
        if ($acao == 'par') {
            $par = par();
        }
        if ($acao == 'palavra') {
            $tamanho = tamanho();
        }
        if ($acao == 'palindromo') {
            $palindromo = palindromo();
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Aula 05</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Soma de 2 números</h1>
    <form action="#" method="post">
        <label for="n1">Digite o primeiro número:</label><br />
        <input type="text" name="n1" placeholder="Primeiro número..." /><br />
        <label for="n2">Digite o segundo número:</label><br />
        <input type="text" name="n2" placeholder="Segundo número..." /><br />
        <button name="acao" class="mage" value="Somar">Somar</button><input class="mage" type="reset" value="Limpar" />
    </form>
    <?php
    if (isset($resultado)) {
        echo "<h4>Resultado:</h4>";
        echo "<p>$resultado</p>";
    }
    ?>

    <h1>Calcule o quadrdo de um número</h1>
    <form action="#" method="post">
        <label for="n3">Digite o número:</label><br />
        <input type="text" name="n3" placeholder="Digite o número..." /><br />
        <button name="acao" class="mage" value="quadrado">Calcular</button><input class="mage" type="reset" value="Limpar" />
    </form>
    <?php
    if (isset($quad)) {
        echo "<h4>Resultado:</h4>";
        echo "<p>$quad</p>";
    }
    ?>

    <h1>Descubra se o número é par</h1>
    <form action="#" method="post">
        <label for="n4">Digite o número:</label><br />
        <input type="text" name="n4" placeholder="Digite o número..." /><br />
        <button name="acao" class="mage" value="par">Descobrir</button><input class="mage" type="reset" value="Limpar" />
    </form>
    <?php
    if (isset($par)) {
        echo "<h4>Resultado:</h4>";
        echo "<p>$par</p>";
    }
    ?>

    <h1>Descubra quantas letras tem uma palavra</h1>
    <form action="#" method="post">
        <label for="p1">Palavra:</label><br />
        <input type="text" name="p1" placeholder="Digite a palavra..." /><br />
        <button name="acao" class="mage" value="palavra">Descobrir</button><input class="mage" type="reset" value="Limpar" />
    </form>
    <?php
    if (isset($tamanho)) {
        $p1 = $_POST["p1"];
        echo "<h4>Resultado:</h4>";
        echo "<p>A palavra $p1 tem $tamanho letras</p>";
    }
    ?>

    <h1>Saiba se a palavra é um palindromo</h1>
    <form action="#" method="post">
        <label for="p2">Palavra:</label><br />
        <input type="text" name="p2" placeholder="Digite a palavra..." /><br />
        <button name="acao" class="mage" value="palindromo">Descobrir</button><input class="mage" type="reset" value="Limpar" />
    </form>
    <?php
    if (isset($palindromo)) {
        echo "<h4>Resultado:</h4>";
        echo "A palavra $p2 $palindromo";
    }
    ?>
    
</body>
</html>