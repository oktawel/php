<?php
//Абстрактный класс “Фигура”
abstract class Figure {
    abstract public function calculateArea();
}

//Класс потомок “Треугольник” 
class Triangle extends Figure {
    private $A;
    private $B;
    private $C;
    private $height;


    public function __construct($var1, $var2, $var3 = null) {
        $this->A = $var1;
        if ($var3 !== null){
            $this->A = $var1;
            $this->B = $var2;
            $this->C = $var3;
            $this->height = null;
        }
        else{
            $this->B = null;
            $this->C = null;
            $this->height = $var2; 
        }
    }

    public function calculateArea() {
        //Вычисление площади по 3 сторонам
        if ($this->C !== null){
            $p = ($this->A + $this->B + $this->C) / 2;
            $area = sqrt($p * ($p - $this->A) * ($p - $this->B) * ($p - $this->C)); 
        }
        //Вычисление площади по стороне и высоте
        else{
            $area = 0.5 * $this->A * $this->height;  
        }
        return $area;
    }
}

//Класс потомок “Прямоугольник”
class Rectangle extends Figure {
    private $length;
    private $width;
    //Вычисление площади по сторонам
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Примеры использования 
$triangle = new Triangle(5, 4);
echo "Площадь треугольника: " . $triangle->calculateArea() . "<br/>";// Вычисление по стороне и высоте

$triangle2 = new Triangle(3, 4, 2);
echo "Площадь треугольника: " . $triangle2->calculateArea() . "<br/>";// Вычисление по трём сторонам

$rectangle = new Rectangle(6, 3);
echo "Площадь прямоугольника: " . $rectangle->calculateArea() . "<br/>";
?>
