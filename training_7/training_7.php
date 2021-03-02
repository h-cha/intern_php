<?
// メモリ、参照渡し、コンパイルなどプログラミングの基本概念を理解している

// 値渡し
function pass_by_value($x){
    $x *= 2;
}

print "値渡し" . "\n";
$a = 10;
pass_by_value($a);
print $a . "\n";

// 参照渡し
function pass_by_reference(&$x){
    $x *= 2;
}

print "参照渡し" . "\n";
$a = 10;
pass_by_reference($a);
print $a . "\n";
?>