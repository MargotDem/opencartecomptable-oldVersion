<?php

try {
    
    $sql = "UPDATE etablissements SET memo = :memo WHERE code_uai = :code_uai; UPDATE etablissements SET date_modification = CURRENT_TIMESTAMP WHERE code_uai = :code_uai; UPDATE etablissements SET ip_modification = :ip_modification WHERE code_uai = :code_uai";
    
    $memo = $_POST["memo"];
    $code_uai = $_POST["code_uai"];
    $ip_modification = $_SERVER['REMOTE_ADDR'];
   
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':memo', $memo, PDO::PARAM_STR);
    $statement->bindParam(':ip_modification', $ip_modification, PDO::PARAM_STR);
    $statement->bindParam(':code_uai', $code_uai, PDO::PARAM_STR);
    $statement->execute();
    
} catch (PDOException $e) {
    
    $error = "La modification n'a pas marché : " . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] . "/templates/error.html.php";
}