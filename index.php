<!DOCTYPE html>
<html>
<body>

<h1><b>PHP Practice</b></h1>

<?php
echo "Hello World!<br>";
?>
<?php
$x = 20;
$y = 10;
echo $x + $y . "<br>";
echo $x + $y;
?>

<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>

<?php
$text1 = "PHP is hard :(";
$text2 = "You are just lazy.";
$a = 34;
$b = 35;
$c = $a + $b;

echo "<h2>" . $text1 . "</h2>";
echo "<h3> Very true => " . $text2 . "</h3>";
echo $c . "<br>";

var_dump($text1, $text2);
echo "<br>";
?>

<?php
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar1 = new Car("red", "Volvo");
  $myCar = new Car("blue", "Maseratti");
  var_dump($myCar);
  echo "<br>";
?>

<?php
echo ("The string length of Hello world! including the special characters and whitespace is ". strlen("Hello world!")) . "<br>";
echo ("The string word count of Hello world! is ". str_word_count("Hello world!")) . "<br>";
echo ("The string position of the word 'world' [NOTE: String position starts with: 0 ]. It is located at the position - " . strpos("Hello world!", "world")). "<br>";

$x = "Hello World!";
echo str_replace("World", "_World by SEVENTEEN", $x). "<br>";
echo strrev($x). "<br>";
echo substr($x, 7, 4);
echo substr($x, -5, 3);
?>

<?php
$a = 5;
$b = 5.34;
$c = "25";
echo "<br>";
var_dump($a);
var_dump($b);
var_dump($c);
echo "<br>";
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>


</body>
</html>