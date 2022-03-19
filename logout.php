<?php
session_start();
include 'path.php';
unset($_SESSION['id']);
unset($_SESSION['login']);
unset($_SESSION['learnData']);

header('Location: ' . BASE_URL);
?>
?>