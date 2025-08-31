<?php
include_once "conexao.php";

try {
    if (!isset($_GET['id'])) {
        throw new Exception("O ID ainda não foi digitado");
    }

    $id = $_GET['id'];
    $sqlEditar = "SELECT * FROM onori WHERE id = :id";
    $editar = $conn->prepare($sqlEditar);
    $editar->bindParam(":id", $id, PDO::PARAM_INT);
    $editar->execute();
    $aluno = $editar->fetch(PDO::FETCH_ASSOC);

    if (!$aluno) {
        throw new Exception("Aluno não encontrado.");
    }

} catch (Exception $e) {
    die("Erro: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Editar Aluno</title>
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow-lg">
      <div class="card-header bg-warning text-dark">
        <h4 class="mb-0">Editar Aluno</h4>
      </div>
      <div class="card-body">
        <form action="editar.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id; ?>">

          <div class="row g-3">

            <div class="col-md-6">
              <label for="Nome" class="form-label">Nome</label>
              <input type="text" name="Nome" id="Nome" class="form-control" value="<?php echo $Nome; ?>" required placeholder="Digite o nome do aluno">
            </div>

            <div class="col-md-2">
              <label for="Idade" class="form-label">Idade</label>
              <input type="int" name="Idade" id="Idade" class="form-control" value="<?php echo $Idade; ?>" required placeholder="idade do aluno">
            </div>

            <div class="col-md-4">
              <label for="Cpf" class="form-label">CPF</label>
              <input type="text" name="Cpf" id="Cpf" class="form-control" value="<?php echo $Cpf; ?>" required placeholder="Digite seu CPF do aluno">
            </div>

            <div class="col-md-6">
               <select name="Curso" id="Curso" class="form-control" required>
                   <option value=""> Selecione o Curso</option>
                     <option value="Sistemas de informação">Sistemas de Informação</option>
                       <option value="Física">Física</option>
                   <option value="Engenharia de Software">Engenharia de Software</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="Professor" class="form-label">Professor</label>
              <input type="text" name="Professor" id="Professor" class="form-control" value="<?php echo $Professor; ?>" required placeholder="Nome do seu professor">
            </div>

            <div class="col-md-3">
              <label for="Sala" class="form-label">Sala</label>
              <input type="int" name="Sala" id="Sala" class="form-control" value="<?php echo $Sala; ?>" required placeholder="Informe a sua sala">
            </div>

            <div class="col-md-3">
              <label for="Andar" class="form-label">Andar</label>
              <input type="text" name="Andar" id="Andar" class="form-control" value="<?php echo $Andar; ?>" required placeholder="Informe sua sala">
            </div>

          </div>

          <div class="mt-4 text-end">
            <button type="submit" class="btn btn-warning px-4">Salvar Alterações</button>
            <a href="listagem.php" class="btn btn-secondary">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
