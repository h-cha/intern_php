<?
// オブジェクトについて理解し、変数に代入することができる、上書きできる
// ownerは変更できるがcolorは変更できないようにする
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

$a = new Car('tarou', 'blue');
echo $a->getOwner() . " : ";
echo $a->getColor() . "\n";
// owner変更できる
$a->setOwner('jirou');
echo "ownerを変更する" . "\n";
echo $a->getOwner() . " : ";
echo $a->getColor() . "\n";
echo "\n";

$b = new Car('hanako', 'blue');
echo $b->getOwner() . " : ";
echo $b->getColor() . "\n";

// colorが変わってしまった
$b->__construct('hanako', 'red');
echo "colorを変更する" . "\n";
echo $b->getOwner() . " : ";
echo $b->getColor() . "\n";
?>