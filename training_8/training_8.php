<?
// オブジェクトについて理解し、変数に代入することができる、上書きできる
class Car{
    private $owner = "";
    private $color;
    public function __construct($owner, $color){
        $this->setOwner($owner);
        $this->color = $color === 'blue' ? 'blue' : 'red';
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

$b = new Car('hanako', 'blue');
echo $b->getOwner() . "\n";
echo $b->getColor() . "\n";

// 色が変わってしまった
$b->__construct('hanako', 'red');
echo $b->getColor(); 

?>