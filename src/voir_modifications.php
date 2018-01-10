<?php 
try {
    
    $sql = "SELECT * FROM modifications INNER JOIN etablissements ON modifications.code_uai = etablissements.code_uai WHERE date >= '$date'"; //du coup là je demande toutes les colonnes de la table etablissement, c pas utile en fait, comment ne pas faire ca
    
    $statement = $pdo->prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();

} catch (PDOException $e) {
    
    echo 'nope' . $e->getMessage();
    
}