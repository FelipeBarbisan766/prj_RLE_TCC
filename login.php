<?php require_once"head.html";?>
<body>
<?php require_once"nav.html" ?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
<section class="vh-50 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Porfavor coloque seu Usuário e Senha</p>
              <form action="" method="POST">
              <div class="form-outline form-white mb-4">
                <input type="email" name="txt_email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Usuário</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="password" name="txt_senha" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Senha</label>
              </div>
              <button class="btn btn-outline-light btn-lg px-5" type="submit">Entrar</button>
              <br>
            </div>
            <p class="text-white-50 mb-5">Se registre aqui<a href="professores.php"> Registre-se</a></p>
<?php
    include('conexao.php');
    
    if(!isset($_SESSION)){
      session_start();
      if(isset($_SESSION['id'])){
        header('Location:teste.php');
      }
    }
      
    if(isset($_POST['txt_email']) || isset($_POST['txt_senha'])) // verifica se existe as variaveis email e senha
    {
      if(strlen($_POST['txt_email']) == 0) // o "strlen" conta quantas letras existe na variavel então se for = a 0 nada foi escrito
      {
        echo '<div class="alert alert-danger" role="alert">Preencha seu E-mail!</div>';
      }
      else if(strlen($_POST['txt_senha']) == 0)
      {
        echo '<div class="alert alert-danger" role="alert">Preencha sua Senha!</div>';
      }
      else{
        $email = $conexao->real_escape_string($_POST['txt_email']);//codigo para evitar invasão (pode ser retirado se quiser)
        $senha = $conexao->real_escape_string($_POST['txt_senha']);
        
        $sql_code = "SELECT * FROM login WHERE email = '$email' AND senha ='$senha'";
        $sql_query = $conexao->query($sql_code) or die("falha na execução do codigo");
        
        $quantidade = $sql_query-> num_rows;
        
        if($quantidade == 1){
          $usuario = $sql_query->fetch_assoc();
          if(!isset($_SESSION)){
            session_start();
          }
          $_SESSION['id'] = $usuario['id'];
          $_SESSION['email'] = $usuario['email'];
          
          header('Location: index.php');
          
        }else{
          echo'<div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">Falha Ao Logar!</h4>
          <p>E-mail ou senha incorretas tente novamente!</p>
          <hr>
          <p>Caso não lembre a senha ou não tem certeza <br> <a href="https://i.imgflip.com/737h8a.jpg" class="alert-link">Click aqui para Alterar !</a></p></div>';
        }
      }
    }
?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
