<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numStat = ctrlSaisies(saisie: $_POST['numStat']);
$libStat = ctrlSaisies(saisie: $_POST['libStat']);

sql_delete(table: 'STATUT', "numStat = $numStat");
sql_update(table: 'STATUT', "libStat = $libStat");

header('Location: ../../views/backend/statuts/list.php');

?>