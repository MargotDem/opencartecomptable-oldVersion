<?php
if (isset($_POST["supprimer_etablissement"])) {
    
    try {
        
        $sql = "DELETE FROM etablissements WHERE code_uai = :code_uai";
        
        $code_uai = $_POST["code_uai"];
        
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':code_uai', $code_uai, PDO::PARAM_STR);
        $statement->execute();
        
       
    
    } catch (PDOException $e) {
        $error = "La suppression n'a pas marché : " . $e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'] . "/templates/error.html.php";
        exit();
    }
    
    
    try {
        
        $sql = "INSERT INTO suppressions (code_uai, code_uai_agence_comptable, type_etablissement, nom, adresse, code_postal, commune, departement, region, academie, telephone, date_suppression, ip_suppression, date_ajout, ip_ajout, memo, ca) VALUES (:code_uai, :code_uai_agence_comptable, :type_etablissement, :nom, :adresse, :code_postal, :commune, :departement, :region, :academie, :telephone, CURRENT_TIMESTAMP, :ip_suppression, :date_ajout, :ip_ajout, :memo, :ca)";
            
        $code_uai = $_POST['code_uai'];
        $commune = $_POST['commune'];
        $academie = $_POST['academie'];
        $code_uai_agence_comptable = $_POST['code_uai_agence_comptable'];
        $type_etablissement = $_POST['type_etablissement'];
        $nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $code_postal = $_POST['code_postal'];
        $departement = $_POST['departement'];
        $region = $_POST['region'];
        $telephone = $_POST['telephone'];
        $ip_suppression = $_SERVER['REMOTE_ADDR'];
        $date_ajout = $_POST['date_ajout'];
        $ip_ajout = $_POST['ip_ajout'];
        $memo = $_POST["memo"];
        $ca = $_POST["ca"];
    
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':code_uai', $code_uai, PDO::PARAM_STR);
        $statement->bindParam(':commune', $commune, PDO::PARAM_STR);
        $statement->bindParam(':academie', $academie, PDO::PARAM_STR);
        $statement->bindParam(':code_uai_agence_comptable', $code_uai_agence_comptable, PDO::PARAM_STR);
        $statement->bindParam(':type_etablissement', $type_etablissement, PDO::PARAM_STR);
        $statement->bindParam(':nom', $nom, PDO::PARAM_STR);
        $statement->bindParam(':adresse', $adresse, PDO::PARAM_STR);
        $statement->bindParam(':code_postal', $code_postal, PDO::PARAM_STR);
        $statement->bindParam(':departement', $departement, PDO::PARAM_STR);
        $statement->bindParam(':region', $region, PDO::PARAM_STR);
        $statement->bindParam(':telephone', $telephone, PDO::PARAM_STR);
        $statement->bindParam(':ip_suppression', $ip_suppression, PDO::PARAM_STR);
        $statement->bindParam(':date_ajout', $date_ajout, PDO::PARAM_STR);
        $statement->bindParam(':ip_ajout', $ip_ajout, PDO::PARAM_STR);
        $statement->bindParam(':memo', $memo, PDO::PARAM_STR);
        $statement->bindParam(':ca', $ca, PDO::PARAM_STR);
        $statement->execute();
     
     }
    
     catch (PDOException $e) {
         
         $error = "La création n'a pas marché : " . $e->getMessage();

         include $_SERVER['DOCUMENT_ROOT'] . "/templates/error.html.php";    
        
         exit();
     }
}