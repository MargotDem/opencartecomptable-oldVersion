<?php
include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.html.php";

include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

require $_SERVER['DOCUMENT_ROOT'] . "/resources/magicquotes.inc.php";

include $_SERVER['DOCUMENT_ROOT'] . "/resources/htmlout.inc.php";

error_reporting(E_ERROR | E_PARSE);



if (!isset($_POST['submit_memo'])) {
    
   

    include $_SERVER['DOCUMENT_ROOT'] . "/templates/memo_form.html.php";

} else {
    
    // vérification du format du RNE :
    
    if (
        strlen($_POST['memo']) < 100
    )
    
    {
        
   
        include $_SERVER['DOCUMENT_ROOT'] . "/src/memo.php";
        
        include $_SERVER['DOCUMENT_ROOT'] . "/templates/modification_effectuee.html.php";
        
    } else {
        
        echo "<div class='bandeau_modification'>Vous avez rentré trop de texte</div><p class='message_erreur'><a href=''>Retour</a></p>";
    }
    
    
}


include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.html.php";
?>