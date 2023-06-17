<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : "main";
switch ($page) {
    case 'Home':
        include "page/konten.html";
        break;
    case 'Product':
        include "page/Product.html";
        break;
    case 'Login':
        include "page/Login.html";
        break;
    case 'Daftar':
        include "page/Daftar.html";
        break;
    default:
        include "page/konten.html";
        break;
}
?>
