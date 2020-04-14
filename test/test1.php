<?php

header("Content-Type: text/plain; charset=utf-8");

//З'єднання рядків
$a = 'Hello';
$b = 'World';
$ab = $a." ".$b;
echo $ab."\n";

//Використання foreach та explode
$tmp_string = "Hello world, I'm a super php code\n";
echo "\nBefore explode:\n".$tmp_string;
$array_of_words = explode(" ", $tmp_string);
echo "\nAfter explode:\n";
foreach ($array_of_words as $word) {
    echo $word."\n";
}

//Використання implode
echo "\nAfter implode:\n";
$new_string = implode(" ", $array_of_words);
echo $new_string."\n";

//Хеш-масив
$hash_array = [ "name" => "Ivanna", "surname" => "Chovhan", "day of birth" => 10, "month of birth" => 7];
echo "\n".$hash_array["name"]." ".$hash_array["surname"]." ".$hash_array["day of birth"].".".$hash_array["month of birth"]."\n";

//Розйменування змінних
$tmp = 'Some value';
$tmp2 = 'tmp';
echo "\n".$$tmp2."\n";


//Порівняння
$a = 1;
$b = '1';

if($a == $b) {
    echo "\nEqual values\n";
}
else {
    echo "\nNot equal\n";
}

if($a === $b) {
    echo "\nEqual values and types\n";
}
else {
    echo "\nNot equal\n";
}

if($a > $b) {
    echo "\na bigger than b\n";
}
else {
    echo "\nb bigger than a\n\n";
}



//Приведення типів
$array_of_digits = ['100', '200', 30, '300', '150', 20];
foreach ($array_of_digits as $digit) {
    echo ((int)$digit * 2). " ";
}



//Батьківський клас
class Figure {
    public $square;
    public $color;

    function __construct($square, $color) {
        $this->square = $square;
        $this->color = $color;
    }

    public function get_square() {
        return $this->square;
    }

    public function get_color() {
        return $this->color;
    }

}

//Похідний клас
class Circle extends Figure {
    public $radius;

    function __construct($square, $color, $radius) {
        parent::__construct($square, $color);
        $this->radius = $radius;
    }

    public function get_radius() {
        return $this->radius;
    }

}
$object = new Circle(25, "black", 4);
echo "\n\nCircle\n";
echo "Square: ".$object->get_square()."\n";
echo "Color: ".$object->get_color()."\n";
echo "Radius: ".$object->get_radius()."\n\n\n";



class SingleTon {
    private static $instance;
    private $some_var;

    private function __construct(){}
    private function __clone(){}

    public static function getInstance(): SingleTon{
        if(self::$instance === NULL) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    function get_var() {
        return $this->some_var;
    }
    function set_var($some_var) {
        $this->some_var = $some_var;
    }
}

$s1 = SingleTon::getInstance();
$s2 = SingleTon::getInstance();
if ($s1 === $s2) {
    echo "Singleton works, both variables contain the same instance.";
} else {
    echo "Singleton failed, variables contain different instances.";
}
?>