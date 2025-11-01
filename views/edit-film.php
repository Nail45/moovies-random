<?php
if (!empty($_SESSION['auth'])) {
    ?>

    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Редактирование фильма</title>
        <link rel="stylesheet" href="../assets/admin-menu.css">
    </head>
    <body>

    <div class="exit-wrap">
        <a href="/logout">Выход</a>
    </div>

    <h1>Редактирование фильма</h1>
    <form action="" method="POST">
        <label for="new-title">Название:</label><br>
        <input type="text" id="new-title" name="title" required value="<?php echo $film['title'] ?>"><br>

        <label for="genre">Жанр:</label>
        <select id="genre" name="genre" required>
            <option value="Комедия" <?php if ($film['genre'] === 'Комедия') {
                echo 'selected';
            } ?>>Комедия
            </option>
            <option value="Боевик" <?php if ($film['genre'] === 'Боевик') {
                echo 'selected';
            } ?>>Боевик
            </option>
            <option value="Драма" <?php if ($film['genre'] === 'Драма') {
                echo 'selected';
            } ?>>Драма
            </option>
            <option value="Ужасы" <?php if ($film['genre'] === 'Ужасы') {
                echo 'selected';
            } ?>>Ужасы
            </option>
            <option value="Фантастика" <?php if ($film['genre'] === 'Фантастика') {
                echo 'selected';
            } ?>>Фантастика
            </option>
        </select>

        <label for="new-director">Режиссёр:</label><br>
        <input type="text" id="new-director" name="director" required value="<?php echo $film['director'] ?>"><br>

        <label for="link">Ссылка на фильм:</label><br>
        <input type="text" id="link" name="link" required value="<?php echo $film['link'] ?>"><br>

        <label for="new-releaseYear">Год выпуска:</label><br>
        <input type="number" id="new-releaseYear" name="releases" required value="<?php echo $film['releases'] ?>"><br>

        <button type="submit">Редактировать фильм</button>
        <a class="back" href="/admin-menu">Назад</a>
    </form>

    </body>
    </html>
<?php } ?>