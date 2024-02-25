<?php
// Параметры подключения к БД
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'studentsdb';

function query($sql) {
    global $host ; 
    global $username ;
    global $password ;
    global $database ;
    $connection = mysqli_connect($host, $username, $password, $database);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $result = mysqli_query($connection, $sql);

    mysqli_close($connection);
    return $result;
}

function find_by_id($id){

    $sql = "SELECT * FROM students WHERE id_student = $id";
    $result = query($sql);
    return $result;
}
function print_student($result){
    if($result) {
        $row = mysqli_fetch_assoc($result);
        echo '<h1>Студент</h1>';
        echo '<ul>';
        echo '<li><font size="5">ID: ' . $row['id_student'] . '</font></li>';
        echo '<li><font size="5">Name: ' . $row['studentName'] . '</font></li>';
        echo '<li><font size="5">Surname: ' . $row['studentSurname'] . '</font></li>';
        echo '<li><font size="5">Birth Day: ' . $row['birthDate'] . '</font></li>';
        echo '<li><font size="5">Rating: ' . $row['rating'] . '</font></li>';
        echo '</ul>';
    }
    echo '<button><a href="MainPage.php"><font size="4">Назад</font></a></button>';
}
?>
