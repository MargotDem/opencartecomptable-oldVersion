<div class="bandeau_a_propos" align="center">
    <p>
        Ce site a été réalisé par la Startup d'Etat 
        <a target="_blank" href="https://openacademie.beta.gouv.fr/">Open Académie</a>.
    </p>
</div>

<?php
session_start();
    
if ($_SESSION["id"]) {
    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
}    
?>

<div class="container">
    <div class="row a_propos">
        <div class="col-lg-12" align="center">
            
            <br>
            
            <p>Les gestionnaires et agents comptables y ont la possibilité de rechercher des agences comptables ou des établissements, de voir leurs détails et de modifier la composition des regroupements.
            </p>
            
            <br>
            
            <p>Source des données concernant les établissements : 
                <a href="http://www.data.gouv.fr/fr/" target="_blank">data.gouv.fr</a>.
            </p>
            
            <br><br>
            
            <form action="/">
                <input type="submit" value="Retour" class="bouton_valider"/>
            </form>
        
        </div>
    </div>
</div>