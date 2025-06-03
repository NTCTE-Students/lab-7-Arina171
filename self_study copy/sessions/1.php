<?php
session_start();
$_SESSION['username'] = 'student';
print("Имя пользователя: " . $_SESSION['username']);