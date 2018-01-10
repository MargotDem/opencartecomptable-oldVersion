<?php
include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.html.php";

include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

require $_SERVER['DOCUMENT_ROOT'] . "/resources/magicquotes.inc.php";

include $_SERVER['DOCUMENT_ROOT'] . "/resources/htmlout.inc.php";


error_reporting(E_ERROR | E_PARSE);

session_start();

if (!isset($_SESSION["id"])) {
    
    session_destroy();
    
    include $_SERVER['DOCUMENT_ROOT'] . "/templates/login.html.php";
    
} else {
    
    
    
    if (isset($_POST["supprimer_etablissement"])) {
        
        // vérification du RNE rentré dans le formulaire :
        
        if
        
        (
            strlen($_POST['code_uai']) === 8 and
            preg_match("/[A-Z]/", $_POST['code_uai'][7]) and
            preg_match("/[0-9]+/",  substr($_POST['code_uai'], 0, -1))
        )
        
        {
        
            include $_SERVER['DOCUMENT_ROOT'] . "/src/suppression.php";
            
             if ($statement->rowCount() === 1) {
            
                 include $_SERVER['DOCUMENT_ROOT'] . "/templates/suppression_effectuee.html.php";
        } else {
            echo "<div class='bandeau_admin'>L'établissement en question n'existe pas</div><a href=''>Retour</a>";
        }
            
            
            
        } else {
            
            echo "<div class='bandeau_admin'>Rentrez un RNE valide  (sept chiffres et une lettre)</div><a href=''>Retour</a>";
        }
        
        
    }
    
    
    
}


include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.html.php";
?>