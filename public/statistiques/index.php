<?php
require $_SERVER['DOCUMENT_ROOT'] . "/resources/magicquotes.inc.php";

include $_SERVER['DOCUMENT_ROOT'] . "/resources/htmlout.inc.php";

include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

include $_SERVER['DOCUMENT_ROOT'] . "/templates/header.html.php";

error_reporting(E_ERROR | E_PARSE);


include  $_SERVER['DOCUMENT_ROOT'] . "/src/statistiques.php";

include  $_SERVER['DOCUMENT_ROOT'] . "/templates/statistiques.html.php";



include $_SERVER['DOCUMENT_ROOT'] . "/templates/footer.html.php";
?>