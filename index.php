<?php
    $arr = ['string', 23, [12, 48]];

//    foreach ($arr as $key => $value) {
//       echo '<pre>';
//        var_dump($key);
//        var_export($value);
//        echo '</pre>';
//
//        if (is_array($value)) {
//            foreach ($value as $item) {
//                echo '<pre>';
//                var_dump($item);
//                echo '</pre>';
//            }
//
//        }
//    }
    $i = 0;
    while  ($i < count($arr)) {

        echo '<pre>';
        var_dump($arr[$i]);
        echo '</pre>';

        if (is_array($arr[$i])) {
            $e = 0;
            while ($e < count($arr[$i]))
                echo '<pre>';
            var_dump($arr[$i][$e]);
            echo '</pre>';
            $e++;
        }
    }
    $i++;
}
    for ($i =0;)