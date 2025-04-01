<?php
setcookie("language", "English", time() + 7200, "/");
print("Выбранный язык: " . ($_COOKIE['language'] ?? 'не установлен'));