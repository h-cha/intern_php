<?
// オブジェクトについて理解し、変数に代入することができる、上書きできる
// ownerは変更できるがcolorは変更できないようにする
// Factory Method パターン
class Car{
    private $owner = "";
    private $color;
    public static function createBlueCar($owner){
        return new self($owner, 'blue');
    }
    public static function createRedCar($owner){
        return new self($owner, 'red');
    }
    private function __construct($owner, $color){
        $this->setOwner($owner);
        $this->color = $color;
    }
    public function setOwner($owner){
        $this->owner = (string)filter_var($owner);
    }
    public function getOwner(){
        return $this->owner;
    }
    public function getColor(){
        return $this->color;
    }
}

$blue_car = Car::createBlueCar('hanako');
echo $blue_car->getOwner() . " : ";
echo $blue_car->getColor() . "\n";

$red_car = Car::createRedCar('tarou');
echo $red_car->getOwner() . " : ";
echo $red_car->getColor() . "\n";
?>