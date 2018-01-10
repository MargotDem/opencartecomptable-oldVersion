<div class="bandeau_admin">
    Suppression effectuée !<br><br>
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
   
   
</div>