<?php
if ($result && $statement->rowCount() > 0) {
?>

<div class="bandeau_resultat">
    <p>
        <?php
        $nombre = $statement->rowCount();
        if ($nombre == 1) {
            echo  "1 résultat correspond à vos critères de recherche :";
        } else {
            echo $nombre . " résultats correspondent à vos critères de recherche :";   
        }
        ?>
    </p>
</div>

<?php
session_start();
    
if ($_SESSION["id"]) {
    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
}    
?>

<div class="container">
    <div class="row" id="critere">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 resultat">
    
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/bouton.html.php"; ?>

		    <table class="table-striped tableau_resultat">
			    <thead>
				    <tr>
				        <th class="text-center">Code UAI</th>
					    <th class="text-center">Code UAI agence comptable</th>
                        <th class="text-center">Nom</th>
                        <th class="text-center">Commune</th>
                        <th class="text-center">Département</th>
                        <th class="text-center">Région</th>
                        <th class="text-center">Académie</th>
                       
                        
                        <?php
                        session_start();
    
                        if (isset($_SESSION["id"])) {
                        ?>    
                            <th></th>
                            
                            
                        <?php    
                        }
                        
                        ?>
                        
                        
                        
                    </tr>
                </thead>
                
                <tbody>
                    
                    <?php 
		            foreach ($result as $row) {
                    ?>
                
			        <tr>
				        <td><?php htmlout($row["code_uai"]); ?></td>
                
                        <td>
                            <form action="" method="get">
                                
                                <input class="bouton_resultat" type="submit" name="agence" value="<?php htmlout($row["code_uai_agence_comptable"]); ?>" data-toggle="tooltip" title="Cliquez pour voir le détail de l'agence comptable <?php htmlout($row["code_uai_agence_comptable"]); ?>" data-placement="right"/>
                                
                            </form>
                        </td>
                
                        <td>
                            <div data-toggle="tooltip" title="Cliquez pour plus d'informations sur cet établissement" data-placement="right">   
                                
                                <a href="" class="btn resultat_nom" data-toggle="modal" data-target="#modal<?php htmlout($row["code_uai"]); ?>">
                                    <?php
                        
                        $nom = html($row["nom"]);
                        
                        if (strlen($nom) > 37) {
                       
                                $nom = substr_replace($nom, "-<br>", 37, 0);
                        }
                        
                        
                        echo $nom;
                                    
                                    ?>
                                </a>
                                
                            </div>
                            
                            
                            
                            <div class="modal fade" id="modal<?php htmlout($row["code_uai"]); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php htmlout($row["nom"]); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          <div class="modal_infos">
          <p>Type d'établissement :<br><?php htmlout($row["type_etablissement"]); ?></p>
          
          <p>Adresse :<br><?php echo html($row["adresse"]) . " " . html($row["code_postal"]) . " " . html($row["commune"]); ?></p>
          
          
          <p>Téléphone :<br><?php htmlout($row["telephone"]); ?></p>
              
              <p>Total recettes annuelles :<br><?php htmlout($row["ca"]); ?></p>
          
          <form action="public/modification_infos/index.php" method="post">
                                    <input type="submit" name="modifier_infos" value="Modifier"  class="bouton_resultat">
                                    
                                    
                                    
                                    <input style="display:none" type="text" name="code_uai" value="<?php htmlout($row["code_uai"]); ?>"/>
    <input style="display:none" type="text" name="code_uai_agence_comptable" value="<?php htmlout($row["code_uai_agence_comptable"]); ?>"/>
    <input style="display:none" type="text" name="type_etablissement" value="<?php htmlout($row["type_etablissement"]); ?>"/>
    <input style="display:none" type="text" name="nom" value="<?php htmlout($row["nom"]); ?>"/>
    <input style="display:none" type="text" name="adresse" value="<?php htmlout($row["adresse"]); ?>"/>
    <input style="display:none" type="text" name="code_postal" value="<?php htmlout($row["code_postal"]); ?>"/>
    <input style="display:none" type="text" name="commune" value="<?php htmlout($row["commune"]); ?>"/>
    <input style="display:none" type="text" name="departement" value="<?php htmlout($row["departement"]); ?>"/>
    <input style="display:none" type="text" name="region" value="<?php htmlout($row["region"]); ?>"/>
    <input style="display:none" type="text" name="academie" value="<?php htmlout($row["academie"]); ?>"/>
    <input style="display:none" type="text" name="telephone" value="<?php htmlout($row["telephone"]); ?>"/>
              
              <input type="hidden" name="ca" value="<?php htmlout($row["ca"]); ?>">
                                    
                                </form>
          
          </div>
          
          
          <br>
          
          <div class="modal_memo">
              
              <p>Informations complémentaires :<br><?php htmlout($row["memo"]); ?></p>
          
          <form action="public/modification_memo/index.php" method="post">
                                    <input type="submit" name="modifier_infos" value="Modifier"  class="bouton_resultat">
              <input type="hidden" name="code_uai" value="<?php htmlout($row["code_uai"]); ?>">
              <input type="hidden" name="memo" value="<?php htmlout($row["memo"]); ?>">
                
                                </form>
              
          </div>
          
      </div>
      
    </div>
  </div>
</div>
                        
                        </td>     
                
                        <td><?php htmlout($row["commune"]); ?></td>
                        
                        <td><?php htmlout($row["departement"]); ?></td>
                        
                        <td><?php htmlout($row["region"]); ?></td>
                        
                        <td><?php htmlout($row["academie"]); ?></td>
         
                        <td>
                            <form action="/public/modification/" method="post">
                                
                                
                                <?php
                                    if ($row["code_uai"] === $row["code_uai_agence_comptable"]) {
                                        $agence = "oui";
                                    } else {
                                        $agence = "non";
                                    }
                                    ?>
                                    <input type="hidden" name="agence" value="<?php echo $agence; ?>">
                                
                                <input class="bouton_resultat" type="submit" value="Changer d'agence" data-toggle="tooltip" title="Cliquez pour changer cet établissement d'agence comptable" data-placement="right"/>
                                
                                <input style="display:none" type="text" name="code_uai" value="<?php htmlout($row["code_uai"]); ?>"/>
                                
                                <input style="display:none" type="text" name="code_uai_agence_comptable" value="<?php htmlout($row["code_uai_agence_comptable"]); ?>"/>
                                
                            </form>
                        </td>
                        
                        
                        
                        
                        
                        <?php
                        session_start();
    
                        if (isset($_SESSION["id"])) {
                        ?>    
                        
                            
                            <td>
                        
                                <form action="admin/suppression/index.php" method="post">
                                    <input type="hidden" name="code_uai" value="<?php htmlout($row["code_uai"]); ?>">
                                    
                                    <input type="hidden" name="code_uai_agence_comptable" value="<?php htmlout($row["code_uai_agence_comptable"]); ?>">
                                    
                                    <input type="hidden" name="type_etablissement" value="<?php htmlout($row["type_etablissement"]); ?>">
                                    
                                    <input type="hidden" name="nom" value="<?php htmlout($row["nom"]); ?>">
                                    
                                    <input type="hidden" name="adresse" value="<?php htmlout($row["adresse"]); ?>">
                                    
                                    <input type="hidden" name="code_postal" value="<?php htmlout($row["code_postal"]); ?>">
                                    
                                    <input type="hidden" name="commune" value="<?php htmlout($row["commune"]); ?>">
                                    
                                    
                                    
                                    <input type="hidden" name="departement" value="<?php htmlout($row["departement"]); ?>">
                                    
                                    <input type="hidden" name="region" value="<?php htmlout($row["region"]); ?>">
                                    
                                    <input type="hidden" name="academie" value="<?php htmlout($row["academie"]); ?>">
                                    
                                    <input type="hidden" name="telephone" value="<?php htmlout($row["telephone"]); ?>">
                                    
                                    <input type="hidden" name="date_ajout" value="<?php htmlout($row["date_ajout"]); ?>">
                                    
                                    <input type="hidden" name="ip_ajout" value="<?php htmlout($row["ip_ajout"]); ?>">
                                    
                                    <input type="hidden" name="memo" value="<?php htmlout($row["memo"]); ?>">
                                    
                                    <input type="hidden" name="ca" value="<?php htmlout($row["ca"]); ?>">
                                    
                                    
                                    
                                    
                                    <input type="submit" name="supprimer_etablissement" value="Supprimer"  class="bouton_resultat" data-toggle="tooltip" title="Cliquez pour supprimer cet établissement" data-placement="bottom" onclick="return confirm('Etes-vous sûr·e ?')">
                                </form>
                            </td>
                        
                        
                        <?php    
                        }
                        
                        ?>
                        
                        
                        
                    </tr>
                
		            <?php 
		            }
                    ?>
                
                </tbody>
            </table>
        
        </div>
    </div>
</div>


<?php 
} elseif ($message) {
    
    echo "<div class='bandeau_resultat'>" . $message . "</div>";
    echo "<br><br><div align='center'>";
    include $_SERVER['DOCUMENT_ROOT'] . "/templates/bouton.html.php";
    echo "</div>";
    
} else {
?>

<div class="bandeau_resultat2">
    <blockquote>Aucun résultat trouvé pour vos critères.</blockquote>
</div>

<?php
session_start();
    
if ($_SESSION["id"]) {
    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
}    
?>

<br><br><br>

<div class="container" align="center">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/templates/bouton.html.php"; ?>
</div>

<?php
}
?>

<button onclick="topFunction()" id="myBtn" title="Go to top">Haut</button>