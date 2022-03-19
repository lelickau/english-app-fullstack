<?php
    include SITE_ROOT.'/app/db/db.php';

    $id = $_SESSION['id'];

    function getAllWordsData ($id) {
        return selectAll('words', ['user_id' => $id]);
    }
    $wordsData = getAllWordsData($id);