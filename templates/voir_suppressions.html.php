<div class="bandeau_admin">Mode admin</div>

<?php

    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
 
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 tableau_modifs" align="center">
            
            <table class="table-striped">
                <thead>
                    <tr>
                       <th>Code UAI</th>
                        <th>Code UAI agence</th>
                        <th>Type établissement</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Code postal</th>
                        <th>Commune</th>
                        <th>Département</th>
                        <th>Région</th>
                        <th>Académie</th>
                        <th>Téléphone</th>
                        <th>Recettes annuelles</th>
                        <th>Infos</th>
                        <th>Date d'ajout</th>
                        <th>IP ajout</th>
                        <th>Date de suppression</th>
                        <th>IP suppression</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    foreach ($result as $row) {
                    ?>
                    
                    <tr>
                        <td><?php echo $row['code_uai']; ?></td>
                        <td><?php echo $row['code_uai_agence_comptable']; ?></td>
                        <td><?php echo $row['type_etablissement']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['adresse']; ?></td>
                        <td><?php echo $row['code_postal']; ?></td>
                        <td><?php echo $row['commune']; ?></td>
                        <td><?php echo $row['departement']; ?></td>
                        <td><?php echo $row['region']; ?></td>
                        <td><?php echo $row['academie']; ?></td>
                        <td><?php echo $row['telephone']; ?></td>
                        <td><?php echo $row['ca']; ?></td>
                        <td><?php echo $row['memo']; ?></td>
                        <td><?php echo $row['date_ajout']; ?></td>
                        <td><?php echo $row['ip_ajout']; ?></td>
                        <td><?php echo $row['date_suppression']; ?></td>
                        <td><?php echo $row['ip_suppression']; ?></td>
                    </tr>
                    
                    <?php
                    }
                    ?>
                
                </tbody>
            </table>
        
        </div>
    </div>
    
  
    
</div>