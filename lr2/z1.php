<?php
    $rand_str = array("Телефон", " Планшет"," Наушники", " Клавиатура ", "Мышка ", "Монитор", "Часы", "Микрофон", "Видеокарта", "Процессор", "ОЗУ", "SSD", "HDD", "Блок питания", "Корпус", "Материнская плата");
    $count_str = count($rand_str);
    function print_array($mas, $n){
    print ("[");
    for ($i = 0; $i < $n; $i++){
        if ($i < $n-1){
            print ($mas[$i].",");
        }
        else{
             print ($mas[$i]);
        }
    }
    print ("]"."<br>");
    }
    //$items = array();
    //for ($i = 0; $i < 5; $i++){ $items[] = $rand_str[rand(0, $count_str - 1)];}
    $items = array("Телефон","Планшет","Наушники","Клавиатура","Мышка");

    for ($i = 0; $i < 4; $i++){
        $items[] = $rand_str[rand(0, $count_str - 1)];   
    }
    $count_items = count($items);
    print ($count_items). "<br>";
    print_array($items, $count_items);
    sort($items);
    print_array($items, $count_items);
?>
