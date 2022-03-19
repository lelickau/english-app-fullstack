<?php

function calculateLearningProgress ($data) {
    $learned = 0;
    $inProcess = 0;
    $total = count($data);

    foreach($data as $key => $item) {
        if ($item[1] === 4) {
            $learned += 1;
        } else {
            $inProcess += 1;
        }
    }

    return [
        'learned' => $learned,
        'inProcess' => $inProcess,
        'total' => $total
    ];
}

function getLearnData ($id) {
    $progressData = selectOne('progress', ['user_id' => $id]);
    $wordsData = selectAll('words', ['user_id' => $id]);

    if (!empty($progressData) && !empty($wordsData)) {
        $learned = 0;
        $inProcess = 0;
        $total = 0;
        $status = 'Новичок';
        $width = ($progressData['level'] * 10) % 10;

        foreach($wordsData as $key => $data) {
            $progress = calculateLearningProgress(json_decode($data['words_str']));
            $learned += $progress['learned'];
            $inProcess += $progress['inProcess'];
            $total += $progress['total'];
        }

        if ($progressData['level'] > 5) {
            $status = 'Ученик';
        } elseif ($progressData['level'] > 25) {
            $status = 'Знаток';
        } elseif ($progressData['level'] > 45) {
            $status = 'Профи';
        } elseif ($progressData['level'] > 85) {
            $status = 'Мастер';
        } elseif ($progressData['level'] > 150) {
            $status = 'Гуру';
        }

        return [
            'level' => intval($progressData['level']),
            'points' => $progressData['points'],
            'learned' => $learned,
            'inProcess' => $inProcess,
            'total' => $total,
            'status' => $status,
            'width' => $width
        ];

    } else {
        return [
            'level' => 0,
            'points' => 0,
            'learned' => 0,
            'inProcess' => 0,
            'total' => 0,
            'status' => 'Новичок',
            'width' => 0
        ];
    }

}