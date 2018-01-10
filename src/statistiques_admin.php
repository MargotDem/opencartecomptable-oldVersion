<?php
include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

if (isset($_POST['submitform'])) {
    
    try {
        
        $sql = 'SELECT DISTINCT academie FROM etablissements';

        $result = $pdo->query($sql);
    
        $academies = [];
        
        foreach ($result as $academie) {
            
            $academies[] = $academie['academie'];
        
        }
        
    } catch (PDOException $e) {
        $error = 'Erreur au niveau de la base de données : ' . $e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'] . '/templates/error.html.php';
        exit();
  
    }
    
    $arrayFinal = [];

    //pour chaque académie, sortir toutes les agences comptables, stocker dans un tableau

    foreach ($academies as $academie) {
        
        $agences = [];
    
        try {
            
            $sql = "SELECT code_uai FROM etablissements WHERE code_uai_agence_comptable = code_uai AND academie = '$academie'";
        
            $result = $pdo->query($sql);
            
            foreach ($result as $agence) {
                
                $agences[] = $agence['code_uai'];
                
            }
            
        } catch (PDOException $e) {
            
            $error = 'Erreur au niveau de la base de données : ' . $e->getMessage();
            include $_SERVER['DOCUMENT_ROOT'] . '/templates/error.html.php';
            exit();
        }
        
        $agencesNombre = [];
        
        foreach ($agences as $agence) {
            
            try {
                
                $sql = "SELECT code_uai FROM etablissements WHERE code_uai_agence_comptable = '$agence'";
           
                $result = $pdo->query($sql);
                
                $etablissements = [];
                
                foreach ($result as $etablissement) {
                    
                    $etablissements[] = $etablissement['code_uai'];
                
                }
                
                $nombre = count($etablissements);
                
                $agencesNombre[] = $nombre;
            
            } catch (PDOException $e) {
                
                $error = 'Erreur au niveau de la base de données : ' . $e->getMessage();
                include $_SERVER['DOCUMENT_ROOT'] . '/templates/error.html.php';
                exit();
            }
        }
        
        $moyenne = array_sum($agencesNombre)/count($agencesNombre);
        
        $arrayFinal[$academie] = round($moyenne, 1);
    }
    
    array_shift($arrayFinal);
    
    foreach (array_keys($arrayFinal) as $academie) {
        
        $moyenne = $arrayFinal[$academie];
        
        try {
            
            $sql = "UPDATE statistiques SET moyenne = '$moyenne' WHERE academie = '$academie'";
              
            $statement = $pdo->prepare($sql);
            $statement->execute();
        
        } catch (PDOException $e) {
            
            echo $e->getMessage();
            echo 'Il y a eu un problème';
        }
    }
    
    echo 'Mise à jour effectuée !';
}