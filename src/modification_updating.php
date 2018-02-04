<?php
include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

if (isset($_POST['code_uai'])) {
  try
  {
    $sql = "UPDATE etablissements SET up_to_date = CURRENT_TIMESTAMP WHERE code_uai = '" . $_POST['code_uai'] . "'";

    $pdo->exec($sql);

    header('Location: /' . $_POST['code_uai']);

  }
  catch (PDOException $e)
  {
    $error = "L'actualisation n'a pas marché : " . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] . "/templates/error.html.php";
    exit();
  }
} else {
  echo "le form n'a pas été rempli";
}
?>
