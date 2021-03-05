<?php
// インスタンス変数の宣言ができる
class Car {
    //　インスタンス変数の宣言
    public $owner = "hanako";
    public $color = "black";
    // クラス変数
    static public $maker = "toyota";
}
// クラス変数
echo "メーカーは" . Car::$maker . "\n";
// クラス変数変更
Car::$maker = "honda";
echo "メーカーは" . Car::$maker . "\n";
//　インスタンス変数
$my_car = new Car;
echo "所有者は" . $my_car->owner . "\n";
echo "色は" . $my_car->color . "\n";
//　インスタンス変数変更
$my_car->owner = "tarou";
echo "所有者は" . $my_car->owner . "\n";
echo "色は" . $my_car->color . "\n";