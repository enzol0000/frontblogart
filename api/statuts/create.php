<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libStat = ctrlSaisies($_POST['libStat']);

sql_insert('statut', 'libStat', "'$libStat'");

header('Location: ../../views/backend/statuts/list.php');