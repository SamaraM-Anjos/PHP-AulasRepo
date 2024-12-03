<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>
    <h1>Calculadora:</h1>

    <form action="./Questao3-exibir.php" method="POST">
        <label for="n1">Número 1</label>
        <input type="number" name="n1">
        <br>
        <label for="n2">Número 2:</label>
        <input type="number" name="n2">
        <br>
        <label for="operacao">Operação:</label><br>
        <input type="radio" name="operacao" id="soma" value="soma">
        <label for="soma">+</label>
        <br>
        <input type="radio" name="operacao" id="subtracao" value="subtracao">
        <label for="subtracao">-</label>
        <br>
        <input type="radio" name="operacao" id="multiplicacao" value="multiplicacao">
        <label for="multiplicacao">X</label>
        <br>
        <input type="radio" name="operacao" id="divisao" value="divisao">
        <label for="divisao">/</label>

        <br><br>
        <button type="submit">Enviar</button>
        
    </form>
</body>
</html>