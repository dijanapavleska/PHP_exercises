<?php
$array = [
    0 => 1,
    1 => 2,
    2 => 'hello',
];
var_dump($array);
echo "<br>";
$array2 = array(1, 2, 3);
var_dump($array2);
echo "<hr>";

// $value = 1;
// if ($value > 0) {
//     $divider = $value;
// } else {
//     var_dump($value);
//     exit();
//     echo "LOL we will never get here";
//     // do something but not expected to ever happen
// }
// echo "<br>";
// echo (10 / $divider);

$fruits = [
    'Apple',
    'Pear',
    'Orange'
];
array_push($fruits, "Plum"); // 4th element
$fruits[] = 'Banana'; // adding an element at the end, same as push
var_dump($fruits);
echo "<hr>";
var_dump($fruits[0]); // "apple"

echo "<hr>";

$fruit_colors = [
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange',
];
$fruit_colors["Apple"] = "Yellow";
var_dump($fruit_colors); // "red"
echo "<br>";
// var_dump($fruit_colors[0]);

echo "<hr>";
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "<br>";
}
echo "<hr>";
foreach ($fruit_colors as $fruit_color) {
    echo $fruit_color;
    echo "<br>";
}
echo "<hr>";
foreach ($fruit_colors as $fruit => $fruit_color) {
    echo $fruit . " is " . $fruit_color;
    echo "<br>";
}

echo count($fruit_colors);
echo "<br>";

echo $d;

echo "<hr>";

$numbers = [
    3,
    1,
    2
];

sort($numbers);
var_dump($numbers);
echo "<br>";

$numbers = [
    "first" => 3,
    "second" => 1,
    "third" => 2
];
asort($numbers); // sorts them from the beginning
var_dump($numbers);
echo "<br>";

$cars_i_want = [
    "Aston Martin",
    "Bugatti",
    "Ferrari",
    "Lamborghini",
    "Maserati",
    "Mercedes",
    "Porsche",
    "Skoda",
];

echo ('For myself I would buy ' . $cars_i_want[1]);
echo "<br>";
echo ('For my spouse I would buy ' . $cars_i_want[3]);
echo "<br>";
$cars_i_want[4] = 'Smart';
echo "<br>";

echo '<ul>';
foreach ($cars_i_want as $car) {
    echo '<li>' . $car . '</li>';
}
echo '</ul>';
// associative array

$car_prices = [
    'Skoda Octavia' => 270000,
    'Volkswagen Golf' => 170000,
    'BMW X6' => 380000,
    'Porsche 911' => 1150000
];
echo ('You can have a Porsche for just ' . $car_prices['Porsche 911'] . ' crowns.');

foreach ($car_prices as $car => $price) {
    echo 'The price of ' . $car . ' is ' . $price . '<br';
};
