<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Cadastro de Aluno</title>
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow-lg">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Cadastro de Aluno</h4>
      </div>
      <div class="card-body">
        <form action="cadastrar.php" method="post">
          <div class="row g-3">
            
            <div class="col-md-6">
              <label for="Nome" class="form-label">Nome</label>
              <input type="text" name="Nome" id="Nome" class="form-control" required placeholder="Digite o nome do aluno">
            </div>

            <div class="col-md-2">
              <label for="Idade" class="form-label">Idade</label>
              <input type="int" name="Idade" id="Idade" class="form-control" required placeholder="Idade do aluno">
            </div>

            <div class="col-md-4">
              <label for="Cpf" class="form-label">CPF</label>
              <input type="text" name="Cpf" id="Cpf" class="form-control" required placeholder="Cpf do aluno">
            </div>

            <div class="col-md-6">
              <label for="Curso" class="form-label">Curso</label>
              <select name="Curso" id="Curso" class="form-control" required>
                   <option value=""> Selecione o Curso</option>
                     <option value="Sistemas de informação">Sistemas de Informação</option>
                       <option value="Física">Física</option>
                   <option value="Engenharia de Software">Engenharia de Software</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="Professor" class="form-label">Professor</label>
              <input type="text" name="Professor" id="Professor" class="form-control" required placeholder="Nome do Professor">
            </div>

            <div class="col-md-3">
              <label for="Sala" class="form-label">Sala</label>
              <input type="int" name="Sala" id="Sala" class="form-control" required placeholder="Sala">
            </div>

            <div class="col-md-3">
              <label for="Andar" class="form-label">Andar</label>
              <input type="text" name="Andar" id="Andar" class="form-control" required placeholder="Andar">
            </div>

          </div>

          <div class="mt-4 text-end">
            <button type="submit" class="btn btn-success px-4">Cadastrar</button>
            <a href="listagem.php" class="btn btn-secondary">Voltar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
