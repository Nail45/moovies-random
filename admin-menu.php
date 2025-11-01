<?php

require_once './connect.php';

if (!empty($_SESSION['auth'])) {
    try {
        $stmt = $pdo->prepare('SELECT * FROM films');
        $stmt->execute();

        $films = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    if (isset($_POST['delete'])) {
        try {
            $stmt = $pdo->prepare('DELETE FROM films WHERE id=:id');
            $stmt->bindValue(':id', $_POST['delete'], PDO::PARAM_INT);

            $stmt->execute();

            header('Location: /admin-menu');
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    if (!empty($_POST)) {
        try {
            $stmt = $pdo->prepare('INSERT INTO films( title, genre, director, link, releases)
        VALUES (:title,:genre,:director,:link,:releases)');

            $stmt->bindValue(':title', $_POST['title']);
            $stmt->bindValue(':genre', $_POST['genre']);
            $stmt->bindValue(':director', $_POST['director']);
            $stmt->bindValue(':link', $_POST['link']);
            $stmt->bindValue(':releases', $_POST['releases'], PDO::PARAM_INT);

            $stmt->execute();

            header('Location: /admin-menu');
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


}