<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação automática de Formulário</title>
    <script type="text/javascript">
        function validaCpf(campo) {
            var cpf = parseInt(campo.value);
            if(campo.value.length>11) {
                alert("CPF incorreto");
                return false;
            }
            return true;
        }
        function validaIdade(campo) {
            var idade = parseInt(campo.value);
            if(idade>110 || idade <0) {
                alert("Idade incorreta");
                return false;
            }
            return true;
        }
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('formCadastro');
            form.addEventListener('submit', (e) => {
                const nomeCampo = document.getElementById('nome');
                const nomeStr = nomeCampo.value;
                if(nomeStr.trim()==""){
                    alert("Você deve preencher o campo 'Nome'");
                    e.preventDefault(); //Não deixa o formulário ser submetido.
                    return false;
                }

                const idadeCampo = document.getElementById('idade');
                const idadeStr = idadeCampo.value;
                if(!validaIdade(idadeCampo)){
                    e.preventDefault();
                    return false;
                }
                else if(idadeStr.trim()==""){
                    alert("Você deve preencher o campo 'Idade'");
                    e.preventDefault();
                    return false;
                }

                const sexoCampo = document.getElementsByName('sexo');
                var validaCamposexo = false;
                for(index in sexoCampo){
                    if(sexoCampo[index].checked){
                        validaCamposexo=true;
                    }
                }
                if(!validaCamposexo) {
                    alert("Você deve preencher o campo 'Sexo'");
                    e.preventDefault();
                    return false;
                }

                const cidade_nascimentoCampo = document.getElementById('cidade_nascimento');
                const cidade_nascimentoStr = cidade_nascimentoCampo.value;
                if(cidade_nascimentoStr.trim()==""){
                    alert("Você deve preencher o campo 'Cidade de Nasc'");
                    e.preventDefault();
                    return false;
                }

                const estado_nascimentoCampo = document.getElementById('estado_nascimento');
                const estado_nascimentoIndex = estado_nascimentoCampo.selectedIndex;
                if(estado_nascimentoIndex==-1){
                    alert("Você deve preencher o campo 'Estado de Nasc'");
                    e.preventDefault();
                    return false;
                }


                const cpfCampo = document.getElementById('cpf');
                const cpfStr = cpfCampo.value;
                if(!validaCpf(cpfCampo)){
                    e.preventDefault();
                    return false;
                }
                else if(cpfStr.trim()==""){
                    alert("Você deve preencher o campo 'CPF'");
                    e.preventDefault();
                    return false;
                }
            });
        });
    </script>
</head>
<body>
    <form method="POST" action="cadastro.php" id="formCadastro">
        <div class="itemWrapper">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Informe seu nome." required/>
        </div>
        <div class="itemWrapper">
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" placeholder="Informe sua Idade."/>
        </div>
        <div class="itemWrapper">
            <label>Sexo:</label>&nbsp;&nbsp;
            <input type="radio" id="sexo_M" name="sexo" value="M">&nbsp;
            <label for="sexo_M">Masculino</label>&nbsp;&nbsp;
            <input type="radio" id="sexo_F" name="sexo" value="F">&nbsp;
            <label for="sexo_F">Feminino</label>&nbsp;&nbsp;
            <input type="radio" id="sexo_O" name="sexo" value="O">&nbsp;
            <label for="sexo_O">Outros</label>
        </div>
        <div class="itemWrapper">
            <label>Esporte Preferido:</label>&nbsp;&nbsp;
            <input type="checkbox" id="esporte_preferido_F" name="esporte_preferido" value="F" checked>&nbsp;
            <label for="esporte_preferido_F">Futebol</label>&nbsp;&nbsp;
            <input type="checkbox" id="esporte_preferido_V" name="esporte_preferido" value="V">&nbsp;
            <label for="esporte_preferido_V">Vôlei</label>&nbsp;&nbsp;
            <input type="checkbox" id="esporte_preferido_N" name="esporte_preferido" value="N" checked>&nbsp;
            <label for="esporte_preferido_N">Natação</label>&nbsp;&nbsp;
            <input type="radio" id="esporte_preferido_O" name="esporte_preferido" value="O">&nbsp;
            <label for="esporte_preferido_O">Outros</label>
        </div>
        <div class="itemWrapper">
            <label for="cidade_nascimento">Cidade de Nasc:</label>
            <input type="text" id="cidade_nascimento" name="cidade_nascimento" placeholder="Informe a cidade que você nasceu." required/>
        </div>
        <div class="itemWrapper">
            <label for="estado_nascimento">Estado de Nasc:</label>
            <select id="estado_nascimento" name="estado_nascimento" required>
                <option value="">-</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="SP">São Paulo</option>
                <option value="ES">Espírito Santo</option>
                <option value="MG" selected>Minas Gerais</option>
                <option value="O">Outros</option>
            </select>
        </div>
        <div class="itemWrapper">
            <label for="cpf">CPF:</label>
            <input type="number" id="cpf" name="cpf" placeholder="Informe seu CPF." required/>
        </div>
        <div class="itemWrapper">
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" placeholder="Faça uma descrição sobre você."></textarea>
        </div>
        <div class="itemWrapperBTNsSubmitReset">
            <button type="submit" id="botao_enviar" name="enviar">Enviar</button>&nbsp;&nbsp;
            <button type="reset" id="botao_limpar_form" name="reset">Limpar Formulário</button>
        </div>
    </form>
</body>
</html>