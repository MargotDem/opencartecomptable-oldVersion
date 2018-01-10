<div class="bandeau_admin">Mode admin</div>

<?php

    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
   
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 tableau_modifs">
            
            <form action="" method="post">
                
                <select name="periode">
                    <option value="2jours">Deux jours</option>
                    <option value="1semaine">Une semaine</option>
                    <option value="1mois">Un mois</option>
                    <option value="6mois">Six mois</option>
                </select>
        
                <input type="submit" name="submit" value="Valider" class="bouton_valider">
                
            </form>
        
        </div>
    </div>
    

    
</div>