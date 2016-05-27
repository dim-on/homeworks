<style>
    body {
        font-family: "Courier";
    }
</style>
<?php
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
    echo $textTable;
    
    for ($a=0; $a<=4; $a++) {
        switch ($a) {
            case 1:
                $tovar = 'iPhone _';
                $costTovar = 'sdsd' + 25500;// стоимость (что такое sdsd?)
                $countTovar = 1;//количество
                $available   = false;//наличие
                $summa = $costTovar*$countTovar;
                $rowNumber++;
                $textAvailable = 'наличие: ' . ($available ? ' готово к отгрузке' : 'ждем поставки');
                echo $textTable = COL_LINE . $rowNumber. COL_LINE . $tovar . COL_LINE . $costTovar . COL_LINE . " $countTovar". COL_LINE . $costTovar*$countTovar . COL_LINE . $textAvailable . "<br>";
                break;
            case 2:
                $tovar = '   fmModule         _';
                $costTovar = 1500;
                $countTovar = 10;
                $available   = true;
                $summa += $costTovar*$countTovar;
                $rowNumber++;
                $textAvailable = 'наличие: ' . ($available ? ' готово к отгрузке' : 'ждем поставки');
                echo $textTable = COL_LINE . $rowNumber. COL_LINE . $tovar . COL_LINE . $costTovar . COL_LINE . " $countTovar". COL_LINE . $costTovar*$countTovar . COL_LINE . $textAvailable . "<br>";
                break;
            case 3:
                $tovar = '   packet          _';
                $costTovar = 15;
                $countTovar = 11;
                $available   = True;
                $summa += $costTovar*$countTovar;
                $rowNumber++;
                $textAvailable = 'наличие: ' . ($available ? ' готово к отгрузке' : 'ждем поставки');
                echo $textTable = COL_LINE . $rowNumber. COL_LINE . $tovar . COL_LINE . $costTovar . COL_LINE . " $countTovar". COL_LINE . $costTovar*$countTovar . COL_LINE . $textAvailable . "<br>";
                break;
            case 4:
                echo $textTable = LINE_HEADS . COL_LINE . "Общая сумма заказа = $summa";
        }
    }


