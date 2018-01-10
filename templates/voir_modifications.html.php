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
                        <th>Adresse IP</th>
                        <th>Code de l'établissement</th>
                        <th>Nom</th>
                        <th>Académie</th>
                        <th>Ancienne agence</th>
                        <th>Nouvelle agence</th>
                        <th>Date</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    foreach ($result as $row) {
                    ?>
                    
                    <tr>
                        <td><?php echo $row['ip']; ?></td>
                        <td><?php echo $row['code_uai']; ?></td>
                        <td><?php echo $row['nom']?></td>
                        <td><?php echo $row['academie']?></td>
                        
                        <?php
                        
                        if ($row['ancien_code_agence'] === $row['nouveau_code_agence']) {
                            
                           echo "<td class='meme'>" . $row['ancien_code_agence'] . "</td>";
                            
                        } else {
                            
                            echo "<td>" . $row['ancien_code_agence'] . "</td>";
                            
                        }
                            
                        
                        
                        if ($row['ancien_code_agence'] === $row['nouveau_code_agence']) {
                            
                           echo "<td class='meme'>" . $row['nouveau_code_agence'] . "</td>";
                            
                        } else {
                            
                            echo "<td>" . $row['nouveau_code_agence'] . "</td>";
                            
                        }
                        
                        
                        
                   ?>
                            
                        <td><?php echo $row['date']; ?></td>
                    </tr>
                    
                    <?php
                    }
                    ?>
                
                </tbody>
            </table>
        
        </div>
    </div>
    
  
    
</div>