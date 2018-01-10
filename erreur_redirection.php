<?php

$uri = $_SERVER['REQUEST_URI'];

if (strlen($uri) == 9) {
    
    $cleaned_uri = substr($uri, -8);
    
    if (
    preg_match("/[A-Za-z]/", $cleaned_uri[7]) and
    preg_match("/[0-9]+/",  substr($cleaned_uri, 0, -1))
) {
    
    header ('location: /?code_uai=' . $cleaned_uri . '&type_etablissement=&nom=&academie=&region=&departement=&commune=&rechercher=Rechercher');
    
} else {
    echo "erreur 404 : il semblerait que la page que vous cherchez n'existe pas.";
}
} else {
    echo "erreur 404 : il semblerait que la page que vous cherchez n'existe pas.";
}

?>