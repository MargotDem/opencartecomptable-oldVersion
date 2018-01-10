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
    
    echo "<br><br><br><br>page en construction";
    
}


include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.html.php";
?>