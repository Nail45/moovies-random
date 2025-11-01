<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Случайный фильм</title>
    <link rel="stylesheet" href="../assets/styles.css"/>
</head>
<body>
<div class="container">
    <div class="mode-selection" id="modeSelection">
        <a href="/admin" id="adminBtn">Войти как админ</a>
    </div>
    <h1>Выберите жанр фильма</h1>
    <form class="filter" method="post">
        <label for="genre"></label>
        <select id="genre" name="genre">
            <option value="Комедия">Комедия</option>
            <option value="Боевик">Боевик</option>
            <option value="Драма">Драма</option>
            <option value="Ужасы">Ужасы</option>
            <option value="Фантастика">Фантастика</option>
        </select>
        <button type="submit" id="getMovieBtn">Показать случайный фильм</button>
    </form>
    <div class="result" id="result">
        <a href="/<?php echo $_SESSION['film']['link'] ?>"><?php echo $_SESSION['film']['title'] ?></a>
    </div>
</div>
</body>
</html>