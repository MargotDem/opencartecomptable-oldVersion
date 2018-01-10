<?php
include $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";

try {
    
    $sql = 'SELECT academie, moyenne FROM statistiques ORDER BY moyenne DESC';
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    
} catch (PDOException $e) {
    
    echo 'erreur';

}

$moyennes = [];

foreach ($result as $row) {
    
    $moyennes[$row['academie']] = $row['moyenne'];
    
}


$moyBordeaux = $moyennes['Bordeaux'];
$moyNantes = $moyennes['Nantes'];
$moyAix = $moyennes['Aix-Marseille'];
$moyAmiens = $moyennes['Amiens'];
$moyBesançon = $moyennes['Besançon'];
$moyCaen = $moyennes['Caen'];
$moyClermont = $moyennes['Clermont-Ferrand'];
$moyCorse = $moyennes['Corse'];
$moyCréteil = $moyennes['Créteil'];
$moyDijon = $moyennes['Dijon'];
$moyGrenoble = $moyennes['Grenoble'];
$moyLille = $moyennes['Lille'];
$moyLimoges = $moyennes['Limoges'];
$moyLyon = $moyennes['Lyon'];
$moyMontpellier = $moyennes['Montpellier'];
$moyNancy = $moyennes['Nancy-Metz'];
$moyNantes = $moyennes['Nantes'];
$moyNice = $moyennes['Nice'];
$moyOrléans = $moyennes['Orléans-Tours'];
$moyParis = $moyennes['Paris'];
$moyPoitiers = $moyennes['Poitiers'];
$moyReims = $moyennes['Reims'];
$moyRennes = $moyennes['Rennes'];
$moyRouen = $moyennes['Rouen'];
$moyStrasbourg = $moyennes['Strasbourg'];
$moyToulouse = $moyennes['Toulouse'];
$moyVersailles = $moyennes['Versailles'];


if(isset($_POST['test'])) {
    $carte = true;
} else {
    $carte = false;
}