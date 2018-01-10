<?php 
try {
    
    $sql = "SELECT * FROM suppressions WHERE date_suppression >= '$date' ORDER BY date_suppression";
    $statement = $pdo->prepare($sql);
    
    $statement->execute();
    
    $result = $statement->fetchAll();

} catch (PDOException $e) {
    
    echo 'nope' . $e->getMessage();
    
}