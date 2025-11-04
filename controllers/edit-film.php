<?php

require_once './connect.php';

if (!empty($_SESSION['auth'])) {
    try {
        $stmt = $pdo->prepare('SELECT * FROM films where id=:id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $film = $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    if (!empty($_POST)) {
        try {
            $stmt = $pdo->prepare('UPDATE films SET title=:title,genre=:genre,director=:director,
            link=:link,releases=:releases WHERE id=:id');

            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->bindValue(':title', $_POST['title']);
            $stmt->bindValue(':genre', $_POST['genre']);
            $stmt->bindValue(':director', $_POST['director']);
            $stmt->bindValue(':link', $_POST['link']);
            $stmt->bindValue(':releases', $_POST['releases'], PDO::PARAM_INT);

            $stmt->execute();

            header('Refresh:0');
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}