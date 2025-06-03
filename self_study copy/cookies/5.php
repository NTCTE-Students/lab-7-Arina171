<?php
$visited = isset($_COOKIE['visited']) ? $_COOKIE['visited'] + 1 : 1;
setcookie("visited", $visited, time() + 86400, "/");
print("Количество посещений: " . $visited);