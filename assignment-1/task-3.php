<?php
class SuperPower{

public function Flying(){
  echo "Flying....";
}

public function LaserEye(){
  echo "Beware of my laser...";
}

public function Shield(){
  echo "Take the blow of my shield";
}

}

class IronMan extends Superpower{
   function name(){
    echo "I am Iron Man<br>";
  }
}
class CaptainAmerica extends Superpower{
   function name(){
    echo "I am Captain America<br>";
  }
}
class Thor extends Superpower{
   function name(){
    echo "I am Thor<br>";
  }
}

$ironman1 = new IronMan();
$ironman1 -> name();
$ironman1->LaserEye();
echo "<br>";
$cap1 = new CaptainAmerica();
$cap1 -> name();
$cap1 -> Shield();
$thor1 = new Thor();
$thor1 -> name();
$thor1-> Flying();
?>
