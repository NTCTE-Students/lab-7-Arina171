<?php
setcookie("country", "Russia", time() + 86400, "/");
print("Привет из " . ($_COOKIE['country'] ?? 'не установлено'));