<?php
include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";


if (isset($_GET['code_uai_A']) and strlen($_GET['code_uai_A']) > 0) {
    
    
    if (    strlen($_GET['code_uai_A']) === 8 and
            preg_match("/[A-Za-z]/", $_GET['code_uai_A'][7]) and
            preg_match("/[0-9]+/",  substr($_GET['code_uai_A'], 0, -1))
       )
    
    {
          
    try {
        
        $sql = "SELECT * FROM etablissements WHERE code_uai = :reponse AND code_uai_agence_comptable = code_uai";
        
        $reponse = $_GET['code_uai_A'];
        
        $statement = $pdo->prepare($sql);
	    $statement->bindParam(':reponse', $reponse, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    }
    
    catch (PDOException $e) {
        
        $error = 'Erreur au niveau de la base de données : ' . $e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'] . '/templates/error.html.php';
        exit();
    
    }
    
    $message = "Soit le code UAI que vous avez rentré ne correspond pas à une agence comptable, soit l'établissement en question n'existe pas dans notre base de données.";
        
    } else {
        
        $message = "Vous n'avez pas tapé un code UAI (7 chiffres et une lettre)";
    }

 
    
    
} elseif (isset($_GET['academie_A'])) {
    
    $criteres = array();

    if (isset($_GET['type_etablissement_A']) and strlen($_GET['type_etablissement_A']) > 1) {
        array_push($criteres, 'type_etablissement');
    }
    if (isset($_GET['nom_A']) and strlen($_GET['nom_A']) > 1) {
        array_push($criteres, 'nom');
    } 
    if (isset($_GET['academie_A']) and strlen($_GET['academie_A']) > 1) {
        array_push($criteres, 'academie');
    } 
    if (isset($_GET['region_A']) and strlen($_GET['region_A']) > 1) {
        array_push($criteres, 'region');
    } 
    if (isset($_GET['departement_A']) and strlen($_GET['departement_A']) > 1) {
        array_push($criteres, 'departement');
    } 
    if (isset($_GET['commune_A']) and strlen($_GET['commune_A']) > 1) {
        array_push($criteres, 'commune');
    }

    if (sizeof($criteres) == 1) {
        
        try {
            $sql = "SELECT * FROM etablissements WHERE code_uai_agence_comptable = code_uai AND " . $criteres[0] . " LIKE :reponse ORDER BY nom";
            
            $reponse = "%" . $_GET[$criteres[0] . '_A'] . "%";

		    $statement = $pdo->prepare($sql);
		    $statement->bindParam(':reponse', $reponse, PDO::PARAM_STR);
		    $statement->execute();

		    $result = $statement->fetchAll(); 
      
        } catch (PDOException $e) {
            
            $error = 'Erreur au niveau de la base de données : ' . $e->getMessage();
            include $_SERVER['DOCUMENT_ROOT'] . '/templates/error.html.php';
            exit();
      
        }
        
    
    } elseif (sizeof($criteres) == 2) {
        
        try {
            $sql = "SELECT * FROM etablissements WHERE code_uai_agence_comptable = code_uai AND " . $criteres[0] . " LIKE :reponse AND " . $criteres[1] . " LIKE :reponse2 ORDER BY nom";

            $reponse = "%" . $_GET[$criteres[0] . '_A'] . "%";
            $reponse2 = "%" . $_GET[$criteres[1] . '_A'] . "%";

		    $statement = $pdo->prepare($sql);
		    $statement->bindParam(':reponse', $reponse, PDO::PARAM_STR);
            $statement->bindParam(':reponse2', $reponse2, PDO::PARAM_STR);
		    $statement->execute();

		    $result = $statement->fetchAll(); 
        
        } catch (PDOException $e) {
            
            $error = 'Erreur au niveau de la base de données : ' . $e->getMessage();
            include $_SERVER['DOCUMENT_ROOT'] . '/templates/error.html.php';
            exit();
        
        }   
    
           
    } else if (sizeof($criteres) == 3) {
        
        try {
            
            $sql = "SELECT * FROM etablissements WHERE code_uai_agence_comptable = code_uai AND " . $criteres[0] . " LIKE :reponse AND " . $criteres[1] . " LIKE :reponse2 AND " . $criteres[2] . " LIKE :reponse3 ORDER BY nom";

            $reponse = "%" . $_GET[$criteres[0] . '_A'] . "%";
            $reponse2 = "%" . $_GET[$criteres[1] . '_A'] . "%";
            $reponse3 = "%" . $_GET[$criteres[2] . '_A'] . "%";

		    $statement = $pdo->prepare($sql);
		    $statement->bindParam(':reponse', $reponse, PDO::PARAM_STR);
            $statement->bindParam(':reponse2', $reponse2, PDO::PARAM_STR);
            $statement->bindParam(':reponse3', $reponse3, PDO::PARAM_STR);
		    $statement->execute();

		    $result = $statement->fetchAll();
        } catch (PDOException $e) {
            
            $error = 'Erreur au niveau de la base de données : ' . $e->getMessage();
            include $_SERVER['DOCUMENT_ROOT'] . '/templates/error.html.php';
            exit();
        
        }
        
    }
}
    

if (isset($_GET['code_uai']) and strlen($_GET['code_uai']) > 0) {
    
    if (
            strlen($_GET['code_uai']) === 8 and
            preg_match("/[A-Za-z]/", $_GET['code_uai'][7]) and
            preg_match("/[0-9]+/",  substr($_GET['code_uai'], 0, -1))
    )
    
    {
       try {
        
        $sql = "SELECT * FROM etablissements WHERE code_uai = :reponse";

        $reponse = $_GET['code_uai'];

		$statement = $pdo->prepare($sql);
		$statement->bindParam(':reponse', $reponse, PDO::PARAM_STR);
		$statement->execute();

		$result = $statement->fetchAll(); 
    
    }
    
    catch (PDOException $e) {
        
        $error = 'Erreur au niveau de la base de données : ' . $e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'] . '/templates/error.html.php';
        exit();
    
    }
        
    } else {
        $message = "Vous n'avez pas tapé un code UAI (7 chiffres et une lettre)";
    }
    
    
    

} elseif (isset($_GET['academie'])) {
    
    $criteres = array();

    if (strlen($_GET['type_etablissement']) > 1) {
        array_push($criteres, 'type_etablissement');
    }
    if (strlen($_GET['nom']) > 1) {
        array_push($criteres, 'nom');
    }
    if (strlen($_GET['academie']) > 1) {
        array_push($criteres, 'academie');
    }
    if (strlen($_GET['region']) > 1) {
        array_push($criteres, 'region');
    }
    if (strlen($_GET['departement']) > 1) {
        array_push($criteres, 'departement');
    }
    if (strlen($_GET['commune']) > 1) {
        array_push($criteres, 'commune');
    }
    
    if (sizeof($criteres) == 1) {
        
        try {
            $sql = "SELECT * FROM etablissements WHERE " . $criteres[0] . " LIKE :reponse ORDER BY nom";

            $reponse = "%" . $_GET[$criteres[0]] . "%";

            $statement = $pdo->prepare($sql);
            $statement->bindParam(':reponse', $reponse, PDO::PARAM_STR);
            $statement->execute();

		    $result = $statement->fetchAll();
        
        } catch (PDOException $e) {
            
            $error = 'Erreur au niveau de la base de données : ' . $e->getMessage();
            include $_SERVER['DOCUMENT_ROOT'] . '/templates/error.html.php';
            exit();
        }
        
    
    } else if (sizeof($criteres) == 2) {
        
        try {
            
            $sql = "SELECT * FROM etablissements WHERE " . $criteres[0] . " LIKE :reponse AND " . $criteres[1] . " LIKE :reponse2 ORDER BY nom";

            $reponse = "%" . $_GET[$criteres[0]] . "%";
            $reponse2 = "%" . $_GET[$criteres[1]] . "%";

		    $statement = $pdo->prepare($sql);
		    $statement->bindParam(':reponse', $reponse, PDO::PARAM_STR);
            $statement->bindParam(':reponse2', $reponse2, PDO::PARAM_STR);
		    $statement->execute();

		    $result = $statement->fetchAll();
        
        } catch (PDOException $e) {
            
            $error = 'Erreur au niveau de la base de données : ' . $e->getMessage();
            include $_SERVER['DOCUMENT_ROOT'] . '/templates/error.html.php';
            exit();
        
        }
        
    
    } else if (sizeof($criteres) == 3) {
        
        try {
            
            $sql = "SELECT * FROM etablissements WHERE " . $criteres[0] . " LIKE :reponse AND " . $criteres[1] . " lIKE :reponse2 AND " . $criteres[2] . " LIKE :reponse3 ORDER BY nom";

            $reponse = "%" . $_GET[$criteres[0]] . "%";
            $reponse2 = "%" . $_GET[$criteres[1]] . "%";
            $reponse3 = "%" . $_GET[$criteres[2]] . "%";

		    $statement = $pdo->prepare($sql);
		    $statement->bindParam(':reponse', $reponse, PDO::PARAM_STR);
            $statement->bindParam(':reponse2', $reponse2, PDO::PARAM_STR);
            $statement->bindParam(':reponse3', $reponse3, PDO::PARAM_STR);
		    $statement->execute();

		    $result = $statement->fetchAll(); 
          
        } catch (PDOException $e) {
            
            $error = 'Erreur au niveau de la base de données : ' . $e->getMessage();
            include $_SERVER['DOCUMENT_ROOT'] . '/templates/error.html.php';
            exit();
        
        }
    }
}