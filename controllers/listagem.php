<?php

 include_once "conexao.php";

 try{

    $conn = $conn->query("select * from onori");

    }catch(PDOException $e){
        echo $e->getMessage();
        exit;

    }

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Gerenciamento de Alunos</h4>
                <a href="formCadastrar.php" class="btn btn-success btn-sm">+ Novo Cadastro</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>CPF</th>
                            <th>Curso</th>
                            <th>Professor</th>
                            <th>Sala</th>
                            <th>Andar</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $conn->fetch(PDO::FETCH_ASSOC)){ ?>
                            <tr>
                                <td><?= $row['Nome']?></td>
                                <td><?= $row['Idade']?></td>
                                <td><?= $row['Cpf']?></td>
                                <td><?= $row['Curso']?></td>
                                <td><?= $row['Professor']?></td>
                                <td><?= $row['Sala']?></td>
                                <td><?= $row['Andar']?></td>
                                <td class="text-center">
                                    <a href="formEditar.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="excluir.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este aluno?')">Excluir</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <div class="mt-3">
                    <h6 class="text-muted"><?= $conn->rowCount()?> aluno(s) cadastrado(s)</h6>
                </div>
            </div>
        </div>
    </div>
</body>
</html>