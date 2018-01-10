<div class="bandeau_recherche">
    <p>Renseignez un ou plusieurs critères de recherche :</p>
</div>

<?php
session_start();
    
if ($_SESSION["id"]) {
    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
}    
?>

<div class="container">
    <div class="row">
        <div class="col-lg-5 form-recherche">
            
            <form action="" method="get">
                
                <table>
                    
                    <tr>
                        <div class="form-group">
                            <td><label for="code_uai">Code UAI</label></td>
                            <td><input type="text" id="code_uai" name="code_uai<?php echo $choix; ?>"></td>
                        </div>
                    </tr>
                    
                    <tr>
                        <div class="form-group">
                            <td><label for="type_etablissement">Type d'établissement</label></td>
                            <td>
                                
                            
                                <select name="type_etablissement" id="type_etablissement">
                                    <option selected value="">...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v</option>
                        <option value="Collège">Collège</option>
                        <option value="Lycée">Lycée</option>
                        <option value="Lycée professionnel">Lycée professionnel</option>
                        <option value="Etablissement régional d'enseignement adapté">Etablissement régional d'enseignement adapté</option>
                        <option value="Lycée agricole">Lycée agricole</option>
                        <option value="Etablissement scolaire public innovant">Etablissement scolaire public innovant</option>
                        <option value="Centre de formation d'apprentis">Centre de formation d'apprentis</option>
                        <option value="GRETA">GRETA</option>
                    </select>
                            
                            
                            
                            
                            </td>
                        </div>
                    </tr>
                    
                    <tr>
                        <div class="form-group">
                            <td><label for="nom">Nom de l'établissement</label></td>
                            <td><input type="text" id="nom" name="nom<?php echo $choix; ?>"></td>
                        </div>
                    </tr>
                    
                    <tr>
                        <div class="form-group ui-widget">
                            <td><label for="academie">Académie</label></td>
                            <td><input type="text" id="academie" name="academie<?php echo $choix; ?>"></td>
                        </div>
                    </tr>
                    
                    <tr>
                        <div class="form-group ui-widget">
                            <td><label for="region">Région</label></td>
                            <td><input type="text" id="region" name="region<?php echo $choix; ?>"></td>
                        </div>
                    </tr>
                    
                    <tr>
                        <div class="form-group">
                            <td><label for="departement">Département</label></td>
                            <td><input type="text" id="departement" name="departement<?php echo $choix; ?>"></td>
                        </div>
                    </tr>
                    
                    <tr>
                        <div class="form-group">
                            <td><label for="commune">Commune</label></td>
                            <td><input type="text" id="commune" name="commune<?php echo $choix; ?>"></td>
                        </div>
                    </tr>
                
                </table>
                
                <br>
                
                <input class="bouton_recherche" type="submit" name="rechercher" value="Rechercher">
            
            </form>
        
        </div>
    </div>
</div>