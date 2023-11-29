<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="simbolos.jpg">
    <title>Calculo Fatorial!</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <h1>Cálculo Fatorial!</h1><br>

            <form action="" method="post">
                <label for="fatorial"><i>Digite um valor para ver seu fatorial:</i></label><br>
                <br>
                <input type="text" name="fatorial" id="fatorial" required step="any" placeholder="Entre com um número inteiro">
                <br>
                <button type="submit">Calcular</button>

                <?php include("fatorial.php"); ?>

            </form>
        </div>
        <div class="descricao">
            <p>O fatorial de um número é o produto dele pelos seus antecessores maiores que 0.</p><br>
            <p>O fatorial de um número é a multiplicação desse número por todos os seus antecessores maiores que zero.</p><br>
            <p>Para representar o fatorial de um número, escrevemos o número seguido de um ponto de exclamação, ou seja, n! (lê-se “n fatorial”).</p><br>
            <p>Seja n um número natural, com n ≥ 2. Define-se o fatorial de n, representado por n!, por meio da relação:

                n! = n · (n – 1) · (n – 2) · … · 3 · 2 · 1

                Então, pessoal, sempre que um ponto de exclamação aparecer ao lado de um número, significa que na verdade esse número é o produto dele mesmo por todos os seus antecessores naturais até o número 1.</p><br>
            <p>2! = 2 x 1 = 2 <br>

                3! = 3 x 2 x 1 = 6 <br>

                4! = 4 x 3 x 2 x 1 = 24 <br>

                5! = 5 x 4 x 3 x 2 x 1 = 120 <br>

                6! = 6 x 5 x 4 x 3 x 2 x 1 = 720 <br>

                7! = 7 x 6 x 5 x 4 x 3 x 2 x 1 = 5040</p>
        </div>
    </div>

</body>

</html>