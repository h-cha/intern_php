<?php
//組み込み関数を利用できる
print "2020/03/09のように入力してください。" . "\n";
$stdin = trim(fgets(STDIN));

// $stdinのなかに'/'が含まれている場合
if (strpos($stdin, "/") != false){
    list($year, $month, $day) = preg_split("[/]", $stdin);
    if(checkdate($month, $day, $year)){
        print "この年月日は確かに存在しています。";
    }else{
        print "この年月日は存在しません。";
    }
}else{
    print "/で日付を区切って表示してください";
}