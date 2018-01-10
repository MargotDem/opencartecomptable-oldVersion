<div class="bandeau_modification">
    Ajout effectué !<br><br>
</div>

<?php
session_start();
    
if ($_SESSION["id"]) {
    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
}    
?>

<div align="center">
    <form action="/">
        <input class="bouton_recherche" type="submit" value="Faire une recherche"/>
    </form>
    
    <form action="">
        <input class="bouton_recherche" type="submit" value="Ajouter un nouvel établissement"/>
    </form>
 
</div>