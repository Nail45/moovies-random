<?php

require_once './connect.php';


if (!empty($_POST['genre'])) {
    try {
        $stmt = $pdo->prepare('SELECT * FROM films where genre=:genre ORDER BY RAND() LIMIT 1');
        $stmt->bindValue(':genre', $_POST['genre']);
        $stmt->execute();

        $film = $stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION['film'] = $film;
        $_SESSION['genre'] = $_POST['genre'];

        header('Location: /');
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
