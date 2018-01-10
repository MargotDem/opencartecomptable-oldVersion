<?php
include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.html.php";

include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

require $_SERVER['DOCUMENT_ROOT'] . "/resources/magicquotes.inc.php";

include $_SERVER['DOCUMENT_ROOT'] . "/resources/htmlout.inc.php";

error_reporting(E_ERROR | E_PARSE);



if (!isset($_POST['submit'])) {
    
   
    
    if ($_POST["agence"] === "oui") {
        
        include $_SERVER['DOCUMENT_ROOT'] . "/src/modification_verif.php";
        
        if (count($result) > 1) {
            
            $error = "<div class='bandeau_resultat'>Vous ne pouvez pas changer cet établissement d'agence comptable</div><p class='message_erreur'>Cet établissement est une agence comptable comprenant " . (count($result) - 1) . " autre(s) établissement(s), vous ne pouvez donc pas l'affecter à une autre agence avant d'avoir réaffecté le(s) établissement(s) qu'elle contient à leur nouvelle agence respective<br><br><a href='/?agence=" . $_POST["code_uai"] . "'>Voir le détail de l'agence</a></p>";
            
            include $_SERVER['DOCUMENT_ROOT'] . "/templates/error.html.php";
            
        } else {
            
            include $_SERVER['DOCUMENT_ROOT'] . "/templates/modification.html.php";
            
        }
        
    } else {
        
        include $_SERVER['DOCUMENT_ROOT'] . "/templates/modification.html.php";
    }
    

} else {
    
    // vérification du format du RNE :
    
    if (
        strlen($_POST['code_uai_agence_comptable2']) === 8 and
        preg_match("/[A-Za-z]/", $_POST['code_uai_agence_comptable2'][7]) and
        preg_match("/[0-9]+/",  substr($_POST['code_uai_agence_comptable2'], 0, -1))
    )
    
    {
        $_POST["code_uai_agence_comptable2"][7] = strtoupper($_POST["code_uai_agence_comptable2"][7]);
        
        include $_SERVER['DOCUMENT_ROOT'] . "/src/modification.php";
        
        include $_SERVER['DOCUMENT_ROOT'] . "/templates/modification_effectuee.html.php";
        
    } else {
        
        echo "<div class='bandeau_modification'>RNE incorrect: le RNE doit se composer de 7 chiffres puis d'une lettre</div><a href=''>Retour</a>";
    }
    
    
}


include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.html.php";
?>