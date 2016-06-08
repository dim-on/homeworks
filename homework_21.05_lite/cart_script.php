<link href="css/style.css" rel="stylesheet">
<?php
$names=($_REQUEST['name']);
$costs=($_REQUEST['cost']);
$discounts=($_REQUEST['discount']);
$product=array([$names[0], $costs[0],$discounts[0]], [$names[1], $costs[1],$discounts[1]], [$names[2], $costs[2],$discounts[2]]);
echo 'Before sort: <br>';
print_r($product);
echo '<br>';

?>
<table border="">
    <caption>Товары</caption>
    <tr><th>№</th><th>Наименование</th><th>Цена</th><th>Скидка</th></tr>
<?php
    const COL_LINE = '</td><td>';
    const BEGIN_ROW = '<tr><td>';
    const END_ROW = '</td></tr>';
    array_multisort($product, SORT_ASC);
    echo 'After sort: <br>';
    print_r($product);
        echo '<br>';
        $i=0;
            for ($i=0;$i<count($product);$i++) {
                echo BEGIN_ROW . ($i+1) . COL_LINE . $product[$i][0] . COL_LINE . $product[$i][1] . COL_LINE . $product[$i][2] . END_ROW;
            }
?>
</table>


    