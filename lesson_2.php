<?php


//посчитать длину массива
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo(count($arr));

//--переместить первые 4 элемента массива в конец массива
//-- first example
$a = array_slice($arr, 0,4);
$b = array_splice($arr, count($a),count($arr));
$result = array_merge($a,$b);
var_dump($result);
//-- send example
function slice(array $arr, int $start, int $count)
{
    for ($i = 0; $i < $count; $i++) {
        $arr[] = $arr[$i + $start - 1];
        unset($arr[$i + $start - 1]);
        echo '<br>';
    }
    return $arr;
}

$arr1 = slice([1,2,3,4,5,6,7,8,9,10], 3, 2);
//-- end example
$a = array_slice($arr, 3, 3);
//--получить сумму 4,5,6 элемента

$sum = 0;
foreach (array_slice($arr, 3, 3) as $i)
    $sum += $i;
var_dump($sum);
//------------------------------------------------------
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];

//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
var_dump(array_diff_key($secondArr, $firstArr));
//найти все элементы которые присутствую в первом и отсутствуют во втором
var_dump(array_diff_key($firstArr, $secondArr));

//найти все элементы значения которых совпадают
var_dump(array_intersect_key($firstArr, $secondArr));

//найти все элементы значения которых отличается
$result = array_diff_assoc($firstArr, $secondArr);
var_dump($result);
//---------------------------------------------------------------------------------

$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];


//получить все вторые элементы вложенных массивов
var_dump($firstArr['two']);
//second example
$array = [];
foreach ($firstArr as $value) {
    if (is_array($value)) {
        $counter = 0;
        foreach ($value as $total) {
            $counter++;
            if ($counter == 2) {
                $array[] = $total;
            }
        }
    }
}
//end example

//получить общее количество элементов в массиве
print_r(count($firstArr));
//получить сумму всех значений в массиве
function summaryArray($arr) {
    $summary = 0;
    foreach($arr as $item) {
        if (is_array($item)) {
            $summary += summaryArray($item);
        } else {
            $summary += $item;
        }
    }
    return $summary;
}
echo summaryArray($firstArr);
//second example
//$typeTotals = array_map("count", $arr);
//$totalNumbers = array_sum($typeTotals);
//print($totalNumbers);
// end example
?>