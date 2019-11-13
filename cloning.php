<?php
// __clone magic method wont take any aruguments
class Beverage {

  public $name;
  
  function __construct() {
    echo "New beverage was created.<br />";
  }

  function __clone() {
    echo "Existing beverage was copied.<br />";
  }
}
// when instance made it calls __construct method
$a = new Beverage;
$a->name = "coffee";
echo $a->name . '<br />';

echo '<hr />';
// when slone declare it calls __clone method
$b = clone $a; // when clone call here  it will echo the what inside the magic method __clone()
echo $a->name . '<br />';
echo $b->name . '<br />';

echo '<hr />';

$b->name = 'tea';
echo $a->name . '<br />';
echo $b->name . '<br />';

echo '<hr />';

$c = $b;
$c->name = 'orange juice';
echo $a->name . '<br />';
echo $b->name . '<br />';
echo $c->name . '<br />';


?>
