<?php
function chech_file($filename)
{
    $result = true;
    if (file_exists($filename)){
        echo "Файл $filename существует." . "<br/>";
    }
    else{
        echo "Файл $filename не существует." . "<br/>";
        $result = false;
    }
    return $result;
};
function chech_read($filename)
{
    $result = true;
    if (is_readable($filename)){
        echo "Файл доступен для чтения." . "<br/>";
    }
    else{
        echo "Файл не доступен для чтения." . "<br/>";
    $result = false;
    }
    return $result;
}
function chech_write($filename)
{
    $result = true;
    if ($isWritable = is_writable($filename)){
        echo "Файл доступен для записи." . "<br/>";
    }
    else{
        echo "Файл не доступен для записи." . "<br/>";
    $result = false;
    } 
    return $result;
}
function chech_size($filename)
{
    $fileSize = filesize($filename);
    echo "Размер файла: $fileSize байт." . "<br/>"; 
}

function read_file($filename)
{  
    $file_array = file($filename);
    $result = true;
    foreach ($file_array as $value) {
        echo "<br>". $value;
        if (str_contains($value, "Количество строк:")){
            $result = false;
        }
    }
    return $result;
};
function write_info($filename)
{  
    $file_array = file($filename);
    array_pop($file_array);
    $newContent = implode('', $file_array);
    file_put_contents($filename, $newContent);
    $count_str = count($file_array);
    $string = "Количество строк:".$count_str;
    file_put_contents($filename, $string, FILE_APPEND | LOCK_EX);
};
function add_info($filename)
{  
    $file_array = file($filename);
    $count_str = count($file_array);
    $string = "\nКоличество строк:".$count_str;
    file_put_contents($filename, $string, FILE_APPEND | LOCK_EX);
};
function delete_string($number , $filename)
{  
    $file_array = file($filename);
    unset($file_array[$number]);
    file_put_contents($filename, $file_array);
    write_info($filename);
};
?>
