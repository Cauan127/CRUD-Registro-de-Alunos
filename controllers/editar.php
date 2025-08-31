<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "conexao.php";

try {

    $id        = $_POST['id'];
    $Nome      = $_POST['Nome'];
    $Idade     = $_POST['Idade'];
    $Cpf       = $_POST['Cpf'];
    $Curso     = $_POST['Curso'];
    $Professor = $_POST['Professor'];
    $Sala      = $_POST['Sala'];
    $Andar     = $_POST['Andar'];

    $sqlEditar = "UPDATE onori 
                  SET Nome = :Nome, 
                      Idade = :Idade, 
                      Cpf = :Cpf, 
                      Curso = :Curso, 
                      Professor = :Professor, 
                      Sala = :Sala, 
                      Andar = :Andar 
                  WHERE id = :id";

    $editar = $conn->prepare($sqlEditar);

    $editar->bindParam(":Nome", $Nome);
    $editar->bindParam(":Idade", $Idade);
    $editar->bindParam(":Cpf", $Cpf);
    $editar->bindParam(":Curso", $Curso); 
    $editar->bindParam(":Professor", $Professor);
    $editar->bindParam(":Sala", $Sala);
    $editar->bindParam(":Andar", $Andar);
    $editar->bindParam(":id", $id);

    $editar->execute();

    header("Location: listagem.php?msg=editado com sucesso");
        exit;

} catch (PDOException $e) {

    echo "Erro ao editar: " . $e->getMessage();

    header("Location: listagem.php?msg=erro ao editar");
        exit;
}