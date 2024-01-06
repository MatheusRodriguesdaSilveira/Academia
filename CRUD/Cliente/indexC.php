<!DOCTYPE html>
<html lang = "pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content=" width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/cadastro.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>Cadastro</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
  <header>
      <nav>
        <br><br><br>
        <a href="index.html" class="logo"> <img src="logo2.png.png" height="120" width="120"></a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Cadastrar-se</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.html">Voltar</a>
        </li>
      </ul>
      </nav>
</header>
    </div>
  </div>
</nav>
<div class="container">
<div class="row">
<div class="col mt-5">
<div class="content">
<?php
    include("config.php");
switch(@$_REQUEST["page"]){
    case "novo":
        include("novo-cliente.php");
        break;
    case "listar":
        include("listar-cliente.php");
        break;
    case "salvar":
        include("salvar-cliente.php");
        break;
    case "editar":
        include("editar-cliente.php");
        break;
        default:
        print "<h1><br>Faça já seu Cadastro!</h1>";
    }

?>
</div>
</div>
</div>

        <script src="js/bootstrap.bundle.min;js"></script>       
    </body>
</html>