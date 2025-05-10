<?php
setcookie("font_size", "16px", time() + 86400, "/");
setcookie("layout", "grid", time() + 86400, "/");
print("Настройки: font_size=" . ($_COOKIE['font_size'] ?? 'не установлено') . ", layout=" . ($_COOKIE['layout'] ?? 'не установлено'));