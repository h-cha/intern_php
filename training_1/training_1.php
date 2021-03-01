<?php
    // 文字列、数字、nullの変数を作成できる、上書きできる
    $name = "tarou";
    echo $name;
    echo "\n";

    $name = "hanako";
    echo $name;
    echo "\n";

    $year = 2020;
    echo $year;
    echo "\n";
    $month = 3;
    echo $year + $month;
    echo "\n";
    echo (string)$year . "年" . (string)$month . "月";
    echo "\n";

    $count = null;
    echo $count;
    echo "\n";
?>