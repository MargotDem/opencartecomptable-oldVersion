<?php
include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.html.php";

include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

require $_SERVER['DOCUMENT_ROOT'] . "/resources/magicquotes.inc.php";

include $_SERVER['DOCUMENT_ROOT'] . "/resources/htmlout.inc.php";


error_reporting(E_ERROR | E_PARSE);


    if (isset($_POST["modifier_infos"])) {
    
    include $_SERVER['DOCUMENT_ROOT'] . "/templates/modification_infos_form.html.php";
        
} else if (isset($_POST["modifier"])) {
        
        
        
        if (
            
            strlen($_POST["nom2"]) > 0 and strlen($_POST["nom2"]) < 70 and
            strlen($_POST["commune2"]) > 0 and strlen($_POST["commune2"]) < 50 and
            strlen($_POST["departement2"]) > 0 and strlen($_POST["departement2"]) < 50 and
            strlen($_POST["adresse2"]) > 0 and strlen($_POST["adresse2"]) < 70 and
            strlen($_POST["code_postal2"]) > 0 and strlen($_POST["code_postal2"]) < 6 and
            strlen($_POST["telephone2"]) > 0 and strlen($_POST["telephone2"]) < 20
        
        ) {
            
            include $_SERVER['DOCUMENT_ROOT'] . "/src/modification_infos.php";
        
            include $_SERVER['DOCUMENT_ROOT'] . "/templates/modification_effectuee.html.php";
            
        } else {
            
            echo "<div class='bandeau_modification'>Remplissez tous les champs correctement svp</div><a href=''>Retour</a>";
        }
        
        
        
        
        
    }
    
    
    
    
    
    



include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.html.php";
?>