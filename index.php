<?php
ob_start();

include 'includes/header.php';
$pages = [
    'home',
    'list',
    'login',
    'logout',
    'panier',
];
$page = 'home';

if (isset($_GET['page'])) {
    // foreach ($pages as $page) {
    $page = $_GET['page'];
}
// }

include 'pages/' . $page . '.php';
include './includes/footer.php';
ob_end_flush();
?>