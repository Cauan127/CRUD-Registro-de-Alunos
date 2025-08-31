<?php

try{

    echo"<h1>Novo aluno cadastrado</h1>";
    echo"Nome: " . $_POST['Nome'];
    echo"<br>";
    echo"Idade: " . $_POST['Idade'];
    echo"<br>";
    echo"Cpf: " . $_POST['Cpf'];
    echo"<br>";
    echo"Curso: " . $_POST['Curso'];
    echo"<br>";
    echo"Professor: " . $_POST['Professor'];
    echo"<br>";
    echo"Sala: " . $_POST['Sala'];
    echo"<br>";
    echo"Andar: " . $_POST['Andar'];
    echo"<br>";
    echo"<br>";

} catch(PDOException $e){

    echo"Nenhum dado preenchido!" . $e->getMessage();

}

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once"conexao.php";

try{

    $Nome = filter_var($_POST['Nome']);
    $Idade = filter_var($_POST['Idade']);
    $Cpf = filter_var($_POST['Cpf']);
    $Curso = filter_var($_POST['Curso']);
    $Professor = filter_var($_POST['Professor']);
    $Sala = filter_var($_POST['Sala']);
    $Andar = filter_var($_POST['Andar']);

    $insert = $conn->prepare("insert into onori(Nome,Idade,Cpf,Curso,Professor,Sala,Andar)values (:Nome, :Idade, :Cpf, :Curso, :Professor, :Sala, :Andar)");

    $insert->execute([
        ':Nome'    => $Nome,
        ':Idade'   => $Idade,
        ':Cpf'     => $Cpf,
        ':Curso'  => $Curso,
        ':Professor'   => $Professor,
        ':Sala'    => $Sala,
        ':Andar'   => $Andar
    ]);

    header("Location: listagem.php?msg=Registrado");
    
} catch(PDOException $e){

    echo "erro". $e->getMessage();

    header("Location: listagem.php?msg=erro");

}
    
?>