<?php

require_once './connect.php';

if (isset($_POST['password'])) {

    try {

        $stmt = $pdo->prepare('SELECT * FROM admin where login = :login');
        $stmt->bindValue(':login', $_ENV['LOGIN_ADMIN']);
        $stmt->execute();
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!empty($admin)) {
            $hash = $admin['password'];
            $password = password_verify($_POST['password'], $hash);
        }

        if (!empty($password)) {
            $_SESSION['auth'] = true;

            header('location: /admin-menu');
        } else {
            $errorFlag = true;
        }
    } catch
    (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}