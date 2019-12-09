  <?php
  session_start();
  if(!isset($_SESSION['logado'])){
  header("location:/ProjetoAula2/Login_v6/index.php");
  }
  $logado = $_SESSION['login'];

  ?>
  <!DOCTYPE html>
  <html lang="en">

    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Opções</title>

      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    </head>


    <body>

      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
            <ul class="nav nav-pills">
    <li class="nav-item">
      <h6 class="nav-link active">Acesso ao sistema</h6>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/ProjetoAula2/View/ViewCliente/listar_cliente.php">Gerenciar dados de clientes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/ProjetoAula2/View/ViewEmpresa/listar_empresa.php">Gerenciar dados de empresas</a>
    </li>
  </ul>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/ProjetoAula2/Login_v6/index.php">Sair</a>
              </li>
            </ul>
        
      </nav>

      <header>
      <div style= "text-align: center; margin-top: 60px; width: 760px; margin-left: 270px">
   <div class="alert alert-primary" role="alert">
   <?php echo " Seja Bem-vindo:  $logado!" ?>
  </div>
  </div>
  </header>

      <section >
      
          
            <div class="col-lg-8 mx-auto">
                
                 <p class="lead" style="width: 760px; margin-left: 40px">Nosso sistema oferece você a oportunidade de poder cadastrar sua empresa ou cliente de forma gratuita, e, futuramente novos serviços estarão disponíveis.
                 </p>

                 </div>
                        

                  <div class= "container" style="width: 800px">  
                 
                 
                 <div class= "row">

                 <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <div style="text-align: center">
        <h5 class="card-title" style="text-align: center">Cliente</h5>         
        <img src="imagem/cliente.png " width="80px">                  
        <p class="card-text">Realizar um cadastro de cliente de forma simples, rápida e gratúita.</p>
        <a href="/ProjetoAula2/View/ViewCliente/formulario_cliente.php" class="btn btn-sm  btn-outline-primary mb-2">Cadastrar Cliente</a>
</div>
        
      </div>
    </div>
  </div>



  <div class="col-sm-6">
    <div style="text-align: center">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center">Empresa</h5>    
          <img src="imagem/empresa.png " width="80px">       
        <p class="card-text">Realizar o cadastro de uma empresa de forma simples, rápida e gratúita.</p>
        <a href="/ProjetoAula2/View/ViewEmpresa/formulario_empresa.php" class="btn btn-sm  btn-outline-primary mb-2">Cadastrar empresa</a>
      </div>
    </div>
    </div> 
  </div>
  

  </div>
  </div>       

      </section>

      <?php
 require_once "../rodape.php";

      ?>
    </body>

  </html>
