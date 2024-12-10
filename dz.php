<?php
//task 1

$name = "Dmytro";
echo "Hello! My name is \"$name\". <br>";

//t2

$age = 20;
echo "<br>I'm $age. <br>";

//t3

$a = 4;
$b = 6;
$rez = $a + $b;
echo "<br>'$a' + '$b' = '$rez'<br>";

//t4

$x = 50;
$y = 44;
echo "<br>Before: x = $x, y = $y<br>";
$x = $x + $y;
$y = $x - $y;
$x = $x - $y;
echo "After: x = $x, y = $y<br>";

//dz 6

$tag = 'div';
$background_color = 'cyan';
$color = 'red';
$width = '100px';
$height = '100px';

$styles = "<br><br> background-color: $background_color <br> color: $color <br> width: $width <br> height: $height <br>";
$output = "<br>Тег: < $tag > <br> зі стилями: [$styles]<br>";

echo $styles . PHP_EOL . "<$tag style ='  width: $width; height: $height; color: $color; background-color: $background_color'>Hello</$tag>";

//dz 5

$questions = [
[
    'text' => 'Скільки годин у добі?',
    'type' => 'radio',
    'options' => ['12', '24', '36', '48']
],
[
    'text' => 'Які з перелічених фруктів є цитрусовими?',
    'type' => 'checkbox',
    'options' => ['Апельсин', 'Яблуко', 'Лимон', 'Банан']
],
[
    'text' => 'Опишіть свій ідеальний відпочинок.',
    'type' => 'textarea'
]
];
foreach ($questions as $index => $question) {
echo "<br>" . ($index + 1) . ". " . $question['text'] . PHP_EOL;

if ($question['type'] === 'radio' || $question['type'] === 'checkbox') {
foreach ($question['options'] as $key => $option) {
echo " <br>  " . ($key + 1) . ") " . $option . PHP_EOL;
}
echo "<br>";
} elseif ($question['type'] === 'textarea') {
echo "<br>   Відповідь: _______________" . PHP_EOL;
}
echo PHP_EOL;
}