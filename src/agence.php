<?php
try {
    
    $sql = "SELECT * FROM etablissements WHERE code_uai_agence_comptable = :code ORDER BY nom DESC";

    $code = $_GET['agence'];
    
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':code', $code, PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetchAll(); 
}
    
catch (PDOException $e) {
    
    $error = 'Erreur au niveau de la base de données : ' . $e->getMessage();
    
    echo $error;
}
  
$agence = "";

foreach ($result as $row) {
    if ($row['code_uai'] == $_GET['agence']) {
        $agence = html($row['nom']);
    }
}