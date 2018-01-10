<?php
include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.html.php";

require $_SERVER['DOCUMENT_ROOT'] . "/resources/magicquotes.inc.php";

include $_SERVER['DOCUMENT_ROOT'] . "/resources/htmlout.inc.php";

error_reporting(E_ERROR | E_PARSE);

// afficher le form de choix de recherche seulement quand l'utilisateur n'a encore cliqué nulle part

if (!isset($_POST["critere"]) && !isset($_GET["rechercher"]) && !isset($_GET["agence"])) {
    
    include $_SERVER['DOCUMENT_ROOT'] . "/templates/recherche_critere.html.php";
}


// afficher le form de recherche en lui passant $choix en fonction du choix recherche etablissement / agence

if (isset($_POST['critere']) and htmlentities($_POST['critere'], ENT_QUOTES, "UTF-8") == "agence_comptable") {
    
    $choix = "_A";
    include $_SERVER['DOCUMENT_ROOT'] . "/templates/recherche.html.php";

} else if (isset($_POST['critere']) and htmlentities($_POST['critere'], ENT_QUOTES, "UTF-8") == "etablissement") {

     $choix = "";
     include $_SERVER['DOCUMENT_ROOT'] . "/templates/recherche.html.php";
}


// aller chercher dans la base de données le résultat de la recherche de l'utilisateur et l'afficher

include $_SERVER['DOCUMENT_ROOT'] . "/src/resultat.php";

if (isset($_GET["rechercher"])) {
    
   include $_SERVER['DOCUMENT_ROOT'] . "/templates/resultat.html.php"; 
}


// afficher la vue agence si le bouton "agence" est cliqué

if (isset($_GET["agence"])) {
    
    include $_SERVER['DOCUMENT_ROOT'] . "/src/agence.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/templates/agence.html.php";
    
}



include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.html.php";
?>