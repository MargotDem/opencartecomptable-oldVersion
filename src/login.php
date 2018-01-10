<?php
require '../config/config.php';

error_reporting(E_ERROR | E_PARSE);


if (isset($_POST["email"]) && isset($_POST["password"])) {
    
    // Vérification captcha:

    $secret = "6Lf0rjcUAAAAAB43d0bO8USekG0VWq-hcTBqbvAz";

    $response = $_POST['g-recaptcha-response'];

    $remoteip = $_SERVER['REMOTE_ADDR'];
	
    $api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
        . $secret
        . "&response=" . $response
        . "&remoteip=" . $remoteip ;
	
    $decode = json_decode(file_get_contents($api_url), true);
    
	
    if ($decode['success'] == true) {
		
        $password = hash_hmac('sha256', $_POST['password'], 'saltyocc');
    
        try {
        
            $sql = 'SELECT * FROM admin WHERE email = :email AND motdepasse = :password';
    
            $email = $_POST["email"];
    
            $statement = $pdo->prepare($sql);
            $statement->bindValue(':email', $email);
            $statement->bindValue(':password', $password);
            $statement->execute();
         
            $result = $statement->fetchAll();
        
        } catch (PDOException $e) {
        
            echo 'erreur';
            exit();
        }
    
        if ($result[0]["id"] > 0) {
          
            session_start();
            
            $_SESSION["id"] = $result[0]["id"];
            
            if ($result[0]["super_admin"] == 1) {
                
                $_SESSION["super_admin"] = 1;
            }
          
            header ('location: ../admin/index.php');
          
        } else {
          
            session_start();
            session_unset();
            session_destroy();
            header ('location: ../admin/index.php');
          
        }
        
    } else {
    
        session_start();
        session_unset();
        session_destroy();
        header ('location: ../admin/index.php');
    
    }
    
} else {
    
    echo "Le formulaire d'authentification n'a pas été rempli";
}