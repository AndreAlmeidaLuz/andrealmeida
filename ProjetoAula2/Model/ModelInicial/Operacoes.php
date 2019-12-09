<?php
session_start();
require_once ("../../Model/ConexaoBanco.php");


class Operacoes {

    private $nome;
    private $endereco;
    private $email;
    private $telefone;
    private $login;
    private $senha;
    private $senhaconfirma;

    function getNome() {
        return $this->nome;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getSenhaconfirma() {
        return $this->senhaconfirma;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setSenhaconfirma($senhaconfirma) {
        $this->senhaconfirma = $senhaconfirma;
    }

    function cadastrar() {
        $conexao = new ConexaoBanco();
        $conecta = $conexao->conectar();
        
                $sql = "INSERT INTO cadastro(nome, email, endereco, telefone, login, senha, senha_confirma)
            VALUES('$this->nome', '$this->email', '$this->endereco', '$this->telefone' , '$this->login', '$this->senha', 
                '$this->senhaconfirma')";

                $query = mysqli_query($conecta, $sql);


                if ($query) {
                    $nome = $this->nome;
                  $_SESSION['cadastrado_sucesso'] = "<p class= 'alert alert-success'> Parabéns $nome! Agora você já está cadastrado em nosso sistema. </p>";
                    header("location:/ProjetoAula2/Login_v6/index.php");
                }

                 else {
                    $mensagem= new Mensagens();
                    $mensagem->fracasso();
                    
                }
            }
            
    
    function verificar(){
        $conexao = new ConexaoBanco();
        $conecta = $conexao->conectar();
     
            $login= $_POST['login'];
            $senha = $_POST['senha'];
            
           
            
            $sql = "SELECT * FROM cadastro WHERE login = '$login' AND senha= '$senha'";
            
            $query= mysqli_query($conecta, $sql);
            $resultado = mysqli_num_rows($query);
            
                if($resultado >0){
                   $_SESSION['logado']=true;
                    $_SESSION['login'] =$login;
                    $_SESSION['senha'] = $senha;
                      header("location:../../Controller/ControllerInicial/painel.php");
                     
                    }
                    
                    else{
                        unset($_SESSION['login']);
                        unset($_SESSION['senha']);
                        
                        $_SESSION['falha_login'] = "<p class='alert alert-danger' role='alert'>Usuário ou senha incorretos!</p>";
  

                        header("location:/ProjetoAula2/Login_v6/index.php");
                      
                    }
             
    }
}
        

