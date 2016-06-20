<table style="border: dotted green">
    <?php
    $row=5;
    $cols=7;
    $colors = array('red','yellow','blue','gray','maroon','brown','green');
    
    define('BEG_ROW', '<tr>');
    define('END_ROW', '</tr>');
    define('BEG_COL', '<td');
    define('END_COL', '</td>');

        for ($r=1;$r<=$row;$r++) {
            echo BEG_ROW;
            for ($c=1;$c<=$cols;$c++) {
                $i=random_int(0,6);
                echo BEG_COL . ' style="background-color: ' . $colors[$i] . '">' . rand(1000,9999) . END_COL;
            }
            echo END_ROW;
        }

    ?>
</table>
