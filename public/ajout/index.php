<?php
include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.html.php";

include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

require $_SERVER['DOCUMENT_ROOT'] . "/resources/magicquotes.inc.php";

include $_SERVER['DOCUMENT_ROOT'] . "/resources/htmlout.inc.php";


error_reporting(E_ERROR | E_PARSE);


    
    if (isset($_POST["submitform"])) {
        
        // vérifications du format des réponses au formulaire d'ajout :
        
        if (
            
            strlen($_POST['code_uai']) === 8 and
            preg_match("/[A-Za-z]/", $_POST['code_uai'][7]) and
            preg_match("/[0-9]+/",  substr($_POST['code_uai'], 0, -1)) and
            
            strlen($_POST['code_uai_agence_comptable']) === 8 and
            preg_match("/[A-Za-z]/", $_POST['code_uai_agence_comptable'][7]) and
            preg_match("/[0-9]+/",  substr($_POST['code_uai_agence_comptable'], 0, -1)) and
            
            strlen($_POST["nom"]) > 0 and strlen($_POST["nom"]) < 70 and
            strlen($_POST["commune"]) > 0 and strlen($_POST["commune"]) < 50 and
            strlen($_POST["departement"]) > 0 and strlen($_POST["departement"]) < 50 and
            strlen($_POST["adresse"]) > 0 and strlen($_POST["adresse"]) < 70 and
            strlen($_POST["code_postal"]) > 0 and strlen($_POST["code_postal"]) < 6 and
            strlen($_POST["telephone"]) > 0 and strlen($_POST["telephone"]) < 20 and
            strlen($_POST['memo']) < 100
            
        )
    
        {
            $_POST["code_uai"][7] = strtoupper($_POST["code_uai"][7]);
            $_POST["code_uai_agence_comptable"][7] = strtoupper($_POST["code_uai_agence_comptable"][7]);
            
            include $_SERVER['DOCUMENT_ROOT'] . "/src/ajout.php";
            
            include $_SERVER['DOCUMENT_ROOT'] . "/templates/ajout_effectue.html.php";
        
        } else {
        
            echo "<div class='bandeau_agence'>Remplissez tous les champs correctement svp (en particulier, le RNE doit se composer de 7 chiffres puis d'une lettre)</div><a href=''>Retour</a>";
        }
        
    } else {
    
        include $_SERVER['DOCUMENT_ROOT'] . "/templates/ajout.html.php";
    }
    

include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.html.php";
?>