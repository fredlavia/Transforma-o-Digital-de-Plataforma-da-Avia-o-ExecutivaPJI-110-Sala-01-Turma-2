<?php
include_once('config.php');

if(isset($_POST['submit']))
{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem']; // Corrigido de $endereco para $mensagem

    $result = mysqli_query($conexao, "INSERT INTO contatos(nome, email, assunto, mensagem) 
                                     VALUES ('$nome', '$email', '$assunto', '$mensagem')");

    if($result) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($conexao);
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Easy Fly</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.home.css">
  <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">

<link rel="stylesheet" href="style.contato.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light custom-navbar" style="font-size: 25px;">
      <div class="container-fluid">
        
        <a class="navbar-brand" href="home.html" style="margin-left: 40px; font-size: 36px; color: white;" alt="Seu Logotipo" title="Home">Easy Fly</a>
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto" style="margin-top: 20px;"> 
            <li class="nav-item" style="margin-right: 30px;"> 
              <a class="nav-link" href="home.html">Home</a>
            </li>
            <li class="nav-item" style="margin-right: 30px;"> 
              <a class="nav-link" href="quem_somos.html">Quem Somos</a>
            </li>
            <li class="nav-item" style="margin-right: 30px;">
              <a class="nav-link" href="servicos.html">Serviços</a>
            </li>
            <li class="nav-item " style="margin-right: 30px;">
              <a class="nav-link" href="contato.html">Contato</a>
            </li>
          </ul>
        
          <div class="btn-group" role="group">
            <a href="login.php" class="btn btn-primary">Login</a>
            <a href="formulario.php" class="btn btn-secondary">Cadastre-se</a> 
          </div>
        </div>
      </div>
    </nav>
    
  </header>
 
  <body>

    <section>
  <div class="container" style="margin-bottom: 240px; margin-top: 210px;">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mt-5">
          <div class="card-body">
            <i class="fas fa-check-circle text-success fs-2 mb-3"></i>
            <h2 class="card-title">Obrigado pelo seu envio!</h2>
            <p class="card-text">Recebemos sua mensagem e entraremos em contato em breve.</p>
          </div>
        </div>
      </div>
    </div>
  </div>





</section>
<footer>
  <div class="container">
    <p> Desenvolvido por: <a href="https://www.linkedin.com/in/jeferson-moreira-bb640a11b/">Jeferson Moreira</a> © Todos os direitos reservados</p>
  </div>
</footer>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


 <script src="script.js"></script>


</body>
</html>