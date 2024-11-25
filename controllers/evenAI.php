<?php
session_start();

if (!isset($_COOKIE['user_token'])) {
    header("Location: login.php");
    exit();
}

require_once '../views/evenAI.php';

?>