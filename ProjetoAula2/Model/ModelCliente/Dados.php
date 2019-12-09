<?php
require_once ("../../Model/ConexaoBanco.php");

class Dados {

    private $nome;
    private $cpf;
    private $endereco;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;
    private $email;
    private $telefone;
    private $valor;

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
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

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getValor() {
        return $this->valor;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
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

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function cadastrar() {
        $con = new ConexaoBanco();
        $conecta = $con->conectar();
   
        $sql = "INSERT INTO cliente(nome, cpf, endereco, numero, bairro, cidade, estado, email, telefone, valor_limite_compra)
                VALUES('$this->nome', '$this->cpf', '$this->endereco', '$this->numero', '$this->bairro','$this->cidade', '$this->estado', 
                '$this->email','$this->telefone','$this->valor')";

          $conectando = mysqli_query($conecta, $sql);    
          
          if($conectando){
              
                $_SESSION['sucesso_cadastro'] = "<p class='alert alert-success' role='alert'>CLIENTE CADASTRADO COM SUCESSO!</p>";
  
                        header("location:../../View/ViewCliente/formulario_cliente.php"); 
          }
          else{
             $_SESSION['erro_cadastro_cliente'] = "<p class='alert alert-danger' role='alert'>ERRO AO CADASTRAR CLIENTE, TENTE NOVAMENTE!</p>";

             header("location:../../View/ViewCliente/formulario_cliente.php"); 
          }
    }
    
 function buscar($id){
        $con = new ConexaoBanco();
        $conecta = $con->conectar();
        
        $sql = "SELECT * FROM cliente WHERE idcliente= $id";
        $query = mysqli_query($conecta, $sql);
       return mysqli_fetch_assoc($query);
    }
    
function alterar($id){
    $con = new ConexaoBanco();
        $conecta = $con->conectar();
        
    $sql = "UPDATE cliente set nome='$this->nome', cpf='$this->cpf',endereco='$this->endereco', numero ='$this->numero', bairro = '$this->bairro', cidade = '$this->cidade', estado= '$this->estado', email= '$this->email', telefone = '$this->telefone', valor_limite_compra= '$this->valor' 
where idcliente=$id";
    $query = mysqli_query($conecta, $sql);
    
             if ($query) {
                $_SESSION['alterado_sucesso'] = "<p class='alert alert-success' role='alert'>DADOS DE CLIENTE ALTERADO SUCESSO!</p>";
  
                        header("location:../../View/ViewCliente/listar_cliente.php");
        } 
        else {
           $_SESSION['erro_alterar_cliente'] = "<p class='alert alert-danger' role='alert'>ERRO AO TENTAR ALTERAR DADOS, TENTE NOVAMENTE!</p>";
           header("location:../../View/ViewCliente/listar_cliente.php");
        }
}

function deletar($id){
    $con = new ConexaoBanco();
    $conecta = $con->conectar();
    $id = $_GET['id'];
    
    $sql = "DELETE FROM cliente where idcliente = $id";
    
    $query = mysqli_query($conecta, $sql);
    
    
    if($query){
         $_SESSION['deletado_sucesso'] = "<p class='alert alert-success' role='alert'>DADOS DELETADOS COM SUCESSO!</p>";
  
                        header("location:../../View/ViewCliente/listar_cliente.php");
    }
    else{
        $_SESSION['erro_deletar_cliente'] ="<p class='alert alert-danger' role='alert'>ERRO AO TENTAR DELETAR DADOS, TENTE NOVAMENTE!</p>";
        header("location:../../View/ViewCliente/listar_cliente.php");
    }
}

}
