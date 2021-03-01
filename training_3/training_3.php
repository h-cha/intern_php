<?
// 一般的な制御文(if、for、foreach、while文など)が利用できる

// if文
echo "if文";
echo "\n";
$score = 80;
if($score == 100){
    echo "満点です。";
    echo "\n";
}elseif($score >= 70){
    echo "合格です。";
    echo "\n";
}else{
    echo "不合格です。";
    echo "\n";
}
echo "\n";

// for文
echo "for文";
echo "\n";
$score = array(90, 56, 78, 58);
for ($i = 0; $i < count($score); $i++){
    echo $score[$i] . "点";
    echo "\n";
}
echo "\n";

// foreach文
echo "foreach文";
echo "\n";
$score = array("算数" => 90, "国語" => 56, "理科" => 78, "社会" => 58);
foreach ($score as $key => $value){
    echo $key . " : " . $value . "点";
    echo "\n";
}
echo "\n";

// while文
echo "while文";
echo "\n";
$score = 80;
$count = 0;
while ($count++ < 5){
    if ($score < 70){
        echo "点数は" . $score . " : 不合格";
        echo "\n";
        break;
    }
    echo "点数は" . $score;
    echo "\n";
    $score = mt_rand(0, 100);

}
echo "\n";

$count = 0;
while ($count++ < 10){
    if ($count % 3 == 0){
        echo $count . " : 3の倍数";
        echo "\n";
        continue;
    }
    echo $count;
    echo "\n";
}
echo "\n";

?>