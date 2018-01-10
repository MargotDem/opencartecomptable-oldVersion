<div class="bandeau_stats">
    <p>Cliquez sur les icones pour obtenir le nombre moyen d'établissements par agence de chaque académie,<br>ou cliquez ci-dessous pour voir le classement des académies :</p>
    
    <form id="leform">
        <label class="switch">
            <input type="checkbox" name="test" onchange="toggle();">
            <span class="slider"></span>
        </label>
    </form>
</div>  


    <div id="map" style="width:100vw">
    </div>

<?php
session_start();
    
if ($_SESSION["id"]) {
    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
}    
?>

<div class="container">
    <div class="row stats">
        <div class="col-lg-12" align="center">
    
            <table class="table-striped stats_table" id="tableau" style="display:none">
                <thead class="head">
                    <tr>
                        <th>Académie</th>
                        <th>Nombre moyen d'établissements par agence comptable</th>
                    </tr>
                </thead>

                <tbody>
    
                    <?php
                    foreach(array_keys($moyennes) as $nomAcademie) {
                    ?>
                    
                    <tr>
                        <td><?php echo $nomAcademie; ?></td>
                        <td class="moyenne"><?php echo $moyennes[$nomAcademie]; ?></td>
                    </tr>
                    
                    <?php
                    }
                    ?>
                    
                </tbody>
            
            </table>
    
            <form action="/">
                <input type="submit" value="Retour" class="bouton_valider"/>
            </form>
        
        </div>
    </div>
</div>
   




<script type="text/javascript">
    
    function toggle() {
        if (document.getElementById('map').style.display == 'none') {
            document.getElementById('map').style.display = '';
            document.getElementById('tableau').style.display = 'none';
        } else {
            document.getElementById('map').style.display = 'none';
            document.getElementById('tableau').style.display = '';
        }
    }
    
    
    var moyBordeaux = '<?php echo $moyBordeaux; ?>';
    var moyNantes = '<?php echo $moyNantes; ?>';
    var moyAix = '<?php echo $moyAix; ?>';
    var moyAmiens = '<?php echo $moyAmiens; ?>';
    var moyBesançon = '<?php echo $moyBesançon; ?>';
    var moyCaen = '<?php echo $moyCaen; ?>';
    var moyClermont = '<?php echo $moyClermont; ?>';
    var moyCorse = '<?php echo $moyCorse; ?>';
    var moyCréteil = '<?php echo $moyCréteil; ?>';
    var moyDijon = '<?php echo $moyDijon; ?>';
    var moyGrenoble = '<?php echo $moyGrenoble; ?>';
    var moyLille = '<?php echo $moyLille; ?>';
    var moyLimoges = '<?php echo $moyLimoges; ?>';
    var moyLyon = '<?php echo $moyLyon; ?>';
    var moyMontpellier = '<?php echo $moyMontpellier; ?>';
    var moyNancy = '<?php echo $moyNancy; ?>';
    var moyNantes = '<?php echo $moyNantes; ?>';
    var moyNice = '<?php echo $moyNice; ?>';
    var moyOrléans = '<?php echo $moyOrléans; ?>';
    var moyParis = '<?php echo $moyParis; ?>';
    var moyPoitiers = '<?php echo $moyPoitiers; ?>';
    var moyReims = '<?php echo $moyReims; ?>';
    var moyRennes = '<?php echo $moyRennes; ?>';
    var moyRouen = '<?php echo $moyRouen; ?>';
    var moyStrasbourg = '<?php echo $moyStrasbourg; ?>';
    var moyToulouse = '<?php echo $moyToulouse; ?>';
    var moyVersailles = '<?php echo $moyVersailles; ?>';
    
</script>