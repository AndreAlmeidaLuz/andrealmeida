<?php 
session_start();
if(!isset($_SESSION['logado'])){
header("location:/ProjetoAula2/Login_v6/index.php");
}

require_once "../../Model/ModelEmpresa/Listar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Listagem</title>

	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://kit.fontawesome.com/c76fa2deaa.js"></script>

<style type="text/css">
      #tamanho{
        width: 350px;
        
        -webkit-box-shadow: 10px 10px 20px 1px rgba(143,140,143,1);
        -moz-box-shadow: 10px 10px 20px 1px rgba(143,140,143,1);
        box-shadow: 10px 10px 20px 1px rgba(143,140,143,1)
      
      } 

    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
          <ul class="nav nav-pills">
  <li class="nav-item">
    <h5 class="nav-link active">Acesso ao Sistema</h5>
  </li>
  
  
</ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
         
          
          <div style="text-align: right;">
            
              <a class="nav-link js-scroll-trigger" href="/ProjetoAula2/View/ViewInicial/opcao.php">Voltar</a>
            
              
    </nav>
   
    

<div style= "text-align: center; margin-top: -20px; width: 760px; margin-left: 270px">
   <div class="alert alert-primary" role="alert">
   <h4>Listagem de Empresas cadastradas em nosso sistema</h4>
  </div>
  <?php
  if(isset($_SESSION['sucesso_alteradoempresa'])){
      echo $_SESSION['sucesso_alteradoempresa'];
   unset ($_SESSION['sucesso_alteradoempresa']);
  }

  if(isset($_SESSION['erro_alterar_empresa'])){
      echo $_SESSION['erro_alterar_empresa'];
   unset ($_SESSION['erro_alterar_empresa']);
  }

   if(isset($_SESSION['sucesso_deletadoempresa'])){
      echo $_SESSION['sucesso_deletadoempresa'];
   unset ($_SESSION['sucesso_deletadoempresa']);
  }

  if(isset($_SESSION['erro_deletar_empresa'])){
      echo $_SESSION['erro_deletar_empresa'];
   unset ($_SESSION['erro_deletar_empresa']);
  }

  ?>

  </div>

 <div style="text-align: center">
<div class= "container"  style="margin-left: 40px; margin-right: 40px ;width: 1100px">
 
 
 <br>
 <table class="table">
  
  <thead>
     <tr>
      
          <th>Razão</th>
        <th>Nome</th>
        <th>CNPJ</th>
        <th>Endereço</th>
         <th>Número</th>
          <th>Bairro</th>
           <th>Cidade</th>
            <th>Estado</th>
             <th>Responsável</th>
              <th>E-mail</th>
               <th>Telefone</th>
                <th>Ações</th>
       
    </tr>
  

     <?php 
     
     $dados = new Listar();
     
     foreach($dados->listar() as $campo):
     ?>
    <tr>
        <td><?= $campo["razao_social"]; ?></td>
           <td><?= $campo["nome_fantasia"]; ?></td>
              <td><?= $campo["cnpj"]; ?></td>
        <td><?= $campo["endereco"]; ?></td>
           <td><?= $campo["numero"]; ?></td>
           <td><?= $campo["bairro"]; ?></td>
           <td><?= $campo["cidade"]; ?></td>
           <td><?= $campo["estado"]; ?></td>
        <td><?= $campo["responsavel"]; ?></td>
        <td><?= $campo["email"]; ?></td>
        <td><?= $campo["telefone"];?></td>
        
              <td> <a class="btn btn-warning btn-sm " style="color: #fff" href="editar_empresa.php?id=<?= $campo['idempresa']; ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a> </td>


      <td> <a class="btn btn-danger btn-sm " style="color: #fff" href="../../Controller/ControllerEmpresa/deleta.php?id=<?= $campo['idempresa']; ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>
     
    </tr>
    <?php
    endforeach;
    ?>
    
</table>