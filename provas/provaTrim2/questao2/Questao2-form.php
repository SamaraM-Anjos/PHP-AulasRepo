<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>
<body>
    <form action="./Questao2-exibir.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">

        <label for="idade">Idade:</label>
        <input type="number" name="idade">

        <label for="estado">Estado:</label>
        <select name="estado" id="estado">
            <option value="RJ">Rio de Janeiro</option>
            <option value="BA">Bahia</option>
            <option value="SP">São Paulo</option>
        </select>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade">

        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" id="sexo" value="F">
        <label for="sexoF">Feminino</label>

        <input type="radio" name="sexo" id="sexo" value="M">
        <label for="sexoM">Masculino</label>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>