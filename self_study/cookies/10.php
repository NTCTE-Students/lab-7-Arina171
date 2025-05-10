<?php
setcookie("session_id", "", time() - 3600, "/");
print("Куки 'session_id' удалены");