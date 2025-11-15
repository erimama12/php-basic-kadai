<?php
class Food {
  private $name;
  private $price;

  public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
  }

  // 中身を見やすく表示するメソッド
  public function show() {
    echo "名前: " . $this->name . "\n";
    echo "値段: " . $this->price . "円\n";
  }
}

$food = new Food('potato', 250);
$food->show();
?>