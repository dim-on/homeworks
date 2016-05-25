<style>
    body {
        font-family: "Courier";
    }
</style>
<?php
/**
 * Created by PhpStorm.
 * User: rus
 * Date: 18.05.16
 * Time: 19:19
 */
    //инициализация переменных
    $summa = $rowNumber = 0;
    $textTable = '';

    //Контстанты линий
    define( 'LINE_TABLE', '______________________________________________<br>' . PHP_EOL);
    define( 'LINE_HEADS', '----------------------------------------------<br>' . PHP_EOL);

    echo LINE_TABLE;//вывод верхней границы таблицы

    const COL_LINE = '|  ';//определение константы вертикального разделителя

    //ниже формирование шапки таблицы и вывод нижней границы шапки
    $textTable .= COL_LINE . "#". COL_LINE . "Name". COL_LINE . " Цена ". COL_LINE . "Количество ". COL_LINE . "Сумма ". COL_LINE . "<br>" . PHP_EOL;
    $textTable .= LINE_HEADS;

    //ниже данные о товаре IPhone
    $tovar = 'iPhone _';//наименование
    $costTovar = 'sdsd' + 25500;// стоимость (что такое sdsd?)
    $countTovar = 1;//количество
    $available   = false;//наличие

    //ниже вычисление суммы
    $summa = $costTovar*$countTovar;
    //ниже формирование порядкового номера
    $rowNumber++;
    //ниже инициализация и формирование значения переменной текста доступности на складе
    //через тернарный оператор
    $textAvailable = 'товар ' . ($available ? ' готово к отгрузке' : 'ждем поставки');

    //ниже формирование строки товара Iphone
    $textTable .= COL_LINE . $rowNumber. COL_LINE . $tovar . COL_LINE . $costTovar . COL_LINE . " $countTovar". COL_LINE . $costTovar*$countTovar . COL_LINE . $textAvailable . "<br>";

    //ниже данные о товаре fmModule
    $tovar = '   fmModule         _';
    $costTovar = 1500;
    $countTovar = 10;
    $available   = true;

    $summa += $costTovar*$countTovar;
    $rowNumber++;

    //ниже инициализация и формирование значения текста переменной доступности на складе
    //через switch
    switch ($available) {
        case (true): {
            $textAvailable = ' готово к отгрузке';
            break;

        }
        case 0:
        {
            $textAvailable = 'ждем поставки';
            break;

        }
        default:
            $textAvailable = 'непонятно где';

    }

    //ниже формирование строки товара fmModule
    $textTable .= COL_LINE . $rowNumber. COL_LINE . $tovar . COL_LINE . $costTovar . COL_LINE . " $countTovar". COL_LINE . $costTovar*$countTovar . COL_LINE . $textAvailable ."<br>";

    $tovar = '   packet          _';

    $costTovar = 15;
    $countTovar = 11;
    $available   = True;

    $summa += $costTovar*$countTovar;
    $rowNumber++;
if ($available)
    $textAvailable = ' готово к отгрузке';
else
    $textAvailable = 'ждем поставки';

$textTable .= COL_LINE . "$rowNumber". COL_LINE . $tovar . COL_LINE . $costTovar . COL_LINE . " $countTovar". COL_LINE . $costTovar*$countTovar. COL_LINE . $textAvailable  ."<br>";

$textTable .= COL_LINE . "Общая сумма заказа = $summa";

echo (print $textTable);


for( $i = 0; $i++; $i < 3)
{
    if ($available)
        $textAvailable = ' готово к отгрузке';
    else
        $textAvailable = 'ждем поставки';

    $textTable .= COL_LINE . "$rowNumber". COL_LINE . $tovar . COL_LINE . $costTovar . COL_LINE . " $countTovar". COL_LINE . $costTovar*$countTovar. COL_LINE . $textAvailable  ."<br>";

}
//test почему-то не отображается?
for ($a = 1; $a <= 3; $a++) {
    echo $a;
}