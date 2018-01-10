<?php

if (isset($_POST['modifier'])) {
   
try
{
    $sql = "UPDATE etablissements SET commune = :commune WHERE code_uai = '" . $_POST['code_uai'] . "'; UPDATE etablissements SET academie = :academie WHERE code_uai = '" . $_POST['code_uai'] . "'; UPDATE etablissements SET type_etablissement = :type_etablissement WHERE code_uai = '" . $_POST['code_uai'] . "'; UPDATE etablissements SET nom = :nom WHERE code_uai = '" . $_POST['code_uai'] . "'; UPDATE etablissements SET adresse = :adresse WHERE code_uai = '" . $_POST['code_uai'] . "'; UPDATE etablissements SET code_postal = :code_postal WHERE code_uai = '" . $_POST['code_uai'] . "'; UPDATE etablissements SET departement = :departement WHERE code_uai = '" . $_POST['code_uai'] . "'; UPDATE etablissements SET region = :region WHERE code_uai = '" . $_POST['code_uai'] . "'; UPDATE etablissements SET telephone = :telephone WHERE code_uai = '" . $_POST['code_uai'] . "'; UPDATE etablissements SET date_modification = CURRENT_TIMESTAMP WHERE code_uai = '" . $_POST['code_uai'] . "'; UPDATE etablissements SET ip_modification = :ip_modification WHERE code_uai = '" . $_POST['code_uai'] . "'; UPDATE etablissements SET ca = :ca WHERE code_uai = '" . $_POST['code_uai'] . "'";
    
    $commune = $_POST['commune2'];
    $academie = $_POST['academie2'];
    $type_etablissement = $_POST['type_etablissement2'];
    $nom = $_POST['nom2'];
    $adresse = $_POST['adresse2'];
    $code_postal = $_POST['code_postal2'];
    $departement = $_POST['departement2'];
    $region = $_POST['region2'];
    $telephone = $_POST['telephone2'];
    $ip_modification = $_SERVER['REMOTE_ADDR'];
    $ca = $_POST['ca2'];
    
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':commune', $commune, PDO::PARAM_STR);
    $statement->bindParam(':academie', $academie, PDO::PARAM_STR);
    $statement->bindParam(':type_etablissement', $type_etablissement, PDO::PARAM_STR);
    $statement->bindParam(':nom', $nom, PDO::PARAM_STR);
    $statement->bindParam(':adresse', $adresse, PDO::PARAM_STR);
    $statement->bindParam(':code_postal', $code_postal, PDO::PARAM_STR);
    $statement->bindParam(':departement', $departement, PDO::PARAM_STR);
    $statement->bindParam(':region', $region, PDO::PARAM_STR);
    $statement->bindParam(':telephone', $telephone, PDO::PARAM_STR);
    $statement->bindParam(':ip_modification', $ip_modification, PDO::PARAM_STR);
    $statement->bindParam(':ca', $ca, PDO::PARAM_STR);
    $statement->execute();
    
  }
  catch (PDOException $e)
  {
      $error = "La modification n'a pas marché : " . $e->getMessage();
      include $_SERVER['DOCUMENT_ROOT'] . "/templates/error.html.php";
  exit();
}

    
    
}


?>