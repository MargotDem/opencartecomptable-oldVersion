<?php

include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

try {
    
    $sql = "SELECT DISTINCT type_etablissement FROM etablissements";
  
   
    $statement = $pdo->prepare($sql);
    $statement->execute();
    
    $result = $statement->fetchAll();
    
} catch (PDOException $e) {
    
    $error = $e->getMessage();
    echo $error;
}

foreach ($result as $type) {
    
    echo "type : " . $type["type_etablissement"] . "<br>";
}

