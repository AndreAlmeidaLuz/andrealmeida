<?php
require_once ("../../Model/ConexaoBanco.php");

class Empresa {

    private $razao;
    private $nome;
    private $cnpj;
    private $endereco;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;
    private $responsavel;
    private $email;
    private $telefone;

    function getRazao() {
        return $this->razao;
    }

    function getNome() {
        return $this->nome;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getNumero() {
        return $this->numero;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getResponsavel() {
        return $this->responsavel;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setRazao($razao) {
        $this->razao = $razao;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function inserir() {
        $con = new ConexaoBanco();
        $conecta = $con->conectar();

        $sql = "INSERT INTO empresa(razao_social, nome_fantasia, cnpj, endereco, numero, bairro, cidade, estado, responsavel, email, telefone)
            VALUES('$this->razao', '$this->nome', '$this->cnpj', '$this->endereco', '$this->numero' , '$this->bairro', '$this->cidade', 
                '$this->estado', '$this->responsavel', '$this->email', '$this->telefone')";

        $query = mysqli_query($conecta, $sql);


        if ($query) {
          
             $_SESSION['sucesso_cadastroempresa'] ="<p class='alert alert-success' role='alert'>EMPRESA CADASTRADA COM SUCESSO!</p>";
  
                        header("location:../../View/ViewEmpresa/formulario_empresa.php");
        } 
        else {
            $_SESSION['erro_cadastro_empresa'] = "<p class='alert alert-danger' role='alert'>ERRO AO CADASTRAR EMPRESA, TENTE NOVAMENTE!</p>";
                 header("location:../../View/ViewEmpresa/formulario_empresa.php");

  
        }
    }
    function buscar($id){
        $con = new ConexaoBanco();
        $conecta = $con->conectar();
        
        $sql = "SELECT * FROM empresa WHERE idempresa= $id";
        $query = mysqli_query($conecta, $sql);
       return mysqli_fetch_assoc($query);
    }
    
function alterar($id){
    $con = new ConexaoBanco();
        $conecta = $con->conectar();
        
    $sql = "UPDATE empresa set razao_social='$this->razao', nome_fantasia='$this->nome',cnpj = '$this->cnpj', endereco='$this->endereco', numero = '$this->numero', bairro = '$this->bairro', cidade ='$this->cidade', estado = '$this->estado', responsavel ='$this->responsavel', email= '$this->email', telefone = '$this->telefone' 
where idempresa=$id";
    $query = mysqli_query($conecta, $sql);
    
             if ($query) {
                $_SESSION['sucesso_alteradoempresa'] = "<p class='alert alert-success' role='alert'>DADOS DE EMPRESA ALTERADOS COM SUCESSO!</p>";
  
                        header("location:../../View/ViewEmpresa/listar_empresa.php");
        } 
        else {
            $_SESSION['erro_alterar_empresa'] = "<p class='alert alert-danger' role='alert'>ERRO AO TENTAR ALTERAR EMPRESA, TENTE NOVAMENTE!</p>";
                 header("location:../../View/ViewEmpresa/listar_empresa.php");
        }
}

function deletar($id){
    $con = new ConexaoBanco();
    $conecta = $con->conectar();
    $id = $_GET['id'];
    $sql= "delete from empresa where idempresa = $id";
    
    $query = mysqli_query($conecta,$sql);
    
    if($query){
        $_SESSION['sucesso_deletadoempresa'] = "<p class='alert alert-success' role='alert'>EMPRESA DELETADA COM SUCESSO!</p>";
  
                        header("location:../../View/ViewEmpresa/listar_empresa.php");
    
    }
    
    else{
         $_SESSION['erro_deletar_empresa'] = "<p class='alert alert-danger' role='alert'>ERRO AO TENTAR DELETAR EMPRESA, TENTE NOVAMENTE!</p>";
                 header("location:../../View/ViewEmpresa/listar_empresa.php");
         
    }
    
    
}
