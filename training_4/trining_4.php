<?
// 関数の基本概念(引数、戻り値)を理解している
echo "最大公約数";
echo "\n";
function my_gcd($x, $y){
    if ($y == 0){
        return $x;
    }else{
        return my_gcd($y, $x % $y);
    }
}
echo my_gcd(12, 18);
echo "\n";

echo "最小公倍数";
echo "\n";
function my_lcm($x, $y){
    $g =  my_gcd($x, $y);
    return $x * $y / $g;
}
echo my_lcm(12, 18);
echo "\n";

?>