<?php

if (!empty($_SESSION['auth'])) {
    ?>

    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Панель администратора фильмов</title>
        <link rel="stylesheet" href="../assets/admin-menu.css">
    </head>
    <body>

    <div class="exit-wrap">
        <a href="/logout">Выход</a>
    </div>

    <div class="container">
        <h1>Панель управления фильмами</h1>

        <table class="film-table">
            <thead>
            <tr>
                <th>№</th>
                <th>Название</th>
                <th>Жанр</th>
                <th>Режиссёр</th>
                <th>Ссылка</th>
                <th>Год выпуска</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($films as $film) { ?>
                <tr>
                    <td><?php echo $film['id'] ?></td>
                    <td><?php echo $film['title'] ?></td>
                    <td><?php echo $film['genre'] ?></td>
                    <td><?php echo $film['director'] ?></td>
                    <td><a href="<?php echo $film['link'] ?>">Перейти</a></td>
                    <td><?php echo $film['releases'] ?></td>
                    <td class="action-td">
                        <a href="/edit/<?php echo $film['id'] ?>" class="edit-button">Редактировать</a>
                        <form class="form-delete" method="POST">
                            <input type="hidden" value="<?php echo $film['id'] ?>" name="delete">
                            <input type="submit" value="Удалить">
                        </form>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <h2>Добавление нового фильма</h2>
        <form action="" method="POST">
            <label for="new-title">Название:</label><br>
            <input type="text" id="new-title" name="title" required><br>

            <label for="genre">Жанр:</label>
            <select id="genre" name="genre" required>
                <option value="Комедия">Комедия</option>
                <option value="Боевик">Боевик</option>
                <option value="Драма">Драма</option>
                <option value="Ужасы">Ужасы</option>
                <option value="Фантастика">Фантастика</option>
            </select>

            <label for="new-director">Режиссёр:</label><br>
            <input type="text" id="new-director" name="director" required><br>

            <label for="link">Ссылка на фильм:</label><br>
            <input type="text" id="link" name="link" required><br>

            <label for="new-releaseYear">Год выпуска:</label><br>
            <input type="number" id="new-releaseYear" name="releases" required><br>

            <button type="submit">Добавить фильм</button>
        </form>
    </div>

    </body>
    </html>

<?php } ?>
