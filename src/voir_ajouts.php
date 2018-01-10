<?php 
try {
    
    $sql = "SELECT * FROM etablissements WHERE date_ajout >= '$date' ORDER BY date_ajout";
    
    $statement = $pdo->prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();

} catch (PDOException $e) {
    
    echo 'nope' . $e->getMessage();
    
}