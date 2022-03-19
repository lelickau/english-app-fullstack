<?php
session_start();
include 'connect.php';

function tt($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    exit;

}
// проверка выполнения запроса к БД
function checkError($query)
{
    $errInfo = $query->errorInfo();

    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }

    return true;
}
// запрос на получение данных одной таблицы
function selectAll($table, $params = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'".$value."'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key = $value";

            } else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    checkError($query);

    return $query->fetchAll();
}

// запрос на получение одной строки таблицы
function selectOne($table, $params = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'".$value."'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key = $value";

            } else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    checkError($query);

    return $query->fetch();
}

// запись данных в БД
function insert($table, $params) {
    global $pdo;
    $i = 0;
    $col = '';
    $mask = '';

    foreach($params as $key => $value) {
        if ($i === 0) {
            $col = $col . $key;
            $mask = $mask . "'" . $value . "'";
        } else {
            $col = $col . ", $key";
            $mask = $mask . ", '" . $value . "'";
        }
        $i++;
    }

    $sql = "INSERT INTO $table ($col) VALUES ($mask)";

    $query = $pdo->prepare($sql);
    // возможна ошибка
    //$query->execute($params);
    $query->execute();
    checkError($query);
    return $pdo->lastInsertId();
}
// обновление строки в таблице
function update($table, $id, $params) {
    global $pdo;
    $i = 0;
    $str = '';

    foreach($params as $key => $value) {
        if ($i === 0) {
            $str = $str . $key . "='" . $value . "'";
        } else {
            $str = $str . ",". $key ."='" . $value . "'";
        }
        $i++;
    }
    $sql = "UPDATE $table SET $str WHERE id = $id";

    $query = $pdo->prepare($sql);
        // возможна ошибка
    //$query->execute($params);
    $query->execute();
    checkError($query);
}

// удаление
function delete($table, $id) {
    global $pdo;

    $sql = "DELETE FROM $table WHERE id = $id";

    $query = $pdo->prepare($sql);
    $query->execute();
    checkError($query);
}

// //user
// function getUserData ($table) {
//     global $pdo;

//     $sql = "SELECT t.id, t.login, t.points FROM $table AS t";

//     $query = $pdo->prepare($sql);
//     $query->execute();
//     checkError($query);
//     return $query->fetchAll();

// }

?>