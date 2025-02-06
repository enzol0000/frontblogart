<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

if (empty($_POST['libThem'])) {
    header('Location: ../../views/backend/thematiques/create.php?error=empty');
    exit;
}

$libThem = ctrlSaisies($_POST['libThem']);

sql_insert('thematique', 'libThem', "'$libThem'");

header('Location: ../../views/backend/thematiques/list.php');