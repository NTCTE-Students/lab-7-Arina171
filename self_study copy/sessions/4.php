<?php
session_start();
$_SESSION['cart'] = $_SESSION['cart'] ?? [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $_SESSION['cart'][] = $_POST['item'];
    } elseif (isset($_POST['clear'])) {
        $_SESSION['cart'] = [];
    }
}
?>
<form method="post">
    <input type="text" name="item" required>
    <button type="submit" name="add">Добавить</button>
    <button type="submit" name="clear">Очистить корзину</button>
</form>
<p>Корзина: <?php print_r($_SESSION['cart']); ?></p>