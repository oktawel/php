<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Лабораоторная работа №4</h1>
    <form action="PHPCreate.php" method="post">
        <p>
            <label for="name">Имя: </label>
            <input type="text" name="name" id="name"/>
        </p>

        <p>
            <label for="surname">Фимилия: </label>
            <input type="text" name="surname" id="surname" />
        </p>
        <p>
            <label for="date">Дата рождения: </label>
            <input type="date" name="date" id="date" />
        </p>
        <p>
            <label for="rating">Рейтинг: </label>
            <input type="number" name="rating" id="rating" />
        </p>
        <input type="submit" value="Сохранить"> 
    </form>    
</body>

</html>
