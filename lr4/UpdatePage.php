<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Лабораоторная работа №4</h1>
        <?php include 'PHPRead.php'; ?>
        <?php 
            $result = find_by_id($_GET['id']);
            $row = mysqli_fetch_assoc($result);
            echo'<form action="PHPUpdate.php" method="post">';
                echo'<input type="hidden" name="id" value="'.$row['id_student'].'" id="id"/>';
                echo'<p>';
                    echo'<label for="name">Имя: </label>';
                    echo'<input type="text" name="name" value="'.$row['studentName'].'" id="name"/>';
                echo'</p>';

                echo'<p>';
                    echo'<label for="surname">Фимилия: </label>';
                    echo'<input type="text" name="surname" value="'.$row['studentSurname'].'" id="surname" />';
                echo'</p>';
                echo'<p>';
                    echo'<label for="date">Дата рождения: </label>';
                    echo'<input type="date" name="date" value="'.$row['birthDate'].'" id="date" />';
                echo'</p>';
                echo'<p>';
                    echo'<label for="rating">Рейтинг: </label>';
                    echo'<input type="number" name="rating" value="'.$row['rating'].'" id="rating" />';
                echo'</p>';
                echo'<input type="submit" value="Сохранить">';
                echo'<button><a href="MainPage.php">Назад</font></a></button>';
            echo'</form>';
        ?>
</body>

</html>
