<?php
//->Действия с числами

//$numOne = 7;
//$numTwo = 3;
//$result = $numOne % $numTwo;
//print_r($result)

//$numberOne = 7;
//$numberTwo = 7.15;
//$result = $numberOne + floor($numberTwo);
//print_r($result);

//$numSqr = 25;
//$root = sqrt($numSqr);
//echo ($root)



//->Действия со строками
//#1-task
//$text = 'Десять негритят пошли купаться в море';
//$array = explode(' ', $text);
//echo $array[3];

//#2-task
//$word ='Десять негритят пошли купаться в море';
//$oneSymbol = mb_substr($word,17,1,'utf8');
//echo $oneSymbol;

//#3-task
//if(!function_exists('mb_ucwords')) {
//    function mb_ucwords($str) {
//        $str = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
//        return ($str);
//    }
//}
//$toUpperCase = 'Десять негритят пошли купаться в море';
//echo mb_ucwords($toUpperCase);

//#4-task
//$count = 'Десять негритят пошли купаться в море';
//$resultCount= mb_strlen($count);
//print_r($resultCount);


//->Действия с логическими значениями



//-->Правильно ли утверждение true равно 1
//$a = true;
//$b = 1;
//var_dump($a===1); В строгом сравнении по типу и значению будет false / в нестрогом //var_dump($a==1);true

//-->Правильно ли утверждение false тождественно 0
// да так как сравниваються 0==0 возвратит true

//-->Какая строка длиннее three - три -> вторая сторока длиннее
//$x = "three"; // 5
//echo strlen($x);
//$three = 'три'; // 6
//echo strlen($three);

//-->Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2 -> перовое число больше
//$a = 125;
//$b = 13;
//$c = 7;
//$result = $a * $b + $c;
//var_dump($result);
////1632

//$f = 223;
//$g = 28;
//$h = 2;
//$resultTwo = $f+$g * $h;
//var_dump($resultTwo);
//279











?>

