<?php
if (!isset($_COOKIE['loggedin'])) {
    header("Location: login.php");
    exit();
}
print("Добро пожаловать!");