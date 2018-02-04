<div class="bandeau_agence">
    <p align="center">Agence de l'établissement : <?php echo $agence . " (" . count($result) . ")"; ?></p>
</div>

<?php
session_start();

if ($_SESSION["id"]) {
    include $_SERVER["DOCUMENT_ROOT"] . "/templates/logout.html.php";
}
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12" align="center">

            <table class="table-striped agence_table">

			    <thead>
				    <tr>
                        <th class="text-center">Code UAI</th>
                        <th class="text-center">Nom</th>
                        <th class="text-center commune_agence">Commune</th>
                        <th class="text-center">Département</th>
                        <th class="text-center">Région</th>
                        <th class="text-center">Académie</th>
                        <th class="text-center">Recettes annuelles</th>
                        <th></th>
				    </tr>
			    </thead>

                <tbody>

                    <?php
                    foreach ($result as $row) {
                    ?>

                    <tr>
                        <td <?php
                            if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                                echo 'class="agence"';
                            }
                            ?> >

                            <?php
                            if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                                echo '<p>' . htmlout($row["code_uai"]) . "</p>";
                            } else {
                                htmlout($row["code_uai"]);
                            }
                            ?>
                        </td>

                        <td
                            <?php
                            if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                                echo 'class="agence"';
                            }
                            ?> >

                            <?php

                        $nom = html($row["nom"]);

                        if (strlen($nom) > 37) {

                                $nom = substr_replace($nom, "-<br>", 37, 0);
                        }

                                ?>

                            <div data-toggle="tooltip" title="Cliquez pour plus d'informations sur cet établissement" data-placement="right">

                                <a href="" class="btn resultat_nom" data-toggle="modal" data-target="#modal<?php htmlout($row["code_uai"]); ?>">
                                    <?php echo $nom; ?></a>

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

          <p>Total recettes annuelles :<br>
            <?php
            if (strlen($row["ca"]) > 0) {
              $ca = html($row["ca"]);
            } else {
              $ca = "<p style='color:lightgrey;text-align:center'>-</p>";
            }
            echo $ca;
            ?>
          </p>

          <form action="public/modification_infos/index.php" method="post">
            <input type="submit" name="modifier_infos" value="Modifier"  class="bouton_resultat">
            <input type="hidden" name="code_uai" value="<?php htmlout($row["code_uai"]); ?>"/>
            <input type="hidden" name="code_uai_agence_comptable" value="<?php htmlout($row["code_uai_agence_comptable"]); ?>"/>
            <input type="hidden" name="type_etablissement" value="<?php htmlout($row["type_etablissement"]); ?>"/>
            <input type="hidden" name="nom" value="<?php htmlout($row["nom"]); ?>"/>
            <input type="hidden" name="adresse" value="<?php htmlout($row["adresse"]); ?>"/>
            <input type="hidden" name="code_postal" value="<?php htmlout($row["code_postal"]); ?>"/>
            <input type="hidden" name="commune" value="<?php htmlout($row["commune"]); ?>"/>
            <input type="hidden" name="departement" value="<?php htmlout($row["departement"]); ?>"/>
            <input type="hidden" name="region" value="<?php htmlout($row["region"]); ?>"/>
            <input type="hidden" name="academie" value="<?php htmlout($row["academie"]); ?>"/>
            <input type="hidden" name="telephone" value="<?php htmlout($row["telephone"]); ?>"/>
            <input type="hidden" name="ca" value="<?php htmlout($row["ca"]); ?>">
          </form>

          </div>


          <br>

          <div class="modal_memo">

              <p>Informations complémentaires :<br>
                <?php
                if (strlen($row["memo"]) > 0) {
                  $memo = html($row["memo"]);
                } else {
                  $memo = "<p style='color:lightgrey;text-align:center'>-</p>";
                }
                echo $memo;
                ?>
              </p>

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

                        <td <?php
                            if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                                echo 'class="agence"';
                            }
                            ?> >

                            <?php
                            if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                                echo '<p>' . htmlout($row["commune"]) . "</p>";
                            } else {
                                htmlout($row["commune"]);
                            }
                            ?>
                        </td>

                        <td <?php
                        if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                            echo 'class="agence"';
                        }
                        ?> >

                        <?php if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                            echo '<p>' . htmlout($row["departement"]) . "</p>";
                        } else {
                            htmlout($row["departement"]);
                        }
                        ?>
                        </td>

                        <td <?php
                        if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                            echo 'class="agence"';
                        }
                        ?> >

                        <?php if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                            echo '<p>' . htmlout($row["region"]) . "</p>";
                        } else {
                            htmlout($row["region"]);
                        }
                        ?>
                        </td>

                        <td <?php
                        if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                            echo 'class="agence"';
                        }
                        ?> >

                        <?php if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                            echo '<p>' . htmlout($row["academie"]) . "</p>";
                        } else {
                            htmlout($row["academie"]);
                        }
                        ?>
                        </td>

                        <td <?php
                        if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                            echo 'class="agence"';
                        }
                        ?> >

                        <?php
                        if (strlen($row["ca"]) > 0) {
                          $ca = html($row["ca"]);
                        } else {
                          $ca = "<p style='color:lightgrey;text-align:center'>_</p>";
                        }
                        if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                            echo $ca;
                        } else {
                            echo $ca;
                        }
                        ?>
                        </td>

                        <td <?php
                        if ($row["code_uai"] == $row["code_uai_agence_comptable"]) {
                            echo 'class="agence"';
                        }
                        ?> >

                            <form action="/public/modification/" method="post">


                                <?php
                                    if ($row["code_uai"] === $row["code_uai_agence_comptable"]) {
                                        $agence = "oui";
                                    } else {
                                        $agence = "non";
                                    }
                                    ?>
                                    <input type="hidden" name="agence" value="<?php echo $agence; ?>">

                                <input class="bouton_resultat" type="submit" value="Changer d'agence" data-toggle="tooltip" title="Cliquez pour changer cet établissement d'agence comptable" data-placement="bottom"/>

                                <input style="display:none" type="text" name="code_uai" value="<?php htmlout($row["code_uai"]) ?>"/>

                                <input style="display:none" type="text" name="code_uai_agence_comptable" value="<?php htmlout($row["code_uai_agence_comptable"]) ?>"/>



                            </form>

                        </td>




                         <?php
                        session_start();

                        if (isset($_SESSION["id"])) {
                        ?>



                            <td>

                                <form action="admin/suppression/index.php" method="post">

                                    <input type="hidden" name="code_uai" value="<?php htmlout($row["code_uai"]); ?>">

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

        <form action="/">
            <input class="bouton_recherche" type="submit" value="Nouvelle recherche"/>
        </form>

        </div>
    </div>
</div>
