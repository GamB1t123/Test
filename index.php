<?php
{
echo 'Остаток деления 7 на 3:', var_dump(7 % 3) . '<br>';
echo 'Получить целую часть сложения 7 и 7,15:', var_dump(round(7 + 7.15)) . '<br>';
echo 'Получить корень из 25:', var_dump(sqrt(25)) . '<hr>';



$str = "Десять негритят пошли купаться в море";
//$str1 = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
echo 'Получить 4-е слово из фразы: ', explode(' ', trim($str))[3] . '<br>';
echo '17-й символ из фразы: ', var_export(mb_substr($str,16,1)) . '<br>';
echo 'Сделать заглавной первую 
букву во всех словах фразы: ', mb_convert_case($str, MB_CASE_TITLE, "UTF-8") . '<br>';
echo 'Длина строки: ', mb_strlen($str,"UTF-8") . '<hr>';

    if (true == 1)
    {
        echo 'Правильно ли утверждение true равно 1: Равно ' . '<br>';
    }   else {
        echo  'Правильно ли утверждение true равно 1: Не равно '  .  '<br>';
    }
    if (false === 0)
    {
        echo 'Правильно ли утверждение false тождественно 0: тождественно 0 ' . '<br>';
    } else {
        echo 'Правильно ли утверждение false тождественно 0: не тождественно 0 ' . '<br>';
    }
//echo 'Правильно ли утверждение false тождественно 0: ', assert(false) . '<br>';
if (strlen('Three') > mb_strlen('три', "UTF-8")) {
    echo 'три больше чем Three' . '<br>';
}   else {
   echo 'Three больше чем три' . '<br>';
}
//echo 'Какая строка длиннее three - три: ', max($str2, $str3) . '<br>';
echo 'Какое число больше 125 умножить
    на 13 плюс 7 или 223 плюс 28 умножить 2: ', max(25 * 13 + 7, 223 + 28 * 2);

}