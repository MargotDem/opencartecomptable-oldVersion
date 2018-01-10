<div class="bandeau_modification">
    <p>Renseignez les informations que vous désirez ajouter:</p>
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
                
                <input type="hidden" name="code_uai" value="<?php htmlout($_POST["code_uai"]); ?>"/>
                
                <textarea name="memo" placeholder="<?php htmlout($_POST["memo"]); ?>"></textarea>
             <p>(limite : 100 caractères)</p>
                
                <br><br>
                    <p><input class="bouton_valider" type="submit" name="submit_memo" value="Envoyer" onclick="return confirm('Etes-vous sûr·e ?')"></p>
            
                
            </form>
            
            <br><br>
        
            <form action="/">
                <input class="bouton_recherche" type="submit" value="Nouvelle recherche"/>
            </form>
            
        </div>
    </div>
</div>