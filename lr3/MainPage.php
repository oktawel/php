<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php $file = 'example.txt'; ?>
    <h1>Лабораоторная работа №3</h1>

    <?php include 'PHPWork.php'; ?>
    <h3>Поиск файла:</h3>
    <?php $exists = chech_file($file);
        if ($exists){
            $read = chech_read($file); 
            $write = chech_write($file); 
            chech_size($file);
            if ($read){
                echo "<h3>Содержимое файла:</h3>";
                $needAdd = read_file($file);
            }
            if ($write and $needAdd){
                echo "<h3>Добавление в файл:</h3>";
                add_info($file);
                if ($read){
                    read_file($file);
                }
            }
            if ($write){
                echo "<h3>Удаление из файла:</h3>";
                delete_string(0, $file);
                if ($read){
                    read_file($file);
                }
            }
        }
    ?>

    
</body>

</html>
