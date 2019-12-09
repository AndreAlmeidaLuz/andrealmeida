<?php
session_start();
ob_start();
require_once "../../Model/ModelEmpresa/Dados.php";
#require_once "Validacao.php";


$razao = $_POST["razao"];
$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$responsavel = $_POST["responsavel"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$botao = $_POST["botao"];



$cadastrar = new Empresa();

$cadastrar->setRazao($razao);
$cadastrar->setNome($nome);
$cadastrar->setCnpj($cnpj);
$cadastrar->setEndereco($endereco);
$cadastrar->setNumero($numero);
$cadastrar->setBairro($bairro);
$cadastrar->setCidade($cidade);
$cadastrar->setEstado($estado);
$cadastrar->setResponsavel($responsavel);
$cadastrar->setEmail($email);
$cadastrar->setTelefone($telefone);
/*
$validacao = new Validacao();
$_SESSION['razao_empresa']= $validacao->validarCampo("Razao Social", $razao, 50, 2);
$_SESSION['nome_empresa']= $validacao->validarCampo("Nome", $nome, 50, 2);
$_SESSION['cnpj_empresa']= $validacao->validarCampo("CNPJ", $cnpj, 14, 14);
$_SESSION['endereco_empresa']= $validacao->validarCampo("Endereço", $endereco, 50, 5);
$_SESSION['numero_empresa']= $validacao->validarNumero("Número", $numero);
#$_SESSION['numerodefinir_empresa']= $validacao->validarCampo("Número", $numero, 8, 1);
$_SESSION['bairro_empresa']= $validacao->validarCampo("Bairro", $bairro, 50, 2);
$_SESSION['cidade_empresa']= $validacao->validarCampo("Cidade", $cidade, 30, 3);
$_SESSION['estado_empresa']= $validacao->validarCampo("Estado", $estado, 14, 3);
$_SESSION['reponsavel_empresa']= $validacao->validarCampo("Responsável", $responsavel, 45, 4);
$_SESSION['email_empresa']= $validacao->validarEmail($email);
$_SESSION['telefone_empresa']= $validacao->validarNumero("Telefone", $telefone);      
#$_SESSION['telefonedefinir_empresa']= $validacao->validarCampo("telefone", $telefone, 11, 8);

header("location:../../View/ViewEmpresa/form.inserir.empresa.php");

*/

 
    if($botao =="Cadastrar"){
$cadastrar->inserir();

}

 if($botao=="Alterar"){
    $id= $_POST["id"];
    $cadastrar->alterar($id);


    
}




