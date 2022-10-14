<?php

$my_variable = 123;

echo $my_variable;

echo "<hr>";

$a = 1;
echo $a; // works fine

function foo()
{
    // echo $a; // doesn't work, $a is not defined, outside of function
    $b = 2;
    echo $b; // works fine
}

foo();
echo $b;

echo "<hr>";

$c = 3;
echo $c;
// unset($c);
// echo $c;

echo "<hr>";

define('MY_SERVER', 'Apache');
echo MY_SERVER; // works fine
echo "<br>";

function echoMyServer()
{
    echo MY_SERVER; // works fine
    define("STATUS", "amazed this works");
}
echoMyServer();
echo "<br>";
echo STATUS;

echo "<hr>";


function raiseByOne($number)
{
    echo "raising number by one <br>";
    $result = $number + 1;
    return $result;
}


$number_raised_by_one = raiseByOne(1); // calling a function without an argument shuts it down
echo $number_raised_by_one;


echo "<hr>";

function raiseOnebyReference(&$number) // takes the variable itself, doesnt copy the value, but the pointer
{
    echo "raising number by one <br>";
    $number = $number + 1;
    return $number;
}

$number = 1;
$number_raised_by_one = raiseOnebyReference($number);
echo $number;
echo "<br>";
echo $number_raised_by_one;

echo "<hr>";

function raiseValue($value, $raise_by = 5)
{
    return $value + $raise_by;
}

echo raiseValue(1, 2); // 3, ignores $raise_by 5 and just uses 1+2
echo "<br>";
echo raiseValue(1); // 6 (only uses first argument + raise_by 5)

echo "<hr>";
$first_name = "Dijana<br>";
$surname = "Pavleska<br>";
echo $first_name;
echo $surname;

$year_of_birth = "1992<br>";
$height = "165<br>";

echo $year_of_birth;
echo $height;

define('SERVER_SOFTWARE', 'Apache<br>');
echo 'This server is running on ' . SERVER_SOFTWARE;

define('MY_OS', 'Windows');
echo 'My operating system is ' . MY_OS;

echo '<br>';

function greet_world()
{
}
echo 'Hello world';

echo "<br>";


function greeting($whom)
{
    return "Hello " . $whom;
}
echo greeting("everyone");


echo "<br>";

function greet($whom)
{
    echo greeting($whom);
}
greet("Prague ");

echo "<hr>";

function convert_weight($value, $unit = 'kg')
{
    switch ($unit) {
        default:
        case 'kg':
            return 2.20462262 * $value;
            break;
        case 'lb':
            return $value / 2.20462262;
            break;
    }
}

echo convert_weight(1); // convert 1 lb to kg because kg is default

function element($element, $innerHTML = "", $attributes = "")
{
    return "<{$element} {$attributes}>" . "$innerHTML" . "</{$element}>";
}
echo element('h1', 'some text', 'class="foo"');

// function element($element)
// {
//     return "<{$element}>" . "</{$element}>";
// }

// echo element('p');
