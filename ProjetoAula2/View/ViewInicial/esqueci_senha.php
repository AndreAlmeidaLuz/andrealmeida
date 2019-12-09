<?php
session_start();
require_once "../cabecalho_atual.php";

?>
 
 

 <div style= "text-align: center;"> <h4> Esqueci minha senha </h4>
 <div class="alert alert-primary" role="alert">
  Informe os dados abaixo para a recuperação da senha
</div>

<div class="form-group">
  <div class="input-group">
    <span class="input-group-addon">
 <i class="fas fa-envelope-open-text"></i>
      </span>
    <input class="form-control left-border-none" type="text" placeholder="Email" />
  </div>
</div>


<div class="form-group">
  <div class="input-group">
    <span class="input-group-addon">
    <i class="fas fa-phone-alt"></i>
      </span>
    <input class="form-control left-border-none" type="text" placeholder="Celular" />
  </div>
</div>
</form>

  
   <a href="/index.php"   class="btn  btn-outline-primary mb-2" >Recuperar senha</a>
  <a href="/ProjetoAula2/Login_v6/index.php"  class="btn  btn-outline-primary mb-2" >Voltar</a>
 
 
</form>

</div>
</body>

    
    
     
    