<?php

ini_set('display_errors', 'off');

session_start();

$url = $_SERVER['REQUEST_URI'];

if (preg_match('#^/admin$#', $url)) {
    include './controllers/admin.php';
    include "./views/admin.php";
}
if (preg_match('#^/admin-menu$#', $url)) {
    include './controllers/admin-menu.php';
    include "./views/admin-menu.php";
}

if (preg_match('#^/(edit)/(\d+)$#', $url, $match)) {
    $id = $match[2];
    include './controllers/edit-film.php';
    include "./views/edit-film.php";
}

if (preg_match('#^/$#', $url)) {
    include './controllers/films.php';
    include "./views/films.php";
}

if (preg_match('#^/logout$#', $url)) {
    include "./controllers/logout.php";
}



