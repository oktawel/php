<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Лабораоторная работа №4</h1>
    <?php include 'PHPInfo.php'; ?>
    <?php print_student(find_by_id($_GET['id'])) ?>
</body>

</html>
