<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Sistema de Alunos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow-lg">
      <div class="card-header bg-primary text-white">
      <center>
        <h3 class="mb-0"> NOME DO SEU GERENCIADOR</h3>
      </center>
      </div>
      <div class="card-body text-center">
        <p class="lead">BEM VINDO </p>
        <a href="listagem.php" class="btn btn-success btn-lg m-2">
          <i class="bi bi-database-fill"></i> LISTAR_ALUNOS</a>
        <a href="formCadastrar.php" class="btn btn-primary btn-lg m-2">
          <i class="bi bi-person-plus-fill"></i> NOVO_CADASTRO</a>
      </div>
    </div>
  </div>
<footer class="text-center mt-4 mb-2 text-muted"> &copy; <?php echo date("Y"); ?> 
   SEU_NOME. Todos os direitos reservados. </footer>
</body>
</html>
