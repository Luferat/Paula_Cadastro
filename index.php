<!DOCTYPE html>
<html lang="pt-BR">

<!--
  By Luferat
  Fiz essa versão nova de 'index.php' porque a versão origianl, salva como 'index.error.php' está com a estrutura HTML5 formata erradamente.
  Por exemplo, temos elementos <div> dentro de <head> e o <body> fecha antes de outros elementos, quando deve fechar somente no final.

  Compare as duas versões e faça ajustes nesta se necessário.
-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro de Usuário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cadastro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link active" aria-current="page" href="index.php">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="?page=novo">Novo Usuário</a> </li>
          <li class="nav-item"> <a class="nav-link" href="?page=lista">Lista de Usuários</a> </li>
        </ul>
      </div>

    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col mt-5">

        <?php

        include("config.php");
        switch (@$_REQUEST["page"]) { // OPA! CUIDADO COM O USO DO '@' em PHP!

          case "novo";
            include("novo.php");
            break;

          case "lista";
            include("lista.php");
            break;

          case "salvar";
            include("salvar-usuario.php");
            break;

          case "editar";
            include("editar-usuario.php");
            break;

          default;
            print "<h3>Bem Vindo!</h3>";
        };

        ?>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <br><br>

  <footer>
    <div style="text-align:center">
      <p>Desenvolvido por Ana Paula Simões e Maryanna Silveira em 2022!</p>
    </div>
  </footer>

</body>

</html>