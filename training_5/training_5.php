<?php
function merge_str($x, $y){
    $arr_x = str_split($x);
    $arr_y = str_split($y);
    if (count($arr_x) >= count($arr_y)){
        $count_xy = count($arr_x) * 2;
    }else{
        $count_xy = count($arr_y) * 2;
    }
    $merge_str = "";
    $count_x = 0;
    $count_y = 0;
    for ($i = 0; $i <= $count_xy; $i++){
        if ($i % 2 == 0){
            if($count_x < count($arr_x)){
                $merge_str = $merge_str . $arr_x[$count_x];
                $count_x ++;
            }
        }else{
            if($count_y < count($arr_y)){
                $merge_str = $merge_str .  $arr_y[$count_y];
                $count_y ++;
            }
        }
    }
    return $merge_str;
}
echo merge_str("Hello", "World!!");
echo "\n";