<?php
include SITE_ROOT.'/app/db/db.php';
include_once SITE_ROOT.'/app/controllers/progress.php';

$id = $_SESSION['id'];

function setLevel($points) {
    return $points / 1000;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['points-btn'])) {
    $wordsForTestingInJson = $_POST['data'];
    $pointsForTesting = $_POST['points'];
    $wordsLevel = $_POST['level'];
    $wordsForTestingInJsonDecode = json_decode($wordsForTestingInJson);

    // progress
    $progress = selectOne('progress', ['user_id' => $id]);
    if (!empty($progress)) {
        $pointsAll  = $progress['points'];
        $userLevel = $progress['level'];
        $updatePoints = $pointsAll + $pointsForTesting;
        $updateLevel = setLevel($updatePoints);

        $data = [
            'level' => $updateLevel,
            'points' => $updatePoints
        ];
        update('progress', $progress['id'], $data);

    } else {
        $level = setLevel($pointsForTesting);
        $data = [
            'user_id' => $id,
            'level' => $level,
            'points' => $pointsForTesting
        ];

        insert('progress', $data);
    }

    // words
    $wordsDb = selectOne('words', ['user_id' => $_SESSION['id']]);

    if (!empty($wordsDb)) {
        // decode str DB
        $wordsStr = json_decode($wordsDb['words_str']);

        foreach($wordsStr as $key1 => $word1) {
            foreach($wordsForTestingInJsonDecode as $key2 => $word2) {
                if ($word1[0] === $word2[0]) {
                    $point = $word1[1] + $word2[1];
                    if ($point < 0) {
                        $point = 0;
                    } elseif ($point > 100) {
                        $point = 100;
                    }
                    $wordsStr[$key1][1] = $point;
                    unset($wordsForTestingInJsonDecode[$key2]);
                }
            }
        }
        $newWords = array_merge($wordsStr, $wordsForTestingInJsonDecode);
        $newWords = json_encode($newWords);

        $data = [
            'words_str' => $newWords
        ];

        update('words', $wordsDb['id'], $data);
    } else {

        $data = [
            'user_id' => $id,
            'words_str' => $wordsForTestingInJson,
            'level' => $wordsLevel
        ];
        insert('words', $data);
    }

    $_SESSION['learnData'] = getLearnData($id);
}
?>