<div class="bandeau_modification">Renseignez les champs ci-dessous :</div>

<?php
session_start();
    
if ($_SESSION["id"]) {
    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
}    
?>

<div class="container">
    <br><br>
    
    <form action="" method="post">
        
        <table>
            
            <tr>
                <td>
                    <label for="code_uai">Code UAI*</label>
                </td>
                    
                <td>
                    <input type="text" name="code_uai" id="code_uai"/>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="code_uai_agence_comptable">Code UAI agence comptable*</label>
                </td>
                
                <td>
                    <input type="text" name="code_uai_agence_comptable" id="code_uai_agence_comptable"/>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="type_etablissement">Type d'établissement*</label>
                </td>
                
                <td>
               
                    
                    <select name="type_etablissement" id="type_etablissement">
                        <option value="">...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v</option>
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
                    <label for="nom">Nom*</label>
                </td>
                
                <td>
                    <input type="text" name="nom" id="nom"/>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="adresse">Adresse*</label>
                </td>
                
                <td>
                    <input type="text" name="adresse" id="adresse"/>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="code_postal">Code postal*</label>
                </td>
                
                <td>
                    <input type="text" name="code_postal" id="code_postal"/>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="commune">Commune*</label>
                </td>
                
                <td>
                    <input type="text" name="commune" id="commune"/>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="departement">Departement*</label>
                </td>
                
                <td>
                    <input type="text" name="departement" id="departement"/>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="region">Region*</label>
                </td>
                
                <td>
                    
                    <select name="region" id="region">
                        <option value="">...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v</option>
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
                    <label for="academie">Académie*</label> 
                </td>
                
                <td>
                    <select name="academie" id="academie">
                        <option value="">...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v</option>
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
                    <label for="telephone">Telephone*</label>
                </td>
                
                <td>
                    <input type="text" name="telephone" id="telephone"/>
                </td>
            </tr>
            
            
            <tr>
            <td>
                <label for="ca">Total recettes annuelles</label>
            </td>
            <td>
             
                
                <select name="ca" id="ca">
                    <option value="">...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v</option>
                    <option value="Jusqu'à 500 000 €">Jusqu'à 500 000 €</option>
                    <option value="Jusqu'à un million €">Jusqu'à un million €</option>
                    <option value="Jusqu'à deux millions €">Jusqu'à deux millions €</option>
                    <option value="Plus de deux millions €">Plus de deux millions €</option>
                </select>
            </td>
        </tr>
            
            
            
            <tr>
                <td>
                    <label for="memo">Informations complémentaires :</label><br>(100 caractères maximum)
                </td>
                
                <td>
                    <textarea name="memo" id="memo"></textarea>
                </td>
            </tr>
            
            
            
            <tr>
                <td>
                </td>
                
                <td>
                    <input type="submit" name="submitform" class="bouton_valider" value="Créer" onclick="return confirm('Etes-vous sûr·e ?')"/>
                </td>
            </tr>
            
        </table>
        
    </form>
    
    * informations obligatoires
    
    <br><br>

    
</div>