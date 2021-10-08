<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

echo 'Длина массива: ', (count($arr)) . '<br>';
function moveElements(&$arr)
{
$p1 = array_slice($arr, 0, 4);
$p2 = array_slice($arr, 4, 5);
$arr = array_merge($p2, $p1);

}

moveElements($arr, $p2, $p1);
echo '<pre>';
print_r($arr);
echo '</pre>';

echo 'Сумма эллементов массива: ', array_sum(array_slice($arr, 3, 3)) . '<hr>';



        $firstArr = [

        'one' => 1,

        'two' => 2,

        'three' => 3,

        'four' => 5,

        'five' => 12,

        ];

        $secondArr = [

        'one' => 1,

        'seven' => 22,

        'three' => 32,

        'four' => 5,

        'five' => 13,

        'six' => 37,

];
function array_diff_assoc_recursive($firstArr, $secondArr)
{
    $difference = array();
    foreach ($firstArr as $key => $value) {
        if (is_array($value)) {
            if (!isset($secondArr[$key]) || !is_array($secondArr[$key])) {
                $difference[$key] = $value;
            } else {
                $new_diff = array_diff($value, $secondArr[$key]);
                if (!empty($new_diff))
                    $difference[$key] = $new_diff;
            }
        } else if (!array_key_exists($key, $secondArr) || $secondArr[$key] !== $value) {
            $difference[$key] = $value;
        }
    }
    return $difference;
}
function array_inter($firstArr, $secondArr)
{
    $difference = array();
    foreach ($secondArr as $key => $value) {
        if (is_array($value)) {
            if (!isset($firstArr[$key]) || !is_array($firstArr[$key])) {
                $difference[$key] = $value;
            } else {
                $new_diff = array_intersect($value, $firstArr[$key]);
                if (!empty($new_diff))
                    $difference[$key] = $new_diff;
            }
        } else if (!array_key_exists($key, $firstArr) || $firstArr[$key] !== $value) {
            $difference[$key] = $value;
        }
    }
    return $difference;
}

echo '<pre>';
var_dump(array_diff_assoc_recursive($firstArr,$secondArr));
var_dump(array_inter($firstArr,$secondArr));
$arrdiff =  array_diff($secondArr, $firstArr);
$arrinter = array_intersect($firstArr,$secondArr);

  print_r($arrdiff);
  print_r($arrinter);
echo '</pre>';


    $ThirdArr = [

        'one' => 1,

            'two' => [

            'one' => 1,

                'seven' => 22,

                'three' => 32,
            ],

    '   three' => [

            'one' => 1,

            'two' => 2,

    ],

    'four' => 5,

            'five' => [

                'three' => 32,

    '           four' => 5,

                'five' => 12,

    ],

    ];
echo '<hr>';


// 'получить все вторые элементы вложенных массивов', не прийшло в голову як це зробити

    $result2 = count($ThirdArr, COUNT_RECURSIVE);
    echo 'общее количество элементов: ', $result2 . '<br>';

    $sum = 0;
    array_walk_recursive($ThirdArr, function ($number) use (&$sum){
        $sum += $number;
    });

echo 'Сумма: ', $sum;









