<?php

ini_set('display_errors', 'off');

session_start();

$url = $_SERVER['REQUEST_URI'];

if (preg_match('#^/admin$#', $url)) {
    include './admin.php';
    include "./views/admin.php";
}
if (preg_match('#^/admin-menu$#', $url)) {
    include './admin-menu.php';
    include "./views/admin-menu.php";
}

if (preg_match('#^/(edit)/(\d+)$#', $url, $match)) {
    $id = $match[2];
    include 'edit-film.php';
    include "./views/edit-film.php";
}

if (preg_match('#^/$#', $url)) {
    include 'films.php';
    include "./views/films.php";
}

if (preg_match('#^/logout$#', $url)) {
    include "./logout.php";
}



