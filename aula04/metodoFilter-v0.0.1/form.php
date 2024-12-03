<?php
    $estados = [
        '' => '',
        "AC" => "Acre",
        "AL" => "Alagoas",
        "AP" => "Amapá",
        "AM" => "Amazonas",
        "BA" => "Bahia",
        "CE" => "Ceará",
        "DF" => "Distrito Federal",
        "ES" => "Espírito Santo",
        "GO" => "Goiás",
        "MA" => "Maranhão",
        "MT" => "Mato Grosso",
        "MS" => "Mato Grosso do Sul",
        "MG" => "Minas Gerais",
        "PA" => "Pará",
        "PB" => "Paraíba",
        "PR" => "Paraná",
        "PE" => "Pernambuco",
        "PI" => "Piauí",
        "RJ" => "Rio de Janeiro",
        "RN" => "Rio Grande do Norte",
        "RS" => "Rio Grande do Sul",
        "RO" => "Rondônia",
        "RR" => "Roraima",
        "SC" => "Santa Catarina",
        "SP" => "São Paulo",
        "SE" => "Sergipe",
        "TO" => "Tocantins"
    ];

    
    $gerarSelectOptions = function($dados){
        $options = '';
        foreach($dados as $chave => $valor){
            if ($_POST['estado'] == $chave) {
                $options .= "<option value=$chave" . " selected>$valor</option>";
            }
            else{
                $options .= "<option value=$chave" . ">$valor</option>";
            }
        }
        return $options;
    };

    $cidadesEstados = array(
        "AC" => array("Rio Branco", "Cruzeiro do Sul", "Sena Madureira", "Tarauacá"),
        "AL" => array("Maceió", "Arapiraca", "Palmeira dos Índios", "Rio Largo"),
        "AP" => array("Macapá", "Santana", "Laranjal do Jari", "Oiapoque"),
        "AM" => array("Manaus", "Parintins", "Itacoatiara", "Manacapuru"),
        "BA" => array("Salvador", "Feira de Santana", "Vitória da Conquista", "Camaçari"),
        "CE" => array("Fortaleza", "Caucaia", "Juazeiro do Norte", "Sobral"),
        "DF" => array("Brasília"),
        "ES" => array("Vitória", "Vila Velha", "Serra", "Cariacica"),
        "GO" => array("Goiânia", "Aparecida de Goiânia", "Anápolis", "Rio Verde"),
        "MA" => array("São Luís", "Imperatriz", "Timon", "Caxias"),
        "MT" => array("Cuiabá", "Várzea Grande", "Rondonópolis", "Sinop"),
        "MS" => array("Campo Grande", "Dourados", "Três Lagoas", "Corumbá"),
        "MG" => array("Belo Horizonte", "Uberlândia", "Contagem", "Juiz de Fora"),
        "PA" => array("Belém", "Ananindeua", "Santarém", "Marabá"),
        "PB" => array("João Pessoa", "Campina Grande", "Santa Rita", "Patos"),
        "PR" => array("Curitiba", "Londrina", "Maringá", "Ponta Grossa"),
        "PE" => array("Recife", "Jaboatão dos Guararapes", "Olinda", "Caruaru"),
        "PI" => array("Teresina", "Parnaíba", "Picos", "Floriano"),
        "RJ" => array("Rio de Janeiro", "São Gonçalo", "Duque de Caxias", "Nova Iguaçu"),
        "RN" => array("Natal", "Mossoró", "Parnamirim", "Caicó"),
        "RS" => array("Porto Alegre", "Caxias do Sul", "Pelotas", "Santa Maria"),
        "RO" => array("Porto Velho", "Ji-Paraná", "Ariquemes", "Vilhena"),
        "RR" => array("Boa Vista", "Rorainópolis", "Caracaraí", "Alto Alegre"),
        "SC" => array("Florianópolis", "Joinville", "Blumenau", "Chapecó"),
        "SP" => array("São Paulo", "Campinas", "Guarulhos", "Santos"),
        "SE" => array("Aracaju", "Nossa Senhora do Socorro", "Lagarto", "Itabaiana"),
        "TO" => array("Palmas", "Araguaína", "Gurupi", "Porto Nacional")
    );

    $gerarSelectCidades = function ( $dados, $uf ) {
        $options = '';
        if (isset($uf)) {
            foreach ($dados as $chave => $valor) {
                if ($chave == $uf) {
                    foreach ($valor as $cidade) {
                        $options .= "<option value=$cidade>$cidade</option>";
                    }
                }
            }
        }
        return $options;
    };

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método filtrado diferenciado - v0.0.1</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js" defer></script>
</head>
<body>
    <form action="tabela.php" method="post" id="form">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?= isset($_POST['nome']) ? $_POST['nome'] : ''; ?>">

        <label for="idade">Idade:</label>
        <input type="number" name="idade" value="<?= isset($_POST['idade']) ? $_POST['idade'] : ''; ?>">

        <label for="estado">Estado:</label>
        <select name="estado" onchange="carregaCidades(this)">
            <?= $gerarSelectOptions($estados) ?>
        </select>

        <label for="cidade">Cidade:</label>
        <select name="cidade" id="cidade">
            <?= $gerarSelectCidades ($cidadesEstados, $_POST['estado']) ?>
        </select>

        <button type="submit">Filtrar</button>
    </form>
</body>
</html>