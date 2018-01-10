<?php
require $_SERVER['DOCUMENT_ROOT'] . "/resources/magicquotes.inc.php";

include $_SERVER['DOCUMENT_ROOT'] . "/resources/htmlout.inc.php";

include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.html.php";


// error_reporting : en production il y a des warning messages : "cannot start session, headers already sent by (output/path/to/templates/header.html.php)" qqch comme ça ...?

error_reporting(E_ERROR | E_PARSE);

session_start();

if (!isset($_SESSION["id"])) {
    
    session_destroy();
    
    include $_SERVER['DOCUMENT_ROOT'] . "/templates/login.html.php";
    
    
} else {
    
    include  $_SERVER['DOCUMENT_ROOT'] . "/templates/admin.html.php";
    
    include $_SERVER['DOCUMENT_ROOT'] . "/templates/logout.html.php";
}


include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.html.php";
?>