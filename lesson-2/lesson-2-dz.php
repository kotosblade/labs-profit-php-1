<?php
/**
 * ДОМАШНЯЯ РАБОТА № 2.
 * Date: 03.08.2017
 * Time: 0:38
 */

// 1. Напишите программу, которая составит и выведет в браузер таблицу истинности для логических операторов &&, || и xor.
// ( https://ru.wikipedia.org/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%B8%D1%81%D1%82%D0%B8%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8 )
// &&
$x0 = '1';
$y0 = '0';
$x1 = true;
$y1 = '0';

// ||

// xor


//таблица истенности.

//таблица истинности для логических операторов &&


// 2. Составьте функцию вычисления дискриминанта квадратного уравнения.
// Покройте ее тестами.
// Используя эту функцию, напишите программу, которая решает квадратное уравнение.
// Оформите красивый вывод решения.

$a = (float) '2';
$b = (float) ('-5' / '3');
$c = (float) ('1' / '3');

// квадратное уравнение будет.
// pow(2,8) // 256
// $pow1 = gmp_pow("2", 31);
// echo gmp_strval($pow1) . "\n";
echo ' 
<p>
(' . $a . ') * X<sup><small>2</small></sup> + ('. $b .') * X + (' . $c . ') = 0
</p>';

// a * x ** x + b * x + c = 0;
// x ** x + 1 * x - 6 = 0
// Здесь   a = 1 ,   b   =   1 ,   c = – 6 ,

// D = b ** 2 – 4 * a * c
// 1 ** 1 – 4 * 1 * (–6) = 25
// D > 0 ,   значит уравнение имеет два корня :
echo '<p>';

echo 'D = (' . $b . ')<sup><small>2</small></sup> - 4 * ('. $a .') * (' . $c . ')';

$d = ( pow($b,2) ) - ( 4 * ($a * $c) );
echo '<br>D = ' . $d;

echo '</p>';

// x1 = (–b + √D) / (2 * a)
// (–1 + √ 25) / (2 * 1) = 2
// &#8730
echo '<p>';

echo 'x<sub><small>1</small></sub> = (-(' . $b . ') + √<span style="text-decoration:overline;"> D </span> ) / ( 2 * ('. $a .'))';

$x1 = ( -($b) + sqrt ($d) ) / ( 2 * $a );
echo '<br>x<sub><small>1</small></sub> = ' . $x1;

echo '</p>';


echo '<p>';

echo 'x<sub><small>2</small></sub> = (-(' . $b . ') - √<span style="text-decoration:overline;"> D </span> ) / ( 2 * ('. $a .'))';

$x2 = ( -($b) - sqrt ($d) ) / ( 2 * $a );
echo '<br>x<sub><small>2</small></sub> = ' . $x2;

echo '</p>';

// D = 0 .....................
echo '<p>';

echo 'x<sub><small></small></sub> = (-(' . $b . ')) / ( 2 * ('. $a .'))';

$x = ( -($b) ) / ( 2 * $a );
echo '<br>x<sub><small></small></sub> = ' . $x;

echo '</p>';


// x2 = (–b − √D) / (2 * a)
// (–1 − √ 25) / (2 * 1) = -3

// О т в е т :           x1 = 2, x2 = –3

// 3. Проведите самостоятельное исследование на тему "Что возвращает оператор include, если его использовать как функцию?".
// Используйте руководство по языку, составьте и приложите примеры, иллюстрирующие ваше исследование.


// 4.*  Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол, пытаясь угадать по
// имени (null - если угадать не удалось).
// Вам придется самостоятельно найти нужные вам строковые функции.
// Начните с написания тестов для функции.

$name_human = 'Ксенияg';

// Тесты
// Значение должно быть строковым

function name_to_sex ($name_human) {
    $m = 'муж.';
    $w = 'жен.';
    $not_found = null;

    // Для точного соответствия нужно сравнивать с точными значениями (пр. БД (пр. массив)), также следует указать,
    // какие параметры должны быть у входных значений (пр. именительный падеж).
    //
    // попробуем использовать массив для точного соответствия
    // не очень точно, как вариант, женские имена в именительном падеже - заканчиваются на букву (а, я, ь
    // м - Илья,
    $human_db = [
        m => [
            Александр,
            Алексей,
            Анатолий,
            Андрей,
            Антон,
            Аркадий,
            Арсений,
            Артем,
            Артур,
            Борис,
            Богдан,
            Бронислав,
            Вадим,
            Валентин,
            Валерий,
            Василий,
            Виктор,
            Виталий,
            Владимир,
            Владислав,
            Вячеслав,
            Геннадий,
            Георгий,
            Григори,
            Даниил,
            Денис,
            Дмитрий,
            Евгений,
            Егор,
            Иван,
            Игорь,
            Илья,
            Кирилл,
            Константи,
            Леонид,
            Любомир,
            Макар,
            Максим,
            Марат,
            Матвей,
            Михаил,
            Никита,
            Николай,
            Оле,
            Павел,
            Петр,
            Родион,
            Роман,
            Ростислав,
            Руслан,
            Святослав,
            Семен,
            Сергей,
            Станислав,
            Степан,
            Тимофей,
            Тиму,
            Федор,
            Филипп,
            Эдуард,
            Эльдар,
            Юрий,
            Ярослав
        ],
        w => [
            Алиса,
            Алла,
            Алина,
            Анастасия,
            Анжела,
            Анна,
            Арина,
            Валентина,
            Валерия,
            Варвара,
            Василиса,
            Вера,
            Вероника,
            Виолетта,
            Виктория,
            Галина,
            Дарья,
            Диана,
            Ева,
            Евдокия,
            Евгения,
            Екатерина,
            Елена,
            Елизавета,
            Жанна,
            Зинаида,
            Зоя,
            Инна,
            Ирина,
            Карина,
            Каролина,
            Кира,
            Клавдия,
            Кристина,
            Ксения,
            Лариса,
            Лидия,
            Лилия,
            Лолита,
            Любовь,
            Людмила,
            Майя,
            Маргарита,
            Марина,
            Мария,
            Милана,
            Надежда,
            Наталья,
            Нина,
            Оксана,
            Ольга,
            Полина,
            Раиса,
            Светлана,
            Софья,
            Таисия,
            Тамара,
            Татьяна,
            Ульяна,
            Юлия,
            Яна
        ]

    ];

    // проверим есть ли в базе имен
    $check_name_is_m = in_array($name_human, $human_db[m]); // если есть, то 1
    //echo '---' . $check_name1 . '---';

    echo '<br>';

    $check_name_is_w = in_array($name_human, $human_db[w]);
    //echo '---' . $check_name2 . '---';
    //var_dump($human_db);

    // .........................


    if ((true == $check_name_is_m) && (false == $check_name_is_w)) {
        return $m;
    } elseif ((false == $check_name_is_m) && (true == $check_name_is_w)) {
        return $w;
    } else {
        return $not_found;
    }

}

// Блок тестов
assert ( null == name_to_sex ('Заяц') );
//assert ( null == name_to_sex (42 );
assert ( 'жен.' == name_to_sex ('Тамара') );
//assert ( 'муж.' == name_to_sex ('Федор') );


//assert ( 'муж.' == name_to_sex ('Федор') );


//
echo $rest = substr('Димон', -2);    // возвращает "н"
// echo $eee_1 = int strlen ( string $eee )


$rest = substr("abcdef", -1);    // возвращает "f"
$rest = substr("abcdef", -2);    // возвращает "ef"
$rest = substr("abcdef", -3, 1); // возвращает "d"
$rest = substr("abcdef", 0, -1);  // возвращает "abcde"
$rest = substr("abcdef", 2, -1);  // возвращает "cde"
$rest = substr("abcdef", 4, -4);  // возвращает ""
$rest = substr("abcdef", -3, -1); // возвращает "de"

//name_to_sex ($name_human);

$ccc = name_to_sex ( $name_human );
echo $ccc;


//$m = maxnum(3, 5);
//echo maxnum(-1, 1);


