<?php
//Foodクラス
class Food {
    //プロパティを定義
    private $name;
    private $price;

    //メソッドを定義
    public function show_price(){
        echo $this -> price . '<br>';
    }

    //コンストラクタを定義
    public function __construct (string $name, int $price){
        $this -> name = $name;
        $this -> price = $price;
    }
}

//Animalクラス
class Animal {
    //プロパティを定義
    private $name;
    private $height;
    private $weight;

    //メソッドを定義
    public function show_height(){
        echo $this -> height . '<br>';
    }

    //コンストラクタを定義
    public function __construct (string $name, int $height, int $weight){
        $this -> name = $name;
        $this -> height = $height;
        $this -> weight = $weight;
    }
}

//インスタンス化する
$potato = new Food ('potato', 250); 

$dog = new Animal ('dog', 60, 5000);

//表示
print_r($potato) ;
echo ('<br>');
print_r($dog) ;
print_r('<br>');
echo $potato -> show_price();
echo $dog -> show_height();
?>