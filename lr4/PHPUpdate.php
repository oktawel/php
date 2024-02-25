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
$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$birthDate = $_POST['date'];
$rating = $_POST['rating'];

// SQL запрос для вставки данных в базу данных
$sql = "UPDATE students SET studentName = '$name', studentSurname = '$surname', birthDate = '$birthDate', rating = '$rating' WHERE id_student = '$id'";

if (query($sql)) {
    echo 'Данные успешно обновлены в базе данных';
    header("Location: MainPage.php");
    exit();
} else {
    echo 'Ошибка: ' . $sql . '<br>';
}

?>
