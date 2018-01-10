<div class="bandeau_modification">Modifiez les champs nécessaires :</div>

<?php
session_start();
    
if ($_SESSION["id"]) {
    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
}    
?>

<div class="container">
    
    
    
    
    
    
    
    <div class="row">

<div class="col-lg-5 form-modification">
    
    
    
<form action="" method="post">
    
    <input type="hidden" name="code_uai" value="<?php echo $_POST["code_uai"]; ?>"/>
    
    <table>
        <tr>
            <td>
                <label for="type_etablissement2">Type d'établissement</label>
            </td>
            <td>
                <select name="type_etablissement2" id="type_etablissement2">
                <option selected value="<?php echo $_POST["type_etablissement"]; ?>"><?php echo $_POST["type_etablissement"]; ?></option>
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
        </tr>
        
        <tr>
            <td>
            <label for="nom2">Nom</label>
            </td>
            <td>
                <input class="modification" type="text" id="nom2" name="nom2" value="<?php echo $_POST["nom"]; ?>">
            </td>
        </tr>
        
        <tr>
            <td><label for="adresse2">Adresse</label></td>
            <td>
                <input class="modification" type="text" id="adresse2" name="adresse2" value="<?php echo $_POST["adresse"]; ?>">
            </td>
        </tr>
        
        <tr>
            <td>
                <label for="code_postal2">Code postal</label>
            </td>
            <td>
                <input class="modification" type="text" id="code_postal2" name="code_postal2" value="<?php echo $_POST["code_postal"]; ?>">
            </td>
        </tr>
        
        <tr>
            <td><label for="commune2">Commune</label></td>
            <td><input class="modification" type="text" id="commune2" name="commune2" value="<?php echo $_POST["commune"]; ?>"></td>
        </tr>
        
        <tr>
            <td>
                <label for="departement2">Département</label>
            </td>
            <td>
                <input class="modification" type="text" id="departement2" name="departement2" value="<?php echo $_POST["departement"]; ?>">
            </td>
        </tr>
        
        <tr>
            <td>
                <label for="region2">Région</label>
            </td>
            <td>
                <select name="region2" id="region2">
            <option selected value="<?php echo $_POST["region"]; ?>"><?php echo $_POST["region"]; ?></option>
                        <option value="Occitanie">Occitanie</option>
                        <option value="Ile-de-France">Ile-de-France</option>
                        <option value="Nouvelle Aquitaine">Nouvelle Aquitaine</option>
                        <option value="Bretagne">Bretagne</option>
                        <option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
                        <option value="Grand Est">Grand Est</option>
                        <option value="Pays de la Loire">Pays de la Loire</option>
                        <option value="Hauts-de-France">Hauts-de-France</option>
                        <option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
                        <option value="Centre-Val de Loire">Centre-Val de Loire</option>
                        <option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>
                        <option value="Normandie">Normandie</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Corse">Corse</option>
                        <option value="Martinique">Martinique</option>
                        <option value="La Réunion">La Réunion</option>
                        <option value="Guyane">Guyane</option>
                        <option value="Mayotte">Mayotte</option>
                    <option value="Collectivité d'outre-mer">Collectivité d'outre-mer</option>
                            </select>
            </td>
        </tr>
        
        <tr>
            <td>
                <label for="academie2">Académie</label>
            </td>
            <td>
                <select name="academie2" id="academie2">
            <option selected value="<?php echo $_POST["academie"]; ?>"><?php echo $_POST["academie"]; ?></option>
                        <option value="Lille">Lille</option>
                        <option value="Amiens">Amiens</option>
                        <option value="Rouen">Rouen</option>
                        <option value="Reims">Reims</option>
                        <option value="Nancy-Metz">Nancy-Metz</option>
                        <option value="Strasbourg">Strasbourg</option>
                        <option value="Besançon">Besançon</option>
                        <option value="Dijon">Dijon</option>
                        <option value="Paris">Paris</option>
                        <option value="Créteil">Créteil</option>
                        <option value="Versailles">Versailles</option>
                        <option value="Orléans-Tour">Orléans-Tour</option>
                        <option value="Caen">Caen</option>
                        <option value="Rennes">Rennes</option>
                        <option value="Nantes">Nantes</option>
                        <option value="Poitiers">Poitiers</option>
                        <option value="Limoges">Limoges</option>
                        <option value="Lyon">Lyon</option>
                        <option value="Clermont-Ferrand">Clermont-Ferrand</option>
                        <option value="Grenoble">Grenoble</option>
                        <option value="Aix-Marseille">Aix-Marseille</option>
                        <option value="Nice">Nice</option>
                        <option value="Montpellier">Montpellier</option>
                        <option value="Toulouse">Toulouse</option>
                        <option value="Bordeaux">Bordeaux</option>
                        <option value="Corse">Corse</option>
                        <option value="Guyane">Guyane</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="La Réunion">La Réunion</option>
                        <option value="Mayotte">Mayotte</option>
                    <option value="Saint-Pierre-et-Miquelon">Saint-Pierre-et-Miquelon</option>
                            </select>
            </td>
        </tr>
        
        <tr>
            <td>
                <label for="telephone2">Téléphone</label>
            </td>
            <td>
                <input class="modification" type="text" id="telephone2" name="telephone2" value="<?php echo $_POST["telephone"]; ?>">
            </td>
        </tr>
        
        <tr>
            <td>
                <label for="ca2">Total recettes annuelles</label>
            </td>
            <td>
             
                
                <select name="ca2" id="ca2">
                    <option selected value="<?php echo $_POST["ca"]; ?>"><?php echo $_POST["ca"]; ?></option>
                    <option value="Jusqu'à 500 000 €">Jusqu'à 500 000 €</option>
                    <option value="Jusqu'à un million €">Jusqu'à un million €</option>
                    <option value="Jusqu'à deux millions €">Jusqu'à deux millions €</option>
                    <option value="Plus de deux millions €">Plus de deux millions €</option>
                </select>
            </td>
        </tr>
        
        
        <tr>
            <td></td>
            <td><input class="bouton_valider" type="submit" name="modifier" value="Modifier" onclick="return confirm('Etes-vous sûr·e ?')"></td>
        </tr>
    </table>
                   

	
</form>
                



<br><br>



    
    </div>

</div>

    

</div>