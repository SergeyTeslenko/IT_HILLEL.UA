<?php
/* Создать функцию принимающую массив произвольной вложенности и определяющий элемент,
 номер которого передан параметром во всех вложенных массивах.*/
$array = [1, 2, [88, 44, 33], [88, 55, 33], [99, 77, 55]];
function displayInfo(array $array, int $index)
{
    $results = [];

    foreach ($array as $value) {
        if (is_array($value)) {
            if (isset($value[$index])) {
                $results[] = $value[$index];
            }
        } else {
            if (isset($array[$index])) {
                $results[] = $array[$index];
            }
        }
    }
    return $results;
}
// не понял вторую часть задачи, по другому я не вижу выход!!!
var_dump(displayInfo($array, 1));

/*Создать функцию которая считает все буквы b в переданной строке,
 в случае если передается не строка функция должна возвращать false
*/

//echo strpos($string, 'b');

$string = "Hello big data PHP Developers!";

function countLetter($haystack = "", $needle = "b", $ignoreCase)
{
    $result = [];
    if(!$haystack && !is_string($haystack)){
        return false;
    }
    foreach (str_split($haystack) as $item){
//        if ($ignoreCase){
//            if (mb_strtolower($item) === mb_strtolower($search)){
//                $result[] = mb_strtolower($search);
//            }
//        }else{
            if ($needle === $item){
                $result[] = $item;
            }
//        }
    }
    return count($result);
}
//countLetter($string);


/*Создать функцию которая считает сумму значений всех элементов массива произвольной глубины*/

$array=[1,2,5,100,20,[2,5,100,20], 100];
$result = 0;
function get_sum($arr, $result) {

    foreach($arr as $elem){
        if (is_array($elem)){
            $result = get_sum($elem, $result);
        }
        else {
            $result += $elem;
        }

    }

    return $result;
}

echo get_sum($array, $result);


/*Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float*/
function square($max_size, $small_size)
{
    return round($max_size / $small_size);
}
var_dump(square(100, 23));