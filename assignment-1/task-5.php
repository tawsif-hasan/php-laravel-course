<?php
interface Gorib {
  public function lowMoney();
  public function Homeless();
}

class MyStatus implements Gorib{
  public function lowMoney() {
    echo "I have no money<br>";
  }
  public function Homeless() {
    echo "I live under the bridge";
  }
}

$me = new MyStatus();
$me->lowMoney();
$me->Homeless();

?>
