<?php
// 配列と連想配列を作成できる、変数に代入できる、上書きできる

// 配列
$color = ['red', 'blue', 'yellow'];
echo $color[0];
echo "\n";

$fruits = array('peach', 'banana','grape');
echo $fruits[0];
echo "\n";

$color[1] = 'red';
echo "\n";

// 先頭に追加
array_unshift($color, 'white');

// 最後に追加
$fruits[] = "apple";

// for文
echo "for文";
echo "\n";
for ($i = 0; $i < count($color); $i++ ){
    echo $color[$i];
    echo "\n";
}
echo "\n";

// foreach文
echo "foreach文";
echo "\n";
foreach ($fruits as $value){
    echo $value;
    echo "\n";
}
echo "\n";

// 連想配列
echo "連想配列";
echo "\n";
$foods = array("tomato" => 100, "banana" => 20, "grape" => 600);
echo $foods["tomato"];
echo "\n";
// 最後に追加
$add_food = array('apple' => 10);
$foods = array_merge($foods, $add_food);
var_dump($foods);
echo "\n";

// foreach文
$money = 0;
$ave = 0;
echo "foreach文";
echo "\n";
foreach ($foods as $key => $value){
    echo "商品名 " . $key . " : 値段　" . $value;
    echo "\n";
    $money += $value;
}
echo "\n";
echo "合計金額は" . $money . "円です。";
echo "\n";
$ave = $money / count($foods);
echo "金額の平均は" . $ave . "円です。";
echo "\n";
echo "切り捨てると" . floor($ave) . "円です。";

?>