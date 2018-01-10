<?php

try {
    
    $sql = "SELECT * FROM etablissements WHERE code_uai_agence_comptable = :code_uai";

    $code_uai = $_POST["code_uai"];
    
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':code_uai', $code_uai, PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetchAll(); 
}
    
catch (PDOException $e) {
    
    $error = 'Erreur au niveau de la base de données : ' . $e->getMessage();
    
    echo $error;
}