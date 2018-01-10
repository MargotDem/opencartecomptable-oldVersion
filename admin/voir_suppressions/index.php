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
    
    if (!isset($_POST["submit"])) {
        
        include $_SERVER['DOCUMENT_ROOT'] . "/templates/voir_modifications_form.html.php";
        
    } else {
        
        $date = new DateTime();
        
        if (isset($_POST["periode"]) and htmlentities($_POST["periode"], ENT_QUOTES, "UTF-8") == "2jours") {
            
            $date->sub(new dateinterval("PT172800S"));
        
            $date = $date->format('Y-m-d H:i:s');
            
        
        } elseif (isset($_POST["periode"]) and htmlentities($_POST["periode"], ENT_QUOTES, "UTF-8") == "1semaine")
        {
            $date->sub(new dateinterval("PT604800S"));
        
            $date = $date->format('Y-m-d H:i:s');
            
        
        } elseif (isset($_POST["periode"]) and htmlentities($_POST["periode"], ENT_QUOTES, "UTF-8") == "1mois")
        {
            
            $date->sub(new dateinterval("PT2592000S"));
        
            $date = $date->format('Y-m-d H:i:s');
            
        
        } else { // si le choix est de 6 mois :
            
            $date->sub(new dateinterval("PT15552000S"));
        
            $date = $date->format('Y-m-d H:i:s');
            
        }
        
        include $_SERVER['DOCUMENT_ROOT'] . "/src/voir_suppressions.php";
        
        include $_SERVER['DOCUMENT_ROOT'] . "/templates/voir_suppressions.html.php";
    
    }
    
    
    
}


include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.html.php";
?>