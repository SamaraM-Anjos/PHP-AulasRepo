<?php
$formulario = array(
    'id'=>'formCadastro',
    'tipo_submit'=>'POST', 
    'url_submit'=>'cadastro.php', 
    'itens'=> array(
        'nome'=>array('tipo'=> 'text', 'nome'=> 'nome', 'label'=> 'Nome', 'placeholder'=> 'Informe seu nome.'),

        'idade'=>array('tipo'=> 'number', 'nome'=> 'idade', 'label'=> 'Idade', 'placeholder'=> 'Informe sua idade.', 'funcao_validacao'=> 'validaIdade'),

        'sexo'=>array('tipo'=> 'radio', 'nome'=> 'sexo', 'label'=> 'Sexo', 'opcoes'=> array("M"=> "Masculino", "F"=>"Feminino", "O"=>"Outros")),

        'esporte_preferido'=>array('tipo'=> 'checkbox', 'nome'=> 'esporte_preferido', 'label'=> 'Esporte Pref.', 'opcoes'=> array("F"=> "Futebol", "V"=>"Vôlei", "N"=>"Natação", "O"=> "Outros"), 'obrigatorio'=>false, "valor_padrao"=> array("F", "N")),

        'cidade_nascimento'=>array('tipo'=> 'text', 'nome'=> 'cidade', 'label'=> 'Cidade de Nasc.', 'placeholder'=> "Informe a cidade que você nasceu."),

        'estado_nascimento'=>array('tipo'=> 'select', 'nome'=> 'estado_nascimento', 'label'=> 'Estado de Nasc.', 'opcoes'=> array("RJ"=> "Rio de Janeiro", "SP"=>"São Paulo", "ES"=>"Espírito Santo", "MG"=>"Minas Gerais", "O"=> "Outros"), "valor_padrao"=> "MG"),

        'cpf'=>array('tipo'=> 'number', 'nome'=> 'cpf', 'label'=> 'CPF', 'placeholder'=> 'Informe seu CPF.', 'funcao_validacao'=> 'validaCpf'),

        'descricao'=>array('tipo'=> 'textarea', 'nome'=> 'descricao', 'label'=> 'Descrição', 'placeholder'=> "Faça uma descrição sobre você", 'obrigatorio'=>false),

        'botao_enviar'=>array('tipo'=> 'submit', 'nome'=> 'enviar', 'label'=> 'Enviar'),
        
        'botao_limpar_form'=>array('tipo'=> 'reset', 'nome'=> 'reset', 'label'=> 'Limpar Formulário'),
    )
);

function geraOptions($options){
    $opcoes = '';
    $opcoes .= "<option value='' >-</option>";
    foreach($options['opcoes'] as $chave => $valor){
        if ($chave == $options['valor_padrao']) {
            $opcoes .= "<option value=" . $chave . " selected>". $valor ."</option>";
        }
        else{
            $opcoes .= "<option value=" . $chave . ">". $valor ."</option>";
        }
    }
    return $opcoes;
}
function geraInputTextNumber($elForm, $chave, $required = true){
    if($required){
        return "<label for = ".$elForm['nome']."> ".$elForm['label']."</label> <input id= ".$chave." type = ".$elForm['tipo']." placeholder = ".$elForm['placeholder']." name= ". $elForm['nome']." required>"; 
    }
    else{
        return "<label for = ".$elForm['nome']."> ".$elForm['label']."</label> <input id= ".$chave." type = ".$elForm['tipo']." placeholder = ".$elForm['placeholder']." name= ".$elForm['nome'].">"; 
    }
};

function geraInputTextArea($elForm, $chave, $required = true){

    $requiredOption = "<label for = ".$elForm['nome']."> ".$elForm['label']."</label> <textarea id = ".$chave."placeholder=".$elForm['placeholder']."name=".$elForm['nome']." required>";

    $notRequiredOption = "<label for = ".$elForm['nome']."> ".$elForm['label']."</label> <textarea id = ".$chave."placeholder=".$elForm['placeholder']."name=".$elForm['nome'].">";

    if( array_key_exists('valor_padrao', $elForm) ){
        $requiredOption .= ($elForm['valor_padrao'] . "</textarea> ");
        $notRequiredOption .= ($elForm['valor_padrao'] . "</textarea> ");
        if($required){
            return  $requiredOption;
        }
        else{
            return $notRequiredOption;
        }
    }
    else{
        $requiredOption .= "</textarea> ";
        $notRequiredOption .= "</textarea> ";
        if($required){
            return  $requiredOption;
        }
        else{
            return $notRequiredOption;
        }
    }
};

function geraInputSelect($elForm, $chave, $required = true){
    $label = "<label for=" . $elForm['nome']. ">".$elForm['label']."</label>";
    if($required){
        return "$label" . '<select '. "name=". $elForm['nome'] . " id=". $chave . " required>". geraOptions($elForm) ."</select>";
    }
    return '<select '. "name=". $elForm['nome'] . " id=". $chave . ">". geraOptions($elForm['opcoes']) ."</select>";
};

function geraOptionsCheckboxRadio ($opcoes, $chave) {
    $inputs = '';
    

    foreach($opcoes['opcoes'] as $key => $valor){
        $notCheckedOption = "<input type=". $opcoes['tipo'] . " id= " . $chave. '_' .$key. " name='" . $chave . "' value=".$valor."> <label for=". $chave. '_' .$key. ">$valor</label>";

        $checkedOption = "<input type=". $opcoes['tipo'] . " id= " . $chave. '_' .$key . " name=" . $chave . " value=".$valor." checked> <label for=". $chave. '_' .$key. " >$valor</label>";

        if(array_key_exists('valor_padrao', $opcoes)){
            if (in_array($key, $opcoes['valor_padrao'])) {
                $inputs .= $checkedOption;
    
            }
            else{
                $inputs .= $notCheckedOption;
            }
        }
        else{
            $inputs .= $notCheckedOption;
        }
    }
    return $inputs;
}

function geraInputCheckboxRadio($elForm, $chave){
    $opcoes = '';
    $opcoes .= "<label>".$elForm['label']."</label>";
    $opcoes .= geraOptionsCheckboxRadio($elForm, $chave);
    return $opcoes;
};

function geraInputResetSubmitButton($elForm, $chave){
    return "<button id=" . $chave ."type= ". $elForm['tipo'] ." name=" . $elForm['nome'] . ">". $elForm['label'] ."</button>";
}

function criarCampo($dados, $chave){
    $campo = '';
    if($dados['tipo'] == 'text' || $dados['tipo'] == 'number'){
        if(array_key_exists('obrigatorio', $dados) ){
            $campo .= geraInputTextNumber($dados, $chave, $dados['obrigatorio']);
        }
        else{
            $campo .= geraInputTextNumber($dados, $chave);
        }
    }
    if($dados['tipo'] == 'textarea'){
        if(array_key_exists('obrigatorio', $dados) ){
            $campo .= geraInputTextArea($dados, $chave, $dados['obrigatorio']);
        }
        else{
            $campo .= geraInputTextArea($dados, $chave);
        }
    }
    if($dados['tipo'] == 'select'){
        if(array_key_exists('obrigatorio', $dados) ){
            $campo .= geraInputSelect($dados, $chave, $dados['obrigatorio']);
        }
        else{
            $campo .= geraInputSelect($dados, $chave);
        }
    }
    if($dados['tipo'] == 'checkbox' || $dados['tipo'] == 'radio'){
        $campo .= geraInputCheckboxRadio($dados, $chave);
    }
    if($dados['tipo'] == 'reset' || $dados['tipo'] == 'submit' || $dados['tipo'] == 'button'){
        $campo .= geraInputResetSubmitButton($dados, $chave);
    }
    return $campo;
};

function criarFormulario($arrCampos){
    echo "<form method =". $arrCampos['tipo_submit'] ." action =".$arrCampos['url_submit'] .
    " id=".$arrCampos['id'] .">";
    $botoes = array();
    foreach($arrCampos['itens'] as $chave => $valor){
        if($valor['tipo'] == 'submit' || $valor['tipo'] == 'button' || $valor['tipo'] == 'reset'){
            array_push($botoes, array($chave => $valor));
        }
        else{
            echo '<div class="itemWrapper">';
                echo criarCampo($valor, $chave);
            echo '</div>';
        }
    }
    echo '<div class="itemWrapperBTNsSubmitReset">';
        foreach($botoes as $valor){
            foreach($valor as $chave => $val){
                echo criarCampo($val, $chave);
            }
        }
    echo '</div>';

    echo "</form>";
};

criarFormulario($formulario);