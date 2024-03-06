<?php
for ($i=0;$i<5;$i++) {
    $a = 65;
    for ($j=0;$j < $i;$j++ ){
        echo chr($a + 4 - $j)." ";
    }
    echo chr($a). " ";
    for ($j=$i ;$j < 4;$j++ ){
        echo chr($a + $i + 1). " ";
        $a=$a+1;
    }
    echo "<br>";
}
?>
