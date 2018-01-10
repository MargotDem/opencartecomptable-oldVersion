<?php 
try {
    
    $sql = "SELECT * FROM etablissements WHERE date_modification >= '$date' ORDER BY date_modification";
    
    $statement = $pdo->prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();

} catch (PDOException $e) {
    
    echo 'nope' . $e->getMessage();
    
}