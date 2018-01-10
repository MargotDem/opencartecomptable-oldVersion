<div class="home">
    <div class="container">
        <div class="row" id="critere">
            
            <div class="col-lg-12">
                <p><strong>Bonjour !</strong></p>
                <br>
                <p>Bienvenue sur Open Carte Comptable, la carte des agences comptables des EPLE de France</p>
                <p>Vous pouvez voir les statistiques par académie en cliquant <a href="/public/statistiques/">ici</a></p>
                <br>
                <p>Vous avez la possiblité d'effectuer des recherches et éventuellement des modifications</p>
                <br>
            </div>
        </div>
    </div>
</div>

<?php
session_start();
    
if ($_SESSION["id"]) {
    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
}    
?>

<div class="container">
    <div class="row critere" id="recherche_critere" id="critere">
        <div class="col-lg-12 text-center home2">
        
            <p><strong>Souhaitez-vous faire une recherche par établissement ou par agence comptable?</strong></p>

            <form action="" method="post">
                <select name="critere">
                    <option value="">...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v</option>
                    <option value="etablissement"><p>Etablissement</p></option>
                    <option value="agence_comptable">Agence comptable</option>
                </select>
                
                <div class="bouton_valider_critere">
                    <input class="bouton_valider" type="submit" value="Valider"/>
                </div>
            </form>
            
            <p class="home_ajouter">Vous pouvez ajouter un établissement <a href="public/ajout/">ici</a></p>
        
        </div>
    </div>
</div>