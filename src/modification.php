<?php
try {
    
    $sql = "UPDATE etablissements SET code_uai_agence_comptable = :code_uai_agence_comptable WHERE code_uai = :code_uai";
    
    $code_uai_agence_comptable = $_POST['code_uai_agence_comptable2'];
    $code_uai = $_POST['code_uai'];
   
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':code_uai_agence_comptable', $code_uai_agence_comptable, PDO::PARAM_STR);
    $statement->bindParam(':code_uai', $code_uai, PDO::PARAM_STR);
    $statement->execute();
    
} catch (PDOException $e) {
    
    $error = "La modification n'a pas marché : " . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] . "/templates/error.html.php";
}


try {
    
    $sql = "INSERT INTO modifications (ip, code_uai, ancien_code_agence, nouveau_code_agence) VALUES (:ip, :code_uai, :ancien_code_agence, :nouveau_code_agence)";
    
    $ip = $_SERVER['REMOTE_ADDR'];
    $code_uai = $_POST['code_uai'];
    $ancien_code_agence = $_POST['code_uai_agence_comptable'];
    $nouveau_code_agence = $_POST['code_uai_agence_comptable2'];
        
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':ip', $ip, PDO::PARAM_STR);
    $statement->bindParam(':code_uai', $code_uai, PDO::PARAM_STR);
    $statement->bindParam(':ancien_code_agence', $ancien_code_agence, PDO::PARAM_STR);
    $statement->bindParam(':nouveau_code_agence', $nouveau_code_agence, PDO::PARAM_STR);
        
    $statement->execute();
    
} catch (PDOException $e) {
    
    echo "Problème avec l'enregistrement de la modification";    

}