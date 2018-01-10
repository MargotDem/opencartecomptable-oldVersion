<div class="bandeau_admin">Mode admin</div>

<?php
session_start();
    
if ($_SESSION["id"]) {
    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
}    
?>

<div class="container">
    
    <form action ="" method="post">
        
        <label for="submitform">Cliquer pour mettre à jour les statistiques par académie (ça prend quelques secondes) :</label>
        <input type="submit" id="submitform" name="submitform" class="bouton_valider" value="Mettre à jour">
    
    </form>


</div>
