<?php
class Hero{
    // atribut
    public $name =echo "<br> Luas Lingkaran 1: " . $lingkar1->getLuas();
    echo "<br> Luas Lingkaran 2: " . $lingkar2->getLuas();;
    public $hp = 3200;
    public $damage = 230;

    // method
    public function __construct($name, $hp, $damage)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->damage = $damage;
    }

    public function getDetail()
    {
        echo "Name: $this->name <br>";
        echo "Health Poin: $this->hp <br>";
        echo "Damage: $this->damage <br>";
        echo "<br> ======================= <br>";
    }
}

//buat object
$hero1 = new Hero("Alucard", 3200, 230);
$hero1->getDetail();

$hero2 = new Hero('Layla', 1900, 450);
$hero2->getDetail();