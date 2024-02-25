<?php

// Параметры подключения к БД
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'studentsdb';

// Подключение к БД
$connection = mysqli_connect($host, $username, $password, $database);

// Проверка соединения
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Функция для выполнения запроса к БД
function query($sql) {
    global $connection;
    $result = mysqli_query($connection, $sql);
    return $result;
}

// Получение данных из формы
$name = $_POST['name'];
$surname = $_POST['surname'];
$birthDate = $_POST['date'];
$rating = $_POST['rating'];

// SQL запрос для вставки данных в базу данных
$sql = "INSERT INTO students (studentName, studentSurname, birthDate, rating ) VALUES ('$name', '$surname', '$birthDate', $rating)";

// Выполнение SQL запроса
if (query($sql)) {
    echo 'Данные успешно добавлены в базу данных';
    header("Location: MainPage.php");
    exit();
} else {
    echo 'Ошибка: ' . $sql . '<br>';
}


mysqli_close($connection);
?>
