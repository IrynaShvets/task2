<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Task 2</title>
</head>

<body>
    <?php

    // 1. Зробіть функцію, яка повертає число в ступені. 
    // Число та ступінь передається параметром.

    // function getNumberInPower(int $num, int $power): int
    // {
    //     return pow($num, $power);
    // }

    // print_r(getNumberInPower(9, 2));
    // print_r(getNumberInPower(7, 2));

    // 2. Зробіть функцію, яка приймає параметром число від 1 до 7, 
    // а повертає день тижня укр мовою


    // function getDayWeek(int $num): ? string
    // {
    //     $arr = [
    //     '1' => 'понеділок',
    //     '2' => 'вівторок',
    //     '3' => 'середа',
    //     '4' => 'четвер',
    //     '5' => 'п\'ятниця',
    //     '6' => 'субота',
    //     '7' => 'неділя'
    //     ];

    //     if (isset($arr[$num]) ?? $arr[$num] >= 0 || $arr[$num] <= 7) {
    //         return $arr[$num];
    //     } 

    // };

    // print_r(getDayWeek(2));
    // print_r(getDayWeek(5));

    // 3. Створіть функцію slug() яка приймає рядок і повертає цей рядок але 
    // у форматі URL ( 'Hello world' => 'hello-world')

    // function getStringUrl(string $str): string
    // {
    //     return strtolower(trim(str_replace(' ', '-', $str)));
    // };

    // print_r(getStringUrl('Hello world' . '<br>'));
    // print_r(getStringUrl('Hello world world'));

    // 4. Написати функцію для отримання підсумкової інформації кошика покупок. 
    // Повернути суму покупок та загальну кількість товарів

    // $products = [
    //     ['name' => 'Phone', 'price' => '500', 'quantity' => 2],
    //     ['name' => 'TV', 'price' => '700', 'quantity' => 1],
    //     ['name' => 'Notebook', 'price' => '600', 'quantity' => 4],
    // ];

    //  function totalProductCount(array $arr): int {
    //     $productCountQuantity = 0;
    //     $productCountPrice = 0;

    //     if ( isset($arr) ) {
    //         $productCountQuantity = array_sum( array_column( $arr, 'quantity'));
    //         $productCountPrice = array_sum( array_column( $arr, 'price' ) );
    //     } 
    //     return $productCountQuantity . $productCountPrice;
    // };
    // print_r(totalProductCount($products));

    //     5. Оголосити три змінні: перше число, друге число та знак. 
    // Реалізувати алгоритм найпростішого калькулятора (додавання, віднімання, множення, поділ). 
    // У разі невідомого оператора виводитиме текст помилки. Додати оператор зведення у ступінь

    // function calculate(int|float $firstNumber, int|float $secondNumber, string $sign)
    // {
    //     if ($sign === '+') {
    //         $add = $firstNumber + $secondNumber;
    //         var_dump($add);
    //         return $add;
    //     }
    //     if ($sign === '-') {
    //         $subs = $firstNumber - $secondNumber;
    //         var_dump($subs);
    //         return $subs;
    //     } 
    //     if ($sign === '*') {
    //         $mul = $firstNumber * $secondNumber;
    //         var_dump($mul);
    //         return $mul;
    //     } 
    //     if ($sign === '/') {
    //         if($secondNumber === 0) {
    //             return "You cannot divide by 0.";
    //         }
    //         $div = $firstNumber / $secondNumber;
    //         var_dump($div);
    //         return $div;
    //     } 
    //     if ($sign === '**') {
    //         $pow = $firstNumber ** $secondNumber;
    //         var_dump($pow);
    //         return $pow;
    //     } else {
    //         return "Enter the correct sign.";
    //     }
    // }

    // print_r(calculate(1, 5, '/') . '<br>');
    // print_r(calculate(1, 0, '/') . '<br>');
    // print_r(calculate(14, 4, '-') . '<br>');
    // print_r(calculate(9, 2, '**') . '<br>');
    // print_r(calculate(10, 2, '+') . '<br>');
    // print_r(calculate(10, 2, '#') . '<br>');
    // print_r(calculate(4, 5, '*'));

    // 6. Даний масив з елементами 26, 17, 136, 12, 79, 15. 
    // За допомогою циклу foreach знайдіть суму квадратів елементів цього масиву.

    // $arr = [26, 17, 136, 12, 79, 15];
    // foreach ($arr as &$value) {
    //     $value = $value ** 2;
    // }
    // $sum = array_sum($arr);
    // print_r($sum);

    // 7.Напишіть функцію getOrder($string), яка відсортує всі слова в 
    // заданій пропозиції $string в алфавітному порядку. 
    // Наприклад getOrder("ноти акустика гітара"), 
    // функція повинна повернути "акустика гітара ноти"

    // function getOrder(string $string): string {
    //     $unique = false;
    //     $string = str_replace('.', '', $string);
    //     $array = explode(' ', mb_strtolower($string)); 
    //     if ($unique) {
    //         $array = array_unique($array);
    //     } 
    //     sort($array);
    //     return implode(' ', $array);  
    //   }

    //   print_r(getOrder("ноти акустика гітара") . '<br>');
    //   print_r(getOrder("Напишіть функцію, яка відсортує всі слова в заданій пропозиції в алфавітному порядку."));

    // 8. Напишіть функцію truncateString($str, $maxsymbol), 
    // яка перевіряє довжину рядка $str,
    // і якщо вона перевищує $maxsymbol – замінює кінець $str на "...", 
    // так щоб її довжина дорівнювала $maxsymbol

    // function truncateString(string $str, int $maxsymbol): string
    // {
    //     $strLength = strlen($str);
    //     if ($strLength > $maxsymbol) {
    //         return substr($str, 0, $maxsymbol) . '...';
    //     } 
    //     return $str;
    // }

    // print_r(truncateString("Hello world!", 3) . '<br>');
    // print_r(truncateString("Hello world!", 20) . '<br>');
    // print_r(truncateString("Hello world!", 7));

    // 9. Написати функцію, яка формуватиме абревіатуру виразу. 
    // Наприклад, Збройні сили України - ЗСУ

    // function abbreviationFormat(string $abb): string
    // {
    //     $string = mb_convert_case($abb, MB_CASE_TITLE, "UTF-8");
    //     return implode(
    //         array_map(
    //             function ($w) {
    //                 return mb_substr($w,0,1);
    //             },
    //             explode(" ", $string)
    //         )
    //     );
    // }

    // print_r(abbreviationFormat('Збройні сили України') . '<br>');

    // 10. Написати функцію, яка приймає рядок, а повертає так само рядок, 
    // але кожне слово якого починається з великої літери

    // function abbreviationFormat(string $abb): string
    // {
    //     return ucwords($abb);
    // }

    // print_r(abbreviationFormat('Hello world and people') . '<br>');

    // 11. Написати функцію formatEmpty, яка приймає значення 
    // і якщо воно не порожнє - повертає її, 
    // якщо порожня - повертає рядок "Немає даних".

    // function formatEmpty(mixed $value)
    // {
    //     if(!empty($value)) {
    //         return $value;
    //     }
    //     return "Немає даних";
    // }

    // print_r(formatEmpty('Hello world') . '<br>');
    // print_r(formatEmpty(5) . '<br>');
    // print_r(formatEmpty('') . '<br>');

    //     12. Написати функцію pluck(), яка приймає масив асоціативних масивів першим параметром, 
    //     а другим найменування ключа. 
    // На виході ми маємо отримати масив значень даного ключа з кожного підмасиву. Наприклад

    // $users = [
    //     [
    //         'id' => 1,
    //         'name' => 'asdsada1',
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'asdsada2',
    //     ],
    // ];

    //   function pluck(array $arr, int|string|null $str): array 
    //   {
    //    return array_column($arr, $str);
    //   }

    //   print_r(pluck($users, 'name'));

    // 13. Написати функцію findWhere(), яка приймає масив асоціативних 
    // масивів першим параметром, другим найменуванням ключа, 
    // а третім значення. На виході ми маємо отримати масив підмасивів, 
    // у яких значення перданного ключа збігається з необхідним. 

    // $users = [
    //     [
    //         'id' => 1,
    //         'name' => 'asdsada1',

    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'asdsada2',

    //     ],
    //     [
    //         'id' => 3,
    //         'name' => 'asdsada2',

    //     ],
    //     [
    //         'id' => 4,
    //         'name' => 'asdsada2',

    //     ],
    // ];

    // function findWhere(array &$array, string $key, string $value): mixed
    // {
    //     $users = [];
    //     foreach ($array as $item) {
    //         if (is_array($item) && findWhere($item, $key, $value)) {
    //             return $item;
    //         } 
    //         if (isset($item[$key]) && $item[$key] == $value) {
    //             array_push($users, $item);
    //         }
    //     }
    //     return $users;
    // }
    // print_r(findWhere($users, 'name', 'asdsada2'));

    // 14. Написати генератор прикладів для учнів молодшої школи. Необхідно вказати  змінні:
    // *необхідну кількість прикладів;
    // *список допустимих операцій з можливих (додавання, віднімання, множення, розподіл). не обов'язково все
    // *параметр, чи потрібно виводити відповідь.
    // *діапазон чисел (min, max) із якими можна працювати. Наприклад, від 0 до 100.
    // На виході мають отримати згенерований випадковим чином список прикладів у вигляді:

    // якщо відповідь потрібно виводити:
    //   1 + 1 = 2;
    //   2 * 3 = 6;
    //   6 / 3 = 2;
    //   ...

    // якщо відповідь НЕ потрібно виводити:

    //   1 + 1 = __;
    //   2 * 3 = __;
    //   6 / 3 = __;
    //   ...

    // Додатково: Необхідно випадково пропускати одне з чисел або знак, додати параметр, чи потрыбно пропускати одне з чисел, наприклад:
    //     1 + 1 = __;
    //     2 * __ = 6;
    //     __ / 3 = 3;
    //     4 __ 2 = 8;

    function randomExample(array $operators, int $countExamples, bool $isAnswerRequired, int $min, int $max)
    {
        $sign = ["__"];

        for ($i = 0; $i < $countExamples; $i++) {
            $num1 = mt_rand($min, $max);
            $num2 = mt_rand($min, $max);

            $randomOperator = array_rand($operators);
            switch ($operators[$randomOperator]) {
                case "+":
                    $result = $num1 + $num2;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    break;
                case "/":
                    if($num2 === 0) {
                        echo "You cannot divide by 0.";
                    }
                    $result = $num1 / $num2;
                    break;
                case "-":
                default:
                    $result = $num1 - $num2;
                    break;
            }

            if ($isAnswerRequired) {
                echo "$num1 {$operators[$randomOperator]} $num2 = $result<br/>\n";
            } else {
                echo "$num1 {$operators[$randomOperator]} $num2 = $sign[0]<br/>\n";;
            }
        }
    }

    print_r(randomExample(["+", "-", "*", "/"], 5, true, 0, 100));
    print_r(randomExample(["+", "/"], 2, false, 5, 20));



    ?>
</body>

</html>