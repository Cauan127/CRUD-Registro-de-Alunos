<?php

  $usuario = "root";

  $senha = "";

  try{

    $conn = new PDO('mysql:host=localhost;port=3306;dbname=onori;charset=utf8', $usuario, $senha);

      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  }
    
  catch(PDOException $e){
    echo "Erro de conexão";
       $e->getMessage();
  
  }
  
?>