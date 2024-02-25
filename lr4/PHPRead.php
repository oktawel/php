<?php
$url = $_SERVER['HTTP_HOST'];

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



$sql = "SELECT * FROM students";
$result = query($sql);
echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>№</th>';
echo '<th>Имя студента</th>';
echo '<th>Фамилия студента</th>';
echo '<th colspan="3">Функции</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
if($result) {
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['id_student'] . '</td>';
        echo '<td>' . $row['studentName'] . '</td>';
        echo '<td>' . $row['studentSurname'] . '</td>';
        echo '<td>' . '<button><a href="' . "DeletePage.php?id=" . $row['id_student'] .  '">Удалить</a></button>' . '</td>';
        echo '<td>' . '<button><a href="' . "InfoPage.php?id=" . $row['id_student'] .  '">Информация</a></button>' . '</td>';
        echo '<td>' . '<button><a href="' . "UpdatePage.php?id=" . $row['id_student'] .  '">Обновить</a></button>' . '</td>';  
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    mysqli_free_result($result); 
}

mysqli_close($connection);
?>
