<?php
session_start();
if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = time();
}
$_SESSION['last_visit_time'] = time();
print("Первый визит: " . date("Y-m-d H:i:s", $_SESSION['first_visit_time']));
print("Последний визит: " . date("Y-m-d H:i:s", $_SESSION['last_visit_time']));