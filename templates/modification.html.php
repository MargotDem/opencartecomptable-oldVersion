<div class="bandeau_modification">
    <p>Renseignez le code UAI de la nouvelle agence de référence de l'établissement :</p>
</div>

<?php
session_start();
    
if ($_SESSION["id"]) {
    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
}    
?>



<div class="container">
    <div class="row">
        <div class="col-lg-12 form-modification">
            
            <form action="" method="post">
                
                <input style="display:none" type="text" name="code_uai" value="<?php htmlout($_POST["code_uai"]); ?>"/>
                
                <input style="display:none" type="text" name="code_uai_agence_comptable" value="<?php htmlout($_POST["code_uai_agence_comptable"]); ?>"/>
                
                <label for="code_uai_agence_comptable2">Nouveau code UAI</label>
                <input type="text" id="code_uai_agence_comptable2" name="code_uai_agence_comptable2" value="<?php htmlout($_POST["code_uai_agence_comptable"]); ?>">
                
                <br><br>
                <p>
                    <input class="bouton_valider" type="submit" name="submit" value="Modifier" onclick="return confirm('Etes-vous sûr·e ?')">
                </p>
                
            </form>
            
            <br><br>
        
            <form action="/">
                <input class="bouton_recherche" type="submit" value="Nouvelle recherche"/>
            </form>
            
        </div>
    </div>
</div>