<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once"conexao.php";

try{

    $id = $_GET['id'];

    $sqlExcluir = "DELETE FROM onori WHERE id=:id";
    $delete = $conn->prepare($sqlExcluir);
    $delete->bindParam(':id', $id, PDO::PARAM_INT);
    $delete->execute();

    header("Location: listagem.php?msg=excluido");
    exit;

} catch(PDOException $e){
    
    echo "Erro ao remover usuário" . $e->getMessage();

    header("Location: listagem.php?msg=erro");

}

?>